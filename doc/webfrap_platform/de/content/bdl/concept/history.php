<h1>History</h1>

Für Datensätze einer tabelle mit dem history concept werden zusätzliche Protokolleinträge
bei Updates erstellt.

Immer dann wenn Daten geändert werden die fürdie History relevant sind.

Diese werden im Gegensatz zum Track Konzept jedoch nur in die Log geschrieben und nicht
noch in eine Tracking Tabelle.

Valid in:

- entity
- management

<label>Model</label>
<?php start_highlight(); ?>
<concepts>
	<concept name="history" >
		<fields>
			<field name="" ref="" />
		</fields>
	</concept>
</concepts>
<?php display_highlight( 'xml' ); ?>