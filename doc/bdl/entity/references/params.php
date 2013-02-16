
<h1>Params</h1>

<p>
Beim Erstellen von neuen Datensätzen können in Referenzen Parameter
mitübergeben werden um so Referenzspezifsche Standardwerte zu setzen.
</p>

<label>Übergabe von Parametern</label>
<?php start_highlight(); ?>
<_..._>
  <ref>
    <params>
      <create>
        <param type="value" attribute="id_project" />
        <param type="value" attribute="start_date" />
        <param type="value" attribute="end_date" />
      </create>
    </params>
  </ref>
</_..._>
<?php display_highlight( 'xml' ); ?>