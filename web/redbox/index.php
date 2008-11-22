<?php 
# $Id: index.php,v 1.2 2006/02/18 02:47:19 stahnma Exp $
// rss test
#require_once('/usr/share/php/magpierss/rss_fetch.inc');

require_once("XML/RSS.php");
require_once('Smarty/Smarty.class.php');
require_once('functions.php');

$url='http://www.stahnkage.com/planet/rss20.xml';
$feed_type='rss';
$arr = get_ini();

$rss =& new XML_RSS($url);
$rss->parse();
#print_r ($rss);
$boxtext= "The most common comment I get about stahnkage is the lack of updates.  It's a lot of work to maintain a website as cool as this, and to optimize it to handle up to 3 concurrent users.  So, I have decided to switch to a new format.  Much of this has been going on behind the scenes for a while.  Here is the first attempt to put it out front.  I present the Stahnkage RSS feed collaberation mechanims.  This is powered by Python and PHP and lots of other good stuff.  
I am still working on a few things, if you see bugs, please <a href=http://www.stahnkage.com/trac/newticket>open a ticket</a>.
<br /><br />
";

$smarty = new Smarty;
$smarty->template_dir = './smarty/templates';
$smarty->compile_dir = './smarty/templates_c';
$smarty->cache_dir = './smarty/cache';
$smarty->config_dir = './smarty/configs';

/* Hack for stupid MySpace RSS parser */
$pos = strpos("Jaime's Blog on MySpace", $rss->channel['title'] );
if ($pos !== false)
{
  $t  = array();
  $t = explode('Current mood', $rss->channel['title']);
  $title = $t[0];
}
else 
{ 
   $title = $rss->channel['title'];
}


$smarty->assign('title' , $title);
$smarty->assign('quote', 'Penguins eat Polar Bears!');
$smarty->assign('feed',  $url); 
# This might be dynamic
$smarty->assign('feed_type',  $feed_type); 
$smarty->assign('boxtitle' , $rss->channel['title']);
$smarty->assign('boxtext' , $boxtext);
$smarty->assign('items', $rss->items);
$smarty->assign('ini_arr', $arr);
  #print"  <pre>";
  #   print_r($entry);
  #print"  </pre>";
   

# Need faces

date_default_timezone_set('UTC');
#$smarty->assign('boxtitle' , 'Fedora Project Work');
#$smarty->assign('boxtext' , $boxtext);
#$smarty->assign('plugin', $plugin);
#$smarty->assign('js' , $js);
#$smarty->assign('story' ,$story);
#$smarty->assign('listing' ,$rpms);
$url='http://ws.audioscrobbler.com/1.0/user/stahnma/recenttracks.rss';
$lastfm = rss_bullets($url);
$url='http://del.icio.us/rss/mastahnke';
$delicious = rss_bullets($url);
#$url='http://www.stahnkage.com/wiki/index.php?title=Special:Recentchanges&feed=atom';
#$wiki = rss_bullets($url);
#print_r($wiki);
$url = 'http://www.stahnkage.com/trac/timeline?milestone=on&ticket=on&changeset=on&wiki=on&max=50&daysback=90&format=rss';
$trac = rss_bullets($url);
$url = 'http://www.digg.com/rss/sshguy/index2.xml';
$digg = rss_bullets($url);
$url ='http://www.stahnkage.com/serendipity/index.php?/feeds/comments.rss2';
$blogcom = rss_bullets($url);
$url = 'http://www.amazon.com/rss/people/A1UMSAS8QLFEKN/reviews/ref=cm_rss_profile_rev_autolink';
$amazon = rss_bullets($url);
#$url = 'http://twitter.com/statuses/user_timeline/16445616.atom';
#$twitter = rss_bullets($url);
#print_r($twitter);

$smarty->assign('lastfm', $lastfm);
$smarty->assign('delicious', $delicious);
#$smarty->assign('wiki', $wiki);
$smarty->assign('trac', $trac);
$smarty->assign('digg', $digg);
$smarty->assign('blogcom', $blogcom);
$smarty->assign('amazon', $amazon);
#$smarty->assign('twitter', $twitter);
$smarty->display('index.tpl');
