<h1>Box: Tabs</h1>

<p>Mit den Tabboxen können in Viewports.</p>

<?php start_highlight(); ?>
<box name="team_box" type="tab" size="full" >
  <body>
    
    <tab name="assignments" type="sub" >
      <body>
        <reference name="human_resources" ></reference>
      </body>
    </tab>
    
    <tab name="team" type="sub" >
      <body>
       <item 
         name="roles" 
         type="role_list" 
         source="project_activity"
         class="project_roles" >
         
          <area name="project_activity" />
         
          <roles>
            <role name="project_manager" ></role>
            <role name="owner" ></role>
            <role name="staff" ></role>
          </roles>
         
        </item>
      </body>
    </tab>
  </body>
</box>
<?php display_highlight( 'xml' ); ?>