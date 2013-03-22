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
?><?xml version="1.0" ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>WebFrap Dokumentation</title>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<meta http-equiv="content-Script-Type" content="application/javascript" />
<meta http-equiv="content-Style-Type" content="text/css" />
<meta http-equiv="content-language" content="de" />
</head>

<frameset cols="200px,*">
  <frame src="menu.php<?php
  if ( isset($_GET['page']) )
  {
    $tmp = explode( '.', $_GET['page'] );
    echo "?page=".$tmp[0];
  }
  ?>" name="menu">
  <frameset rows="100px,*">
  <frame src="top.php" name="top">
  <frame src="content.php<?php
  if ( isset($_GET['page']) )
  {
    echo "?page=".$_GET['page'];
  }
  ?>" name="main">
  </frameset>
</frameset>


</html>
