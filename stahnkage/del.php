<hr><h3><a href="http://del.icio.us/mastahnke"><img src="images/del.png" alt="del.icio.us icon" title="del.icio.us bookmarks" > del.ico.us</a> links</h3><hr>
<?php
  require_once "/usr/share/php/magpierss/rss_fetch.inc";
  $yummy = fetch_rss("http://del.icio.us/rss/mastahnke");
  $maxitems = 15;
  $yummyitems = array_slice($yummy->items, 0, $maxitems);
  foreach ($yummyitems as $yummyitem) 
  {
        print '--';
        print '<a href="';
        print $yummyitem['link'];
        print '">';
        print $yummyitem['title'];
        print '</a>';
        if (isset($yummyitem['description'])) 
        {
            print ': ';
            print '<p>' . $yummyitem['description'] . '</p>';
        }
        print "\n";
  }
?>
