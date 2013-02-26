
<h1>Databases</h1>

<p>Hier könnte ihre Dokumentation stehen... Wenn sie endlich jemand schreiben würde...</p>

<label>Hier wäre ein super Platz für ein Codebeispiel</label>
<?php start_highlight(); ?>
<project>
  <databases>

    <connection driver="Postgresql" type="Postgresql" name="sdb_all" >
      <host>localhost</host>
      <db>sdb_gw_sbiz</db>
      <port>5432</port>
      <dataschema>production</dataschema>
      <owner>sdb_gw_sbiz</owner>
      <user>deployment</user>
      <pwd>deployment</pwd>
    </connection>
    
    <connection driver="Postgresql" type="Postgresql" name="sdb_test" >
      <host>localhost</host>
      <db>sdb_gw_sbiz</db>
      <port>5432</port>
      <dataschema>test</dataschema>
      <owner>sdb_test</owner>
      <user>deployment</user>
      <pwd>deployment</pwd>
    </connection>

  </databases>
</project>
<?php display_highlight( 'xml' ); ?>