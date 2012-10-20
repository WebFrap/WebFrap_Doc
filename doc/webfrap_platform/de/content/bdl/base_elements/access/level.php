<h2>Access Level</h2>

<p>
Auf Entity und Management Ebene gibt es 2 Varianten für die Levelangabe.
Variante 1 definiert das für den Benutzer nötige Zugriffslevel um die Maske
überhaupt sehen zu dürfen.<br />
Variante 2 definiert die Standard Werte welche auf den Security Areas
gesetzt werden.<br />
</p>

<p>
Der Unterschied zwischen Variante 1 und 2 ist, dass Variante 1 hardcodiert
im Code abgelegt wird, Variante 2 allerdings nur Werte in die Datenbank 
schreibt welche über die Applikation geändert werden können,
</p>


<label>Variante 2: Definieren der Zugriffsberechtigungen</label>
<?php start_highlight(); ?>
<_..._>
  <action name="some_action" >
    
    <!--  
      user_level (optional): Das User Level des aktiven Users
      access_level (optional): Das zur Security Area relative access level
      max_level (optional): In einigen Fällen werden Buttons ab einem Bestimmten Level 
        nicht mehr benötigt z.B show wir nicht benötigt, wenn editrechte vorhanden sind
      access_path (optional): Wenn der relative Pfad vom Standard Pfad abweicht
    -->
    <access 
      user_level="superior" 
      access_level="insert"
      max_level="delete"
      access_path="mod-project/mgmt-project_project/mgmt-project_plannning"
    />
  
  </action>
</_..._>
<?php display_highlight( 'xml' ); ?>


<label>Variante 2: Definieren der Zugriffsberechtigungen</label>
<?php start_highlight(); ?>
<entities>
  <entity name="name" >
    <access>
      
      <!-- 
        Über die Levels kann das Zugriffslevel definiert werden, welches
        nötig ist um auf eine Maske mit bestimmten Rechten zu kommen
       -->
      <levels>
        <listing></listing>
        <access></access>
        <assign></assign>
        <insert></insert>
        <update></update>
        <delete></delete>
        <publish></publish>
        <maintenance></maintenance>
        <admin></admin>
        
        <ref_listing></ref_listing>
        <ref_access></ref_access>
        <ref_assign></ref_assign>
        <ref_insert></ref_insert>
        <ref_update></ref_update>
        <ref_delete></ref_delete>
        <ref_publish></ref_publish>
        <ref_maintenance></ref_maintenance>
        <ref_admin></ref_admin>
      </levels>
      
    </access>
  
  </entity>
</entities>
<?php display_highlight( 'xml' ); ?>