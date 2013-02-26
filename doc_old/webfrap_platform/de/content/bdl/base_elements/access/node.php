<h2>Access</h2>

<p>
<span class="keyword">access</span> 
definiert die Zugriffsrechte auf ein Element.
Dementsprechend kann es in sehr vielen verschiedenen Elementen vorkommen.
Nachfolgend eine Liste der wichtigsten Elemente.
</p>

<ul class="doc_tree" >
  <li><span class="keyword">entity</span>
    <ul>
      <li><span class="keyword">attribute</span></li>
      <li><span class="keyword">category</span></li>
      <li><span class="keyword">ref</span></li>
    </ul>
  </li>
  <li><span class="keyword">management</span>
    <ul>
      <li><span class="keyword">category</span></li>
      <li><span class="keyword">ref</span></li>
    </ul>
  </li>
  <li><span class="keyword">process</span></li>
  <li><span class="keyword">action</span></li>
  <li><span class="keyword">menu&gt;node</span></li>
</ul>


<?php start_highlight(); ?>
  <entities>
  

    <entity name="name" >
    
      <!-- 
        Regeln des Zugriffs
       -->
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
        
        <!-- Für Profile können die Checks angepasst werden -->
        <profiles>
          
          <!--  -->
          <profile name="project_manager" >
            
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
            
          </profile>
          
          <profile name="company_head" >
            
            <checks>
              <check 
                type="role" 
                field="id_company" >
              
                <roles>
                  <role name="company_head" />
                </roles>
                
                <set access_level="access" ref_level="access" >
                  <!-- Rollezugehörigkeit erweitern -->
                  <roles>
                    <role name="company_head" />
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