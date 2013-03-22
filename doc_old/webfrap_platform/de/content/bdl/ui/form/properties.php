<h1>Form Properties</h1>

<p>
Über die Properties können allgemeine Eigenschaften für alle oder spezifische 
Formkontexte geändert werden.
</p>

<label>Einfügen im Modell</label>
<?php start_highlight(); ?>
<_..._>
  <ui>
    <form>
      
      <properties>
        <prop_name>A Value</prop_name>
        <other_prop some_attr="Attr Value" />
      </propteries>   
  
      <create>
      
        <properties>
          <prop_name />
          <other_prop  one_more_attr="" >Here can be also a value</other_prop>
          <yet_another_prop some_attr="" />
        </propteries>  
      
      </create
    </form>
  </ui>
</_..._>
<?php display_highlight( 'xml' ); ?>

<p>
Die Properties können nach Bedarf frei definiert werden.
</p>


<label>Zugriff in der Cartridge oder Generatoren</label>
<?php start_highlight(); ?>

// es wird ein Environment Objekt mit FormUi benötigt
// Bsp: LibGenfEnvManagement, LibGenfEnvPage
$formUi = $env->getFormUi( 'create' );

if ( $formUi )
{

  $rqtContext->prop1  = $formUi->property( 'prop_name' );
  if ( !$rqtContext->prop1 )
  {
    $rqtContext->prop1 = 'Def Value';
  }
  
  $rqtContext->prop2  = $formUi->property( 'other_prop', 'some_attr'  );

}
<?php display_highlight( 'php' ); ?>


<label>Liste der Momentan vorhanden Properties</label>

<ul class="doc_tree" >
  <li><span></span></li>
</ul>