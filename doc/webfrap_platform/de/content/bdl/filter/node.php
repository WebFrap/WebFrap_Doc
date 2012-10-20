
<h2>Filter</h2>

<p>
Wie es der Name fast vermuten lässt können mit den Filtern die Listenelemente
statisch oder dynamisch / mit und ohne Benutzerinteraktionsmöglichkeit
gefiltert werden.
</p>

<p>
Filter sind keine eigenständigen Modellelemente sondern werden innerhalb
von Modellknoten wie z.B. <span class="bdl_path" >component/selectbox</span>,
<span class="bdl_path" >ui/list</span> etc. verwendet.
</p>

<h3>Controlable / Controls </h3>

<?php start_highlight(); ?>

<_..._>
  <filter>
      
    <!--  Filter mit Control Button im Listenelement -->
    <check type="path" name="with_control" >
    
      <controls>
        
        <control location="sub_panel" type="check_button"  > 
        
          <label>
            <text lang="de" >Aktive Projekte</text>
            <text lang="en" >Running Projects</text>
          </label>

        </control>
      
      </controls>
      
    </check>
    
    <!-- Filter der über die Url angesprochen werden kann -->
    <check type="path" name="control_able" >
    
      <control_able />

    </check>
    
    <!-- Filter der immer aktiv ist -->
    <check type="path" name="always_active" >
      <!-- 
      Wenn controls und controlable fehlen ist der filter automatisch immer aktiv
      und kann nicht vom User deaktiviert werden. -->
    </check>


  </filter>
</_..._>

<?php display_highlight( 'xml' ); ?>


<h3>Zusammenfassen in Blöcken</h3>

<p>Manchmal müssen filter in Blöcke zusammengefasst werden um OR richtig zu implementieren</p>

<?php start_highlight(); ?>

<_..._>
  <filter>

    <!--  -->
    <check type="path" name="control_able" block="block1" >
    </check>
    
    <!-- -->
    <check type="path" name="always_active" block="block1" >
    </check>


  </filter>
</_..._>

<?php display_highlight( 'xml' ); ?>


<h3>Einfaches Beispiel</h3>

<h3>Example</h3>
<?php start_highlight(); ?>

<_..._>
  <filter>
      
    <check type="path" name="activ_projects" >
    
      <controls>
        
        <control location="sub_panel" type="check_button"  > 
        
          <label>
            <text lang="de" >Aktive Projekte</text>
            <text lang="en" >Running Projects</text>
          </label>

        </control>
      
      </controls>
      <active>true</active>
      
      <code>or project_project.id_status.access_key IN( "running" )</code>
      
    </check>
    
    <check type="path" name="closed_projects" >
    
      <control_able />
      
      <code>
      or project_project.id_status.access_key IN
      ( 
        "frozen", 
        "completed", 
        "closed" , 
        "terminated" 
      )
      </code>
      
    </check>
    
    <check type="path" name="archived_projects" >
    
      <controls>
        
        <control location="sub_panel" type="check_button"  > 
        
          <label>
            <text lang="de" >Archive</text>
            <text lang="en" >Archive</text>
          </label>

          <default></default>
          
        </control>
      
      </controls>
      
      <code>or project_project.id_status.access_key IN( "archived" )</code>
      
    </check>
    
    <check type="role" name="my_projects" >
    
      <controls>
        
        <control location="sub_panel" type="check_button"  > 
        
          <label>
            <text lang="de" >My Projects</text>
            <text lang="en" >My Projects</text>
          </label>

          <default></default>

        </control>

      </controls>
      
      <roles>
        <role name="project_owner" />
        <role name="project_manager" />
        <role name="staff" />
        <role name="developer" />
      </roles>
      
    </check>
    
    <check type="role" name="my_projects" >
    
      <control_able />
      
      <roles>
        <role name="owner" />
        <role name="staff" />
      </roles>
      
      <subchecks>
        <check type="role" name="my_project_customer" field="id_customer" >
        
          <roles>
            <role name="manager" />
            <role name="supporter" />
          </roles>
        
        </check>               
      </subchecks>
      
    </check>

  </filter>
</_..._>

<?php display_highlight( 'xml' ); ?>

