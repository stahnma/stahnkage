<?php 
# $Id: index.php,v 1.2 2006/02/18 02:47:19 stahnma Exp $
// rss test
require_once('magpierss/rss_fetch.inc');


$url ='http://www.stahnkage.com/wiki/index.php?title=Special:Recentchanges&feed=rss'; 
make_rss($url);
$url='http://www.stahnkage.com/blogs/index.php?/feeds/index.rss2';
make_rss($url);
$url='http://wishradar.com/user/feed/mastahnke';
make_rss($url);
$url='http://ws.audioscrobbler.com/1.0/user/stahnma/recenttracks.rss';
make_rss($url);

function make_rss($url)
{
$num_items=5;
$rss= fetch_rss($url);
$heading=$rss->channel['title'];
$arr=explode('[', $heading);
$value=$arr[0];
$en_url=htmlspecialchars($url);
$rss_image="<a href=\"$en_url\"><img alt='RSS Image' src=\"/images/rss.gif\"  title='RSS Feed'></a>";

print "<div class=inbox>" . $rss_image . " " .  $value . "</div>";
print "\n<ul>\n";

$items = array_slice($rss->items, 0, $num_items);
        foreach ($items as $item) 
       {
                $href = $item['link'];
                $title = $item['title'];
                preg_replace('/ram/','www' , $href);
                echo "<li><a href='$href'>$title</a></li>"; 
       }
                # for W3C compliance, you must have a <li> tag inside a <UL>, even if there is no reason.
          
                if (sizeof($items) < 1 ) 
                { 
                   print "<li>No new updates</li>\n";
                }
print "</ul>\n";
}
