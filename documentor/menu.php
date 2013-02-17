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

if (isset($_GET ['page'])) {

  $tkn = explode( ':' , $_GET ['page']);

  $page = DOC_ROOT.$tkn[0].'/doc/de/'. str_replace(array (
    '/', '.'
  ), array (
    '', '/'
  ), $tkn[1]) . '/menu.php';

} else {

  $page = '../doc/de/menu.php';
}

include $page;

