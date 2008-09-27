<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<!--  $Id: index.php,v 1.5 2006/04/18 00:06:05 stahnma Exp $ -->
<html><head>
<title>Stahnkage!</title>
<link rel="stylesheet" type="text/css" href="style.css" >
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<script src="scripts/prototype.js"></script>
<script src="scripts/scriptaculous.js"></script>

</head>
<body>
      <div id=topbox> <!-- sets up the page width -->


<div id=navbar>
   <span id=navspan>Navigation</span>
   <a class=item href="wiki" title="The Stahnkage Wiki"><b></b>Wiki</a><em></em>
   <a class=item  href="blogs" title="The Stahnkage BlogoSphere"><b></b>Blogs</a><em></em>
   <a class="item" href="suck.shtml" title="Suck, now on Rails"><b></b>Suck</a><em></em>
   <a class="item new" href="firefox" title="Firefox Extensions"><b></b>Firefox</a><em></em>
   <a class=item href="cgi-bin/maps" title="Highly Advanced, Stahnkage Maps"><b></b>Maps</a><em></em>
   <!-- <a class=item href="" title="You can't have Web 2.0 without RSS."><b></b>RSS</a><em></em> -->
   <a class=item href="downloads" title="Downloads"><b></b>Downloads</a>
   <div title="<?php include 'getlog.php'?>"><?php include 'uptime.php'; ?></div>
   <!-- <a class=item href="" title="WTF?"><b></b>Random</a> -->
</div>

<div id=colorbar>
Wasting space on the Interweb since 2002.
</div> 
<div id=mi>
<!-- <img src="http://www.stahnkage.com/yahoo/logo.gif"  title="Friggen Penguins" border=0 alt="Stahnkage!"> -->
</div>
<div id=blankarea>
</div> 


<div id=column1>

<!--         ############## PRIMARY BOX ###################  -->
<div id=primarybox>
<h2 class=h2header>
     <span class=linkboxheader>
       <a href="http://www.stahnkage.com">Welcome to Stahnkage</a>
     </span> 
</h2> 

<div class=primarytext>
<p>I have switched to putting my del.icio.us bookmarks on this main panel.  This is so content gets updated regularly, and so you can see my favorite stuff on the interweb.  I hope you like it. </p> 
     <?php include 'del.php'; ?>

</div> <!-- closing primary text -->
</div> <!-- closing primary box -->
<!--       ############## END PRIMARY BOX  ################## -->

<div id=bottom><?php include 'footer_text.php'; ?>
<br /><br />
    <a href="http://validator.w3.org/check?uri=referer"><img
        src="http://www.w3.org/Icons/valid-html401"
        alt="Valid HTML 4.01 Transitional" height="31" width="88"></a>
   
     <a href="http://jigsaw.w3.org/css-validator/">
       <img style="border:0;width:88px;height:31px"
         src="http://jigsaw.w3.org/css-validator/images/vcss" 
         alt="Valid CSS!">
     </a>
       <a href="http://www.moatman.com"><? include 'banner.php'; ?></a>

</div>
</div> <!-- closing column1 --> 
<div id=column2>
<!--        ############ Blog BOX ######################### -->

<ul id="sortable">
<li>
<div id=linkbox class=box>
  <h2 class="handle">
<!--      <a class=linkboxheader href="blogs">Blogosphere</a> -->
   Web Presence
</h2>

<div class=primarytext>
   <div class=inbox>
        Mike on the Web
   </div>
  <ul>
<li><a href="blogs">Official Stahnkage Blog</a></li>
<li><a href="http://blogs.apress.com/">Mike's Apress Blog</a></li>
<li><a href="http://www.amazon.com/gp/product/1590594762">Mike's Book on Amazon</a></li>
<li><a href="http://www.flickr.com/photos/51035538357%40N01/">Mike on Flickr</a></li>
<li><a href="http://www.digg.com/linux_unix/Linux_Tip_10">Mike had a story on Digg!</a></li></ul>
   <div class=inbox>
        Extenal Blogosphere
   </div>
  <ul>
<li><a href="http://davewilcoxson.blogspot.com">Dave's Lame Blog</a></li>
<li><a href="http://www.livejournal.com/~hexenhammer">Francis</a></li>
<li><a href="http://www.livejournal.com/users/jijithecat">Adam</a></li>
</ul>
   <div class=inbox>
      Social Bookmarking
   </div>
   <ul>
     <li><a href="http://myspace.com/stahnkage">Mike on MySpace</a></li>
     <li><a href="http://myspace.com/davetopia">Dave on MySpace</a></li>
   </ul>
   <div class=inbox>
        Links
   </div>
<ul>
<li><a href="http://www.moatman.com">moatman.com</a></li>
<li><a href="http://www.killerbunnies.com">www.killerbunnies.com</a></li>
<li><a href="http://www.rockband.com/band.asp?sbn=mike-tv">MikeTV Site</a> (Band Mike produced)</li>
 </ul>
</div> <!-- closing primarytext -->
</div> <!-- closing linkbox -->

<!--       ############### END BLOG BOX ################### -->

<!--       ###################### Verion Box ####################### -->
<div id=versionbox class=box>
  <h2 class="handle">
     RSS Feeds 
<!--      <a class=linkboxheader href="">Version 2pi</a> -->
 </h2>
  <div class=primarytext>
  <!-- <div class=inbox style="text-align: left; padding: 5px;"> -->
     <?php include 'rss/index.php'; ?>
  </div> <!-- closing primarybox --> 
</div> <!-- closing version box -->
<!--    ################## END VERSION BOX ######################## -->

</div> <!--closing column2 -->
</div>  <!-- closing topbox --> 

<script type="text/javascript" language="javascript">
  Sortable.create('sortable',{constraint:false,handle:'handle'});
</script>

</body>
</html>
