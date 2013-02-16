<h1>Many To Mans Spezifische UI Elemente</h1>

<p>
Eine Reihe von <span class="bdl" >ui</span> subnodes machen
nur im Kontext einer <span class="property" >many_to_many</span> Referenz Sinn.
</p>

<h2>Filter auf die Selection Tabelle für die Connect Action</h2>

<p>
  In vielen Fällen möchte man Filter auf die Selection Tabelle legen können,
  da nicht alle Einträge in der Datenbank auch tatsächlich zugewiesen werden
  können sollen. <br />
  Hierfür gibt es 2 Möglichkeiten:<br /> 
  Es kann ein Management Knoten, mit Standard Filtern erstellt werden.
  Diese Lösung sollte jedoch nur gewählt werden wenn tatsächlich eine Komplettsicht
  auf diese Datenmenge auch mit CRUD Funktionalität benötigt wird.<br />
  Wenn das nicht der Fall ist kann in der am Besten passenden Maske einfach
  einfach ein oder mehrere <span class="property" >control_able</span> <span class="bdl" >filter</span>
  erstellt werden. 
  Über <span class="bdl_path" >selection_filter/check</span> können beliebig
  viele Filter eingebunden werden. Es ist jedoch zu beachten, dass viele Filter
  aufeinmal sehr warhrscheinlich einen negativen Einfluss auf die Performance haben.
</p>

<h3>Einbinden im Code</h3>
<?php start_highlight(); ?>
<_..._>
  <ref>
    <selection_filter>
    
      <check name="project_staff" type="parent_assigned" >
        <parent_field attribute="id_project" />
        <assignment reference="human_resources" />
      </check>
    
    </selection_filter>
  </ref>
</_..._>
<?php display_highlight( 'xml' ); ?>