# Value equals 

Eine einfache == condition. 

## Interfaces

- Process
- SwitchCheck

## Example
<?php start_highlight(); ?>
<conditions>
	
  <condition type="value_equals" key="category" >
		
		<!-- Das attribute, name in der gewohnten pfad syntax -->
    <attribute 
      name="id_category.access_key" 
      value="product"  />
      
    <not />
    
  </condition>
</conditions>
<?php display_highlight( 'xml' ); ?>