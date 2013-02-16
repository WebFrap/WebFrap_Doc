<h1>Entry</h1>

<a class="go_back" href="content.php?page=bdl.ui.menu" >Zurück zum Menü</a>

<p>Hier könnte ihre Dokumentation stehen... Wenn sie endlich jemand schreiben würde...</p>

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
            <node name="import_cpro"  >
              <label>
                <text lang="de" >Import CPro</text>
                <text lang="en" >Import CPro</text>
              </label>
              <icon key="importCpro" alt="import" ><![CDATA[sap/sync_cpro.png]]></icon>
              <action type="win" context="import" ><![CDATA[window.php?c=Import.Direct.Formcpro&amp;objid={$objid}]]></action>
            </node>
            <node name="sync_capa" >
              <label>
                <text lang="de" >Sync Capa</text>
                <text lang="en" >Sync Capa</text>
              </label>
              <icon key="syncCapa" alt="import" ><![CDATA[sap/sync_capa.png]]></icon>
              <action type="win" context="import" ><![CDATA[window.php?c=Sync.Capaold.sync&amp;objid={$objid}]]></action>
            </node>
          </body>
        </entry>
        
        <entry name="ext_reports" key="main/export"  position="after" >
        
          <access>
            <roles>
              <role name="project_manager" />
              <role name="project_manager_deputy" />
            </roles>
          </access>
        
        <body>
            <subtree name="project_reports"  >
              <label>
                <text lang="de" >Reports</text>
                <text lang="en" >Reports</text>
              </label>
              <icon key="report" alt="import" ><![CDATA[control/report.png]]></icon>
              <body>
                
                <node name="report1" >
                  <label>
                    <text lang="de" >Effort by WP</text>
                    <text lang="en" >Effort by WP</text>
                  </label>
                  <ui type="document" />
                  <icon key="report" alt="report" ><![CDATA[control/report.png]]></icon>
                  <action type="document" target="report" context="report" ><![CDATA[document.php?c=Project.Project_Report.reportprojecteffort&wp=1&amp;objid={$objid}]]></action>
                </node>
                
                <node name="report3" >
                  <label>
                    <text lang="de" >Effort by Emp</text>
                    <text lang="en" >Effort by Emp</text>
                  </label>
                  <ui type="document" />
                  <icon key="report" alt="report" ><![CDATA[control/report.png]]></icon>
                  <action type="document" target="report"  context="report" ><![CDATA[document.php?c=Project.Project_Report.reportprojecteffort&wp=0&amp;objid={$objid}]]></action>
                </node>
                
              </body>
            </subtree>
            
          </body>
        </entry>
        
      </edit>
      
    </menu>
  </ui>
</_..._>
<?php display_highlight( 'xml' ); ?>