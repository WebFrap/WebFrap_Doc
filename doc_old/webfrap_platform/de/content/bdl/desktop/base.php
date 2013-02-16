<h2>Desktop</h2>

<p>Mit den Desktopnodes können Profilspezifische Startseiten definiert werden.</p>

<todo>Bild eines Desktops</todo>

<label>Desktop mit den Hauptelementen</label>
<?php start_highlight(); ?>
<desktops>
		
  <desktop name="admin" extends="default" >
    
    <label />
    
    <!-- Wird in der Systemdoku verwendet -->
    <docu />
  
    <!-- Tabs die Standardmäßig geöffnet werden sollen sobald der desktop betreten wird -->
    <opener>
      <tab url="maintab.php?c=Project.Activtity.listing" />
    </opener>
    
    <!-- Beschreibt die oberen Navigation -->
    <mainmenu name="admin" ></navigation>
    
    <!-- Beschreibt die standard Workarea -->
    <workarea name="admin" ></workarea>

  </desktop>

</desktops>
<?php display_highlight( 'xml' ); ?>



      

