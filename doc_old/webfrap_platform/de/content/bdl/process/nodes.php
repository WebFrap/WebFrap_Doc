
<h1>Process Nodes</h1>

<label>Node Types</label>
<ul class="doc_tree" >
  <li>start</li>
  <li>default</li>
  <li>end</li>
  <li>gateway</li>
  <li>aborted</li>
  <li>warning</li>
</ul>

<label>Beispiel Process Node</label>
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
      <node name="new" type="" >

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
     
            
    </nodes>
    
  </process>

</processes>
<?php display_highlight( 'xml' ); ?>