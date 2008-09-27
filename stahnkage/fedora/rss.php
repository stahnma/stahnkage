<?php 
# $Id: index.php,v 1.2 2006/02/18 02:47:19 stahnma Exp $
// rss test
require_once('/usr/share/php/magpierss/rss_fetch.inc');


$url ='http://www.stahnkage.com/wiki/index.php?title=Special:Recentchanges&feed=rss'; 
make_rss($url);
$url='http://www.stahnkage.com/blogs/index.php?/feeds/index.rss2';
print '<br />';
make_rss($url);

$url='http://ws.audioscrobbler.com/1.0/user/stahnma/recenttracks.rss';
print '<br />';
make_rss($url);

$url='http://makedatamakesense.com/myspace/?url=http%3A%2F%2Fblog.myspace.com%2Fmoxxy3402&format=rss';

#$url='http://blog.myspace.com/blog/rss.cfm?friendID=193068550';
print '<br />';
make_rss($url);


$url='http://api.flickr.com/services/feeds/activity.gne?user_id=51035538357@N01&lang=en-us&format=rss_200';
print '<br />';
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
 		$href=preg_replace('/ram/', 'www', $href);
                $title = preg_replace('/ \? /', '/', $title);
                echo "<li><a href='$href'>$title</a></li>\n"; 
       }
                # for W3C compliance, you must have a <li> tag inside a <UL>, even if there is no reason.
                if (count($items) < 1 ) 
                { 
                   print "<li>No new updates</li>\n";
                }
print "</ul>\n";
}


