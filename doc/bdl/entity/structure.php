<h1>Structure</h1>

<p>Im folgenden wird besschrieben wie ein Entity Node aufgebaut ist.</p>


<?php start_highlight(); ?>
<entities>
  
  <!--  
  name: Der Name der Entity
    Muss unique sein
    Folgt den Muster mod_domain{_subdomain}{_tech}
      Bsp: project_task, project_task_status , project_task_status_i18n
      
  type: definiert ob es sich um eine normale Entity oder um eine (readonly) View handelt
    valide werte; default, view
  
  relevance:  Kategorisieren die Relevanz innerhalb der Domain, sowie die ungefähre
    Zugehörigkeit des Inhalts zu Domain ( Nutzdaten ) oder System/Steuerdaten
  
  -->

  <entity 
    name="name"
    type=""
    relevance="" >
    
    <!-- 
    I18n Label. Das Label wird für die Ausgabe im UI verwendet.
      Es kann gefahrlos geändert werden ohne Änderungen im Code nötig sind.
      Wer Labels für den Zugriff auf eine Entity / Daten im Code einsetzt wird geteert und gefedert!!!
      
      Optional aber empfohlen, wird wenn nicht vorhanden aus dem Namen abgeleitet.
    -->
    <label>
      <text lang="de" >Example</text>
    </label>
    
    <!-- 
    Pluralform I18n Labels 
    
    Optional aber empfohlen, wird wenn nicht vorhanden aus dem Label abgeleitet.
    -->
    <plabel>
      <text lang="de" >Examples</text>
    </plabel>
    
    <!-- 
    Informationen für die Entwicklerdoku
    
    Optional aber empfohlen.
    -->
    <description>
      <text lang="de" >Example</text>
    </description>
    
    <!-- 
    Die Information aus welcher die Benutzerdoku generiert wird.
    
    Optional aber empfohlen.
    -->
    <docu>
      <text lang="de" >Example</text>
    </docu>
    
    <!-- 
      Eine Liste von Attributen 
      
      Required, eine Entity macht ohne Attribute nur sehr begrenzt Sinn.
    -->
    <attributes>
      <attribute />
      <attribute />
    </attributes>
    
    <!-- 
      Eine Liste von Referenzen.
      Diese Referenzen werden nur benötigt, wenn sie später im UI angezeigt 
      werden sollen, als Filter verwendet werden sollen, oder sonst in irgend
      einer Form benötigt werden.
      
      Es macht jedoch keinen Sinn alle targets in den Attribute einfach als
      Referenzen abzubilden.
      
      Optional, wenn keine Referenzen vorhanden sind, sind keine vorhanden.  
    -->
    <references>
      <ref />
      <ref />
    </references>
    
    <!-- 
    Die Haupkategorie in welche die Entity eingeordnet wird. 
    Wir z.B beim Erstellen des Menüs verwendet.
    -->
    <categories main="some_main_category" ></categories>
    
    <ui></ui>
    
    <access></access>
    
    <processes></processes>
    
    <data_profile></data_profile>
    
    <semantic></semantic>
    
    <head></head>
    
    <events></events>
    
    <concepts></concepts>
    
    
    <properties></properties>
    

      
  </attributes>
  

  </entity>
</entities>
<?php display_highlight( 'xml' ); ?>