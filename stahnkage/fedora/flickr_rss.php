<?php

define ('API_CONFIG_FILE', './authtoken.dat');

include_once '/usr/share/pear/Phlickr/Api.php';
include_once '/usr/share/pear/Phlickr/Photo.php';
require_once('XML/RSS.php');


function  flickr_ids($size="")
{
   $url = 'http://api.flickr.com/services/feeds/photos_public.gne?id=51035538357@N01&lang=en-us&format=rss_200';

  $rss =& new XML_RSS($url);
  $rss->parse();
  $ids = array();
  foreach ($rss->getItems() as $item) 
  {
     $t = explode('/', $item['link']);
     $th = array_pop($t);
     $th = array_pop($t);
     array_push($ids, $th); 
  }
  if ($size !== "")
  {
     // Return an array of $size elements
     $arr = array();
     for ($k=0; $k<$size; $k++)
        array_push($arr, $ids[$k]);
     $ids = $arr;
  }
    return ($ids);
}


function display_mini($photoid)
{
  $api = Phlickr_Api::createFrom(API_CONFIG_FILE);
  $p = new Phlickr_Photo($api, $photoid);
  $title = $p->getTitle();
  print '<small>' . $title . '</small><a href="' . $p->buildUrl() . '"><img src="' . $p->buildImgURL('t') .  '" border="0" /></a>';
}


$m = flickr_ids(6);
foreach ($m as $photoid) 
   display_mini($photoid);



?>
