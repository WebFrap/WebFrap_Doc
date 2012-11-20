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

<link href="../../documentor/style/doc.css" rel="stylesheet" type="text/css" />
<link href="../../documentor/style/jquery.treeview.css" rel="stylesheet" type="text/css" />
<script type="application/javascript" src="../../documentor/js/jquery.js"></script>
<script type="application/javascript" src="../../documentor/js/jquery.treeview.js"></script>

<script type="application/javascript" >

function show_chapter( chapter ){
  parent.menu.location="menu.php?page="+chapter;
  parent.main.location="content.php?page="+chapter+".start";
}
</script>

</head>

<body class="menu" style="height:100%" >

<div class="content_menu" style="min-height:100%" >

<?php

  if( isset( $_GET['page'] )  )
  {
    $page = 'content/'.str_replace(array('/','.'),array('','/'),$_GET['page']).'/menu.php';
  }
  else
  {
    $page = 'content/menu.php';
  }

  include $page;
?>

</div>
<div class="footer" >
  <a href="http://webfrap.net" target="__new" >WebFrap (WGT)</a>
</div>

  <script type="application/javascript" >
    $(document).ready(function(){
      $('ul.treeMenu').treeview(); //{collapsed: true}
    });
  </script>

</body>
</html>
