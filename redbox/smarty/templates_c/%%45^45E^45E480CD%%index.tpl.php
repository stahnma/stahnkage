<?php /* Smarty version 2.6.19, created on 2008-09-25 04:10:15
         compiled from index.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'default', 'index.tpl', 9, false),array('modifier', 'lower', 'index.tpl', 15, false),array('modifier', 'stripos', 'index.tpl', 164, false),array('modifier', 'date_format', 'index.tpl', 194, false),)), $this); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<!--
   $Id$
   $HeadURL$
-->
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<title><?php echo ((is_array($_tmp=@$this->_tpl_vars['title'])) ? $this->_run_mod_handler('default', true, $_tmp, 'no title') : smarty_modifier_default($_tmp, 'no title')); ?>
</title>
	<meta http-equiv="Content-Language" content="English" />
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<link rel="stylesheet" type="text/css" href="/css/style.css" media="screen" />
        <link rel="icon" href="/images/favicon.ico" type="image/x-icon" />
        <?php if ($this->_tpl_vars['feed']): ?>
<link rel="alternate" href="<?php echo $this->_tpl_vars['feed']; ?>
" title="<?php echo $this->_tpl_vars['title']; ?>
" type="application/<?php echo ((is_array($_tmp=$this->_tpl_vars['feed_type'])) ? $this->_run_mod_handler('lower', true, $_tmp) : smarty_modifier_lower($_tmp)); ?>
+xml">
        <?php endif; ?>
<?php if ($this->_tpl_vars['js']): ?>
<?php echo $this->_tpl_vars['js']; ?>

<?php endif; ?>
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
				<h2><?php echo $this->_tpl_vars['quote']; ?>
</h2>
	</div>
	<!-- end of the Top part -->
</div>			

<div id="prec">
	<div id="wrap">
			<div id="pic">
			<div id="slogan"> 
                         <h1><?php echo $this->_tpl_vars['boxtitle']; ?>
</h1>
                         <h2><?php echo $this->_tpl_vars['boxtext']; ?>
</h2>
					
				</div> 
			</div>
                      <!-- if possible make this menu an include file -->
			<div id="menu">
						<ul>	
							<li><a href="http://www.stahnkage.com" title="home">/</a></li>
							<li><a href="/blogs" title="Blogs">/blogs</a></li>
							<li><a href="/downloads" title="Blogs">/downloads</a></li>
							<li><a href="/fedora" title="Fedora">/fedora</a></li>
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
<?php $_from = $this->_tpl_vars['ini_arr']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['foo']):
?>
<a href="<?php echo $this->_tpl_vars['foo']->url; ?>
" title="subscribe">
<img src="/images/feed-icon-10x10.png" alt="(feed)">
</a>
<a href="<?php echo $this->_tpl_vars['foo']->link; ?>
"><?php echo $this->_tpl_vars['foo']->name; ?>
</a><br/>
<?php endforeach; endif; unset($_from); ?>

<?php if (isset ( $this->_tpl_vars['twitter']->channel['link'] )): ?>
  <h3><a href="<?php echo $this->_tpl_vars['twitter']->channel['link']; ?>
" class="nolink">stahnma tweats</a></h3>
<?php $_from = $this->_tpl_vars['twitter']->items; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['foo']):
?>
   <li><a href="<?php echo $this->_tpl_vars['foo']['link']; ?>
"><?php echo $this->_tpl_vars['foo']['title']; ?>
</a></li>
<?php endforeach; endif; unset($_from); ?>
<?php endif; ?>


<?php if (isset ( $this->_tpl_vars['blogcom']->channel['link'] )): ?>
  <h3><a href="<?php echo $this->_tpl_vars['blogcom']->channel['link']; ?>
" class="nolink">Stahnkage Comments</a></h3>
 <ul>
<?php unset($this->_sections['bar']);
$this->_sections['bar']['name'] = 'bar';
$this->_sections['bar']['loop'] = is_array($_loop=$this->_tpl_vars['blogcom']->items) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['bar']['step'] = ((int)1) == 0 ? 1 : (int)1;
$this->_sections['bar']['max'] = (int)6;
$this->_sections['bar']['show'] = true;
if ($this->_sections['bar']['max'] < 0)
    $this->_sections['bar']['max'] = $this->_sections['bar']['loop'];
$this->_sections['bar']['start'] = $this->_sections['bar']['step'] > 0 ? 0 : $this->_sections['bar']['loop']-1;
if ($this->_sections['bar']['show']) {
    $this->_sections['bar']['total'] = min(ceil(($this->_sections['bar']['step'] > 0 ? $this->_sections['bar']['loop'] - $this->_sections['bar']['start'] : $this->_sections['bar']['start']+1)/abs($this->_sections['bar']['step'])), $this->_sections['bar']['max']);
    if ($this->_sections['bar']['total'] == 0)
        $this->_sections['bar']['show'] = false;
} else
    $this->_sections['bar']['total'] = 0;
if ($this->_sections['bar']['show']):

            for ($this->_sections['bar']['index'] = $this->_sections['bar']['start'], $this->_sections['bar']['iteration'] = 1;
                 $this->_sections['bar']['iteration'] <= $this->_sections['bar']['total'];
                 $this->_sections['bar']['index'] += $this->_sections['bar']['step'], $this->_sections['bar']['iteration']++):
$this->_sections['bar']['rownum'] = $this->_sections['bar']['iteration'];
$this->_sections['bar']['index_prev'] = $this->_sections['bar']['index'] - $this->_sections['bar']['step'];
$this->_sections['bar']['index_next'] = $this->_sections['bar']['index'] + $this->_sections['bar']['step'];
$this->_sections['bar']['first']      = ($this->_sections['bar']['iteration'] == 1);
$this->_sections['bar']['last']       = ($this->_sections['bar']['iteration'] == $this->_sections['bar']['total']);
?>
  <li><a href="<?php echo $this->_tpl_vars['blogcom']->items[$this->_sections['bar']['index']]['link']; ?>
">
         <?php echo $this->_tpl_vars['blogcom']->items[$this->_sections['bar']['index']]['title']; ?>
</a></li>
<?php endfor; endif; ?>
  </ul>
<?php endif; ?>

<?php if (isset ( $this->_tpl_vars['lastfm']->channel['link'] )): ?>
  <h3><a href="<?php echo $this->_tpl_vars['lastfm']->channel['link']; ?>
" class="nolink">Mike's Last FM</a></h3>
<?php $_from = $this->_tpl_vars['lastfm']->items; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['foo']):
?>
   <li><a href="<?php echo $this->_tpl_vars['foo']['link']; ?>
"><?php echo $this->_tpl_vars['foo']['title']; ?>
</a></li>
<?php endforeach; endif; unset($_from); ?>
<?php endif; ?>

 
<?php if (isset ( $this->_tpl_vars['delicious']->channel['link'] )): ?>
  <h3><a href="<?php echo $this->_tpl_vars['delicious']->channel['link']; ?>
" class="nolink">del.icio.us</a></h3>
 <ul>
<?php unset($this->_sections['bar']);
$this->_sections['bar']['name'] = 'bar';
$this->_sections['bar']['loop'] = is_array($_loop=$this->_tpl_vars['delicious']->items) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['bar']['step'] = ((int)1) == 0 ? 1 : (int)1;
$this->_sections['bar']['max'] = (int)6;
$this->_sections['bar']['show'] = true;
if ($this->_sections['bar']['max'] < 0)
    $this->_sections['bar']['max'] = $this->_sections['bar']['loop'];
$this->_sections['bar']['start'] = $this->_sections['bar']['step'] > 0 ? 0 : $this->_sections['bar']['loop']-1;
if ($this->_sections['bar']['show']) {
    $this->_sections['bar']['total'] = min(ceil(($this->_sections['bar']['step'] > 0 ? $this->_sections['bar']['loop'] - $this->_sections['bar']['start'] : $this->_sections['bar']['start']+1)/abs($this->_sections['bar']['step'])), $this->_sections['bar']['max']);
    if ($this->_sections['bar']['total'] == 0)
        $this->_sections['bar']['show'] = false;
} else
    $this->_sections['bar']['total'] = 0;
if ($this->_sections['bar']['show']):

            for ($this->_sections['bar']['index'] = $this->_sections['bar']['start'], $this->_sections['bar']['iteration'] = 1;
                 $this->_sections['bar']['iteration'] <= $this->_sections['bar']['total'];
                 $this->_sections['bar']['index'] += $this->_sections['bar']['step'], $this->_sections['bar']['iteration']++):
$this->_sections['bar']['rownum'] = $this->_sections['bar']['iteration'];
$this->_sections['bar']['index_prev'] = $this->_sections['bar']['index'] - $this->_sections['bar']['step'];
$this->_sections['bar']['index_next'] = $this->_sections['bar']['index'] + $this->_sections['bar']['step'];
$this->_sections['bar']['first']      = ($this->_sections['bar']['iteration'] == 1);
$this->_sections['bar']['last']       = ($this->_sections['bar']['iteration'] == $this->_sections['bar']['total']);
?>
  <li><a href="<?php echo $this->_tpl_vars['delicious']->items[$this->_sections['bar']['index']]['link']; ?>
">
         <?php echo $this->_tpl_vars['delicious']->items[$this->_sections['bar']['index']]['title']; ?>
</a></li>
<?php endfor; endif; ?>
  </ul>
<?php endif; ?>

<?php if (isset ( $this->_tpl_vars['wiki']->channel['link'] )): ?>
  <h3><a href="<?php echo $this->_tpl_vars['wiki']->channel['link']; ?>
" class="nolink">Stahnkage Wiki</a></h3>
 <ul>
<?php unset($this->_sections['bar']);
$this->_sections['bar']['name'] = 'bar';
$this->_sections['bar']['loop'] = is_array($_loop=$this->_tpl_vars['wiki']->items) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['bar']['step'] = ((int)1) == 0 ? 1 : (int)1;
$this->_sections['bar']['max'] = (int)6;
$this->_sections['bar']['show'] = true;
if ($this->_sections['bar']['max'] < 0)
    $this->_sections['bar']['max'] = $this->_sections['bar']['loop'];
$this->_sections['bar']['start'] = $this->_sections['bar']['step'] > 0 ? 0 : $this->_sections['bar']['loop']-1;
if ($this->_sections['bar']['show']) {
    $this->_sections['bar']['total'] = min(ceil(($this->_sections['bar']['step'] > 0 ? $this->_sections['bar']['loop'] - $this->_sections['bar']['start'] : $this->_sections['bar']['start']+1)/abs($this->_sections['bar']['step'])), $this->_sections['bar']['max']);
    if ($this->_sections['bar']['total'] == 0)
        $this->_sections['bar']['show'] = false;
} else
    $this->_sections['bar']['total'] = 0;
if ($this->_sections['bar']['show']):

            for ($this->_sections['bar']['index'] = $this->_sections['bar']['start'], $this->_sections['bar']['iteration'] = 1;
                 $this->_sections['bar']['iteration'] <= $this->_sections['bar']['total'];
                 $this->_sections['bar']['index'] += $this->_sections['bar']['step'], $this->_sections['bar']['iteration']++):
$this->_sections['bar']['rownum'] = $this->_sections['bar']['iteration'];
$this->_sections['bar']['index_prev'] = $this->_sections['bar']['index'] - $this->_sections['bar']['step'];
$this->_sections['bar']['index_next'] = $this->_sections['bar']['index'] + $this->_sections['bar']['step'];
$this->_sections['bar']['first']      = ($this->_sections['bar']['iteration'] == 1);
$this->_sections['bar']['last']       = ($this->_sections['bar']['iteration'] == $this->_sections['bar']['total']);
?>
  <li><a href="<?php echo $this->_tpl_vars['wiki']->items[$this->_sections['bar']['index']]['link']; ?>
">
         <?php echo $this->_tpl_vars['wiki']->items[$this->_sections['bar']['index']]['title']; ?>
</a></li>
<?php endfor; endif; ?>
  </ul>
<?php endif; ?>

<?php if (isset ( $this->_tpl_vars['trac']->channel['link'] )): ?>
  <h3><a href="<?php echo $this->_tpl_vars['trac']->channel['link']; ?>
" class="nolink">Infrastructure</a></h3>
 <ul>
<?php unset($this->_sections['bar']);
$this->_sections['bar']['name'] = 'bar';
$this->_sections['bar']['loop'] = is_array($_loop=$this->_tpl_vars['trac']->items) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['bar']['step'] = ((int)1) == 0 ? 1 : (int)1;
$this->_sections['bar']['max'] = (int)6;
$this->_sections['bar']['show'] = true;
if ($this->_sections['bar']['max'] < 0)
    $this->_sections['bar']['max'] = $this->_sections['bar']['loop'];
$this->_sections['bar']['start'] = $this->_sections['bar']['step'] > 0 ? 0 : $this->_sections['bar']['loop']-1;
if ($this->_sections['bar']['show']) {
    $this->_sections['bar']['total'] = min(ceil(($this->_sections['bar']['step'] > 0 ? $this->_sections['bar']['loop'] - $this->_sections['bar']['start'] : $this->_sections['bar']['start']+1)/abs($this->_sections['bar']['step'])), $this->_sections['bar']['max']);
    if ($this->_sections['bar']['total'] == 0)
        $this->_sections['bar']['show'] = false;
} else
    $this->_sections['bar']['total'] = 0;
if ($this->_sections['bar']['show']):

            for ($this->_sections['bar']['index'] = $this->_sections['bar']['start'], $this->_sections['bar']['iteration'] = 1;
                 $this->_sections['bar']['iteration'] <= $this->_sections['bar']['total'];
                 $this->_sections['bar']['index'] += $this->_sections['bar']['step'], $this->_sections['bar']['iteration']++):
$this->_sections['bar']['rownum'] = $this->_sections['bar']['iteration'];
$this->_sections['bar']['index_prev'] = $this->_sections['bar']['index'] - $this->_sections['bar']['step'];
$this->_sections['bar']['index_next'] = $this->_sections['bar']['index'] + $this->_sections['bar']['step'];
$this->_sections['bar']['first']      = ($this->_sections['bar']['iteration'] == 1);
$this->_sections['bar']['last']       = ($this->_sections['bar']['iteration'] == $this->_sections['bar']['total']);
?>
  <li><a href="<?php echo $this->_tpl_vars['trac']->items[$this->_sections['bar']['index']]['link']; ?>
">
         <?php echo $this->_tpl_vars['trac']->items[$this->_sections['bar']['index']]['title']; ?>
</a></li>
<?php endfor; endif; ?>
  </ul>
<?php endif; ?>

<?php if (isset ( $this->_tpl_vars['digg']->channel['link'] )): ?>
  <h3><a href="<?php echo $this->_tpl_vars['digg']->channel['link']; ?>
" class="nolink">Digg Comments</a></h3>
 <ul>
<?php unset($this->_sections['bar']);
$this->_sections['bar']['name'] = 'bar';
$this->_sections['bar']['loop'] = is_array($_loop=$this->_tpl_vars['digg']->items) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['bar']['step'] = ((int)1) == 0 ? 1 : (int)1;
$this->_sections['bar']['max'] = (int)6;
$this->_sections['bar']['show'] = true;
if ($this->_sections['bar']['max'] < 0)
    $this->_sections['bar']['max'] = $this->_sections['bar']['loop'];
$this->_sections['bar']['start'] = $this->_sections['bar']['step'] > 0 ? 0 : $this->_sections['bar']['loop']-1;
if ($this->_sections['bar']['show']) {
    $this->_sections['bar']['total'] = min(ceil(($this->_sections['bar']['step'] > 0 ? $this->_sections['bar']['loop'] - $this->_sections['bar']['start'] : $this->_sections['bar']['start']+1)/abs($this->_sections['bar']['step'])), $this->_sections['bar']['max']);
    if ($this->_sections['bar']['total'] == 0)
        $this->_sections['bar']['show'] = false;
} else
    $this->_sections['bar']['total'] = 0;
if ($this->_sections['bar']['show']):

            for ($this->_sections['bar']['index'] = $this->_sections['bar']['start'], $this->_sections['bar']['iteration'] = 1;
                 $this->_sections['bar']['iteration'] <= $this->_sections['bar']['total'];
                 $this->_sections['bar']['index'] += $this->_sections['bar']['step'], $this->_sections['bar']['iteration']++):
$this->_sections['bar']['rownum'] = $this->_sections['bar']['iteration'];
$this->_sections['bar']['index_prev'] = $this->_sections['bar']['index'] - $this->_sections['bar']['step'];
$this->_sections['bar']['index_next'] = $this->_sections['bar']['index'] + $this->_sections['bar']['step'];
$this->_sections['bar']['first']      = ($this->_sections['bar']['iteration'] == 1);
$this->_sections['bar']['last']       = ($this->_sections['bar']['iteration'] == $this->_sections['bar']['total']);
?>
  <li><a href="<?php echo $this->_tpl_vars['digg']->items[$this->_sections['bar']['index']]['link']; ?>
">
         <?php echo $this->_tpl_vars['digg']->items[$this->_sections['bar']['index']]['title']; ?>
</a></li>
<?php endfor; endif; ?>
  </ul>
<?php endif; ?>

<?php if (isset ( $this->_tpl_vars['amazon']->channel['link'] )): ?>
  <h3><a href="<?php echo $this->_tpl_vars['amazon']->channel['link']; ?>
" class="nolink">Mike's Amazon Profile</a></h3>
 <ul>
<?php unset($this->_sections['bar']);
$this->_sections['bar']['name'] = 'bar';
$this->_sections['bar']['loop'] = is_array($_loop=$this->_tpl_vars['amazon']->items) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['bar']['step'] = ((int)1) == 0 ? 1 : (int)1;
$this->_sections['bar']['max'] = (int)6;
$this->_sections['bar']['show'] = true;
if ($this->_sections['bar']['max'] < 0)
    $this->_sections['bar']['max'] = $this->_sections['bar']['loop'];
$this->_sections['bar']['start'] = $this->_sections['bar']['step'] > 0 ? 0 : $this->_sections['bar']['loop']-1;
if ($this->_sections['bar']['show']) {
    $this->_sections['bar']['total'] = min(ceil(($this->_sections['bar']['step'] > 0 ? $this->_sections['bar']['loop'] - $this->_sections['bar']['start'] : $this->_sections['bar']['start']+1)/abs($this->_sections['bar']['step'])), $this->_sections['bar']['max']);
    if ($this->_sections['bar']['total'] == 0)
        $this->_sections['bar']['show'] = false;
} else
    $this->_sections['bar']['total'] = 0;
if ($this->_sections['bar']['show']):

            for ($this->_sections['bar']['index'] = $this->_sections['bar']['start'], $this->_sections['bar']['iteration'] = 1;
                 $this->_sections['bar']['iteration'] <= $this->_sections['bar']['total'];
                 $this->_sections['bar']['index'] += $this->_sections['bar']['step'], $this->_sections['bar']['iteration']++):
$this->_sections['bar']['rownum'] = $this->_sections['bar']['iteration'];
$this->_sections['bar']['index_prev'] = $this->_sections['bar']['index'] - $this->_sections['bar']['step'];
$this->_sections['bar']['index_next'] = $this->_sections['bar']['index'] + $this->_sections['bar']['step'];
$this->_sections['bar']['first']      = ($this->_sections['bar']['iteration'] == 1);
$this->_sections['bar']['last']       = ($this->_sections['bar']['iteration'] == $this->_sections['bar']['total']);
?>
  <li><a href="<?php echo $this->_tpl_vars['amazon']->items[$this->_sections['bar']['index']]['link']; ?>
">
         <?php echo $this->_tpl_vars['amazon']->items[$this->_sections['bar']['index']]['title']; ?>
</a></li>
<?php endfor; endif; ?>
  </ul>
<?php endif; ?>


     </div>
   </div>
</div>

<div class="content">
<?php $_from = $this->_tpl_vars['items']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['bar'] => $this->_tpl_vars['foo']):
?>
<h2><a href="<?php echo $this->_tpl_vars['foo']['link']; ?>
"><?php echo $this->_tpl_vars['foo']['title']; ?>
</a></h2>
<?php $_from = $this->_tpl_vars['ini_arr']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['ini']):
?>
  <?php if (((is_array($_tmp=$this->_tpl_vars['foo']['title'])) ? $this->_run_mod_handler('stripos', true, $_tmp, $this->_tpl_vars['ini']->name) : stripos($_tmp, $this->_tpl_vars['ini']->name)) !== false): ?> 
     <?php if (isset ( $this->_tpl_vars['ini']->face )): ?>
         <?php if (((is_array($_tmp=$this->_tpl_vars['foo']['author'])) ? $this->_run_mod_handler('stripos', true, $_tmp, 'stahnke') : stripos($_tmp, 'stahnke')) !== false): ?>
   <img src='/images/mike.png' style="float:left; margin:1em;" >
         <?php elseif (((is_array($_tmp=$this->_tpl_vars['foo']['author'])) ? $this->_run_mod_handler('stripos', true, $_tmp, 'rutherford') : stripos($_tmp, 'rutherford')) !== false): ?>
   <img src='/images/ruth_head.png' style="float:left; margin:1em;" >
         <?php else: ?>
   <img src='/images/<?php echo $this->_tpl_vars['ini']->face; ?>
' style="float:left; margin:1em;" >
         <?php endif; ?>
     <?php endif; ?>
  <?php endif; ?> 
<?php endforeach; endif; unset($_from); ?>
<?php echo $this->_tpl_vars['foo']['description']; ?>
<br/>
<p class="date">
<?php echo $this->_tpl_vars['foo']['pubdate']; ?>

</p>
<br>
<?php endforeach; endif; unset($_from); ?>
</div>




<!-- make sure times and whatnot are on the correct side -->
<!-- footer -->
 <div id="footer" align=center>
<br />
<p class="left">
<strong>Last updated:</strong><br>
<!-- need to change to smarty? -->
<?php echo ((is_array($_tmp=time())) ? $this->_run_mod_handler('date_format', true, $_tmp, "%Y-%m-%d %H:%M:%S") : smarty_modifier_date_format($_tmp, "%Y-%m-%d %H:%M:%S")); ?>

<br>
<em>All times are UTC.</em><br>
<br />
<a href="http://www.dansimard.com/not_tested_in_ie/"><img border=0 src="/images/noie.png" /></a>
 <p class="right" >
  Copyright &copy; 2007.  Stahnakge, Inc. <br /><small><font color=black>Stahnkage Goodness Release</font></small><br /><br />

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