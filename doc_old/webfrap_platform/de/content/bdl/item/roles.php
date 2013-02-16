

<h1>Roles</h1>


<label>Code Beispiel mit Integration</label>
<?php start_highlight(); ?>
<_...>
  <!-- 
    name:
    type:
    source:
    class:
   -->
  <item 
    name="roles" 
    type="role_list" 
    source="project_project"
    class="some_classname_key" >
    
    <area name="project_project" />
    
    <properties>
      <list_body height="medium" />
    </properties>
  
    <roles>
      <role name="manager_l3" >
        <constraints>
          <cardinality min="0" max="1" />
        </constraints>
        <access>
          <roles>
            <role name="pmo_admin" />
          </roles>
        </access>
      </role>
      
      <role name="manager_l3_deputy" >
        <constraints>
          <cardinality min="0" max="1" />
        </constraints>
        <access>
          <roles>
            <role name="manager_l3" />
          </roles>
        </access>
      </role>
      
      <role name="project_manager" ></role>
      <role name="project_manager_deputy" ></role>
      <role name="cmo" ></role>
      <role name="pmo_support" >
        <comment>Wird impliziet über die practice initial zugewiesen</comment>
      </role>
      <role name="staff" ></role>
    </roles>
  </item>
</_...>
<?php display_highlight( 'xml' ); ?>


<label>Code Beispiel mit Integration</label>
<?php start_highlight(); ?>
<managements>
  <management name="project_planning" src="project_project" >
    <ui>
      <form>
        <edit>
          <layout>
            <tabs>
              <body>
                <tab name="default" >
                  <label>
                    <text lang="en" >Roles</text>
                  </label>
                  <body>
                     
                    <item name="roles" type="role_list" source="project_project" >
                      <_...>
                      </_...>
                    </item>

                  </body>
                </tab>
              </body>
            </tabs>
          </layout>
        </edit>
      </form>
    </ui>
  </management>
</managements>
<?php display_highlight( 'xml' ); ?>