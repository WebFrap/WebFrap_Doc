<h1>Access Key</h1>

<p>
Selbst definierter Key um Datensätze hardcodiert aus einer Applikation
heraus ansprechen zu können.
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

    $vars->name       = 'access_key';
    $vars->size       = '120';
    $vars->type       = 'text';
    $vars->validator  = 'cname';
    $vars->index      = 'btree';

    $vars->unique->strength = 'full';
    $vars->search->type     = 'equal';

    $vars->label->de  = 'Access Key';
    $vars->label->en  = 'Access Key';
    $vars->label->fr  = 'Accès  Clé';
    $vars->label->it  = 'Accesso Chiave';

    $vars->description->de  = 'Zugriffs Key '.$vars->entity->label->de;
    $vars->description->en  = 'Access Key for '.$vars->entity->label->en;
    $vars->description->fr  = 'Accès  Clé pour '.$vars->entity->label->fr;
    $vars->description->it  = 'Accesso Chiave per '.$vars->entity->label->it;

    $vars->uiElement->type  = 'text';
    $vars->uiElement->position->priority  = '90';

    //$vars->categories->main  = 'meta';

    return $this->replaceDefinition($vars->parse(), $statement, $parentNode);
  }
  catch( LibGenf_Exception $e )
  {
    $this->remove($statement);
    return array();
  }


}//end public function interpret */
<?php display_highlight( 'php' ); ?>