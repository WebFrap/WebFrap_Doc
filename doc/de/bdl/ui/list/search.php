<h1>Search</h1>

<p>
Über die Search Tags kann die Suchmaske angepasst werden. Mit diesen
Informationen werden die Standardangaben aus der Entity überschrieben =>
wird die Suche für den Kontext nicht angepasst werden automatisch die default
Informationen der Entity Attribute verwendet.
</p>

<h2>search_free</h2>
<p>
Über <span class="bdl" >search_free</span> wird definiert nach welcher Werten mit dem
einfachen Suchfeld gesucht werden soll.
</p>

<h2>search</h2>
<p>
Mit dem <span class="bdl" >search</span> tag wird die Extended Search angepasst.
Es werden so nur noch Felder zur Suche angeboten welche hier gelistet wurden.
</p>

<label>Example</label>
<?php start_highlight(); ?>

<_..._>
  <ui>
    <list>
      <!-- geht innerhalb oder auserhalb eines contextes -->
      <search_free>
        <field name="name" />
        <field name="title" />
      </search_free>
    
      <search>
        <field name="name" />
        <field name="title" />
      </search>
    </list>
  </ui>
</_..._>

<?php display_highlight( 'xml' ); ?>

