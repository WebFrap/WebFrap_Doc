<?php 
session_start( 'SESS_SBIZ_DOCU' );
include './access/access.php';
?>
<?xml version="1.0" ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Menu</title>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<meta http-equiv="content-Script-Type" content="application/javascript" />
<meta http-equiv="content-Style-Type" content="text/css" />
<meta http-equiv="content-language" content="de" />

<script type="application/javascript" >

function show_chapter( chapter ){
  parent.menu.location="menu.php?page="+chapter;
  parent.main.location="content.php?page="+chapter+".start";
}

</script>

<link href="../../documentor/css/normalize.css" rel="stylesheet" type="text/css" />
<link href="../../documentor/css/main.css" rel="stylesheet" type="text/css" />
<link href="../../documentor/css/doc.css" rel="stylesheet" type="text/css" />
<link href="../../documentor/css/jquery.treeview.css" rel="stylesheet" type="text/css" />

</head>

<body class="top" >
  <div class="content" >

    <div class="headBox" >
      <h1>
        <a href="menu.php" target="menu" >Web<span>Frap</span></a>  
        <a href="menu.php" target="menu" class="erDoc" >The Web Frame Application</a> 
      </h1>
      <!-- <h3>&nbsp; just a placeholder for the space here </h3>-->
    </div>
    
    <ul class="topMenu" >
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
      <li><a onclick="show_chapter( 'gaia' );" href="#gaia" >Tools</a></li>
      <li>|</li>
      <li><a onclick="show_chapter( 'vendor_lib' );" href="#vendor_lib" >Vendor</a></li>
    </ul>

  </div>
</body>
</html>
