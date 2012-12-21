<h1>Menu</h1>

<p>Das Maskenmenü mit eigenen Einträgen erweitern</p>


<ul class="doc-tree" >
  <li><span class="bdl" >entry</span></li>
  <li><span class="bdl" >masks</span></li>
  <li><span class="bdl" >actions</span></li>
</ul>

<label>Render Beispiel</label>
<img src="./images/bdl/ui/ui_mask_menu.png" />

<h3>Codebeispiel</h3>
<?php start_highlight(); ?>
<_..._>
  <ui>
    <menu>
       
      <edit>
        
        <entry name="ext_imp_sync" key="main/export" position="before"   >
        
          <access>
            <roles>
              <role name="project_manager" />
              <role name="project_manager_deputy" />
            </roles>
          </access>
        
          <body>
            <node name="import_extern"  >
              <label>
                <text lang="de" >Import</text>
                <text lang="en" >Import</text>
              </label>
              <icon key="someImport" alt="import" ><![CDATA[utils/import.png]]></icon>
              <action type="modal" context="import" ><![CDATA[modal.php?c=Import.Service.All&amp;objid={$objid}]]></action>
            </node>
            <node name="sync_extern" >
              <label>
                <text lang="de" >Sync</text>
                <text lang="en" >Sync</text>
              </label>
              <icon key="someSync" alt="import" ><![CDATA[utils/sync.png]]></icon>
              <action type="modal" context="import" ><![CDATA[modal.php?c=Sync.Service.All&amp;objid={$objid}]]></action>
            </node>
          </body>
        </entry>
        
      </edit>
      
    </menu>
  </ui>
</_..._>
<?php display_highlight( 'xml' ); ?>