<h1>Referenzen</h1>

<p>Mit den Referenzen lassen sich einfach "many to many" und "many to one" Beziehungen abbilden.</p>

<h3>Simple Many to One</h3>
<?php start_highlight(); ?>
<_..._>

<entity name="project_activity" >
  <references>
    <ref name="project_alias" binding="connected"  relation="manyToOne" >
      <label>
        <text lang="de" >Alias</text>
        <text lang="en" >Alias</text>
      </label>
      <plabel>
        <text lang="de" >Aliases</text>
        <text lang="en" >Aliases</text>
      </plabel>
      <src     name="project_activity" ></src>
      <target  name="project_alias"    id="id_project"  ></target>
    
    </ref>
  </references>
</entity>

</_..._>
<?php display_highlight( 'xml' ); ?>


<h3>Simple Many to Many</h3>
<?php start_highlight(); ?>
<_..._>

<entity name="project_activity" >
  <references>
    <ref name="human_resources" binding="free"  relation="manyToMany" >
    	
    	<!-- Singular Label -->
      <label>
        <text lang="de" >Mitarbeiter Kapazität</text>
        <text lang="en" >Human Resource</text>
      </label>
      
      <!-- Plural Label -->
      <plabel>
        <text lang="de" >Mitarbeiter Kapazitäten</text>
        <text lang="en" >Human Resources</text>
      </plabel>
      
      <!-- Source Tabelle  -->
      <src        name="project_activity"  id="id_project" ></src>
      
      <!-- Name der Connection Tabelle -->
      <connection name="project_task_user"  ></connection>
      
      <!-- Name der Zieltabelle -->
      <target     name="wbfsys_role_user"  id="id_user" ></target>
    
    </ref>
  </references>
</entity>

</_..._>
<?php display_highlight( 'xml' ); ?>




<h3>Simple One to One</h3>
<?php start_highlight(); ?>
<_..._>

<entity name="project_activity" >
  <references>
    <ref name="root_task" base="src" binding="connected" relation="oneToOne" >
      <exclude>
        <table />
      </exclude>
      <description>
        <text lang="de" >1 zu 1 Verknüpfung zwischen project_activity und project_task</text>
        <text lang="en" >1 to 1 Reference between project_activity and project_task</text>
      </description>
      <src name="project_activity" />
      <target name="project_task" id="id_activity" />
    </ref>
  </references>
</entity>

</_..._>
<?php display_highlight( 'xml' ); ?>



