
<h1>Module</h1>

<p>
Module sind Container für zusammengehöhrende Elemente.
z.B. das Module CMS fasst alle CMS relevanten Entites, Managements, Prozesse
usw. zusammen.
</p>

<p>
Dies geschieht auf 2 wichtigen Ebenen, zum einen können alle zu einem Modul gehörenden
Elemente / Klassen / Dateien in einen Ordner deployt werden, zum anderen
können über die Modulzugehörigkeit einfach Rechte auf komplette Subsysteme
im Programm gegeben werden.
</p>

<label>Example</label>
<?php start_highlight(); ?>
<modules>

  <module name="wbfsys" >

    <label>
      <text lang="de" >System Daten</text>
      <text lang="en" >System Data</text>
    </label>
    
    <access>
    
    </access>
    
    <!-- Sichtbarkeit auf bestimmte Profile reduzieren -->
    <ui>
      <visibility>
        <profiles>
          <profile name="admin" />
          <profile name="maintenance" />
          <profile name="developer" />
        </profiles>
      </visibility>
    </ui>

  </module>

</modules>
<?php display_highlight( 'xml' ); ?>