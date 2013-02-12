# Checklists

States sind Status flags welche global oder auf Process Nodes abgelegt werden können.

## Globale states

<?php start_highlight(); ?>
<processes>
  
  <!-- 
    name: Name des Prozesses (Cname)
    src: Die Datenquelle für den Process
    module: Das Module zu welchem der Prozess gehört
   -->
  <process 
    name="project_project-development"
    src="project_project"
    module="process" >
    
    <states>
      <state name="fu_checked" type="boolean" >
        <label>
          <text lang="de" >Fu is checked</text>
        </label>
      </state>
    <states>
  
  </process>

</processes>
<?php display_highlight( 'xml' ); ?>



## Beispiel Process Node 
<?php start_highlight(); ?>
<processes>
  
  <!-- 
    name: Name des Prozesses (Cname)
    src: Die Datenquelle für den Process
   -->
  <process 
    name="project_project-development"
    src="project_project" >

   
    <!-- Nodes -->
    <nodes>
    
      <!-- 
        name: name des Prozessnodes (Cname)
       -->
      <node name="new"  >

        <states>
          <state name="fu_checked" type="boolean" >
            <label>
              <text lang="de" >Fu is checked</text>
            </label>
          </state>
        <states>
        
      </node>
     
    </nodes>
    
  </process>

</processes>
<?php display_highlight( 'xml' ); ?>