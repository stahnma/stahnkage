<?php

#$to = 'webster@eplansets.com';
$to = 'mastahnke@gmail.com';

include_once("Mail.php");

// Test file to mail some goodies from a form
function debug($to, $from, $body, $subject)
{
    print "\n<br />" . 'To: ' . $to . "\n<br />";
    print 'From: ' . $from . "\n<br />";
    print 'Subject: ' . $subject . "\n<br />";
    print "\n<br />";
    print nl2br('Body: ' . $body . "\n<br />");
}

# Find each variable and get it ready to send.
if(isset ($_POST['name']))
   $hsh['Name'] =  trim($_POST['name']);
if(isset ($_POST['email']))
   $hsh['Email Address'] =  trim($_POST['email']);
if(isset ($_POST['visits']))
   $hsh['Number of Visits'] = trim($_POST['visits']);
if(isset ($_POST['found']))
   $hsh['How you found it'] = trim($_POST['found']);
if(isset ($_POST['search_terms']))
   $hsh['Search Terms'] = trim($_POST['search_terms']);
if(isset ($_POST['site']))
   $hsh['Referring Site'] = trim($_POST['site']);
if(isset ($_POST['directory']))
   $hsh['Online Directory'] = trim($_POST['directory']);
if(isset ($_POST['article']))
   $hsh['Which Article'] = trim($_POST['article']);
if(isset ($_POST['friend']))
   $hsh['Referred by a friend:'] = trim($_POST['friend']);
if(isset ($_POST['is_friend']))
   $hsh['Is your friend a customer'] = trim($_POST['is_friend']);
if(isset ($_POST['rating']))
   $hsh['Overall Rating'] = trim($_POST['rating']);
if(isset ($_POST['comments']))
   $hsh['Comments'] = trim($_POST['comments']);

$body="";
foreach ($hsh as $key => $value)
{
  # The if statement simply removes empty values
    if (trim($value)) 
       $body .= $key  . ': ' . $value . "\n"; 
}


$subject = "Email from CPU Holder Download form";
$headers = 'From: ePlanSets <webster@eplansets.com> ' . "\r\n" .
    'Reply-To: webster@eplansets.com' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();


#debug($to, $from, $body, $subject);
mail ( $to, $subject, $body, $headers);



?>
<html>
<title>CPU Holder Download Feedback Form</title>
<style type="text/css">
<!--
.style74 {font-family: Verdana, Arial, Helvetica, sans-serif;
	font-weight: bold;
}
.style75 {font-size: medium}
.style76 {font-family: Verdana, Arial, Helvetica, sans-serif; font-weight: bold; font-size: medium; }
.style77 {color: #000000; font-weight: bold; font-style: italic; font-family: Arial, Helvetica, sans-serif;}
.style78 {font-weight: bold; color: #000000; font-family: Arial, Helvetica, sans-serif;}
.style79 {font-weight: bold; color: #0000FF; font-style: italic; font-family: Arial, Helvetica, sans-serif;}
.style80 {color: #000000; font-family: Arial, Helvetica, sans-serif;}
.style82 {
	font-size: xx-small;
	font-family: Verdana, Arial, Helvetica, sans-serif;
	font-weight: bold;
}
body {
	background-image: url(images/background.jpg);
	background-repeat: repeat;
}
-->
</style>
<body>
<h3 align="center">&nbsp;</h3>
<h3 align="center" class="style79">Enjoy Building Your CPU Holder</h3>
<table width="625" align="center" id="main_body">
  <tr>
    <td width="306" class="style76">
        <div align="center">
          <p><span class="style77">Under Desktop CPU Holder <br />
            Project ePlanSet <br />
            7 <span class="style78">Colorful Detailed Pages<br />
              8-1/2&quot; x 11&quot; - 857 KB</span></span></p>
        </div>
    </td>
    <td width="307" class="style74"><div align="center" class="style75">
      <p><span class="style79"><span class="style80">Your Price:</span> <a href="cpu_holder.pdf" target="new">FREE</a></span></p>
      <p><a href="cpu_holder.pdf" target="new"><img src="images/button9a.jpg" alt="Free Download Under Desktop CPU Holder Plan" name="free_download_underdesktop_cpu_holder_plan" width="84" height="29" border="0" id="free_download_underdesktop_cpu_holder_plan" /></a></p>
    </div></td>
  </tr>
</table>
<p align="center" class="style82"><small>&copy; 2008 eplansets.com</small></p>
</body>
</html>

