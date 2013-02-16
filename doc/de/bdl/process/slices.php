# Slices

Über die slices wird definiert welche Informationen, zb. ein Kommentarfeld, eine Ratingbar etc standardmäßig 
in einem Prozess verwendet werden.

Darüber hinaus könne diese Slices zwischen den Prozessschritten variieren.

BILD HIER HIN

## Example
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
    
   
    <!-- 
      Default Slices 
      werden verwendet, wenn in den nodes keine Slices definiert werden
      
      Wenn keine Default Slices definiert werden und keine Slices in Nodes
      definiert werden gibt es keine Slices  
    -->
    <slices>
      <slice type="comment" />
    </slices>
    
  
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
          
        <slices>
          <slice type="comment" />
          <slice type="rating" />
        </slices>

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