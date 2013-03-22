
<h1>Big Description</h1>

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

    $definition = simplexml_import_dom( $statement );
    
    try
    {
      $vars = $this->checkAttribute( $statement, $parentNode );

      $vars->name       = 'description';
      $vars->type       = 'text';
      $vars->validator  = 'text';

      $vars->label->de  = 'Beschreibung';
      $vars->label->en  = 'Description';

      $vars->description->de  = 'Beschreibung für '.$vars->entity->label->de;
      $vars->description->en  = 'Description for '.$vars->entity->label->en;

      $vars->categories->main = 'description';

      $vars->concepts->addConcept
      ( 
        'i18n', 
        new LibGenfModelBdlConcept
        ( 
          null, 
          '<concept name="i18n" />' 
        ) 
      );

      $vars->uiElement->type              = 'textarea';
      $vars->uiElement->position->priority  = '5';
      $vars->uiElement->position->valign    = 'bottom';
    
      if ( isset( $statement->size ) )
      {
        
        if ( isset( $statement->size['width'] ) )
        {
          $vars->uiElement->size->width   = trim( $statement->size['width'] );
        }
        else
        {
          $vars->uiElement->size->width   = "full";
        }
        
        if ( isset( $statement->size['height'] ) )
        {
          $vars->uiElement->size->height  = trim( $statement->size['height'] );
        }
        else
        {
          $vars->uiElement->size->height  = "large";
        }
        
      }
      else
      {
        $vars->uiElement->size->width   = "full";
        $vars->uiElement->size->height  = "large";
      }

      return $this->replaceDefinition( $vars->parse(), $statement, $parentNode );
    }
    catch( LibGenf_Exception $e )
    {
      $this->remove($statement);
      return array();
    }


  }//end public function interpret */
<?php display_highlight( 'php' ); ?>