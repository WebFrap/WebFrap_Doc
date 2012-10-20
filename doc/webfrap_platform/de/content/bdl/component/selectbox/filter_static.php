<h1>Selectbox Static Filter</h1>

<p>
Es ist möglich die Werte in der Selectbox bei Bedarf zu filtern.
Dazu stehen eine ganze Reihe von Filtervarianten zur Verfügung.
</p>

<h2>Beispiel Hardcodierter Filter</h2>

<p>Die einfachste Variante sind Hardcodierte Filter:</p>

<?php start_highlight(); ?>
  <components>
    <component 
      type="selectbox" 
      name="project_category_filter" 
      src="project_category"  >

      <!-- sonstige tags siehe: selectbox  -->
      
      <!-- Statische Filter  -->
      <filter>
        <check type="value" field="flag_archived" >
          <!-- Mit Not kann der Filter negiert werden  -->
          <not />
          <!-- Der Wert mit welchem gefiltert werden soll + Operator -->
          <value operator="=" >t</value>
        </check>
      </filter>
     

    </component>
  </components>
<?php display_highlight( 'xml' ); ?>

<h3>Liste der Operatoren</h3>

<p>
Der Standard Operator welcher verwendet wird wenn kein Operator auf Value
deklariert wird ist "=".
</p>

<ul class="doc_tree" >
  <li>'bigger'   : '>'</li>
  <li>'max'      : '<='</li>
  <li>'smaller'  : '<'</li>
  <li>'equals'   : '='</li>
  <li>'min'      : '>='</li>
  <li>'like'       : 'like'</li>
  <li>'same'       : 'ilike'</li>
  <li>'start_with' : 'like'</li>
  <li>'end_with'   : 'like'</li>
  <li>'contains'   : 'like'</li>
  <li>'>'        : '>'</li>
  <li>'<='       : '<='</li>
  <li>'<'        : '<'</li>
  <li>'='        : '='</li>
  <li>'>='       : '>='</li>
  <li>'like'     : 'like'</li>
  <li>'ilike'    : 'ilike'</li>
</ul>

<h2>Beispiel mit Variablen / Parametern</h2>

<p>Es ist jedoch auch möglich Variablen und Parameter in die Filter zu integrieren:</p>

<?php start_highlight(); ?>
<components>
  
  <component 
    type="selectbox"
    name="daidalos_rcs_node-by_type" 
    src="daidalos_rcs_node"  >
    
    <!-- sonstige tags aus platzgründen weggelassen  -->
    
    <filter>
   
      <params>
        <param name="type" />
      </params>
      
      <!-- Pfad check, wenn der Wert nicht auf der src Entity liegt
      sonder auf einer referenzierten Entity -->
      <check type="path" >
       <code>
daidalos_rcs_node.id_repository.id_arch_type.access_key == @$type
       </code>
      </check>
      
      <!-- Pfad check, wenn der Wert nicht auf der src Entity liegt
      sonder auf einer referenzierten Entity -->
      <check type="value" field="id_type" >
        <value type="param" operator="=" >type</value>
      </check>
      
      
    </filter>


  </component>
  
</components>
<?php display_highlight( 'xml' ); ?>

<p>Wird später wie folgt eingebunden:</p>

<?php start_highlight(); ?>
<entities>
  <entity>
    <attributes>
        
      <!-- 
        Doppeltes Einbinden der Selectbox mit jeweils unterschiedlichen Parametern.
        Wichtig: wenn 2mal die gleiche Selectbox eingebunden ist muss auf dem Attribute
        ein "key" definiert werden, sonst kommt es zwischen den beiden UI Elementen
        zu Namenskonflikten
      -->
        
      <attribute name="id_gateway" target="daidalos_rcs_node" key="gateway" >
        <uiElement type="selectbox" name="daidalos_rcs_node-by_type" >
          <params>
            <!-- Parameter mit dem oben deklarierten Namen type:
              und dem Value Gateway.
             -->
            <param name="type" value="gateway" />
          </params>
        </uiElement>
      </attribute>
      
      <attribute name="id_wgt" target="daidalos_rcs_node" key="wgt" >
        <uiElement type="selectbox" name="daidalos_rcs_node-by_type" >
          <params>
            <!-- 
              In der gleichen Entity die gleiche Selectbox nur mit  
              anderem Filter key
            -->
            <param name="type" value="wgt" />
          </params>
        </uiElement>
      </attribute>
  
    </attributes>
  </entity>
</entities>
<?php display_highlight( 'xml' ); ?>


<h2>Reference Filter</h2>

<p>Reference Filter sind sehr spezielle Filter über welche Einträge in Relation
zu Referenzen auf dem Datensatz gefiltert werden können. Es werden also
nur Datensätze angezeigt die in einer definierten Relation zu dem aktuellen
Datensatz stehen. ( Bei not nur solche ohne Referenz )
</p>

<?php start_highlight(); ?>
<components>
  
  <component 
    type="selectbox"
    name="daidalos_rcs_node-by_type" 
    src="daidalos_rcs_node"  >
    
    <!-- sonstige tags aus platzgründen weggelassen  -->
    
    <filter>
   
      <params>
        <param name="id_project" />
      </params>
      
      <!-- 
      in key muss der name einer existierenden ref auf Datenquelle der 
      Selectbox, in diesem Fall also: daidalos_rcs_node sein.
      
      Dadurch kann die Selectbox natürlich auch nur noch in Masken eingebunden
      werden welche auf das target der referenz verweisen.
      In diesem fall per id_project auf eine projekt entity.
      -->
      <check type="ref" key="project" ></check>
      
    </filter>


  </component>
  
</components>
<?php display_highlight( 'xml' ); ?>


<p>Im Code eingebunden sieht das ganze dann so aus:</p>

<?php start_highlight(); ?>
<entities>
  <entity name="daidalos_project" >
    <attributes>
        
      <attribute name="id_gateway" target="daidalos_rcs_node" key="gateway" >
        <uiElement type="selectbox" name="daidalos_rcs_node-by_type" >
          <params>
            <!-- Parameter mit dem oben deklarierten Namen und  
            name: bei bdl wird mit benamten Parametern gearbeitet
                  Die Reihenfolge ist nicht relevant
            type: self also sich selbst
             -->
            <param name="id_project" type="self" />
            
            <!-- 
              Wenn ein Attribute übergeben werden soll sieht die Syntax wie
              folgt aus:
             -->
            <param name="id_project" type="field" attribute="id_project" />
            
          </params>
        </uiElement>
      </attribute>

    </attributes>
  </entity>
  
  <!-- Die daidalos_rcs_node entity mit besagter reference -->
  <entity name="daidalos_rcs_node" >
    <references>
    
      <!--  
      id_project bzw der übergeben Wert müssen auf ein Daidalos
      Projekt verweisen. 
      
      So wird sicher gestellt, dass in der Selectbox nur noch
      daidalos_rcs_node Datensätze angezeigt werden die 
      auf das gleiche Projekt verweisen wie die einbindente Entity
      -->
      <ref name="project" binding="free" relation="manyToMany" >
        <label>
          <text lang="en" >Project</text>
        </label>
        <src name="daidalos_rcs_repository" id="id_rcs_node" />
        <connection name="daidalos_project_repository" />
        <target name="daidalos_project" id="id_project" />
      </ref>
      
    </references>
  </entity>
  
</entities>
<?php display_highlight( 'xml' ); ?>

