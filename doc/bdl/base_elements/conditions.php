<h1>Conditions</h1>

<p></p>

<label>Allgemeines Beispiel</label>
<?php start_highlight(); ?>
<_..._>
  <conditions>
    <condition name="a_role_check" type="has_role" >
      
      <!-- Negiert den Ausdruck -->
      <not />
      
      <!-- 
      Wenn break gesetzt wird, bricht die Prüfung an dieser Stelle ab.
      [[RÜCKGABE REGELUNG]]
      -->
      <break />
      
      <role name="role_name_to_check" />
      
      <area 
        name="project_project"
        relation="entity"
        accuracy="dataset"  />
    
    </condition>
  </conditions>
</_..._>
<?php display_highlight( 'xml' ); ?>