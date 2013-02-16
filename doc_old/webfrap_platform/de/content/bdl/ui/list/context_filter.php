<h2>Context Filter</h2>

<p>
Wie es der Name fast vermuten lässt können mit den Filtern die Listenelemente
statisch oder dynamisch / mit und ohne Benutzerinteraktionsmöglichkeit
gefiltert werden.
</p>

<h3>Einfaches Beispiel</h3>

<h3>Example</h3>
<?php start_highlight(); ?>

<_..._>
  <ui>
    <list>
    
      <context_filter>
      
        <!-- name required  -->
        <check name="project_employee" type="reference" > 
          
          <ref connection="project_task_employee" id="id_employee" />

          <code>or project_task_employee.id_task.id_project == @$refid</code>
        </check>
      
      </context_filter>
      
    </list>
  </ui>
</_..._>

<?php display_highlight( 'xml' ); ?>


