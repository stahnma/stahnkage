<?php 

require_once("XML/RSS.php");
$url='http://www.stahnkage.com/planet/rss20.xml';
$rss =& new XML_RSS($url);
$rss->parse();
print_r ($rss);
?>
