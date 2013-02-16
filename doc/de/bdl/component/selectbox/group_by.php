<h2>Selectbox Group By</h2>

<?php start_highlight(); ?>
<components>
  <component 
    type="selectbox"
    name="daidalos_rcs_node-by_type" 
    src="daidalos_rcs_node"  >

    <id name="rowid" />

    <order_by>
      <field name="access_key" />
    </order_by>
    
    <group_by attribute="id_repository"  >
      <field name="name" />
    </group_by>

    <fields>
      <field name="access_key" />
    </fields>

  </component>
</components>
<?php display_highlight( 'xml' ); ?>