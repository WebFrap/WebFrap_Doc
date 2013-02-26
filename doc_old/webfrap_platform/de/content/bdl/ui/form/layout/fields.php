
<h1>Fields</h1>

<p>Einbinden von Fields in CRUD Forms</p>

<label>Einfaches Einbinden eines Fields</label>
<?php start_highlight(); ?>
<_..._>
  <!--  ein einfaches Field, UI Daten werden dem Attribute auf der Entity entnommen -->
  <field name="field_name" />
  
  <!--  Einbinden eines Attributes aus einer One To One Reference -->
  <field name="ref_field" src="reference_name" />
</_..._>
<?php display_highlight( 'xml' ); ?>


<label>UI Element Customizing</label>
<?php start_highlight(); ?>
<_..._>
  
  <!-- Das UI Element ändern -->
  <field name="id_category" >
    <ui_element type="selectbox"  name="not_the_same_as_in_attribute_defined" />
  </field>
  
  <!-- Field auf Readonly setzen -->
  <field name="id_type" >
    <ui_element type="selectbox" >
    
      <!-- 
        Setzen auf Readonly 
        Feld kann per Javascript geändert werden, aber nicht per Hand
        Wird gespeichert.
        Vorsicht, leicht zu manipulieren Wert muss auf integrität geprüft werden
        vor dem speichern
      -->
      <readonly />
    </ui_element>
  </field>
  
  <!-- Field auf Required setzen -->
  <field name="id_type" >
    <ui_element type="selectbox" >
    
      <!-- 
        Setzen auf Required
        Feld wird zum abspeichern benötigt
       -->
      <required />
    </ui_element>
  </field>
  
  <!-- Field auf Disabled setzen -->
  <field name="id_type" >
    <ui_element type="selectbox" >
    
      <!-- 
        Feld wird nur angezeigt. Kann nicht geändert werden und
        wird auch nicht mitgespeichert.
       -->
      <disabled />
    </ui_element>
  </field>
  
  <!-- Field auf Unique setzen -->
  <field name="id_type" >
    <ui_element type="selectbox" >
    
      <!-- 
        Werte welche hier eingegeben werden dürfen in diesem Feld auf keinem
        anderen Datensatz in dieser Tabelle existieren.
       -->
      <unique />
    </ui_element>
  </field>
  
</_..._>
<?php display_highlight( 'xml' ); ?>


<label>Zugriffsberechtigungen auf Fieldebene</label>
<?php start_highlight(); ?>
<_..._>
  <!-- Id Customer für alle auser company_manager und crm_staff auf readonly setzen -->
  <field name="id_customer" >
   <access>
      <checks>
       <check type="role" >
         <roles>
           <role name="company_manager" ></role>
           <role name="crm_staff" ></role>
         </roles>
         <set>
           <readonly />
         </set>
       </check>
     </checks>
    </access>
  </field>
</_..._>
<?php display_highlight( 'xml' ); ?>


<label>Setzen von Default Werten</label>
<?php start_highlight(); ?>
<_..._>
  <!--  ein einfaches Field, UI Daten werden dem Attribute auf der Entity entnommen -->
  <field name="field_name" >
    <default>Standard Wert</default>
  </field>

</_..._>
<?php display_highlight( 'xml' ); ?>


<label>Setzen von Default Werten in Referenzen (Selectbox/Window) </label>
<?php start_highlight(); ?>
<_..._>
  <!--  ein einfaches Field, UI Daten werden dem Attribute auf der Entity entnommen -->
  <field name="id_name" >
    <default target="project_activity_category" >product</default>
  </field>

</_..._>
<?php display_highlight( 'xml' ); ?>

