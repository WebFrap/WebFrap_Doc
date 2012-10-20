<h1>Crud MVC Cartridges</h1>

<p>Hier könnte ihre Dokumentation stehen... Wenn sie endlich jemand schreiben würde...</p>

<h3>Alle Crud Cartridges</h3>
<?php start_highlight(); ?>
<process>
  <cartridges>
  
    <!-- ## CRUD ## -->
    <cartridge class="Crud"      type="Management" />
    
    <!-- ## CRUD MVC ## -->
    <cartridge class="CrudModel"      type="Management" />
    <cartridge class="CrudController" type="Management" />
    <cartridge class="CrudQuery"      type="Management" />
    <cartridge class="CrudQueryPostgresql"      type="Management" />
    <cartridge class="CrudUi"         type="Management" />
    <cartridge class="CrudAjaxView"   type="Management" />
    
    <!-- ## CRUD Subwindow Cartridges ## -->
    <cartridge class="CrudSubwindowCreate"      type="Management" />
    <cartridge class="CrudSubwindowMenuCreate"  type="Management" />
    <cartridge class="CrudSubwindowEdit"        type="Management" />
    <cartridge class="CrudSubwindowMenuEdit"    type="Management" />
    <cartridge class="CrudSubwindowTemplates"   type="Management" />
    
    <!-- ## CRUD Maintab Cartridges ## -->
    <cartridge class="CrudMaintabCreate"      type="Management" />
    <cartridge class="CrudMaintabMenuCreate"  type="Management" />
    <cartridge class="CrudMaintabEdit"        type="Management" />
    <cartridge class="CrudMaintabMenuEdit"    type="Management" />
    <cartridge class="CrudMaintabTemplates"   type="Management" />
    
    <!-- ## CRUD Form Tab Cartridges ## -->
    <cartridge class="CrudTabController"  type="Management" />
    <cartridge class="CrudTabAjaxView"    type="Management" />
    <cartridge class="CrudTabTemplates"   type="Management" />

    <!-- ## CRUD References ## -->
    <cartridge class="CrudRefController"  type="Management" />
    <cartridge class="CrudRefModel"       type="Management" />
    <cartridge class="CrudRefModelMulti"  type="Management" />
    <cartridge class="CrudRefUi"          type="Management" />
    
    <!-- ## CRUD Access ## -->
    <cartridge class="CrudAclContainerCreate"     type="Management" />
    <cartridge class="CrudAclContainerDataset"    type="Management" />
    <cartridge class="CrudAclContainerDelete"     type="Management" />
    <cartridge class="CrudAclContainerEdit"       type="Management" />
    <cartridge class="CrudAclContainerInsert"     type="Management" />
    <cartridge class="CrudAclContainerUpdate"     type="Management" />
    <cartridge class="CrudAclContainerShow"       type="Management" />
    <cartridge class="CrudAclContainerTab"        type="Management" />

  </cartridges>
</process>
<?php display_highlight( 'xml' ); ?>