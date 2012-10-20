<h1>Index</h1>


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
      <concept name="index" >
        <name>
          <field name="name" />
        </name>
        <title>
          <field name="val1" />
          <field name="val2" />
        </title>
        <access_key>
          <field name="access_key" />
        </access_key>
        <description>
          <field name="description" />
        </description>
      </concept>
    </concepts>

  </entity>
</entities>
<?php display_highlight( 'xml' ); ?>