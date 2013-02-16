# Phases

Über die Phasen können Prozesse in UnterProzesse strukturiert werden.

Sobald Phasen vorhanden sind muss jeder Node eine Phase zugewiesen werden.

## Code Example
<?php start_highlight(); ?>
<!-- Phases -->
<phases>

  <!-- 
  name: der Name zum indentifizieren der Phase
   -->
  <phase name="idea" >
  
    <!-- Label -->
    <label>
      <text lang="de" >Idea</text>
    </label>
    
  </phase>

  <phase name="planning" >

  </phase>

  <phase name="development" >

  </phase>

  <phase name="mature" >

  </phase>

  <!--  
    path: false, 
      Die Phase wird nicht in den Fortschritsbalken abgezeigt 
      
    Standardmäßig werden die Phasen in der Reihenfolge wie im Modell
    aufgelistet angezeigt.
  -->
  <phase 
    name="archive" 
    path="false" >
  </phase>

</phases>
<?php display_highlight( 'xml' ); ?>