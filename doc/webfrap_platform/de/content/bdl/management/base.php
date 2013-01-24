<h1>Management</h1>

<p>
Die Bedeutung des <span class="bdl" >management</span> Nodes in BDL ist ähnlich wie eine (editierbare) View in einer
Datenbank.
Eine Node hat immer einen Hauptdatenquelle auf den er sich bezieht.
</p>

<p>In der folgende Abschnitt wird ersichtlich wie Managemement Nodes eingesetzt werden um verschiedenen Masken für
unterschiedliche UseCases aufzusetzen.</p>

<img src="images/bdl/management/managements.png" alt="Beispiel mit einige Management Nodes" />

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

<h2 class="example" >Beispiel</h2>
<?php start_highlight(); ?>
<managements>

  <management
    name="example_mask"
    src="example_entity"
    module=""
    relevance="d-1"
    type=""
    >

    <label></label>
    <plabel></plabel>
    <description></description>
    <docu></docu>
    <access></access>
    <concepts></concepts>
    <events></events>
    <ui></ui>

  </management>
</managements>
<?php display_highlight( 'xml' ); ?>


<h2 class="example" >Erklärung der Attribute</h2>

<ul class="doc_tree" >
  <li><span class="attribute" >name</span> Domainname der Action</li>
   <li><span class="attribute" >src</span> Name der Haupt-Entity <a href="content.php?page=bdl.entity.base" target="main" class="bdl" >entity</a></li>
  <li><span class="attribute opt" >module</span> Das Module zu welchem der Management Node gehört. Ist theoretisch
    optional wird jedoch benötigt wenn der erste Teil des Namens vom Modulnamen abweicht.</li>
  <li><span class="attribute opt" >relevance</span> Relevanz des Management nodes. Steuert welche Architekturelemente generiert werden.</li>
  <li><span class="attribute opt" >type</span> Type des Managament Nodes. Manche Nodes stellen z.B nur Listen, Exports etc bereit.</li>
</ul>

<h2 class="example" >Management Types</h2>

<ul class="doc_tree" >
  <li><span class="key" >default</span></li>
  <li><span class="key" >list</span></li>
  <li><span class="key" >selection</span></li>
  <li><span class="key" >viewer</span></li>
  <li><span class="key" >abstract</span></li>
  <li><span class="key" >view</span></li>
</ul>

<h3>default</h3>

<div>
'crud',
'crud_ref',
'crud_tab',
'acl',
'acl_dset',
'acl_domain',
'send_message',
'meta',
'meta_access',
'listing',
'list',
'table',
'treetable',
'tree',
'matrix',
'tile',
'gantt',
'calendar',
'selection',
'maintenance',
'export',
'global_menu',
'access_protocol_list',
'access_protocol_dataset'
</div>


<h3>list</h3>

<div>
'listing',
'list',
'table',
'treetable',
'tree',
'matrix',
'tile',
'access_protocol_list',
</div>

<h3>selection</h3>

<div>
'selection',
'meta',
'meta_access',
</div>

<h3>viewer</h3>

<div>
'crud',
'crud_ref',
'crud_tab',
'send_message',
'meta',
'meta_access',
</div>


