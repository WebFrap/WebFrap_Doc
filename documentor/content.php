<div style="width:900px;" >
<?php
///TODO secure this little up
define('PHP_TAG', '<?php');

// geshi einbinden
if (file_exists('./core/vendor/geshi/geshi.php'))
  include 'documentor/core/vendor/geshi/geshi.php';

include '../core/IMarkdownParser.php';
../core/MarkdownParser.phpMarkdownPars../core/MarkdownExtraParser.phpown/MarkdownExtraParser.php';
use dflydev\markdown\MarkdownParser;

inclu../conf/conf.phpctions.php.php';
inclu../core/SimpleGrid.phpons.php';
include 'documentor/core/grid/SimpleGrid.php';
include './core/grid/TreeSimple.php';

if (isset($_GET ['page'])) {

  $tkn = explode( ':' , $_GET ['page']);

  $page = DOC_ROOT.$tkn[0].'/doc/de/'. str_replace(array (
    '/', '.'
  ), array (
    '', '/'
  ), $tkn[1]) . '.php';

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

  $tmp = explode('.', $_GET ['page']);

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

  include 'doc/de/errors/404.php';
}
?>
</div>