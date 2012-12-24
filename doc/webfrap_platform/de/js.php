<?php
/*******************************************************************************
*
* @author      : Dominik Bonsch <db@webfrap.de> <db@s-db.de>
* @date        :
* @copyright   : s-db.de (Softwareentwicklung Dominik Bonsch) <contact@s-db.de>
* @distributor : Webfrap Developer Network <contact@webfrap.de>
* @project     : Webfrap Web Frame Application
* @projectUrl  : http://webfrap.de
*
* Dual licenced, if you want to develop free Software you can use WebFrap
* with the conditions of GPLv3.
* If GPLv3 is nothing for you contact us: <contact@webfrap.de>.
* Depeding on what you want to do we have some commercial licences
* from free of cost use to enterprise versions or conditions by negotiation.
*
* @licence     : (GNU GENERAL PUBLIC LICENSE 3.0) see: LICENCE/GPLv3.txt
* @licence     : WebFrap Commercial <contact@webfrap.de>
*
* @version: @package_version@  Revision: @package_revision@
*
* Changes:
*
*******************************************************************************/

define('WGT_ERROR_LOG','log.js.html');
include './conf/bootstrap.plain.php';


Webfrap::$indexCache = 'cache/autoload_js/';

if(isset($_GET['l']))
{
  $tmp      = explode('.',$_GET['l']);

  $type     = $tmp[0];
  $id       = $tmp[1];

  if( !ctype_alnum($type) )
    $type = 'list';

  if( !ctype_alnum($id) )
    $id = 'default';

}
else
{
  $type     = 'list';
  $id       = 'default';
}

Webfrap::loadClassIndex( $type.'/'.$id );

$webfrap  = Webfrap::init();
$cache    = new LibCacheRequestJavascript();

if( isset($_GET['clean']) )
  $cache->clean();

if( 'file' == $type )
{
  if( !$cache->loadFileFromCache( $id ) )
    $cache->publishFile( $id );
}
else // default ist eine liste
{
  if( !$cache->loadListFromCache( $id ) )
    echo $cache->publishList( $id );
}

