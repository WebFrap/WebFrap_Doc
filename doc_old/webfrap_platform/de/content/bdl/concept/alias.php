<h1>Alias</h1>

<p>
  Bewirkt, dass eine Tabelle "tabellen_name"_alias erstellt wird.
  Diese hat ein Feld "name" und ein feld "id_".
</p>

<label>Der Konzept Knoten</label>
<?php start_highlight(); ?>
<entities>
  <entity name="name" >
    
    <concepts>
      <!--
        name: der Name des Alias
        field: optional, das Feld auf welchen sich der Alias bezieht.
          Wenn dieses Feld gesetzt wird, führt jede Änderung in diesem Feld
          zu der Erstellung eines neuen Aliaseintrags für die Tabelle
      -->
      <concept name="alias" field="name" />
    </concepts>

  </entity>
</entities>
<?php display_highlight( 'xml' ); ?>


<label>Der erzeugte Modell Knoten</label>
<?php start_highlight(); ?>
<entities>
  <entity name="{$name}_alias" >

    <description>
      <text lang="de" >Alias für die Entität {$name}</text>
      <text lang="en" >Alias for the Entity {$name}</text>
    </description>

    <attributes>
      
      <attribute name="name" type="text" size="120" >
        <display>
          <listing />
        </display>
      </attribute>
      
      <attribute name="id_{$name}" target="{$name}" >
      </attribute>
      
    </attributes>

  </entity>
</entities>
<?php display_highlight( 'xml' ); ?>