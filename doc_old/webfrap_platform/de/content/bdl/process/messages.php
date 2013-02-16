# Messages

Mit den Messages werden alle Messages die vom Prozess verschickt werden können deklariert.


<?php start_highlight(); ?>
<processes>
  
  <!-- 
    name: Name des Prozesses (Cname)
    src: Die Datenquelle für den Process
   -->
  <process 
    name="project_project-development"
    src="project_project" >

    <messages>
      <message name="new" />
      <message name="in_negotiation" />
      <message name="declined" />
      <message name="accepted" />
      <message name="frozen" />
      <message name="running" />
      <message name="rollout" />
      <message name="support" />
      <message name="re_opened" />
      <message name="completed" />
      <message name="closed" />
      <message name="terminated" />
      <message name="archived" />
    </messages>

  </process>

</processes>
<?php display_highlight( 'xml' ); ?>