

<h2>Desktop</h2>

<p>Beschreibung des Desktops</p>


<?php start_highlight(); ?>
<desktops>

  <desktop name="developer" extends="default" >
  
    <navigation name="developer" >
      <body>
        <cell name="navigation" />
      </body>
    </navigation>
    
    <tree name="developer" >
      <body>
      
        <!-- Der Node kann direkt eingefügt werden -->
        <node name="explorer">
          <label>
            <text lang="de">Explorer</text>
            <text lang="en">Explorer</text>
          </label>
          <icon src="control/folder.png" alt="explorer" />
          <action href="maintab.php?c=Webfrap.Navigation.explorer" />
        </node>
          
        <!-- Oder als Template -->
        <node name="wbf_explorer" template="wbf_explorer" />
        
        <!-- Zusätzlich können ganze Untermenüs aus Menü Templates eingefügt werden -->
        <subtree name="wbf_developer" template="wbf_developer" />
        <subtree name="my_data" template="my_data" />
        <node name="wbf_logout" template="wbf_logout" />
      </body>
    </tree>

    <workarea name="developer" >
      <area name="navigation" >
        <containers>
          <container name="dash_top" size="full" >
          
            <widget 
              name="my_announcement" 
              id="my_announcement" 
              class="my_announcement" 
              size="full" />
          
            <widget 
              name="my_message" 
              id="my_message" 
              class="my_message" 
              size="full" />
              
           </container>
        </containers>
      </area>
    </workarea>


  </desktop>

</desktops>
<?php display_highlight( 'xml' ); ?>



<?php start_highlight(); ?>
<desktops>

  <desktop name="developer" extends="default" >

    <workarea name="developer" >
      <area name="dashboard">
        <containers type="Wallpaper" />
      </area>
    </workarea>

  </desktop>

</desktops>
<?php display_highlight( 'xml' ); ?>
      

