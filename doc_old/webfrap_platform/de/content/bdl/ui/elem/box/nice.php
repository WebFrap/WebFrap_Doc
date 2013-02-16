<h1>Nice Box</h1>

<a class="go_back" href="content.php?page=bdl.ui.elem" >Zurück zur Übersicht</a>

<label>Beispiel Nice Box</label>
<img src="./images/bdl/ui/ui_element_box_nice.png" />

<div class="clear medium" >&nbsp;</div>

<p>Hier könnte ihre Dokumentation stehen... Wenn sie endlich jemand schreiben würde...</p>

<label>BDL Example</label>
<?php start_highlight(); ?>
  <box type="nice_box" name="description" clear="small" size="62" >
    <label>
      <text lang="en" >Description</text>
    </label>
    <body>
      <field name="description" render="element" />
    </body>
  </box>
<?php display_highlight( 'xml' ); ?>