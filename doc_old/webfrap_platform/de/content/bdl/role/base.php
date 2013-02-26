
<h2>Role</h2>


<h3>User Roles</h3>
<ul class="doc_tree" >
  <li><span class="key_word" >public_edit</span> (<span class="key_word" >0</span>)</li>
  <li><span class="key_word" >public_access</span> (<span class="key_word" >10</span>)</li>
  <li><span class="key_word" >user</span> (<span class="key_word" >20</span>)</li>
  <li><span class="key_word" >ident</span> (<span class="key_word" >30</span>)</li>
  <li><span class="key_word" >employee</span> (<span class="key_word" >40</span>)</li>
  <li><span class="key_word" >superior</span> (<span class="key_word" >50</span>)</li>
  <li><span class="key_word" >l4_manager</span> (<span class="key_word" >60</span>)</li>
  <li><span class="key_word" >l3_manager</span> (<span class="key_word" >70</span>)</li>
  <li><span class="key_word" >l2_manager</span> (<span class="key_word" >80</span>)</li>
  <li><span class="key_word" >l1_manager</span> (<span class="key_word" >90</span>)</li>
  <li><span class="key_word" >system</span> (<span class="key_word" >100</span>)</li>
</ul>

<h3>Example</h3>
<?php start_highlight(); ?>
<roles>
  <!-- 
    Name der Rolle, das Name Attribute wir auf den Access Key gemappt
    -->
  <role 
    name="user"
    module="webfrap" >
    
    <!-- Standard Label Tag  -->
    <label>
      <text lang="de" >User</text>
      <text lang="en" >User</text>
    </label>
    
    <description>
      <text lang="de" >User Role</text>
      <text lang="en" >User Role</text>
    </description>
    
    <!--  
      Das globale Zugriffslevel
    -->
    <level>EMPLOYEE</level>
    
    <!--  
      Die Profile die eine Rolle zugewiesen bekommen hat
    -->
    <profiles>
      <profile name="default" />
    </profiles>
    
    <!--  
      Zugriffsrechte auf areas
    -->
    <access>
      <areas>
      
        <area name="daidalos_project" level="update" >
          
          <!-- Zeitliche Begrenzung von Rechten -->
          <period start="" end="" />
          
          <description>
            <text lang="de" >Beschreibung was die von der Rolle erwartet wird</text>
          </description>
          
          <references>
            <ref name="project_task" level="insert" >
              <ref name="task_employee" level="delete" ></ref>
            </ref>
            <ref name="employees" level="access" >
            </ref>
          </references>
          
        </area>
      </areas>
    </access>

  </role>
</roles>
<?php display_highlight( 'xml' ); ?>

