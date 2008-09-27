<?php

#$to = 'doug@eplansets.com';
$to = 'mastahnke@gmail.com';

include_once("Mail.php");

// Test file to mail some goodies from a form
function debug($to, $from, $body, $subject)
{
    print "\n<br />" . 'To: ' . $to . "\n<br />";
    print 'From: ' . $from . "\n<br />";
    print 'Subject: ' . $subject . "\n<br />";
    print 'Body: ' . $body . "\n<br />";
}

$arr = array();
# Find each variable and get it ready to send.
if(isset ($_POST['email']))
  $body  = "email: " . $_POST['email'] . "\n";
if(isset ($_POST['name']))
  $body  .= "Name: " . $_POST['name'] . "\n";
if(isset ($_POST['checked1']))
   array_push($arr, $_POST['checked1']);
if(isset ($_POST['checked2']))
   array_push($arr, $_POST['checked2']);
if(isset ($_POST['checked3']))
   array_push($arr, $_POST['checked3']);
if(isset ($_POST['checked4']))
   array_push($arr, $_POST['checked4']);
if(isset ($_POST['checked5']))
   array_push($arr, $_POST['checked5']);
if(isset ($_POST['checked6']))
   array_push($arr, $_POST['checked6']);
if(isset ($_POST['checked7']))
   array_push($arr, $_POST['checked7']);
if(isset ($_POST['checked8']))
   array_push($arr, $_POST['checked8']);
if(isset ($_POST['checked9']))
   array_push($arr, $_POST['checked9']);
if(isset ($_POST['checked10']))
   array_push($arr, $_POST['checked10']);

foreach ($arr as $item)
  $body .= $item . "\n";

if(isset ($_POST['message']))
   $body  .= $_POST['message'];

$subject = "Email from eplansets forms";
$headers = 'From: ePlanSets <webster@eplansets.com> ' . "\r\n" .
    'Reply-To: webster@eplansets.com' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();


#debug($to, $from, $body, $subject);
mail ( $to, $subject, $body, $headers);



?>
<html>
<title>Mail Sent</title>
<body>
<h3>Thank you for contacting us.</h3>
<small>&copy; 2008 eplansets.com</small>
</body>
</html>

