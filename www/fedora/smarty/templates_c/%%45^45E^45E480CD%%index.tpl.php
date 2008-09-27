<?php /* Smarty version 2.6.18, created on 2007-06-21 20:46:47
         compiled from index.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'default', 'index.tpl', 10, false),)), $this); ?>
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
	<link rel="stylesheet" type="text/css" href="style.css" media="screen" />
<?php echo $this->_tpl_vars['js']; ?>

</head>
<body>
	
<div class="content">
	<div id="top">
				<div id="icons">
					<a href="/" title="Home page"><img src="images/home.gif" alt="Home" /></a>
			<!--		<a href="/contact/" title="Contact us"><img src="images/contact.gif" alt="Contact" /></a> -->
					<a href="/layout" title="Sitemap"><img src="images/sitemap.gif" alt="Sitemap" /></a>
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
			<div id="menu">
						<ul>	
							<li><a href="http://www.stahnkage.com" title="home">/</a></li>
							<li><a href="/blogs" title="Blogs">/blogs</a></li>
							<li><a href="/fedora" title="Fedora">/fedora</a></li>
							<li><a href="/wiki" title="Wiki">/wiki</a></li>
							<li><a href="/trac" title="Infrastructure">/infrastructure</a></li>
						
						</ul>
			</div>
	</div>
</div>


<div class="content">
        <div id="ad">
         <?php echo $this->_tpl_vars['plugin']; ?>

        </div>

 <div id="left_side">
                        <h3><span><?php echo $this->_tpl_vars['storyheading']; ?>
</span></h3>
                        <p>
                      <?php echo $this->_tpl_vars['story']; ?>
 
                        </p>
                        <blockquote>
  <p><?php echo $this->_tpl_vars['listing']; ?>
 </p>
                        </blockquote>
</div>




<!-- footer -->
 <div id="footer" align=center>
<br />
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
    Used under proper CC terms.
-->
</html>
