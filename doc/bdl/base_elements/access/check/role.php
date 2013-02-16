<h1>Check Role</h1>


<label>Beispiel</label>
<?php start_highlight(); ?>
<_..._>
  <access>
    
    <!-- Erweitern der Standard Checks -->
    <checks>
      
      <!-- Check auf die Rollen, wenn der jemand project manager für die verlinkte
      Entity ist, erbt er automatisch access level update
      und die rollen project manager, bzw project_manager_deputy -->
      <check 
        type="role" 
        field="id_company" ><!-- reference field -->
      
        <roles>
          <role name="project_manager" />
          <role name="project_manager_deputy" />
        </roles>
        
        <!-- Setzen des zurgriffslevels  -->
        <set access_level="update" ref_level="update" >
          <!-- Rollezugehörigkeit erweitern -->
          <roles>
            <role name="project_manager" />
            <role name="project_manager_deputy" />
          </roles>
        </set>
        
      </check>
    </checks>
    
  </access>
</_..._>
<?php display_highlight( 'xml' ); ?>