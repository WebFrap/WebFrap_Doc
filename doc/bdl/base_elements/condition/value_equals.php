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
    
    <!-- optionaler / ondemand negator -->
    <not />
    
  </condition>
</conditions>
<?php display_highlight( 'xml' ); ?>


## Example Code: SwitchCheck
<?php start_highlight(); ?>

!$row['project_category_access_key'] == 'product'

<?php display_highlight( 'php' ); ?>

Zugegeben, das sieht wenig aus, allerdings muss man bedenken, dass auch alle
für die checks nötigen tabellen dazu gejoint werden, sowie die nötigen felder
in die queries eingebunden werden. 

So betrachtet kommt also noch einiges an Code und logik dazu die eingespart wird.