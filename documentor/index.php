<?php
/*******************************************************************************
 *
 * @author      : Dominik Bonsch <dominik.bonsch@webfrap.net>
 * @date        :
 * @copyright   : Webfrap Developer Network <contact@webfrap.net>
 * @project     : Webfrap Web Frame Application
 * @projectUrl  : http://webfrap.net
 *
 * @licence     : BSD License see: LICENCE/BSD Licence.txt
 *
 * @version: @package_version@  Revision: @package_revision@
 *
 * Changes:
 *
 *******************************************************************************/

define('PHP_TAG', '<?php');

// geshi einbinden
if (file_exists('./core/vendor/geshi/geshi.php'))
  include './core/vendor/geshi/geshi.php';

include './core/vendor/dflydev/markdown/IMarkdownParser.php';
include './core/vendor/dflydev/markdown/MarkdownParser.php';
include './core/vendor/dflydev/markdown/MarkdownExtraParser.php';
use dflydev\markdown\MarkdownParser;

include './conf/conf.php';
include './core/functions.php';

?><?xml version="1.0"?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>WebFrap Dokumentation</title>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<meta http-equiv="content-Script-Type" content="application/javascript" />
<meta http-equiv="content-Style-Type" content="text/css" />
<meta http-equiv="content-language" content="de" />
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

<link href="./css/normalize.css" rel="stylesheet" type="text/css" />
<link href="./css/main.css" rel="stylesheet" type="text/css" />
<link href="./css/doc.css" rel="stylesheet" type="text/css" />
<link href="./css/jquery.treeview.css" rel="stylesheet" type="text/css" />

<link type="text/plain" rel="author" href="./humans.txt" />

</head>
<body>
  <!--[if lt IE 7]>
    <p class="chromeframe">You are using an <strong>outdated</strong> browser.
    Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
  <![endif]-->

  <div id="docu-head" class="lbox" >
    <div class="headBox" >
      <h1>
        <a href="menu.php" target="menu" >Web<span>Frap</span></a>
        <a href="menu.php" target="menu" class="erDoc" >The Web Frame Application</a>
      </h1>
      <!-- <h3>&nbsp; just a placeholder for the space here </h3>-->
    </div>

    <ul class="topMenu" >
      <?php echo renderTopMenu( Conf::$modules, Conf::$topMenu ) ?>
      <!--
      <li><a onclick="show_chapter( 'admin_guide' );" href="#admin_guide" >Admin Guide</a></li>
      <li>|</li>
      <li><a onclick="show_chapter( 'user_guide' );" href="#user_guide" >User Guide</a></li>
      <li>|</li>
      <li><a onclick="show_chapter( 'dev_guide' );" href="#dev_guide" >Developer Guide</a></li>
      <li>|</li>
      <li><a onclick="show_chapter( 'webfrap' );" href="#webfrap" >WebFrap</a></li>
      <li>|</li>
      <li><a onclick="show_chapter( 'projects' );" href="#webfrap" >Projekte</a></li>
      <li>|</li>
      <li><a onclick="show_chapter( 'gateway' );" href="#gateway" >Gateway</a></li>
      <li>|</li>
      <li><a onclick="show_chapter( 'wgt' );" href="#wgt" >WGT</a></li>
      <li>|</li>
      <li><a onclick="show_chapter( 'genf' );" href="#genf" >GenF</a></li>
      <li>|</li>
      <li><a onclick="show_chapter( 'bdl' );"" href="#bdl" >BDL</a></li>
      <li>|</li>
      <li><a onclick="show_chapter( 'fourty_two' );" href="#fourty_two" >42 Datenmodell</a></li>
      <li>|</li>
      <li><a onclick="show_chapter( 'tools' );" href="#gaia" >Tools</a></li>
      <li>|</li>
      <li><a onclick="show_chapter( 'vendor_lib' );" href="#vendor_lib" >Vendor</a></li>
       -->
    </ul>
  </div>

  <div id="docu-menu" class="lbox" >
  <?php echo renderPageMenu( isset($_GET['page'])?$_GET['page']:null ); ?>
  </div>


  <div id="docu-content" class="content lbox" >
<?php

if (isset($_GET ['page'])) {
  $page = '../doc/de/' . str_replace(array (
    '/', '.'
  ), array (
    '', '/'
  ), $_GET ['page']) . '.php';
} else {
  $page = '../doc/de/start.php';
}

if (file_exists($page)) {

  start_md();
  include $page;
  echo render_md();

} elseif ('127.0.0.1' == $_SERVER ['SERVER_NAME']) {

  if (!is_dir(dirname($page)))
    mkdir(dirname($page), 0777, true);

  $tmp = explode('.', $_GET['page']);

  $key = ucfirst(array_pop($tmp));

  file_put_contents( $page, <<<HTML
#{$key}

Hier könnte ihre Dokumentation stehen... Wenn sie endlich jemand schreiben würde...

## Codebeispiel
<?php start_highlight(); ?>
<_..._>
</_..._>
<?php display_highlight( 'xml' ); ?>
HTML
);

  start_md();
  include $page;
  render_md();

} else {
  include '../doc/de/errors/404.php';
}

?>
  </div>

  <div id="docu-footer" class="lbox" >
Copyright usw.
  </div>



  <script type="application/javascript" src="./js/vendor/jquery-1.9.0.min.js"></script>
  <script type="application/javascript" src="./js/vendor/modernizr-2.6.2.min.js"></script>
  <script type="application/javascript" src="./js/plugins.js"></script>
  <script type="application/javascript" src="./js/main.js"></script>
  <script type="application/javascript" src="./js/jquery.treeview.js"></script>
  <script type="application/javascript" src="./js/documentor.js"></script>
  <script type="application/javascript">
$(document).ready(function(){
	$('ul.treeMenu').treeview();
});

function show_chapter( chapter ){

	$('#docu-menu').load("menu.php?page="+chapter, function(){
		$('ul.treeMenu').treeview();
    $('#docu-menu').find('a.clink').each( function(){
		  console.log("found "+this.href);
      $(this).click( function(){
				load_content(this);
    		return false;
			});
		});
	});
	show_content( chapter+".start" );
}

function show_content( page ){

	$('#docu-content').load("content.php?page="+page, function(){
    $('#docu-content').find('a.clink').each( function(){
      $(this).click( function(){
				load_content(this);
    		return false;
			});
		});
	});
}

function load_content( link ){

	$('#docu-content').load( link.href, function(){

    $('#docu-content').find('a.clink').each( function(){
			$(this).click( function(){
				load_content(this);
    		return false;
			});
		});
	});
}

  </script>
</body>

</html>
