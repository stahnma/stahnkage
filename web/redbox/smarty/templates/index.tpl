<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<!--
   $Id$
   $HeadURL$
-->
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<title>{$title|default:"no title"}</title>
	<meta http-equiv="Content-Language" content="English" />
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<link rel="stylesheet" type="text/css" href="/css/style.css" media="screen" />
        <link rel="icon" href="/images/favicon.ico" type="image/x-icon" />
        {if $feed}
<link rel="alternate" href="{$feed}" title="{$title}" type="application/{$feed_type|lower}+xml">
        {/if}
{if $js}
{$js}
{/if}
</head>
<body>
	
<div class="content">
	<div id="top">
				<div id="icons">
					<a href="/" title="Home page"><img src="/images/home.gif" alt="Home" /></a>
			<!--		<a href="/contact/" title="Contact us"><img src="images/contact.gif" alt="Contact" /></a> -->
					<a href="/layout" title="Sitemap"><img src="/images/sitemap.gif" alt="Sitemap" /></a>
				</div>
				<h1>www.stahnkage.com</h1>
                                <!-- I'd like some friggen random penguin quotes here -->
				<h2>{$quote}</h2>
	</div>
	<!-- end of the Top part -->
</div>			

<div id="prec">
	<div id="wrap">
			<div id="pic">
			<div id="slogan"> 
                         <h1>{$boxtitle}</h1>
                         <h2>{$boxtext}</h2>
					
				</div> 
			</div>
                      <!-- if possible make this menu an include file -->
			<div id="menu">
						<ul>	
							<li><a href="/" title="home">/</a></li>
							<li><a href="/blogs" title="Blogs">/blogs</a></li>
							<li><a href="/downloads" title="Blogs">/downloads</a></li>
							<li><a href="http://stahnma.fedorapeople.org" title="Fedora">/fedora</a></li>
							<li><a href="/trac" title="Infrastructure">/infrastructure</a></li>
							<li><a href="/wiki" title="Wiki">/wiki</a></li>
						
						</ul>
			</div>
	</div>
</div>


 <div class="content"> 
</div>
<div id="main">
   <div id="right_side">
     <div id="rss">

   <h3>Subscriptions</h3>
{foreach from=$ini_arr item=foo}
<a href="{$foo->url}" title="subscribe">
<img src="/images/feed-icon-10x10.png" alt="(feed)">
</a>
<a href="{$foo->link}">{$foo->name}</a><br/>
{/foreach}

{if isset($twitter->channel.link) }
  <h3><a href="{$twitter->channel.link}" class="nolink">stahnma tweats</a></h3>
{foreach from=$twitter->items item=foo}
   <li><a href="{$foo.link}">{$foo.title}</a></li>
{/foreach}
{/if}


{if isset($blogcom->channel.link) }
  <h3><a href="{$blogcom->channel.link}" class="nolink">Stahnkage Comments</a></h3>
 <ul>
{section name=bar loop=$blogcom->items step=1 max=6}
  <li><a href="{$blogcom->items[bar].link}">
         {$blogcom->items[bar].title}</a></li>
{/section}
  </ul>
{/if}

{if isset($lastfm->channel.link) }
  <h3><a href="{$lastfm->channel.link}" class="nolink">Mike's Last FM</a></h3>
{foreach from=$lastfm->items item=foo}
   <li><a href="{$foo.link}">{$foo.title}</a></li>
{/foreach}
{/if}

 
{if isset($delicious->channel.link) }
  <h3><a href="{$delicious->channel.link}" class="nolink">del.icio.us</a></h3>
 <ul>
{section name=bar loop=$delicious->items step=1 max=6}
  <li><a href="{$delicious->items[bar].link}">
         {$delicious->items[bar].title}</a></li>
{/section}
  </ul>
{/if}

{if isset($wiki->channel.link) }
  <h3><a href="{$wiki->channel.link}" class="nolink">Stahnkage Wiki</a></h3>
 <ul>
{section name=bar loop=$wiki->items step=1 max=6}
  <li><a href="{$wiki->items[bar].link}">
         {$wiki->items[bar].title}</a></li>
{/section}
  </ul>
{/if}

{if isset($trac->channel.link) }
  <h3><a href="{$trac->channel.link}" class="nolink">Infrastructure</a></h3>
 <ul>
{section name=bar loop=$trac->items step=1 max=6}
  <li><a href="{$trac->items[bar].link}">
         {$trac->items[bar].title}</a></li>
{/section}
  </ul>
{/if}

{if isset($digg->channel.link) }
  <h3><a href="{$digg->channel.link}" class="nolink">Digg Comments</a></h3>
 <ul>
{section name=bar loop=$digg->items step=1 max=6}
  <li><a href="{$digg->items[bar].link}">
         {$digg->items[bar].title}</a></li>
{/section}
  </ul>
{/if}

{if isset($amazon->channel.link) }
  <h3><a href="{$amazon->channel.link}" class="nolink">Mike's Amazon Profile</a></h3>
 <ul>
{section name=bar loop=$amazon->items step=1 max=6}
  <li><a href="{$amazon->items[bar].link}">
         {$amazon->items[bar].title}</a></li>
{/section}
  </ul>
{/if}


     </div>
   </div>
</div>
{* RSS FEED BLOCK  goes here*}

<div class="content">
{*   This is the normal blog stuff *}
{foreach from=$items key=bar item=foo}
<h2><a href="{$foo.link}">{$foo.title}</a></h2>
{* Match the item link with the ini_arr link? *}
{foreach from=$ini_arr item=ini}
  {if $foo.title|stripos:$ini->name !== false } 
     {if isset($ini->face) }
         {if $foo.author|stripos:"stahnke" !== false }
   <img src='/images/mike.png' style="float:left; margin:1em;" >
         {elseif $foo.author|stripos:"rutherford" !== false}
   <img src='/images/ruth_head.png' style="float:left; margin:1em;" >
         {else}
   <img src='/images/{$ini->face}' style="float:left; margin:1em;" >
         {/if}
     {/if}
  {/if} 
{/foreach}
{$foo.description}<br/>
<p class="date">
{$foo.pubdate}
</p>
<br>
{/foreach}
</div>




<!-- make sure times and whatnot are on the correct side -->
<!-- footer -->
 <div id="footer" align=center>
<br />
<p class="left">
<strong>Last updated:</strong><br>
<!-- need to change to smarty? -->
{$smarty.now|date_format:"%Y-%m-%d %H:%M:%S"}
<br>
<em>All times are UTC.</em><br>
<br />
<a href="http://www.dansimard.com/not_tested_in_ie/"><img border=0 src="/images/noie.png" /></a>
 <p class="right" >
  Copyright &copy; {$smarty.now|date_format:"%Y"}.  Stahnakge, Inc. <br /><small><font color=black>Stahnkage Goodness Release</font></small><br /><br />

<a rel="license" href="http://creativecommons.org/licenses/by-sa/3.0/">
<img alt="Creative Commons License" style="border-width:0" src="http://creativecommons.org/images/public/somerights20.png" />
</a>
<a href=http://www.free-css-templates.com>&nbsp;</a>
<br /><small>

 </p>

</div>
</body>
<!-- Much of this layout credit goes to 
    Design: "http://www.free-css-templates.com" : David Herreman
    The rest was hacked together by www.stahnkage.com
    Used under proper CC terms.
-->
</html>
