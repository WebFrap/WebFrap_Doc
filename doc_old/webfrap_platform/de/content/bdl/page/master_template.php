
<h1>Master Template</h1>

<h3>Example</h3>
<?php start_highlight(); ?>
<pages>

  <master_template name="sbiz_page_default" >
  
    <description>
      <text lang="de" >Standard Page Template für die SBiz Seite</text>
    </description>
  
    <layout><![CDATA[
<?php echo PHP_TAG ?> 
// setzen der nötigen metadaten im Template

$this->keyCss   = 'default';
$this->keyTheme = 'default';
$this->keyJs    = 'default';

?>
<div id="wbf-body" >

  <div id="wbf-lineup" >
    <?php echo PHP_TAG ?> echo $this->includeTemplate('topmenu','menu')?>
  </div>

  <div id="wbf-menu">

    <!-- menu -->
    <?php echo PHP_TAG ?>  if ( is_string($this->menu) ){ ?>
      <?php echo PHP_TAG ?> echo $this->includeTemplate( $this->menu , 'menu' )?>
    <?php echo PHP_TAG ?>  } elseif ( is_object($this->menu) ) { ?>
      <?php echo PHP_TAG ?> echo $this->menu?>
    <?php echo PHP_TAG ?>  }?>
    <!-- end menu -->

  </div>

  <div id="wbf-main_content">

    <!-- messages -->
    <div id="wbf-messages"><?php echo PHP_TAG ?> echo $MESSAGES?></div>
    <!-- end messages -->

    <!-- page -->
    <div  id="wbf-content" >
    <?php echo PHP_TAG ?> echo ($CONTENT?$CONTENT:$this->buildMainContent($TEMPLATE))?>
    </div>
    <!-- end page -->

  </div>

</div>

<?php echo PHP_TAG ?> echo $this->includeTemplate( 'window' , 'index' ) ?>
      ]]></layout>
  </master_template>

</pages>
<?php display_highlight( 'xml' ); ?>