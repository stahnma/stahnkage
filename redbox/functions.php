<?php

$filename = '/var/www/html/planet/config.ini';

class Blog
{
   public $url;
   public $face;
   public $name; 
   public $link;
   public function __construct($url, $name, $link=null, $face=null)
   {
         $this->url = $url;
         $this->name = $name;
         $this->face = $face;
         $this->link = $link;
   }
}

function get_ini()
{
    global $filename;
    $ini_array = parse_ini_file($filename, TRUE);
    $arr = array();
    foreach ($ini_array as $key => $value)
    {
        $pos = strpos($key, 'http');
        if ($pos !== false)
        {
            if (array_key_exists('face', $value))
            {
               $blog = new Blog($key, $value['name'], $value['link'], $value['face']);
            }
            else
            {
               $blog = new Blog($key, $value['name'], $value['link']);
            }
            array_push($arr, $blog);
       }
    }
    return $arr;
}


function rss_bullets($url)
{
    $rss =& new XML_RSS($url);
    $rss->parse();
    return $rss;
}








?>
