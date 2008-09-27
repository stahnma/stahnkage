<?
#$Id$
#$HeadURL$#

require('Smarty/Smarty.class.php');

$js =<<<EOL
<script type="text/javascript">
function errorMsg(name,ext,cat)
{
  // alert("Netscape 6 or Mozilla is needed to install a sherlock plugin");
  f=document.createElement("form");
  f.setAttribute("name","installform");
  f.setAttribute("method","post");
  f.setAttribute("action","http://mycroft.mozdev.org/error.html");
  fe=document.createElement("input");
  fe.setAttribute("type","hidden");
  fe.setAttribute("name","name");
  fe.setAttribute("value",name);
  f.appendChild(fe);
  fe=document.createElement("input");
  fe.setAttribute("type","hidden");
  fe.setAttribute("name","ext");
  fe.setAttribute("value",ext);
  f.appendChild(fe);
  fe=document.createElement("input");
  fe.setAttribute("type","hidden");
  fe.setAttribute("name","cat");
  fe.setAttribute("value",cat);
  f.appendChild(fe);
  document.getElementsByTagName("body")[0].appendChild(f);
  if (document.installform) {
    document.installform.submit();
  } else {
    location.href="http://mycroft.mozdev.org/error.html"; //hack for DOM-incompatible browsers
  }

}

function addEngine(name,ext,cat,type)
{
 if ((typeof window.sidebar == "object") && (typeof window.sidebar.addSearchEngine == "function")) {
     window.sidebar.addSearchEngine(
       "http://www.stahnkage.com/fedora/"+name+".src",
       "http://www.stahnkage.com/fedora/"+name+"."+ext , name, cat );
 } else {
   errorMsg(name,ext,cat);
 }
}

</script>
EOL;



$plugin =<<<EOL
        <h2>Firefox Search Plugins</h2>
        <img src="http://www.fedoraproject.org/favicon.ico" alt="FedoraProjectWi
ki"/>
          Firefox Search Plugin: <font><a class=firefox href="javascript:addEngi
ne('fedorawiki','png','General','0')">Fedora Project Wiki</a>
         <br />Search the Fedora Project Wiki.
EOL;


$boxtext = 'This page is dedicated to my work on <a href=http://www.fedoraproject.org>The Fedora Project</a>. I became actively involved in the Fedora Project in December of 2007.  I currently maintain several packages and am a steering committee member of <a href=http://fedoraproject.org/wiki/EPEL>Extra Packages for Enterprise Linux (EPEL)</a>. You can often find me lurking on IRC (freenode) in #fedora-devel and #epel.';


  # put code here to show off RPMS and SPEC FILES
  $rpms = null;
  $listing = `ls -l /var/www/html/rpms | grep -v total | awk '{print \$6,\$7,\$8,\$NF}'`;
  $arr = split("\n", $listing);
  $file = array_pop(split(" ", $line));
  foreach ($arr as $line)
  {
      $file = array_pop(split(" ", $line));
      $rpms .="<a href=../rpms/$file>$line</a><br />\n";
  }

$story='The following are probably RPMS I maitain for Fedora. This is normally where reviews come to grab new packages that I have made available.  Sometimes other RPMS will appear here if I am working on patch for one, or need to make a modification available to somebody.';

$smarty = new Smarty;
$smarty->template_dir = './smarty/templates';
$smarty->compile_dir = './smarty/templates_c';
$smarty->cache_dir = './smarty/cache';
$smarty->config_dir = './smarty/configs';

$smarty->assign('storyheading', 'RPM Work for Fedora');
$smarty->assign('boxtitle' , 'Fedora Project Work');
$smarty->assign('boxtext' , $boxtext);
$smarty->assign('title', 'Fedora Project Work');
$smarty->assign('quote', 'Penguins eat Polar Bears!');
$smarty->assign('plugin', $plugin);
$smarty->assign('js' , $js);
$smarty->assign('story' ,$story);
$smarty->assign('listing' ,$rpms);
$smarty->display('index.tpl');
?>
