
<h1>Mainmenu</h1>

<p>Das Mainmenü ist die Hauptnavigationsleiste. Sie befindet sich momentan immer in dem oberen Panel</p>

<label>Beispiel für ein typisches Mainmenu.</label>
<?php start_highlight(); ?>
<desktop>
  <mainmenu name="admin" >
    <body>
    
      <!-- Logo & Profile Node -->
      <node 
        name="logo" 
        type="logo" />
    
      <node 
        name="profile" 
        type="profile" />

      
      <!--  Einbinden von submenüs, diese werden bei den Menus separat definiert -->
      <subtree 
        name="staff" 
        template="webfrap_staff"  /> 

      <subtree 
        name="admin" 
        template="webfrap_admin"  /> 

      
      <!-- Eine Action Panel mit diversen klickbaren buttons -->
      <node 
        name="messages" 
        type="messages" />
        
      <node 
        name="contacts" 
        type="contacts" />
        
      <node 
        name="calendar" 
        type="calendar" />
        
        
      <node 
        name="debug" 
        type="debug" />
        
      <node 
        name="desktop" 
        type="desktop" />
        
      <node 
        name="help" 
        type="help" />
        
      <node 
        name="logout" 
        type="logout" />
        
    </body>
  </mainmenu>
</desktop>
<?php display_highlight( 'xml' ); ?>