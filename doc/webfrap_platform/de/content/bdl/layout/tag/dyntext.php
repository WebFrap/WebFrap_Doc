<h1>Dyntext</h1>

<p>Einbinden von beliebigen Texten / HTML inhalten aus der Datenbank.</p>
<p>Der Inhalt wird über den AccessKey des Textes adressiert</p>

<label>Beispiel</label>
<?php start_highlight(); ?>
  <dyntext tag="div" class="wgt-box" key="some.text.key" />
<?php display_highlight( 'xml' ); ?>