<h1>Pfade</h1>

<p>Hier könnte ihre Dokumentation stehen... Wenn sie endlich jemand schreiben würde...</p>

<label>Hier wäre ein super Platz für ein Codebeispiel</label>
<?php start_highlight(); ?>
<_..._>
  <access>
  
    <!-- Pfade definieren -->
    <paths>
      
      <!-- Checks die in allen Pfade ausgeführt werden sollen -->
      <checks>
        <check>
        
        </check>
      </checks>
      
      <!-- Set für alle Pfade, wenn all Checks erfolgreich waren -->
      <set>
      
      </set>
      
      <references>
        <ref name="project_task" >
          
          <checks>
            <check ref_id="id_company" >
              <roles>
                <role name="" />
              </roles>
              
              <level value="" />
              
              <!-- Set wenn dieser Check erfolgreich war -->
              <set>
              
              </set>
              
            </check>
          </checks>

          <!-- Wenn alle Checks erfolgreich waren -->
          <set>
            <roles>
            </roles>
            
            <level value="" ref="" />
          </set>
        
          <!-- Refrerences sind rekursiv verschachtelbar  -->
          <references>
            <ref name="task_employee" >
              
              <!-- Interne Checks -->
              <checks>
              </checks>
            
              <references>
                <ref name="task_employee_contract" >
                  <!-- Interne Checks -->
                  <checks>
                  </checks>
                </ref>
              </references>
            </ref>
          </references>
          
        </ref>
      </references>
    </paths>
  </access>
</_..._>
<?php display_highlight( 'xml' ); ?>