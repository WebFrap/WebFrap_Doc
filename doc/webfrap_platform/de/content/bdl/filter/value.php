
<h1>Value Filter</h1>

<p>Mit Value Filtern können einfache Hardcodierte Werte auf Attributen
der aktiven Entity gefilter werden. Wenn über Attribute auf Referenzen
gefiltert werden muss, wird ein Pfadfilter benötigt.</p>

<?php start_highlight(); ?>
<_..._>
  <ui>
    <list>
      <filter>
        <check type="value" field="flag_archived" >
          <!-- 
            Mit Not kann der Ausdruck negiert werden,
            in diesem Fall wäre also die Bedeutung gibt mir alle die NICHT
            value t haben
          -->
          <not />
          <value>t</value>
        </check>
      </filter>
    </list>
  </ui>
</_..._>
<?php display_highlight( 'xml' ); ?>