

<h2>Service</h2>


<h3>Example</h3>
<?php start_highlight(); ?>
<services>
  
  <service 
    name="project_com_sync" 
    source="project_project"
    module="project"  >
    
    <fields>
      <field name="acronym" />
      <field name="full_name" />
      <field name="id_status" field="name"  />
      <field name="id_category" field="name"   />
      <field name="start_date" />
      <field name="end_date" />
    </fields>
    
    <roles name="relation" >
      <display>
        <role name="project_manager" />
      </display>
    </roles>
    
    <filter>
      <check name="status" type="path"  >
        <code>project_project.id_status.access_key IN( "new",  "running",  "closed" )</code>
      </check>
    </filter>

  </service>
  
</services>
<?php display_highlight( 'xml' ); ?>

