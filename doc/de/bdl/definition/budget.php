<h1>Budget <span>extends Money</span></h1>


<p>
Acronym
</p>

<label>Default Values</label>
<?php start_highlight(); ?>
  /**
   * @param DOMNode $statement
   * @param DOMNode $parentNode
   * @return [DOMNode]
   */
  public function interpret( $statement, $parentNode )
  {

    $replaced = array();
    
    try
    {
      $vars = $this->checkAttribute( $statement, $parentNode );

      $vars->name       = 'budget';
      $vars->size       = '30.6';
      $vars->type       = 'numeric';

      $vars->label->de  = 'Budget';
      $vars->label->en  = 'Budget';
      $vars->label->fr  = 'Etat';
      $vars->label->it  = 'Budget';
      $vars->label->es  = 'Presupuesto';

      $vars->description->de  = 'Budget für '.$vars->entity->label->de;
      $vars->description->en  = 'Budget for '.$vars->entity->label->en;
      $vars->description->fr  = 'Etat pour '.$vars->entity->label->fr;
      $vars->description->it  = 'Budget per '.$vars->entity->label->it;
      $vars->description->es  = 'Presupuesto para '.$vars->entity->label->es;

      $vars->uiElement->type  = 'money';
      $vars->uiElement->size->width  = 'small';

      $replaced[] = $this->replaceDefinition($vars->parse(), $statement, $parentNode);
    }
    catch( LibGenf_Exception $e )
    {
      $this->remove($statement);
      return array();
    }
    
    $simpelNode  = simplexml_import_dom( $statement);
    
    if( isset( $simpelNode->currency ) )
    {
      $xml = <<<XMLS

      <attribute name="id_{$vars->name}_currency" target="wbfsys_currency"   >
        <uiElement type="selectbox" >
          <position relation="below" target="{$vars->name}" />
        </uiElement>
      </attribute>

XMLS;

      $replaced[] = $this->addNode($xml, $parentNode);
    }

    return $replaced;
    
  }//end public function interpret */
<?php display_highlight( 'php' ); ?>