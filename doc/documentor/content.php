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
<title>Start</title>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<meta http-equiv="content-Script-Type" content="application/javascript" />
<meta http-equiv="content-Style-Type" content="text/css" />
<meta http-equiv="content-language" content="de" />

<link href=".css/normalize.css" rel="stylesheet" type="text/css" />
<link href=".css/main.css" rel="stylesheet" type="text/css" />
<link href=".css/doc.css" rel="stylesheet" type="text/css" />
<link href=".css/jquery.treeview.css" rel="stylesheet" type="text/css" />
<script type="application/javascript" src=".js/vendor/jquery-1.9.0.min.js"></script>
<script type="application/javascript" src=".js/vendor/modernizr-2.6.2.min.js"></script>
<script type="application/javascript" src=".js/plugins.js"></script>
<script type="application/javascript" src=".js/main.js"></script>
<script type="application/javascript" src=".js/jquery.treeview.js"></script>
<script type="application/javascript" src=".js/documentor.js"></script>

</head>

<body>
  <div class="content" style="width:800px;"  >
    <?php
      ///TODO secure this little up

      define( 'PHP_TAG', '<?php' );

      // geshi einbinden
      if( file_exists( './core/vendor/geshi/geshi.php' ) )
        include './core/vendor/geshi/geshi.php';


      include './core/vendor/dflydev/markdown/IMarkdownParser.php';
      include './core/vendor/dflydev/markdown/MarkdownParser.php';
      include './core/vendor/dflydev/markdown/MarkdownExtraParser.php';
      use dflydev\markdown\MarkdownParser;


      include './core/functions.php';
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

      if( file_exists( $page ) )
      {

        start_md();
        include $page;
        echo render_md();

      }
      elseif( '127.0.0.1' == $_SERVER['SERVER_NAME'] )
      {

        if( !is_dir(dirname($page)) )
          mkdir( dirname($page), 0777, true );

        $tmp = explode( '.', $_GET['page'] );

        $key = ucfirst(array_pop($tmp));

        file_put_contents
        (
          $page,
          <<<HTML
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

      }
      else
      {
        include 'errors/404.php';
      }

    ?>
  </div>

  <script type="application/javascript" >
    $(document).ready(function(){
      $('ul.treeMenu').treeview();
    });
  </script>
</body>
</html>
