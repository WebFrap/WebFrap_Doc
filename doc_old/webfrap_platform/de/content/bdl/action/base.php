<h2>Action</h2>

<p>
Über die <span class="bdl" >action</span> nodes können Aktions hinzugefügt werde
welche direkt im Code eingebunden oder über einen Service aufgerufen werden können.
</p>

<p>
Actions sind dazu gedacht Handgeschrieben Code einfach in das System zu integrieren
ohne den generierten Code dazu anpassen zu müssen.
</p>


<?php start_highlight(); ?>
<actions>
  <action 
    name="daidalos_backup_project_database" 
    type="dataset"
    source="daidalos_project"
    module="daidalos" >

    <service>false</service>
    
    <description>
      <text lang="de" >
       Backup für die Datenbank des Projektes erstellen
      </text>
    </description>

  </action>
</actions>
<?php display_highlight( 'xml' ); ?>

<p>Erklärung der Attribute:</p>

<ul class="doc_tree" >
  <li><span class="attribute" >name</span> Domainname der Action</li>
  <li><span class="attribute" >type</span> Type ist auch gleichzeitig das Interface <a href="#interface-types" >(Siehe Interface Typen)</a>, der Haupt Action</li>
  <li><span class="attribute" >source</span> Name des <a href="content.php?page=bdl.management.base" target="main" class="bdl" >management</a> 
    nodes auf welchen die Action sich bezieht</li>
  <li><span class="attribute opt" >module</span> Das Module zu welchen die Action gehört. Ist theoretisch
    optional wird jedoch benötigt wenn der erste Teil des Namens vom Modulnamen abweicht.</li>
</ul>

<p>Über <span class="bdl" >service</span> wird definiert ob ein MVC Service zum
triggern der Action erstellt werden soll. Standardmäßig ist das der Fall, kann
jedoch mit dem Wert <span class="value" >false</span> unterbunden werden.
</p>


<h3 id="interface-types" >Interface Typen</h3>

<p>Es gibt eine reihe verschiedenen Interfaces</p>

<ul class="doc_tree" >
  <li><span class="key_word" >plain</span> Wird ohne Parameter aufgerufen 

<?php start_highlight(); ?>
  /**
  * @param $context Context
  * @param $env Base
  */
  public function toCall( $context, $env )
  {
    // do some stuff
  }
<?php display_highlight( 'php' ); ?>
  
  </li>
  <li><span class="key_word" >dataset</span> Es wird nur der aktive Datensatz übergeben
  
<?php start_highlight(); ?>
  /**
  * @param $entity Entity
  * @param $context Context
  * @param $env Base
  */
  public function toCall( Entity $entity, $context, $env )
  {
    // do some stuff with the entity
  }
<?php display_highlight( 'php' ); ?>
  
  </li>
  <li><span class="key_word" >management_dataset</span> Es wird nur der aktive Datensatz übergeben
  
<?php start_highlight(); ?>
  /**
  * @param $entity Entity
  * @param $domainNode DomainNode
  * @param $context Context
  * @param $env Base
  */
  public function toCall( Entity $entity, $domainNode, $context, $env )
  {
    // do some stuff with the entity
  }
<?php display_highlight( 'php' ); ?>
  
  </li>
  <li><span class="key_word" >entity</span> Es wird nur der Name einer Datenquelle übergeben.
    Wird in der Regel verwendet, wenn die Action nicht relativ zu einem Datensatz
    sonder zu einer Tabelle / anderen Datenquelle aufgerufen wird
  
<?php start_highlight(); ?>
  /**
  * @param $tableName string "in_lower_case"
  * @param $context Context
  * @param $env Base
  */
  public function toCall( $tableName, $context, $env )
  {
    // do some stuff on the Table
  }
<?php display_highlight( 'php' ); ?>
    
  </li><li><span class="key_word" >management</span> Der Key der aktuellen Domain.
    Diese Funktion wird im Kontext eines management nodes aufgerufen.
    Sie betrifft nur Datensätze die innerhalb der Sichtbarkeit der definierten Filter
    dieser Maske liegen.
  
<?php start_highlight(); ?>
  /**
  * @param $ids array Liste mit IDs von Datensätzen
  * @param $domainKey string "in_lower_case" 
  * @param $context Context
  * @param $env Base
  */
  public function toCall( $ids, $domainKey, $context, $env )
  {
    // do some stuff on the Table
  }
<?php display_highlight( 'php' ); ?>
    
  </li>
  <li><span class="key_word" >entity_list</span> Der Key der aktuellen Domain.
    Diese Funktion wird im Kontext eines management nodes aufgerufen.
    Sie betrifft nur Datensätze die innerhalb der Sichtbarkeit der definierten Filter
    dieser Maske liegen.
  
<?php start_highlight(); ?>
  /**
  * @param $ids array Liste mit IDs von Datensätzen
  * @param $domainKey string "in_lower_case" 
  * @param $context Context
  * @param $env Base
  */
  public function toCall( $ids, $table, $context, $env )
  {
    // do some stuff on the Table
  }
<?php display_highlight( 'php' ); ?>
    
  </li>
  <li><span class="key_word" >management_list</span> Der Key der aktuellen Domain.
    Diese Funktion wird im Kontext eines management nodes aufgerufen.
    Sie betrifft nur Datensätze die innerhalb der Sichtbarkeit der definierten Filter
    dieser Maske liegen.
  
<?php start_highlight(); ?>
  /**
  * @param $ids array Liste mit IDs von Datensätzen
  * @param $domainKey string "in_lower_case" 
  * @param $context Context
  * @param $env Base
  */
  public function toCall( $ids, $domainKey, $context, $env )
  {
    // do some stuff on the Table
  }
<?php display_highlight( 'php' ); ?>
    
  </li>
  <li><span class="key_word" >entity_ref</span> 
  
<?php start_highlight(); ?>
  /**
  * @param $ids array Liste mit IDs von Datensätzen
  * @param $domainKey string "in_lower_case" 
  * @param $context Context
  * @param $env Base
  */
  public function toCall( $refId, $context, $env )
  {
    // do some stuff on the Table
  }
<?php display_highlight( 'php' ); ?>
    
  </li>
  <li><span class="key_word" >management_ref</span> 
  
<?php start_highlight(); ?>
  /**
  * @param $refId int die ID des Datensatzes auf welchen referenziert wird
  * @param $domainKey string "in_lower_case" 
  * @param $context Context
  * @param $env Base
  */
  public function toCall( $refId, $domainKey, $context, $env )
  {
    // do some stuff on the Table
  }
<?php display_highlight( 'php' ); ?>
    
  </li>
  <li><span class="key_word" >entity_ref_dset</span> 
  
<?php start_highlight(); ?>
  /**
  * @param $ids array Liste mit IDs von Datensätzen
  * @param $domainKey string "in_lower_case" 
  * @param $context Context
  * @param $env Base
  */
  public function toCall( $refId, $entity, $context, $env )
  {
    // do some stuff on the Table
  }
<?php display_highlight( 'php' ); ?>
    
  </li>
  <li><span class="key_word" >management_ref_dset</span> 
  
<?php start_highlight(); ?>
  /**
  * @param $refId int die ID des Datensatzes auf welchen referenziert wird
  * @param $domainKey string "in_lower_case" 
  * @param $context Context
  * @param $env Base
  */
  public function toCall( $refId, $domainKey, $entity, $context, $env )
  {
    // do some stuff on the Table
  }
<?php display_highlight( 'php' ); ?>
    
  </li>
  <li><span class="key_word" >process</span> Es werden die aktive Entity und eine Prozessintstanz übergeben
  
<?php start_highlight(); ?>
  /**
  * @param $process Process
  * @param $entity Entity
  * @param $context Context
  * @param $env Base
  */
  public function toCall( $process, $entity, $context, $env )
  {
    // do some stuff on the Table
  }
<?php display_highlight( 'php' ); ?>
  </li>
</ul>


<h3>Action mit Methoden</h3>

<?php start_highlight(); ?>
<actions>
  <action 
    name="daidalos_backup_database" 
    type="dataset"
    source="daidalos_project"
    module="daidalos" >
    
    <interface name="entity" />
    
    <service>false</service>
    
    <description>
      <text lang="de" >
       Backup für die Datenbank des Projektes erstellen
      </text>
    </description>
    
    <methodes>
      <method name="" >
        <interface />
        <access></access>
      </method>
    </methodes>

  </action>
</actions>
<?php display_highlight( 'xml' ); ?>

<h3>Verwendung von Actions</h3>

<p>Actions können direkt als <a href="content.php?page=bdl.management.events" target="main" >Events</a> 
oder per Service aufgerufen werden.</p>

<h4>Einige Codebeispiele</h4>

<h5>Aus dem <a href="content.php?page=bdl.menu.base" class="bdl" target="main" >menu</a></h5>
<?php start_highlight(); ?>
<menus>
  <subtree name="some_menu_subtree" >
    <body>
      
      <node name="some_node"  >
        <icon src="control/execute.png" alt="trigger backup"  />
        
        <!-- ENTWEDER!!! direkt über den Link -->
        <action href="ajax.php?c=Daidalos.BackupDatabase.trigger"  />
        
        <!-- ODER!!! über den Namen -->
        <action trigger="daidalos_backup_database"  />
        
      </node>

    </body>
  </subtree>
</menus>
<?php display_highlight( 'xml' ); ?>