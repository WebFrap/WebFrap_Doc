
<h1>Message Variablen</h1>

<p>Innerhalb der Nachrichten Templates stehen eine ganze Reihe von Variablen
zur Verfühung, welche auch benötigt werden um aussagekräftige Nachrichten
mit sinnvollem Inhalt verschicken zu können.</p>

<p>Dies können sowohl im Subject als auch im Content verwendet werden.
Das Schema ist immer gleich: <span class="example" >{@quelle:key@}</span>.
</p>

<h3>Beispiel Variablen</h3>
<?php start_highlight(); ?>
<messages>
  <message>
    <subject>{@env:app_name@} Notice: Project {@data:project_project.name@} was accepted</subject>
  </message>
</message>
    
<?php display_highlight( 'xml' ); ?>