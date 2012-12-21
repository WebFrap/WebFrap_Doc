<h1>Bigint</h1>

<p>Hier könnte ihre Dokumentation stehen... Wenn sie endlich jemand schreiben würde...</p>

<label>BDL Code</label>
<?php start_highlight(); ?>
<_..._>
  <attribute name="some_int" type="bigint" >
    <!-- Auf Grund des Types wählt das System hier bereits automatisch BigInt -->
    <uiElement type="bigint" />
  </attribute>
</_..._>
<?php display_highlight( 'xml' ); ?>

<label>Genertierter Formcode</label>
<?php start_highlight(); ?>

 /**
  * create the ui element for field some_bigint
  * @param TFlag $rqtContext named parameters
  * @return void
  */
  public function input_SrcEntity_SomeBigint( $rqtContext )
  {
    $i18n     = $this->view->i18n;

    //tpl: class ui: guess
    $inputSomeBigint = $this->view->newInput( 'inputSrcEntitySomeBigint' , 'bigint' );
    $this->items['src_entity-some_bigint'] = $inputSomeBigint;
    $inputSomeBigint->addAttributes
    (
      array
      (
        'name'      => 'src_entity[some_bigint]',
        'id'        => 'wgt-input-src_entity_some_bigint'.($this->suffix?'-'.$this->suffix:''),
        'class'     => 'wcm wcm_ui_tip wcm_valid_bigint medium'.($this->assignedForm?' asgd-'.$this->assignedForm:''),
        'title'     => $i18n->l( 'Insert value for Some Bigint', 'project.task.label' ),
      )
    );
    $inputSomeBigint->setWidth( 'medium' );

    $inputSomeBigint->setReadonly( $this->fieldReadOnly( 'src_entity', 'some_bigint' ) );
    $inputSomeBigint->setRequired( $this->fieldRequired( 'src_entity', 'some_bigint' ) );
    $inputSomeBigint->setData( $this->entitySrcEntity->getSecure( 'some_bigint' ) );
    $inputSomeBigint->setLabel( $i18n->l( 'Some Bigint', 'project.task.label' ) );

    $inputSomeBigint->refresh           = $this->refresh;
    $inputSomeBigint->serializeElement  = $this->sendElement;

    // activate the category
    $this->view->addVar
    (
      'showCat'.$this->namespace.'_Meta' ,
      true
    );

  }//end public function input_SrcEntity_SomeBigint */

<?php display_highlight( 'php' ); ?>

<label>Genertiertes Markup</label>
<?php start_highlight(); ?>
<_..._>
  <attribute name="some_int" type="bigint" >
    <!-- Auf Grund des Types wählt das System hier bereits automatisch BigInt -->
    <uiElement type="bigint" />
  </attribute>
</_..._>
<?php display_highlight( 'html' ); ?>