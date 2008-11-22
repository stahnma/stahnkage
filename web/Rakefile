#!/usr/bin/env ruby
#
#
require 'find'

HTTP_DIRECTORY='/var/www/html/'
PROJECT = `pwd`.split('/')[-1].strip
DIRECTORY= HTTP_DIRECTORY + PROJECT

task :default => :install
task :install => :deploy 
task :uninstall => :undeploy

task :create_directories do 
   dirs = []
   # Figure out what directories need to be made
   Find.find('.') do | dir|
     dir.each do |file|
       next if file =~ /Rakefile*/
       next if file =~ /^\.\.?$/
       dirs << file.sub!(/^\.\//, '')  if FileTest.directory?(file)
       end
    end
    dirs.each do |dir|
      puts "mkdir -p " + DIRECTORY + "/#{dir}"
      sh "mkdir -p " + DIRECTORY + "/#{dir}"
    end
end


task :deploy => :create_directories do
   filelist = []
   # Find files that are local, and install them  
   Find.find('.') do | dir|
     dir.each do |file|
       next if file =~ /Rakefile*/
       next if file =~ /^\.\.?$/
       next if FileTest.directory?(file)
       # Strip ./ 
       filelist << file.sub!(/^\.\//, '') 
       end
    end
    filelist.each do |file| 
      location =  DIRECTORY + '/' + file
      puts "install -p -m644 #{file} #{location}"
      sh "install -p -m644 #{file} #{location}"
    end
end

task :undeploy do 
   dirs = []
   puts "rm -rf #{DIRECTORY}"
   sh "rm -rf #{DIRECTORY}"
end

task :help do
  puts 
  puts "usage #{$0} and a target"
  puts "install 		--> install items into /var/www/html" 
  puts "uninstall 		--> remove items from /var/www/html" 
  puts "create_directories 	--> create directories in  /var/www/html" 
  puts "help		 	--> display this message" 
end
