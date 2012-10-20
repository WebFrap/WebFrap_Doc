<h1>Responsibles</h1>

<label>Valid Parents</label>
<ul>
  <li>entity</li>
  <li>management</li>
  <li>entity/references/ref</li>
  <li>ui/*/tabs/tab</li>
  <li>ui/*/reference</li>
</ul>

<p>
Über die Responsibles kann definiert werden welche Aufgabenbereiche und Zuständigkeiten
welchen Rollen zugewiesen wurden.<br />
Diese Information ist primär für Dokumentationszwecke nötig da mit ihrer Hielfe eine bessere 
Doku verwendet werden kann.
</p>

<p>Die ACLs werden expliziet nicht für diese Information herangezogen, da diese dynamisch erweiterbar sind
und sich aus den Rechten in diesem Kontext nicht zwangsläufig Pflichten sonder nur Möglichkeiten ableiten lassen.</p>



<label>Hier wäre ein super Platz für ein Codebeispiel</label>
<?php start_highlight(); ?>
<_..._>

<entity>
  <responsibles>
    
    <create>
      <role name="staff" /><!-- Die Rolle muss im BDL beschrieben werden -->
    </create>
    
    <crud></crud>
    
    <delete></delete>
    
    <maintain></maintain>
    
    <access></access>
    
  </responsibles>
</entity>

</_..._>
<?php display_highlight( 'xml' ); ?>