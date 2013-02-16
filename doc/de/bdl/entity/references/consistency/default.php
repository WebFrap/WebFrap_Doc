
<h1>Default</h1>

<p>Erweiterte Default Werte beim Erstellen von neuen Referenz Datensätzen</p>

<label>Beispielknoten</label>
<?php start_highlight(); ?>
<_..._>
  <ref>
    <cosistency>

      <defaults>

        <default field="start_date" 
           if_null="nothing"
           target_field="start_date">
        </default>

        <default field="end_date" if_null="nothing" target_field="end_date">
        </default>

      </defaults>

    </cosistency>
  </ref>
</_..._>
<?php display_highlight( 'xml' ); ?>