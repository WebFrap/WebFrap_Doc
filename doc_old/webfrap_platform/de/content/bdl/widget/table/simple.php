
<h2>Table Widget</h2>


<h3>Example</h3>
<?php start_highlight(); ?>
<widgets>
  
  <widget 
    name="my_projects_pm" 
    source="project_project" 
    mask="project_mask_planning"
    type="table" >
  
  <label>
    <text lang="de" >My Projects</text>
    <text lang="en" >My Projects</text>
  </label>
    
  <ui>
  
      <list>
                
        <!-- the context -->
        <table>
        
          <panel>
          
            <button name="plan_project" >
              
              <label>
                <text lang="de" >Planning</text>
                <text lang="en" >Planning</text>
              </label>
              
              <ui type="button" ></ui>
              
              <action 
                 type="window" 
                 context="reference" ><![CDATA[maintab.php?c=Plan.Project.plan]]></action>
                 
              <icon name="planner" alt="planning" ><![CDATA[control/plan.png]]></icon>
              
              <access>
                <roles>
                 <role name="capa_project_manager" potency="partial" />
                </roles>
              </access>
              
            </button>
            
          </panel>

          <layout>
              <row>
                <col  label="name" weight="200" >
                  <value tag="strong" name="acronym" action="edit" />
                  <nl />
                  <nl />
                  <value tag="em" class="emphasized" name="full_name"  ></value>
                </col>
                <col label="data" >
                  <text tag="em" >Cat:    </text><value name="id_category" /><nl />
                  <text tag="em" >Status:  </text><value name="id_status" field="name" />
                </col>
                <col type="ref" label="io" target="project_task" >
                  <reference name="tasks" target="project_task"  >
                    <field tag="strong" name="name" />
                  </reference>
                </col>
                <col label="schedule" >
                  <text tag="em" >Start: </text><value name="start_date" /><nl />
                  <text tag="em" >End: </text><value name="end_date" />
                </col>
                <col type="menu" />
              </row>
          </layout>
          
          <actions>
          
            <node name="plan_project" >
              <label>
                <text lang="de" >Planning</text>
                <text lang="en" >Planning</text>
              </label>
              <ui type="button" ></ui>
              <icon name="planner" alt="Planning Sheet" ><![CDATA[control/plan.png]]></icon>
              <action type="window" context="reference" ><![CDATA[maintab.php?c=Project.Planner.sheet&amp;objid=]]></action>
            </node>

            <node name="requirements" action="append" >
              <label>
                <text lang="de" >Requirements</text>
                <text lang="en" >Requirements</text>
              </label>
              <action type="window" context="edit" ><![CDATA[maintab.php?c=Project.Requirements.edit&amp;objid=]]></action>
              <icon name="requirements" alt="requirements" ><![CDATA[control/requirements.png]]></icon>
            </node>
                               
            <node name="report" >
              <label>
                <text lang="de" >Some Report</text>
                <text lang="en" >Some Report</text>
              </label>
              <ui type="document" />
              <icon key="report" alt="Some Report" ><![CDATA[control/report.png]]></icon>
              <action type="document" target="report" context="report" ><![CDATA[document.php?c=Project.Project_Report.doc&amp;objid=]]></action>
            </node>

            
          </actions>
         
        </table>
        
        <!-- Filter for all lists -->
        <filter>
          <check 
            type="container" 
            name="custom" 
            class="my_projects_pm" ></check>
            
          <check type="path" >
            <code>project_project.id_status.access_key IN( "new", "running", "closed" )</code>
          </check>
          
        </filter>
    
      </list>

    </ui>

  </widget>
  
</widgets>
<?php display_highlight( 'xml' ); ?>
