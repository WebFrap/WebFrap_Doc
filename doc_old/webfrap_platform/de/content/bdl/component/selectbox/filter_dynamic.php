<h2>Selectbox Dynamic Filter</h2>

<?php start_highlight(); ?>
  <components>
    
    <component 
      type="selectbox" 
      name="project_category-dyn_filter" 
      src="project_category"  >

      <id name="rowid" />
      
      <variant name="dyn_filter" key="access_key" />
      
      <order_by>
        <field name="name" />
      </order_by>

      <fields>
        <field name="name" />
      </fields>
      
    </component>
    
    <component 
      type="selectbox"
      name="project_phase-dyn_filtered" 
      src="project_phase"  >

      <id name="rowid" />

      <order_by>
        <field name="name" />
      </order_by>

      <fields>
        <field name="name" />
      </fields>
      
      <dyn_filter name="id_category" key="access_key" />

    </component>
    
  </components>
<?php display_highlight( 'xml' ); ?>