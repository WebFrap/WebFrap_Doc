
<h1>Subchecks in Filtern</h1>

<p>
Komplexe Filter können durch Subchecks in einen einzigen addresierbaren Filter
vereint werden.
</p>

<h3>Hier wäre ein super Platz für ein Codebeispiel</h3>
<?php start_highlight(); ?>
<_..._>
  <ui>
    <list>
      <filter>
      
        <check type="role" name="my_projects" >
        
          <control_able />
          
          <roles>
            <role name="owner" />
            <role name="staff" />
          </roles>
          
          <subchecks>
            <check type="role" name="my_project_customer" field="id_customer" >
            
              <roles>
                <role name="manager" />
                <role name="supporter" />
              </roles>
            
            </check>               
          </subchecks>
          
        </check>
        
      </filter>
    </list>
  </ui>
</_..._>
<?php display_highlight( 'xml' ); ?>