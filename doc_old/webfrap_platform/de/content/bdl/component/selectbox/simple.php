<h2>Selectbox</h2>

<p>
Selectboxen sind neben den Radioboxen und Windowelementen wichtigsten
Listenelemente für Formulare.
</p>

<div class="box image" >
  <label>Selectboxen</label>
  <img src="images/bdl/ui_elements/selectboxes.png" alt="selectboxes" />
</div>

<h2>Einfaches Beispiel</h2>

<p>In den meisten Fällen haben Selectboxen eine einfache Entity als Datenquelle</p>

<?php start_highlight(); ?>
<components>
  <component type="selectbox" name="wbfsys_some_type" src="wbfsys_some_type"  >

    <label>
      <text lang="de" >Some Type</text>
      <text lang="en" >Some Type</text>
    </label>
    
    <!-- Das Attribute welches als Value / bzw. Reference ID verwendet werden soll -->
    <id name="rowid" />
    
    <!-- Wenn vorhanden bekommen die Selectboxen noch einen textkey -->
    <key name="access_key" />
    
    <!-- Das / Die Felder welche später angezeigt werden.
    Wenn mehrere Felder angegeben werden, werden sie in der Selectbox
    Kommasepariert dargestellt -->
    <fields>
      <field name="access_key" />
    </fields>
    
    <!-- Reihenfolge festlegen, es können mehrere Felder definiert werden -->
    <order_by>
      <field name="access_key" />
    </order_by>

  </component>
</components>
<?php display_highlight( 'xml' ); ?>


<label>Sortierung</label>
<?php start_highlight(); ?>
<components>
  <component type="selectbox" name="wbfsys_some_type" src="wbfsys_some_type"  >

    <!-- Reihenfolge festlegen, es können mehrere Felder definiert werden -->
    <order_by>
      <field name="access_key" adjustment="desc|asc" />
    </order_by>

  </component>
</components>
<?php display_highlight( 'xml' ); ?>