<?php
/**
 * Uptime 
 *
 * This file computes your uptime for the system.  
 * @author Michael Stahnke <stahnma@fedoraproject.org>
 * @version 1.0
 * @package sample
 */

 $a=exec("uptime");
 $arr = explode(' ', $a);
 $uptime = $arr[3] . ' ' . $arr[4] . ' ';
 # If uptime more than a day, parse and add time units.
 if(preg_match('/user*/', $arr[9]))
 {
     $uptime.= $arr[5] . ' ' . $arr[6] . ' ';
 }
 $uptime.= 'since last reboot.';
 $uptime = preg_replace('/,/', '', $uptime);
 print $uptime;
?>
