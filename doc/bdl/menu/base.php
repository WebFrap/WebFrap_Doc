
<h1>Menu</h1>

<h3>Example</h3>
<?php start_highlight(); ?>
<menus>
  
  <!-- 
  
    Menüs können ausgelagert werden.
    So ist es nicht nötig Menüs bzw Navigationselemente jedes mal aufs neue
    beschreiben zu müssen
    
    In den Menüs können komplette Trees angelegt werden
    Subtrees oder einzellne Nodes.
    
    In den Menüs gibt es keine Merge, nur komplette replacements.
  
   -->
  <tree name="user" >
    <body>

      <node name="explorer">
        <label>
          <text lang="de">Explorer</text>
          <text lang="en">Explorer</text>
        </label>
        <icon src="control/folder.png" alt="explorer" />
        <action href="maintab.php?c=Webfrap.Navigation.explorer" />
      </node>

      <subtree name="my_data" >
        <body>
          <node name="my_profile">
            <label>
              <text lang="de">My Profile</text>
              <text lang="en">My Profile</text>
            </label>
            <icon src="control/entity.png" alt="my profile" />
            <action href="maintab.php?c=My.Profile.listing" />
          </node>
          <node name="my_messages">
            <label>
              <text lang="de">My Messages</text>
              <text lang="en">My Messages</text>
            </label>
            <icon src="control/entity.png" alt="my messages" />
            <action href="maintab.php?c=My.Messages.inbox" />
          </node>
          <node name="my_appointments">
            <label>
              <text lang="de">My Appointments</text>
              <text lang="en">My Appointments</text>
            </label>
            <icon src="control/entity.png" alt="my appointments" />
            <action href="maintab.php?c=My.Appointments.listing" />
          </node>
          <node name="my_tasks">
            <label>
              <text lang="de">My Tasks</text>
              <text lang="en">My Tasks</text>
            </label>
            <icon src="control/entity.png" alt="my tasks" />
            <action href="maintab.php?c=My.Tasks.listing" />
          </node>
        </body>
      </subtree>

      <body />
    </body>
  </tree>
  

</menus>
<?php display_highlight( 'xml' ); ?>

