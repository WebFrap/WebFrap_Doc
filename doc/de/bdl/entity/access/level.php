<h2>Access Level</h2>

<ul class="doc_tree" >
  <li><span>DENIED: 0</span>, Kein Zugriff</li>
  <li><span>LISTING: 1</span>, Darf eine Liste der Datensätze sehen, kann jedoch nicht die Datensätzen zum lesen öffnen</li>
  <li><span>ACCESS: 2</span>, Lesender Zugriff auf den Datensatz ist gestattet, es dürfen jedoch keine Änderungen vorgenommen werden</li>
  <li><span>ASSIGN: 4</span>, Der Benutzer darf diesen Datensatz / Datensätze aus dieser Datenquelle verlinken</li>
  <li><span>INSERT: 8</span>, Der Benutzer darf neue Datensätze erstellen, wenn auf einem Datensatz innerhalb eines Baumes, dürfen neue Unterknoten erstellt werden</li>
  <li><span>UPDATE: 16</span>, Der Benutzer darf bestehend Datensätze verändern</li>
  <li><span>DELETE: 32</span>, Die Lizenz zum töten, Pardon löschen</li>
  <li><span>PUBLISH: 64</span>, Es dürfen Datensätze freigeschaltet/publiziert werden. Findet in allen Szenarien Anwendung in denen Daten vor dem "Einsatz" geprüft werden müssen</li>
  <li><span>MAINTENANCE: 128</span>, Zugriff auf die Wartungsfunktionalität, Logs, Fehlermeldungen, Import/Export Funktionalität und sonstige vergleichbare Elemente</li>
  <li><span>ADMIN: 256</span>, Vergabe von Berechtigungen and andere Benutzer</li>
</ul>

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