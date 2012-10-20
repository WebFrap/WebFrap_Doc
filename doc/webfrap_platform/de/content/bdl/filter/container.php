
<h1>Container Filter</h1>

<p>Bei Container Filtern wird einfach auf eine bereits existierende Klasse verwiesen.</p>

<?php start_highlight(); ?>
<_..._>
  <ui>
    <list>
      <filter>
        <!-- Der Klassennamen wird nach dem Standard sub2Camel Schema transformiert
        project_my_project-manager wird also zu ProjectMyProject_Manager
        Weiter ist zu beachten, dass erwartet wird, dass die Klasse auf _Filter endet.
        Der korrekte Name der Filterklasse lautet also: ProjectMyProject_Manager_Filter
        -->
        <check 
          type="container" 
          name="my_projects" 
          class="project_my_project-manager" />
      </filter>
    </list>
  </ui>
</_..._>
<?php display_highlight( 'xml' ); ?>
