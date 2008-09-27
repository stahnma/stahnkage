<?php 
# $Id: index.php,v 1.2 2006/02/18 02:47:19 stahnma Exp $
// rss test
require_once('/usr/share/php/magpierss/rss_fetch.inc');


$url = 'http://api.flickr.com/services/feeds/photos_public.gne?id=51035538357@N01&lang=en-us&format=rss_200';
print '<br />';
make_rss2($url);

function make_rss2($url)
{
$num_items=4;
$rss= fetch_rss($url);
$heading=$rss->channel['title'];
$arr=explode('[', $heading);
$value=$arr[0];
$en_url=htmlspecialchars($url);
$rss_image="<a href=\"$en_url\"><img alt='RSS Image' src=\"/images/rss.gif\"  title='RSS Feed'></a>";

print "<div class=inbox>" . $rss_image . " " .  $value . "</div>";

$items = array_slice($rss->items, 0, $num_items);
        foreach ($items as $item) 
       {
                $href = $item['link'];
                $title = $item['title'];
                $summary = $item['summary'];
                $newsum = strstr($summary, '<img');
                echo "<a href='$href'>$newsum</a>"; 
               # echo "<li><a href='$href'>$title</a></li>"; 
       }
                if (count($items) < 1 ) 
                   print "<li>No new updates</li>\n";
}
