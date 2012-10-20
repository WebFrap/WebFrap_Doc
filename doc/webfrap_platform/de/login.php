<?php 
session_start( 'SESS_SBIZ_DOCU' );
?>
<?xml version="1.0" ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Start</title>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<meta http-equiv="content-Script-Type" content="text/javascript" />
<meta http-equiv="content-Style-Type" content="text/css" />
<meta http-equiv="content-language" content="de" />

<link href="../../documentor/style/doc.css" rel="stylesheet" type="text/css" />
<link href="../../documentor/style/jquery.treeview.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="../../documentor/js/jquery.js"></script>
<script type="text/javascript" src="../../documentor/js/jquery.treeview.js"></script>
<script type="text/javascript" src="../../documentor/js/documentor.js"></script>

</head>

<body>
  <div class="content" style="width:800px;"  >
    <?php
      ///TODO secure this little up
      
      define( 'PHP_TAG', '<?php' );

      // geshi einbinden
      if( file_exists( '../../documentor/core/vendor/geshi/geshi.php' ) )
        include '../../documentor/core/vendor/geshi/geshi.php';
        
      include '../../documentor/core/functions.php';
      include './keywords.php';
      include './access/access.php';

      if( isset( $_GET['page'] )  )
      {
        $page = 'content/'.str_replace(array('/','.'),array('','/'),$_GET['page']).'.php';
      }
      else
      {
        $page = 'content/start.php';
      }
      
      if( isset( $_POST['user'] ) && isset( $_POST['passwd'] ) )
      {
        Access::login( $_POST['user'], $_POST['passwd'] );
      }

      if( file_exists( $page ) )
      {
        
        if( $_SESSION['login'] == true )
        {
          $protection  = true;
          $logedIn     = isset($_SESSION['login'])?$_SESSION['login']:false;
          
          include $page;
        }
        else 
        {
          include 'login_form.php';
        }

      }
      else 
      {
        include 'errors/404.php';
      }
      
    ?>
  </div>
  
  <script type="text/javascript" >
    $(document).ready(function(){
      $('ul.treeMenu').treeview();
    });
  </script>
</body>
</html>
