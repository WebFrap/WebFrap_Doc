<h2>I18N Nodes</h2>

<p>
  I18n Nodes sind internationalisierte Nodes, sprich für jede unterstüzte
  Sprache gibt es einen eigenen <span class="key_word" >text</span> node.
</p>

<p>
  Wenn für eine Sprache kein Wert hinterlegt wurde fällt das System automatisch
  auf die Sprache zurück welche in der <span class="source_file" >Project.bdl</span> 
  definiert wurde. Wurde dort keine definiert wird der Standardwert 
  <span class="def_value" >en</span> verwendet.
</p>

<?php start_highlight(); ?>
<label>
  <text lang="de" >Das Label</text>
  <text lang="en_us" >the label</text>
  <text lang="fr" >Le label</text>
  <text lang="en" >label</text>
</label>
<?php display_highlight( 'xml' ); ?>


<p>
  Es ist möglich explizit einen node als Standard zu flaggen.
  Das ist dann sinnvoll wenn im englischen, bzw der gewählten Sprache
  die zwar eine Bezeichnung existiert, jedoch die Bezeichnung einer
  anderen Sprache als besserer Standard Wert geeignet wäre.
</p>

<?php start_highlight(); ?>
<label>
  <text lang="en_us" >Freedom Shice</text>
  <text lang="fr" def="true" >Pommes Frites</text>
  <text lang="en" >potato chips</text>
</label>
<?php display_highlight( 'xml' ); ?>

