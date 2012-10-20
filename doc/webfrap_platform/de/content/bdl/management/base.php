
<h1>Management</h1>

<p>
Die Bedeutung des <span class="bdl" >management</span> Nodes in BDL ist ähnlich wie eine (editierbare) View in einer
Datenbank. 
Eine Node hat immer einen Hauptdatenquelle auf den er sich bezieht.
</p>

<p>
Die Informationen können in Node eingeschränkt oder durch zusätzliche Datenquellen / Relationen
erweitert werden. Die zusätzlichen Informationen sind immer Relativ zum Eintrag der Hauptdatenquelle.
</p>

<ul class="doc_tree" >
  <li><a src="content.php?page=bdl.entity.access" target="main" class="bdl" >access</a></li>
  <li><a src="content.php?page=bdl.base_elements.label" target="main" class="bdl" >label</a></li>
  <li><a src="content.php?page=bdl.base_elements.description" target="main" class="bdl" >description</a></li>
  <li><a src="content.php?page=bdl.base_elements.docu" target="main" class="bdl" >docu</a></li>
  <li><a src="content.php?page=bdl.entity.concepts" target="main" class="bdl" >concepts</a></li>
  <li><a src="content.php?page=bdl.entity.events" target="main" class="bdl" >events</a></li>
  <li><a src="content.php?page=bdl.entity.ui" target="main" class="bdl" >ui</a></li>
</ul>

<h3 class="example" >Beispiel</h3>
<?php start_highlight(); ?>
<managements>

  <management 
    name="example_mask" 
    src="example_entity" 
    module="example"
    >
    
    <!-- Label  -->
    <label></label>
    
    <description></description>
    
    <docu></docu>
    
    <events></events>
    
    <events></events>

  </management>
</managements>
<?php display_highlight( 'xml' ); ?>