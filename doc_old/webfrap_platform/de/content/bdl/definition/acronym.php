<h1>Acronym</h1>

<p>
Acronym
</p>

<label>Default Values</label>
<?php start_highlight(); ?>
  /**
   * @param DOMNode $statement
   * @param DOMNode $parentNode
   * @return DOMNode
   */
  public function interpret( $statement, $parentNode )
  {

    try
    {
      $vars = $this->checkAttribute( $statement, $parentNode );

      $vars->name       = 'acronym';
      $vars->size       = '250';
      $vars->type       = 'text';

      $vars->label->de  = 'Acronym';
      $vars->label->en  = 'Acronym';

      $vars->description->de  = 'Acronym '.$vars->entity->label->de;
      $vars->description->en  = 'Acronym of the '.$vars->entity->label->en;

      $vars->display->type    = 'exclude';
      $vars->display->action  = 'edit';
      
      $vars->search->type     = 'like';
      $vars->unique->strength = 'maybe';

      $vars->uiElement->type              = 'text';
      $vars->uiElement->position->priority  = '96';

      return $this->replaceDefinition($vars->parse(), $statement, $parentNode);
    }
    catch( LibGenf_Exception $e )
    {
      $this->remove($statement);
      return array();
    }

  }//end public function interpret */
<?php display_highlight( 'php' ); ?>