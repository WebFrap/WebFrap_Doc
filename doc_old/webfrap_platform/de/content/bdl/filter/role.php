
<h1>Role Filter</h1>

<p>Benutzer können explizit Rollen auf einzellnen Datensätze zugewiesen bekommen.
Dieser Umstand kann zum Filtern von Datensätzen über Rollenzugehörigkeiten genutzt werden.</p>

<h3>Beispiel Code</h3>
<?php start_highlight(); ?>
<_..._>
  <ui>
    <list>
      <filter>
      
        <!-- Zeige Projekte auf denen ich die Rolle Staff habe -->
        <check type="role" name="my_project" >
        
           <control_able />
          
          <roles>
            <role name="staff" />
          </roles>
        </check>
      
        <!-- 
        Zeige Projekte die Kunden zugewiesen sind für welche ich
        die Rolle supporter habe 
        
        Die Rolle wir dann also in relation zum der referenz welche in
        Field angegeben wurde ausgelesen
        -->
        <check type="role" name="my_customer_project" field="id_customer" >
        
          <control_able />
          
          <roles>
            <role name="supporter" />
          </roles>
        </check>
        
        
        <!-- 
          In Rollen können auch Pfade definiert werden, wenn über
          Rollenzugehörigkeiten über eine Referenz hinaus gefilter werden soll.
          
          Lange Pfade beeinträchtigen jedoch die Performance
          
          Bie diesem Beispiel ist die Zugehörigkeit zur Rollen manager oder manager_deputy
          in Relation zum Datensatz aktuelle_entity.id_task>task.id_project>project.id_center>center
         -->
        <check 
          type="role" 
          max_level="delete" 
          field="id_center" >
        
          <roles>
            <role name="manager" />
            <role name="manager_deputy" />
          </roles>
          
          <path>id_task.id_project</path>
        
        </check>
        
      </filter>
    </list>
  </ui>
</_..._>
<?php display_highlight( 'xml' ); ?>