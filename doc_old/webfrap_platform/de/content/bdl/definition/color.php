
<h1>Color</h1>


<p>
Color
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

      $vars->name       = 'color';
      $vars->size       = '8';
      $vars->type       = 'text';


      $vars->label->de  = 'Farbe';
      $vars->label->en  = 'Color';

      $vars->description->de  = 'Farbe für '.$vars->entity->label->de;
      $vars->description->en  = 'Color for '.$vars->entity->label->en;

      $vars->uiElement->type  = 'color';

      return $this->replaceDefinition($vars->parse(), $statement, $parentNode);
    }
    catch( LibGenf_Exception $e )
    {
      $this->remove($statement);
      return array();
    }


  }//end public function interpret */
<?php display_highlight( 'php' ); ?>