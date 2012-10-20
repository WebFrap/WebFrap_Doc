<h1>Data Profile</h1>

<p>
Über Datenprofile können Entites durch anderen Entities erweitert werden.
Es technisch keine Veerbung, hat jedoch ähnliche Eigenschaften.

</p>

<label>Beispiel Code</label>
<?php start_highlight(); ?>
<entities>

<!-- 
  Diese Entität erweitert die Entität enterprise_company um ein neues 
  Company Profil

 -->
<entity 
  name="logistics_company" >
  
  <!-- 
    Wenn das in field angegeben Attribut nicht existiert wird automatisch
    ein Attribut mit den namen aus Field und dem target aus entity angelegt.
    
    Wenn das Field existiert und ein anderes target hat wird eine Warning ausgegeben
    und das target wird als Tippfehler interpretiert und überschrieben.
    
    Es ein andere Target wird hier nicht unterstützt, daher gibt es nur diese
    Eine Lösung um das zu fixen und das kann das System dann auch aleine.
   -->
  <data_profile entity="enterprise_company" field="id_company" >
  
    <!-- 
      Mit der Kardinality wird angegeben wieviele Profile es pro Datensatz
      geben kann.
      
      Min: 0 oder Zahl. Wenn die Zahl MIN Größer als 0 ist werden automatisch Anzahl MIN Profile erstellt
        Standard ist 0
        
      Max: * oder Zahl. Es können nicht mehr als die angegebene Zahl an Profilen angelegt werden
        * bedeutet, dass beliebig viele Profile pro Datensatz erstellt werden können
        Standard ist *
     -->
    <cardinality min="" max="" />
  </data_profile>
  
  <label>
    <text lang="de" >Logistik Unternehmen</text>
  </label>
  
  <description>
    <text lang="de" >Ist ein Daten Profil für eine Firma</text>
  </description>
  
  <attributes>
    
    <!-- über diese referenz wird das profil verbunden -->
    <attribute name="id_company" target="enterprise_company" />

  </attributes>

</entity>

</entities>
<?php display_highlight( 'xml' ); ?>