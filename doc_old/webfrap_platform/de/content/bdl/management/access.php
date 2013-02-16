

<h1>Zugriffsberechtigungen auf den Management Nodes verwalten</h1>

<p>Es gibt eine ganze reihe von Modellierungsmöglichkeiten zu den Rechten
auf den Management Nodes.</p>

<h2>Rechte Erben</h2>

<p>Standardmäßig wird für jede Maske eine eigene SecArea und damit eine
eigen ACL Verwaltung erstellt. In vielen Fällen wird jedoch für eine 
Maske keine eigene Rechteverwaltung benötigt. In diesem Fall kann
die Maske einfach die SecArea eines andere Management nodes, oder dem Default
Management Node verwenden. Sie beerbt ihn einfach.</p>

<label>Vererbung</label>
<?php start_highlight(); ?>
<management name="name" src="name" >

  <access 
    inherit="management_name"  >
  </access>

</management>
<?php display_highlight( 'xml' ); ?>

<p>Wenn eine Maske die Rechte der Entity verwenden soll wird bei <span class="bdl_attribute" >inherit</span> einfach
der Wert <span class="key_word" >entity</span> eingetragen.</p>


<h2>Rechte erweitern</h2>
<p>
Neben der Vererbung gibt es auch die Möglichkeit eine Maske einfach
zu erweitern.
Anders als bei der Vererbung wird ein eigenes Rechtemanagement angelegt. ( Jedoch nur
dann wenn nicht zusätzlich auch noch die Rechte von einer anderen Maske geerbt werden. )
Die Idee ist folgende: eine der beiden Masken ( pinzipiell ist egal welche das ist ist. )
enthält die Standardberechtigungen für alle User. Über die 2te Maske können diese Rechte dann
erweitert werden.
</p>

<p>Ein Beispiel um das Ganze näher zu verdeutlichen. In einem Ideemanagement Tool, dass
mehrere Masken für Ideen hat dürfen User in einer Maske Einträge erstellen, in allen anderen
aber nur lesen. Jetzt bietet es sich an in der Maske mit den Insertrechten einfach
die Standardmaske zu erweitern. Nun ist es möglich allen Usern Insertrechte zu geben, 
ohne die Rechte für diese Maske pflegen zu müssen, da die Zuordnung weiterhin
über die Standardmaske welche ja erweitert wird, vorgenommen werden kann.
</p> 

<?php start_highlight(); ?>
<management name="name" src="name" >

  <access 
    extend="other_management_name"  >
  
  </access>

</management>
<?php display_highlight( 'xml' ); ?>

<h2>Rechte Typen</h2>
<p>
Für diverse Management Nodes wird keine eigene ACL logik benötigt.
Dieser können über core_data zusammengefasst werden.
</p>


<?php start_highlight(); ?>
<management name="name" src="name" >

  <access 
    type="core_data"  >
  
  </access>

</management>
<?php display_highlight( 'xml' ); ?>


<h2>Acl Checks</h2>


<h3>Role Check</h3>

<label>Rollen Check ohne Pfad</label>
<?php start_highlight(); ?>
<management name="name" src="name" >

  <access>
    <checks>
    
      <!-- ohne Pfad -->
      <check 
        type="role" 
        max_level="delete" 
        field="id_category" >
      
        <roles>
          <role name="manager_l2" />
        </roles>
        
        <set access_level="delete" ref_level="delete" >
          <level name="project_employee" level="delete" />
        </set>
        
      </check>
    </checks>
  </access>

</management>
<?php display_highlight( 'xml' ); ?>


<label>Rollen Check mit Pfad</label>
<?php start_highlight(); ?>
<management name="name" src="name" >

  <access>
    <checks>

      <!-- mit Pfad -->
      <check
        type="role"
        max_level="delete"
        field="id_category" >
      
        <roles>
          <role name="manager_l2" />
        </roles>
        
        <path>id_entity1.id_entity2</path>
        
        <set access_level="delete" ref_level="delete" >
          <level name="project_employee" level="delete" />
        </set>
        
      </check>
    </checks>
  </access>

</management>
<?php display_highlight( 'xml' ); ?>

<h2>Sonstige</h2>

<label>Komplexes Beispiel</label>
<?php start_highlight(); ?>
<management name="name" src="name" >


  
  <!-- 
    Access Level ist der Wert der benötigt wird um auf etwas zuzugreifen,
    z.B. access, insert, update.. etc
    
    User Level ist das Persönliche Level des Benutzers.
  
    Für den Zugriff genügt es eine von Beiden bedingungen zu erfüllen.
    
    access level:
      DENIED  = 0   Keine zugriffsrechte nötig
      LISTING = 1   Listenberechtigung
      ACCESS  = 2   Leseoperationen auf einem Datensatz
      ASSIGN  = 4   Es dürfen Referenzen auf diesen Datensatz erstellt werden
      INSERT  = 8   Neue Einträge erstellen
      UPDATE  = 16  Vorhandene Einträge anpassen
      DELETE  = 32  Löschberechtigung
      PUBLISH = 64  Sichbarleit des Datensatzes darf angepasst werden ( nur für bestimmte kontexte benötigt )
      MAINTENANCE = 128  Zugriff auf die Metaebene, imports, exports, statistiken etc
      ADMIN       = 256  Voller Zugriff, kann berechtigungen vergeben


    Mit Inherit kann angegeben werden, dass eine Maske ihre Berechtigungen
    von einer anderen Maske erbt und keine Eigenen ACLs pflegt
      mod-fuu/mgmt-fuu/mgmt-fuu_zzy für management fuu_bar
    
    Mit "extend" wird eine zusätzeliche Maske eingebunden bei der 
      Abfrage der Berechtigungen
      z.B  mod-fuu/mgmt-fuu/mgmt-fuu_zzy>mgmt-fuu_bar für management fuu_bar
    
   -->
  <access 
    access_level="insert" 
    user_level="l2" 
    inherit="management_name" 
    extend="other_management_name"  >
  

    <!-- 
      Direktzugriff für bestimmte Rollen erlauben.
      
      Wenn Roles in management, oder entity nodes verwendet wird,
      dann werden mit diesen informationen datensätze erstellt und on
      deploy mit dem system gesynct.
      
      Bei Buttons wird nur auf die zugehörigkeit der gruppe geprüft
     -->
    <roles>
      <role name="admin" access_level="ADMIN" />
    </roles>
    
    <!-- 
      Profil spezifische Zugriffskontrolle.
      
      Eigentlich haben Profile nicht direkt mit der Zugriffskontrolle zu tun.
      In diesem Fall werden die Profile verwendet um detailierter zu testen.
      
     -->
    <profiles>
    
      <profile name="maintenance" >
        
        <!-- 
          Ein Check auf einen 
         -->
        <check type="rule" ><![CDATA[            
          name.id_project mask 'project_project_mask_whatever' level 'admin'
        ]]></check>
        
        <check 
          type="role" 
          max_level="delete" 
          field="id_category" >
        
          <roles>
            <role name="manager_l2" />
          </roles>
          
          <set access_level="delete" ref_level="delete" >
            <level name="project_employee" level="delete" />
          </set>
          
        </check>
        
        <check 
          type="role" 
          max_level="delete" 
          field="id_category" >
        
          <roles>
            <role name="manager_l2" />
          </roles>
          
          <path>id_entity1.id_entity2</path>
          
          <set access_level="delete" ref_level="delete" >
            <level name="project_employee" level="delete" />
          </set>
          
        </check>
        
        
      </profile>
    
    </profiles>
  
  </access>


</management>
<?php display_highlight( 'xml' ); ?>