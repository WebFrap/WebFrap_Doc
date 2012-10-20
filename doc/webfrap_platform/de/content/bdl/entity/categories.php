<h2>Categories</h2>


<?php start_highlight(); ?>
<entities>
  <entity name="project_project" >
    
    <categories>
      
      <!-- default -->
      <category name="default" >
        <label>
          <text key="de" >Project Data</text>
          <text key="en" >Project Data</text>
        </label>
      </category>
      
      <!-- time -->
      <category name="time"  >
      
        <layout cols="3" />
        
        <label>
          <text key="de" >Time Data</text>
          <text key="en" >Time Data</text>
        </label>
      
      </category>
    
      <!-- resources -->
      <category name="resources"  >
        
        <label>
          <text key="de" >Resources</text>
          <text key="en" >Resources</text>
        </label>
        
      </category>
    
      <!-- budget -->
      <category name="budget"  >
        <layout cols="3" />
        <label>
          <text key="de" >Budget</text>
          <text key="en" >Budget</text>
        </label>
        
        <concepts>
          <concept name="track" />
        </concepts>
      
      </category>
      
      <!-- description -->
      <category name="description"  >
        <label>
          <text key="de" >Beschreibung</text>
          <text key="en" >Description</text>
        </label>
      </category>
    
    </categories>
  
  </entity>
</entities>
<?php display_highlight( 'xml' ); ?>