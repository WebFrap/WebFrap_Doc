<h2>Actions</h2>

<p>
Mit den Actions können beliebige Action Services / Dokumente oder auch
einfach nur Links in die Liste eingebunden werden.
</p>

<h3>Example</h3>
<?php start_highlight(); ?>
<_..._>
  <ui>
    <list>
      <table>
        <actions>
          
          <node name="project_planner" >
            <label>
              <text lang="de" >Planner</text>
              <text lang="en" >Planner</text>
            </label>
            
            <access access_level="access" ></access>
            
            <ui type="button" ></ui>
            <action 
              type="window" 
              context="reference" ><![CDATA[maintab.php?c=Project.Planner.sheet&amp;objid=]]></action>
            <icon 
              name="project_planner" 
              alt="planner" ><![CDATA[control/planner.png]]></icon>
              
          </node>

          <node name="another_mask" >
            <label>
              <text lang="de" >Another Mask</text>
              <text lang="en" >Another Mask</text>
            </label>
            
            <action mgmt="project_another_mask" call="edit" />
            
            <icon 
              name="another_mask" 
              alt="another mask" ><![CDATA[control/another_mask.png]]></icon>
          </node>
                             
          <node name="report" >
          
            <label>
              <text lang="de" >Some Report</text>
              <text lang="en" >Some Report</text>
            </label>
            
            <access access_level="update" ></access>
            
            <ui type="document" />
            <icon key="report" alt="Some Report" ><![CDATA[control/report.png]]></icon>
            <action 
              type="document" 
              target="report" 
              context="report" >document.php?c=Project.Project_Report.doReport&amp;objid=</action>
          </node>

        </actions>
      </table>
    </list>
  </ui>
</_..._>
<?php display_highlight( 'xml' ); ?>