<h1>Many To One References</h1>

<p>Hier könnte ihre Dokumentation stehen... Wenn sie endlich jemand schreiben würde...</p>

<h3>Hier wäre ein super Platz für ein Codebeispiel</h3>
<?php start_highlight(); ?>
<_..._>
<entities>
  <entity>
    <references>
      <ref name="project_task" binding="connected"  relation="manyToOne" >
      
        <label>
          <text lang="de" >Aufgaben</text>
          <text lang="en" >Tasks</text>
        </label>
        
        <target     
          name="project_task"
          management="project_task-project"  
          id="id_project" ></target>
        
        <ui>
  
          <list>
        
            <treetable>
            
              <order_by>
                <field 
                  name="priority" order="desc" />
                <field 
                  name="name" />
              </order_by>
                    
              <color_source attribute="id_develop_status" >
                <background field="bg_color"  />
                <text field="text_color" />
              </color_source>
      
              <layout>
                <row>
                  <col label="title" >
                    <value name="title"  />
                  </col>
                  <col label="Milestone" >
                    <value name="id_milestone"  />
                  </col>
                  <col label="Cat. / Prio." >
                    <value name="id_category" /><nl />
                    <value name="priority"  />
                  </col>
                  <col label="status" >
                    <value name="id_develop_status" >
                        <ui_element type="process" />
                      </value>
                  </col>
                  <col label="progress" >
                    <value name="progress" />
                  </col>
                  <col label="schedule" >
                    <text tag="em" >Start: </text><value name="start_date" /><nl />
                    <text tag="em" >End: </text><value name="end_date" />
                  </col>
                  <col label="Staff"  >
                    <reference name="human_resources" target="human_resources" >
                      <field name="name" />
                    </reference>
                  </col>
                  <col type="menu" ></col>
                </row>
              </layout>
              
              <footer type="min" />
              
            </treetable>
            
            <table>
            
              <order_by>
                <field 
                  name="priority" />
                <field 
                  name="name" />
              </order_by>
              
              <color_source attribute="id_develop_status" >
                <background field="bg_color"  />
                <text field="text_color" />
              </color_source>
        
              <layout>
                <row>
                  <col label="title" >
                    <value name="title"  />
                  </col>
                  <col label="Milestone" >
                    <value name="id_milestone"  />
                  </col>
                  <col label="Cat. / Prio." >
                    <value name="id_category" /><nl />
                    <value name="priority"  />
                  </col>
                  <col label="status" >
                    <value name="id_develop_status" >
                        <ui_element type="process" />
                      </value>
                  </col>
                  <col label="progress" >
                    <value name="progress" />
                  </col>
                  <col label="schedule" >
                    <text tag="em" >Start: </text><value name="start_date" /><nl />
                    <text tag="em" >End: </text><value name="end_date" />
                  </col>
                  <col label="Staff" >
                    <reference name="human_resources" target="human_resources" >
                      <field name="name" />
                    </reference>
                  </col>
                  <col type="menu" ></col>
                </row>
              </layout>
              
              <footer type="min" />
      
            </table>
      
            <order_by>
              <field 
                name="priority" />
              <field 
                name="m_time_created" />
            </order_by>
            
            <filter>
            
              <check type="path" name="new_tasks" >
              
                <controls>
                  
                  <control location="sub_panel" type="check_button"  > 
                  
                    <label>
                      <text lang="de" >New Tasks</text>
                      <text lang="en" >New Tasks</text>
                    </label>

                  </control>
                
                </controls>
                
                <active>true</active>
                
                <code>or project_task.id_develop_status.access_key IN( "new" ) or project_task.id_develop_status is null </code>
                
              </check>
            
              <check type="path" name="need_deligation" >
              
                <controls>
                  
                  <control location="sub_panel" type="check_button"  > 
                  
                    <label>
                      <text lang="de" >Deligation</text>
                      <text lang="en" >Deligation</text>
                    </label>

                  </control>
                
                </controls>
                
                <active>true</active>
                
                <code>or project_task.id_develop_status.access_key IN
                ( 
                  "accepted",
                  "checking",
                  "frozen",
                  "assigned",
                  "need_more_information",
                  "adopt",
                  "manager_accepted",
                  "manager_rejected",
                  "staff_accepted",
                  "staff_need_more_information",
                  "staff_rejected",
                  "request_closing",
                  "need_rework"   
                )</code>
                
              </check>
            
              <check type="path" name="active_tasks" >
              
                <controls>
                  
                  <control location="sub_panel" type="check_button"  > 
                  
                    <label>
                      <text lang="de" >Aktive Tasks</text>
                      <text lang="en" >Running Tasks</text>
                    </label>

                  </control>
                
                </controls>
                
                <active>true</active>
                
                <code>or project_task.id_develop_status.access_key IN( "running" )</code>
                
              </check>
              
              <check type="path" name="closed_tasks" >
              
                <controls>
                  
                  <control location="sub_panel" type="check_button"  > 
                  
                    <label>
                      <text lang="de" >Closed Tasks</text>
                      <text lang="en" >Closed Tasks</text>
                    </label>
      
                    
                    
                  </control>
                
                </controls>
                
                <code>
                or project_task.id_develop_status.access_key IN
                ( 
                  "rejected", 
                  "completed",  
                  "deployed", 
                  "closed" , 
                  "terminated" 
                )
                </code>
                
              </check>
              
              <check type="path" name="archived_projects" >
              
                <controls>
                  
                  <control location="sub_panel" type="check_button"  > 
                  
                    <label>
                      <text lang="de" >Archive</text>
                      <text lang="en" >Archive</text>
                    </label>
      
                    
                    
                  </control>
                
                </controls>
                
                <code>or project_task.id_develop_status.access_key IN( "archived" )</code>
                
              </check>
              
              <check type="role" name="my_tasks" >
              
                <controls>
                  
                  <control location="sub_panel" type="check_button"  > 
                  
                    <label>
                      <text lang="de" >My Tasks</text>
                      <text lang="en" >My Tasks</text>
                    </label>
 
                  </control>
      
                </controls>
                
                <roles>
                  <role name="staff" />
                  <role name="developer" />
                </roles>
                
              </check>
      
            </filter>
            
          </list>
          
        </ui>
        
      </ref>
    </references>
  </entity>
</entities>
</_..._>
<?php display_highlight( 'xml' ); ?>