#!/usr/bin/env ruby                                                                           
#                                                                                             
require 'getoptlong'                                                                          


  opts = GetoptLong.new(
      [ '--help', '-h', GetoptLong::NO_ARGUMENT ],
      [ '--repeat', '-n', GetoptLong::REQUIRED_ARGUMENT ],
      [ '--name', GetoptLong::OPTIONAL_ARGUMENT ]         
    )                                                     


   # == Synopsis
    #           
    # hello: greets user, demonstrates command line parsing
    #                                                      
    # == Usage                                             
    #                                                      
    # hello [OPTION] ... DIR                               
    #                                                      
    # -h, --help:                                          
    #    show help                                         
    #                                                      
    # --repeat x, -n x:                                    
    #    repeat x times                                    
    #                                                      
    # --name [name]:                                       
    #    greet user by name, if name not supplied default is John
    #                                                            
    # DIR: The directory in which to issue the greeting.         


# Constants
OLDGPGHOME=ENV['GNUPGHOME']
ENV['GNUPGHOME']='/var/tmp/rpmgpg'
KEYINDEX=ENV['GNUPGHOME'] + "/keyindex"


def setup
  # Create the TMP directory 
  Dir.mkdir ENV['GNUPGHOME']  if  not File.exists?(ENV['GNUPGHOME']) and not File.directory?(ENV['GNUPGHOME']) 
  File.chmod(0700, ENV['GNUPGHOME'])                                                                           

  # Import any gpg keys in /etc/pki/rpm-gpg
  %x(gpg -q --import /etc/pki/rpm-gpg/* 2> /dev/null)   
  #TODO Provide a message that other keys could be located elsewhere on the filesystem
  # Get fingerprint for keys                                                          
  listings  = %x(gpg --fingerprint 2> /dev/null)                                                   

  i=0
  fp = []
  repo = []
  # Iterate through listings and find keys
  listings.each do |x|                    
    next if x !~ /uid/ and x !~ /fingerprint/
    if x  =~ /fingerprint/                   
      fingerprint = x.split.last(4).join.to_s.downcase
      fp.push(fingerprint)                            
    # Using the comment before the email address as the name of the key
    elsif x =~ /@/                                                     
      breakpoint = x.index('<')                                        
      name = x.slice(0 ..  breakpoint-1)                               
      name = name.slice(21..235)                                       
      repo << name                                                     
    end                                                                
  end                                                                  

  hsh = {}
  for i in 0..fp.size-1  do
    hsh[fp[i]] = repo[i]   
  end                      

  content = ""
  hsh.each do |key, value|
    content +=  "#{key} \t #{value}\n"
  end                                 
  # Write to keyindex file            
  File.open(KEYINDEX,"w") do |f|      
    f.write(content)                  
  end                                 
  hsh                                 
end                                   


def loadKeys(file)
   hsh = {}
   f = File.open(file, 'r')
   array = f.readlines
   array.each do |line|
     a = line.split("\t")
     hsh[a[0].strip!] = a[1].strip!
   end
   hsh
end


def rpm_version()
  rpmversion=%x(rpm -q --qf '%{VERSION}' rpm)
end

def q_string()
  rpmversion = rpm_version()
  querystring=""
  puts "this is rpmversion #{rpmversion}"
  if rpmversion.to_f > 4.6
     qstring = "rpm -q --qf '%{SIGPGP}' #{rpm}"
  else
     qstring = "rpm -q --qf '%{SIGGPG}' #{rpm}"
  end
  return qstring
end



#MAIN
unless File.exists?(KEYINDEX) and File.mtime(KEYINDEX).to_i > (Time.now-300).to_i
  hsh=setup()
else
  hsh=loadKeys(KEYINDEX)
end


#TODO work on Fedora > 10
# Should work %NAME only or for full RPM name
rpm  = ARGV[0]
#puts rpm
#rpm -q --qf "%{SIGGPG}\n" epel-release | cut -c20-34
# if it ends in .rpm, assume -qpl
# test to see if package is installed, if not, repoquery maybe?
# Offer output options, perhaps YAML, XML, CSV, Quiet
print "#{rpm}"
puts q_string
#idkey = %x(rpm -q --qf '%{SIGGPG}' #{rpm}).to_s.slice(18..33)
#idkey = %x(#{q_string} #{rpm}).to_s.slice(18..33)
idkey = %x(#{q_string} #{rpm}).to_s.slice(20..35)
puts idkey
# handle unknown key
puts "," +  hsh[idkey].to_s + "\n" unless idkey == nil
# Breakout finding the exact repository into a method
puts " has nil idkey." if idkey == nil

# Replace original ENV variable for GNUPGHOME
ENV['GNUPGHOME']=OLDGPGHOME

