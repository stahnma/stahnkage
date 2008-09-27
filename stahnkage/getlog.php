<?php 
#$Id: getlog.php,v 1.1 2006/04/17 04:00:23 stahnma Exp $

#  $handle=fopen("/var/www/html/stahnkage/log/log", 'r');
  $arr=  file("/var/www/html/stahnkage/log/log");
  print($arr[0]);
?>
