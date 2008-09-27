<?php
/**
 * Sample File 2, phpDocumentor Quickstart
 *
 * This file demonstrates the rich information that can be included in
 * in-code documentation through DocBlocks and tags.
 * @author Greg Beaver <cellog@php.net>
 * @version 1.0
 * @package sample
 */
// sample file #1
/**
 * Dummy include value, to demonstrate the parsing power of phpDocumentor
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
