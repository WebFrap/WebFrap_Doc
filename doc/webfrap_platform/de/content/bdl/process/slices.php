
<h1>Process</h1>


<?php start_highlight(); ?>
<processes>
  
  <!-- 
    name: Name des Prozesses (Cname)
    src: Die Datenquelle für den Process
   -->
  <process 
    name="project_project-development"
    src="project_project" >
    
    <label>
      <text lang="de" >Project Development</text>
      <text lang="en" >Project Development</text>
    </label>
    
    <description>
      <text lang="de" >Project Development</text>
      <text lang="en" >Project Development</text>
    </description>
    
    <!-- 
      Welchen Status sollen bereits existierende Knoten bekommen,
      wenn zu beginn kein Prozess initialisiert wurde?
     -->
    <default_node>new</default_node>
    
    <!-- 
      Auf welchem Attribute soll der aktuelle Status des Nodes 
      zurückgeschrieben werden
     -->
    <status_attribute>id_status</status_attribute>
    
    <!-- 
      Default Slices 
      werden verwendet, wenn in den nodes keine Slices definiert werden
      
      Wenn keine Default Slices definiert werden und keine Slices in Nodes
      definiert werden gibt es keine Slices  
    -->
    <slices>
      <slice type="comment" />
    </slices>
    
    <!-- 
    Relevante Datenquellen hinzufügen
    <data_sources>
      <source 
        name="project_project" 
        entity="project_project" 
        link="id_project" >
      </source>
    </data_sources>
    -->
    
    <!-- 
      Liste mit Responsibles
      können per key eingebunden werden
    -->
    <responsibles>
    
      <!-- 
        Alle Mitglieder der Rolle Management Global
       -->
      <responsible name="management" >

        <check type="role" >
          <roles>
            <role name="management" />
            <role name="management_assistant" />
          </roles>
        </check>
        
        <check key="project_project" type="role" >
          <roles>
            <role name="project_manager" />
            <role name="project_manager_deputy" />
          </roles>
        </check>
        
      </responsible>
      
      <responsible name="project_owner" >

        <check key="project_project" type="role" >
          <roles>
            <role name="owner" />
            <role name="owner_deputy" />
          </roles>
        </check>
        
      </responsible>
      
      <responsible name="project_manager" >
      
        <check key="project_project" type="role" >
          <roles>
            <role name="project_manager" />
            <role name="project_manager_deputy" />
          </roles>
        </check>
        
      </responsible>
      
      <responsible name="participants" >
      
        <check key="project_project" type="role" >
          <roles>
            <role name="staff" />
            <role name="project_manager" />
            <role name="project_manager_deputy" />
            <role name="owner" />
            <role name="owner_deputy" />
          </roles>
        </check>
        
      </responsible>

    </responsibles>
    
    <!-- Constraints -->
    <constraints>
    
      <constraint name="min_info" >
        <conditions>
          <condition type="values" >
            <fields>
              <field name="access_key" required="true" null="" min="" max="" />
            </fields>
          </condition>
        </conditions>
      </constraint>
      
    </constraints>
    
    <!-- Nodes -->
    <nodes>
    
      <!-- 
        name: name des Prozessnodes (Cname)
       -->
      <node name="new" >

        <label>
          <text lang="de" >New</text>
          <text lang="en" >New</text>
        </label>

        <description>
          <text lang="de" >New</text>
          <text lang="en" >New</text>
        </description>
        
        <icon 
          src="process/new.png" />

        <edges>            
          <edge target="in_negotiation" >
            
            <label>
              <text lang="de" >Verhandeln</text>
              <text lang="en" >Negotiat</text>
            </label>
  
          </edge>                
          <edge target="accepted" >
            
            <label>
              <text lang="de" >Akzeptieren</text>
              <text lang="en" >Accept</text>
            </label>
    
          </edge>           
          <edge target="declined" >
            
            <label>
              <text lang="de" >Ablehnen</text>
              <text lang="en" >Decline</text>
            </label>

            
          </edge>               
        </edges>
        
      </node>
      
      <node name="in_negotiation" >

        <label>
          <text lang="de" >Laufende Verhandlungen</text>
          <text lang="en" >In Negotiation</text>
        </label>

        <description>
          <text lang="de" >In Negotiation</text>
          <text lang="en" >In Negotiation</text>
        </description>
        
        <icon src="process/negotiation.png" />

        <edges>              
          <edge target="accepted" >
            
            <label>
              <text lang="de" >Akzeptieren</text>
              <text lang="en" >Accept</text>
            </label>

            
          </edge>           
          <edge target="declined" >
            
            <label>
              <text lang="de" >Ablehnen</text>
              <text lang="en" >Decline</text>
            </label>

            
          </edge>               
        </edges>
        
      </node>
      
      <node name="declined" >

        <label>
          <text lang="de" >Abgelehnt</text>
          <text lang="en" >Decline</text>
        </label>

        <description>
          <text lang="de" >Abgelehnt</text>
          <text lang="en" >Decline</text>
        </description>
        
        <icon src="process/go_on.png" />

        <edges>
          <edge target="archived" ></edge>         
        </edges>
        
      </node>

      <node name="accepted" >

        <label>
          <text lang="de" >Akzeptiert</text>
          <text lang="en" >Accepted</text>
        </label>

        <description>
          <text lang="de" >Akzeptiert</text>
          <text lang="en" >Accepted</text>
        </description>
        
        <icon src="process/go_on.png" />

        <edges>              
          <edge target="running" >
          </edge>              
          <edge target="frozen" >
          </edge>              
          <edge target="terminated" >
          </edge>             
        </edges>
        
      </node>
      
      <node name="frozen" >

        <label>
          <text lang="de" >Frozen</text>
          <text lang="en" >Frozen</text>
        </label>

        <description>
          <text lang="de" >Frozen</text>
          <text lang="en" >Frozen</text>
        </description>
        
        <icon src="process/frozen.png" />

        <edges>   
          <edge target="running" ></edge>   
          <edge target="terminated" ></edge>          
        </edges>
        
      </node>

      <node name="running" >

        <label>
          <text lang="de" >Processing</text>
          <text lang="en" >Processing</text>
        </label>

        <description>
          <text lang="de" >Processing</text>
          <text lang="en" >Processing</text>
        </description>
        
        <icon src="process/go_on.png" />

        <edges>   
          <edge target="rollout" >
          </edge>   
          <edge target="completed" >
            <actions>
              <action name="completed" position="success" />
            </actions>
          </edge>              
          <edge target="frozen" >
          </edge>              
          <edge target="terminated" >
          </edge>              
        </edges>
        
      </node>
      
      <node name="rollout" >

        <label>
          <text lang="de" >Rollout</text>
          <text lang="en" >Rollout</text>
        </label>

        <description>
          <text lang="de" >Rollout</text>
          <text lang="en" >Rollout</text>
        </description>
        
        <icon src="process/go_on.png" />

        <edges>   
          <edge target="completed" >
          </edge>   
          <edge target="support" >
          </edge>              
          <edge target="terminated" >
          </edge>              
        </edges>
        
      </node>
      
      <node name="support" >

        <label>
          <text lang="de" >Support</text>
          <text lang="en" >Support</text>
        </label>

        <description>
          <text lang="de" >Support</text>
          <text lang="en" >Support</text>
        </description>
        
        <icon src="process/support.png" />

        <edges>   
          <edge target="closed" ></edge>         
        </edges>
        
      </node>
      
      <node name="re_opened" >

        <label>
          <text lang="de" >Wiedereröffnet</text>
          <text lang="en" >Re Opened</text>
        </label>

        <description>
          <text lang="de" >Wiedereröffnet</text>
          <text lang="en" >Re Opened</text>
        </description>
        
        <icon src="process/go_on.png" />

        <edges>   
          <edge target="running" >
            <actions>
              <action name="running" position="success" />
            </actions>
          </edge>   
          <edge target="support" >
          </edge>            
          <edge target="completed" >
          </edge>              
        </edges>
        
      </node>
      
      <node name="completed" >

        <label>
          <text lang="de" >Completed</text>
          <text lang="en" >Completed</text>
        </label>

        <description>
          <text lang="de" >Completed</text>
          <text lang="en" >Completed</text>
        </description>
        
        <icon src="process/completed.png" />

        <edges>      
          <edge target="re_opened" ></edge>
          <edge target="closed" ></edge>         
        </edges>
        
      </node>
      
      <node name="closed" >

        <label>
          <text lang="de" >Closed</text>
          <text lang="en" >Closed</text>
        </label>

        <description>
          <text lang="de" >Closed</text>
          <text lang="en" >Closed</text>
        </description>
        
        <icon src="process/closed.png" />

        <edges>
          <edge target="archived" ></edge>            
        </edges>
        
      </node>
      
      <node name="terminated" >

        <label>
          <text lang="de" >Terminated</text>
          <text lang="en" >Terminated</text>
        </label>

        <description>
          <text lang="de" >Terminated</text>
          <text lang="en" >Terminated</text>
        </description>
        
        <icon src="process/terminated.png" />

        <edges>      
          <edge target="re_opened" ></edge>
          <edge target="archived" ></edge>            
        </edges>
        
      </node>
      
      <node name="archived" >

        <label>
          <text lang="de" >Archived</text>
          <text lang="en" >Archived</text>
        </label>

        <description>
          <text lang="de" >Archived</text>
          <text lang="en" >Archived</text>
        </description>
        
        <icon src="process/archive.png" />

        <edges>            
        </edges>
        
      </node>

            
    </nodes>
    
    <actions>
      <!--  -->
      <action name="new" >
      
        <procedures>
          <procedure type="send_mail" >
            <message name="new" />
            
            <messages>
              <success>
                <text lang="en" >Notified Creator and responsible Managers</text>
              </success>
            </messages>
            
            <channels>
              <mail />
              <message />
            </channels>
            
            <receivers>
              <receiver type="responsible" name="management" ></receiver>
            </receivers>
            
          </procedure>
        </procedures>
        
      </action>
      
      <action name="in_negotiation" >
      
        <procedures>
          <procedure type="send_mail" >
            <message name="in_negotiation" />
            
            <messages>
              <success>
                <text lang="en" >Notified Creator and responsible Managers</text>
              </success>
            </messages>
            
            <channels>
              <mail />
              <message />
            </channels>
            
            <receivers>
              <receiver type="responsible" name="project_owner" />
            </receivers>
            
          </procedure>
        </procedures>
        
      </action>
      
      <action name="declined" >
      
        <procedures>
          <procedure type="send_mail" >
            <message name="declined" />
            
            <messages>
              <success>
                <text lang="en" >Notified Creator and responsible Managers</text>
              </success>
            </messages>
            
            <channels>
              <mail />
              <message />
            </channels>
            
            <receivers>
              <receiver type="responsible" name="project_owner" />
            </receivers>
            
          </procedure>
        </procedures>
        
      </action>
      
      <action name="accepted" >
      
        <procedures>
          <procedure type="send_mail" >
            <message name="accepted" />
            
            <messages>
              <success>
                <text lang="en" >Notified Creator and responsible Managers</text>
              </success>
            </messages>
            
            <channels>
              <mail />
              <message />
            </channels>
            
            <receivers>
              <receiver type="responsible" name="project_owner" />
            </receivers>
            
          </procedure>
        </procedures>
        
      </action>
      
      <action name="frozen" >
      
        <procedures>
          <procedure type="send_mail" >
            <message name="frozen" />
            
            <messages>
              <success>
                <text lang="en" >Notified Creator and responsible Managers</text>
              </success>
            </messages>
            
            <channels>
              <mail />
              <message />
            </channels>
            
            <receivers>
              <receiver type="responsible" name="participants" />
            </receivers>
            
          </procedure>
        </procedures>
        
      </action>
      
      <action name="running" >
      
        <procedures>
          <procedure type="send_mail" >
            <message name="running" />
            
            <messages>
              <success>
                <text lang="en" >Notified Creator and responsible Managers</text>
              </success>
            </messages>
            
            <channels>
              <mail />
              <message />
            </channels>
            
            <receivers>
              <receiver type="responsible" name="participants" />
            </receivers>
            
          </procedure>
        </procedures> 

      </action>
      
      <action name="rollout" >
      
        <procedures>
          <procedure type="send_mail" >
            <message name="rollout" />
            
            <messages>
              <success>
                <text lang="en" >Notified Creator and responsible Managers</text>
              </success>
            </messages>
            
            <channels>
              <mail />
              <message />
            </channels>
            
            <receivers>
              <receiver type="responsible" name="participants" />
            </receivers>
            
          </procedure>
        </procedures> 

      </action>
      
      <action name="completed" >
      
        <procedures>
          <procedure type="send_mail" >
            <message name="completed" />
            
            <messages>
              <success>
                <text lang="en" >Notified Creator and responsible Managers</text>
              </success>
            </messages>
            
            <channels>
              <mail />
              <message />
            </channels>
            
            <receivers>
              <receiver type="responsible" name="participants" />
            </receivers>
            
          </procedure>
        </procedures> 

      </action>
      
      <action name="rollout" >
      
        <procedures>
          <procedure type="send_mail" >
            <message name="rollout" />
            
            <messages>
              <success>
                <text lang="en" >Notified Creator and responsible Managers</text>
              </success>
            </messages>
            
            <channels>
              <mail />
              <message />
            </channels>
            
            <receivers>
              <receiver type="responsible" name="participants" />
            </receivers>
            
          </procedure>
        </procedures> 

      </action>
      
      <action name="support" >
      
        <procedures>
          <procedure type="send_mail" >
            <message name="support" />
            
            <messages>
              <success>
                <text lang="en" >Notified Creator and responsible Managers</text>
              </success>
            </messages>
            
            <channels>
              <mail />
              <message />
            </channels>
            
            <receivers>
              <receiver type="responsible" name="management" />
            </receivers>
            
          </procedure>
        </procedures> 

      </action>
      
      <action name="re_opened" >
      
        <procedures>
          <procedure type="send_mail" >
            <message name="re_opened" />
            
            <messages>
              <success>
                <text lang="en" >Notified Creator and responsible Managers</text>
              </success>
            </messages>
            
            <channels>
              <mail />
              <message />
            </channels>
            
            <receivers>
              <receiver type="responsible" name="participants" />
            </receivers>
            
          </procedure>
        </procedures> 

      </action>
      
      <action name="completed" >
      
        <procedures>
          <procedure type="send_mail" >
            <message name="completed" />
            
            <messages>
              <success>
                <text lang="en" >Notified Creator and responsible Managers</text>
              </success>
            </messages>
            
            <channels>
              <mail />
              <message />
            </channels>
            
            <receivers>
              <receiver type="responsible" name="participants" />
            </receivers>
            
          </procedure>
        </procedures> 

      </action>
      
      <action name="closed" >
      
        <procedures>
          <procedure type="send_mail" >
            <message name="closed" />
            
            <messages>
              <success>
                <text lang="en" >Notified Creator and responsible Managers</text>
              </success>
            </messages>
            
            <channels>
              <mail />
              <message />
            </channels>
            
            <receivers>
              <receiver type="responsible" name="project_owner" />
            </receivers>
            
          </procedure>
        </procedures> 

      </action>
      
      <action name="terminated" >
      
        <procedures>
          <procedure type="send_mail" >
            <message name="terminated" />
            
            <messages>
              <success>
                <text lang="en" >Notified Creator and responsible Managers</text>
              </success>
            </messages>
            
            <channels>
              <mail />
              <message />
            </channels>
            
            <receivers>
              <receiver type="responsible" name="participants" />
            </receivers>
            
          </procedure>
        </procedures> 

      </action>
      
      <action name="archived" >
      
        <procedures>
          <procedure type="send_mail" >
            <message name="archived" />
            
            <messages>
              <success>
                <text lang="en" >Notified Creator and responsible Managers</text>
              </success>
            </messages>
            
            <channels>
              <mail />
              <message />
            </channels>
            
            <receivers>
              <receiver type="responsible" name="project_owner" />
            </receivers>
            
          </procedure>
        </procedures> 

      </action>
      
    </actions>
    
    <messages>
      <message name="new" />
      <message name="in_negotiation" />
      <message name="declined" />
      <message name="accepted" />
      <message name="frozen" />
      <message name="running" />
      <message name="rollout" />
      <message name="support" />
      <message name="re_opened" />
      <message name="completed" />
      <message name="closed" />
      <message name="terminated" />
      <message name="archived" />
    </messages>

  
  </process>

</processes>
<?php display_highlight( 'xml' ); ?>