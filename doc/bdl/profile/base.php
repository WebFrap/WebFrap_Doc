
<h1>Profile</h1>

<p>Mit den Profilen können Benutzer / Kontextspezifische Startpunkte erstellt werden</p>

<h3>Code Beispiel</h3>
<?php start_highlight(); ?>
  <profiles>
    
    <!-- Wenn nicht weiter angegeben erben alle Profile von Default -->
    <profile 
      name="admin"
      module="webfrap" 
      extends="default" >
      
      <!-- 
        Quicklinks für profile
      -->
      <quick_links>
        <link></link>
      </quick_links>
      
      <elements>
      
        <!-- Panel ist das oberste Panel mit dem Logo und den Tabs -->
        <panel name="default" />
        
        <!-- Soweit vorhanden ist Mainmenü ein Dropdown im Panel -->
        <mainmenu name="default" />
        
        <!-- Setzen der Desktopvariante -->
        <desktop name="admin" />
        
        <!-- Das Accordion mit allen navigationselementen -->
        <navigation name="admin" />
        
        <!-- Das Treemenü auf der Linken seite -->
        <tree name="admin" />
        
        <!-- Konfigurieren der Workarea -->
        <workarea name="admin" />

      </elements>


    </profile>
    
    <!-- Profile können von anderen Profilen Erben -->
    <profile 
      name="cms_admin"
      module="cms" 
      extends="admin" >
      
      <elements>
        <panel name="default" />
        <mainmenu name="default" />
        
        <desktop name="admin" />
        <navigation name="cms_admin" />
        
        <workarea name="admin" />
        <tree name="cms_admin" />
      </elements>


    </profile>

  </profiles>
<?php display_highlight( 'xml' ); ?>