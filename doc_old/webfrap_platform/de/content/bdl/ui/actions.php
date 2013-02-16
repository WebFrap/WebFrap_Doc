<h2>Actions</h2>

<a class="go_back" href="content.php?page=bdl.ui.desc" >Zurück zum UI Node</a>


<p>Welche Actions stehen auf dem generierten Crud Controller zur Verfügung?</p>
<p>Auf den CRUD Controller sind per default folgende Actions vorhanden:</p>

<ul class="doc-tree" >
  <li>create</li>
  <li>edit</li>
  <li>show</li>
  <li>insert</li>
  <li>update</li>
  <li>delete</li>
  <li>listing</li>
  <li>selection</li>
</ul>

<p>Wenn nicht gewünscht müssen sie mit <span class="attribute" >status="false"</span> deaktiviert werden.</p>

<h3>Location</h3>
<ul class="doc-tree" >
  <li>bdl/managements/management/ui/actions</li>
  <li>bdl/entities/entity/ui/actions</li>
</ul>

<br />

<h3>Example</h3>
<?php start_highlight(); ?>
<management>

  <ui>
    <actions>
      <action type="delete" status="false"  />
    </actions>
  </ui>

</management>
<?php display_highlight( 'xml' ); ?>