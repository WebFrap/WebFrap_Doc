
<h1>Process Constraints</h1>

<p>
Durch die Costraints kann die Datenqualität welche für die Prozessübergänge benötigt wird gesteuert werden.
Das ist vor allem dann nötig, wenn die Constraints nur für bestimmte Masken oder Prozessübergänge benötigt werden.
Dann ist es nicht möglich diese auf der Entity abzulegen. 
</p>


<?php start_highlight(); ?>
<processes>
  
  <!-- 
    name: Name des Prozesses (Cname)
    src: Die Datenquelle für den Process
   -->
  <process 
    name="project_project-development"
    src="project_project" >

    <!-- Constraints -->
    <constraints>
    
      <constraint name="min_info" >
        <conditions>
          <condition type="values" >
            <fields>
              <field name="access_key" required="true" null="" min="" max="" />
            </fields>
          </condition>
          
          <condition type="has_roles" >
            <roles>
              <role name="project_manager" />
            </<roles>
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
          <edge target="accepted" >
            
            <label>
              <text lang="de" >Akzeptieren</text>
              <text lang="en" >Accept</text>
            </label>
            
            <!-- Für den Übergang auf Accepted müssen die Bedingungen
            in Constraint min_info erfüllt werden -->
            <constraints>
              <constraint name="min_info" />
            </constraints>
    
          </edge>           
          <edge target="declined" >
            
            <label>
              <text lang="de" >Ablehnen</text>
              <text lang="en" >Decline</text>
            </label>

            
          </edge>               
        </edges>
        
      </node>
  
    </nodes>

  </process>

</processes>
<?php display_highlight( 'xml' ); ?>