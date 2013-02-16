# Indices  und Keys

## Indices



## Foreign Keys


- SET NULL den Wert auf null setzen
- SET DEFAULT zurück auf den Default value (doof wenn der gelöscht wird, wa?) (**DEFAULT**)
- RESTRICT Löschen unterbinden solange auf den Datensatz referenziert wird
- CASCADE cascadierend löschen

### Foreign Key Model Node
<?php start_highlight(); ?>
<fk 
	name="tablex_id_whatever_tab_fubar_rowid_fk"
	target=""
	target_field=""
	on_update=""
	on_delete="" >

</fk>
<?php display_highlight( 'xml' ); ?>


Problem mit den VID, wir können keine Foreign Keys für die virtuellen IDs
erstellen.

Das muss in den Architekturen berücksichtigt werden, um diese dann von Hand
zu löschen.


### Links

- http://www.postgresql.org/docs/9.1/static/ddl-constraints.html#DDL-CONSTRAINTS-FK
- http://dev.mysql.com/doc/refman/5.5/en/innodb-foreign-key-constraints.html