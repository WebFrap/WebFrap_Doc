<h2>Entity</h2>

<p>
Über die Entities wird die Datenstruktur beschrieben.<br />
Die Entitynodes sind das Rückrad, oder besser noch das Gehirn des ganze Modells.
Ohne die Entity Nodes geht praktisch gar nichts, da praktisch alle anderen Modellknoten
in irgendeiner Form auf einen oder mehrer Entity Knoten referenzieren.
</p>


<label>Beispiel Desktop</label>
<img src="./images/bdl/entity/dbms_overview.png" alt="Entity" />


<label>Codebeispiel Gesamtübersicht</label>
<?php start_highlight(); ?>
<entities>

  <entity name="name" >
    
    <label>
      <text lang="de" >Example</text>
    </label>
    
    <description>
      <text lang="de" >Example</text>
    </description>
    
    <info>
      <text lang="de" >Example</text>
    </info>
    
    <ui></ui>
    
    <access></access>
    
    <processes></processes>
    
    <data_profile></data_profile>
    
    <semantic></semantic>
    
    <head></head>
    
    <events></events>
    
    <concepts></concepts>
    
    <categories></categories>
    
    
    <properties></properties>
    
    <attributes></attributes>
    
    <references></references>
      
  </attributes>
  

  </entity>
</entities>
<?php display_highlight( 'xml' ); ?>