<?php 
#$Id: index.php,v 1.2 2006/04/18 00:07:54 stahnma Exp $
if(preg_match('/192.168.1/', $_SERVER['REMOTE_ADDR']))
{
  header("location:http://netbox.stahnkage.com:8080/source");
}
else
{
  header("location:http://www.stahnkage.com:9000/source");
}
?>
