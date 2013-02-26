<h2>Label</h2>

<p>
  <span class="key_word" >label</span> ist in jedem Element vorhanden das 
  irgend einen Repräsentation in der späteren UI hat.
  Anders als beim Namen kann das Label durchaus redundant sein, es ist jedoch
  zu beachten, dass Redundanzen im gleichen Namespace soweit möglich zu vermeiden sind.
</p>

<p>
  Wie dem Beispiel zu entnehmen ist, ist das <span class="key_word" >label</span>
  ein i18n node, sprich es gibt für jede unterstützte Sprache einen eigenen Wert.
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
  Ein Beispiel für nicht zu vermeidente Redundanzen ist, wenn verschiedene
  Profile definiert wurden, die jeweils einen eigenen <span class="key_word" >management</span>
  knoten für eine <span class="key_word" >entity</span> haben, diese jedoch
  sinnigerweise gleich heißen sollen. 
</p>

<p>
<span class="example" >Beispiel:</span>
In eine Projektmanagement Tool gäbe es 3 Profile die jeweils eine unterschiedliche
Sicht auf die Projektdaten benötigen: <span class="role" >customer</span>, 
<span class="role" >project_manager</span> und <span class="role" >staff</span>.
Jeder hätte zwar einen eigenen <span class="key_word" >management</span> node 
(welchen nur er sieht), aber für alle sollte die Bezeichnung, 
also das <span class="key_word" >label</span>:
<span class="domain" >Project</span> sein, dass das die semantisch korrekte
Bezeichnung ist.
</p>

<p>Bei derartigen Redundanzen sind sauber ausgefüllte 
<span class="key_word" >description</span> nodes sehr wichtig, da sonst 
die Übersichtlichkeit gefährdet ist.
</p>

