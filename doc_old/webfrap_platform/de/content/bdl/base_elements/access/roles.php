<h1>Roles</h1>


<?php start_highlight(); ?>
<actions>

  <!-- 
    Das Access Tag in den Actions unterscheidet sich von den Access Tags
    der Entities, Masken etc.
    
    Es werden lediglich Dinge angegeben auf welche geprüft werden soll.
    In den Entity / Maskten Tags werden hingegen informationen benötigt
    wie diese hier abgefragten Informationen geladen werden müssen / können (checks).
   -->
  <action name="name" >
  
    <!-- 
      Regeln des Zugriffs
     -->
    <access>
      
      <roles>
        <role name="" />
      </roles>
      
      <roles_somewhere>
        <role name="" />
      </roles_somewhere>
      
      <roles_explicit>
        <role name="" />
      </roles_explicit>
      
      <no_roles_explicit>
        <role name="" />
      </no_roles_explicit>
      
    </access>
  
  </action>
</actions>
<?php display_highlight( 'xml' ); ?>