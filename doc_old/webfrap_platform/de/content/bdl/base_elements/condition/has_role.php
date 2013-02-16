<h1>Has Role</h1>

<p>Prüfen ob der aktive User eine bestimmte Rolle hat.</p>

<label>Example</label>
<?php start_highlight(); ?>
<_..._>
  <conditions>
    <condition name="a_role_check" type="has_role" >
    
      <role name="role_name_to_check" />
      
      <area 
        name="project_project"
        relation="entity"
        accuracy="dataset"  />
    
    </condition>
  </conditions>
</_..._>
<?php display_highlight( 'xml' ); ?>