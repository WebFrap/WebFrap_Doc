<h2>Access</h2>


<?php start_highlight(); ?>
<entities>
  <entity name="name" >
    
    <access>
      <profiles>
      
        <profile name="manager">
        
          <checks>
            <check type="role" field="id_customer">
            
              <roles>
                <role name="manager" />
                <role name="manager_deputy" />
              </roles>
              
              <set access_level="update" ref_level="update">
                <!-- Rollezugehörigkeit erweitern -->
                <roles>
                  <role name="manager" />
                  <role name="manager_deputy" />
                </roles>
              </set>
            
            </check>
          </checks>
      
        </profile>
        
        <profile name="manager_assistant">
      
          <checks>
            <check type="role" field="id_customer">
            
              <roles>
                <role name="manager_assistant" />
              </roles>
              
              <set access_level="access" ref_level="access">
                <!-- Rollezugehörigkeit erweitern -->
                <roles>
                  <role name="manager_assistant" />
                </roles>
              </set>
            
            </check>
          </checks>
        
        </profile>
      
      </profiles>
    </access>
  
  </entity>
</entities>
<?php display_highlight( 'xml' ); ?>