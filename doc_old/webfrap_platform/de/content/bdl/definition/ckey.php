
<h1>Ckey</h1>


<p>
Ckey
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

    try
    {
      $vars = $this->checkAttribute( $statement, $parentNode );

      $vars->name       = 'entry_key';
      $vars->size       = '120';
      $vars->type       = 'text';

      $vars->unique->strength = 'full';
      $vars->search->type     = 'equal';

      $vars->label->de  = 'Key';
      $vars->label->en  = 'Key';

      $vars->description->de  = 'Key für '.$vars->entity->label->de;
      $vars->description->en  = 'Key for '.$vars->entity->label->en;

      $vars->uiElement->type  = 'text';

      return $this->replaceDefinition($vars->parse(), $statement, $parentNode);
    }
    catch( LibGenf_Exception $e )
    {
      $this->remove($statement);
      return array();
    }


  }//end public function interpret */
<?php display_highlight( 'php' ); ?>