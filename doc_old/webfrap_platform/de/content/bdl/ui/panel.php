<h1>Panel</h1>

<a class="go_back" href="content.php?page=bdl.ui.desc" >Zurück zum UI Node</a>

<p>Beeinflusst das Panel bei Listen von Referenzen</p>

TODO: Pfade hinzufügen
TODO: Beispiel Bild
TODO: Beschreiben welche Actions es wo gibt

<label>Example</label>
<?php start_highlight(); ?>

<ref name="human_resources" binding="free"  relation="manyToMany" >
  <ui>
    <panel>
      <action name="create" status="false"  />
    </panel>
  </ui>
</ref>

<?php display_highlight( 'xml' ); ?>