
<h1>Comment</h1>


<p>
Comment
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

      $vars->name       = 'comment';
      $vars->type       = 'text';

      $vars->label->de  = 'Kommentar';
      $vars->label->en  = 'Comment';

      $vars->description->de  = 'Kommentar für '.$vars->entity->label->de;
      $vars->description->en  = 'Comment for '.$vars->entity->label->en;

      $vars->categories->main = 'comment';

      $vars->uiElement->type                = 'textarea';
      $vars->uiElement->position->priority  = '5';
      $vars->uiElement->position->valign    = 'bottom';

      return $this->replaceDefinition( $vars->parse(), $statement, $parentNode );
      
    }
    catch( LibGenf_Exception $e )
    {
    
      $this->remove( $statement );
      return array();
    }

  }//end public function interpret */
<?php display_highlight( 'php' ); ?>