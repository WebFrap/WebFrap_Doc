<h1>Dyntpl</h1>

<p>Einbinden von dynamischen Inhalten über Template klassen</p>

<p>Name der Klasse ist: <spa>"class"_Dtpl</span> hier <span>ProjectActivity_ActualPhase_Dtpl</span>.</p>
<p>Standardmäßig wird ein Objekt erstellt und dann die definierte Methode aufgerufen, wenn call type="static" hat
wird die methode statisch auf der Klasse aufgerufen.</p>

<p>Die Rückgabe wird per echo ausgegeben. Error Handling intern über die Message Klasse, oder per Exception.</p>


<label>Hier wäre ein super Platz für ein Codebeispiel</label>
<?php start_highlight(); ?>
<dyntpl
		name="actual_phasedata"
		class="ProjectActivity_ActualPhase"  >
		 
		<interface type="dataset" />
		<call method="renderActualPhase" />
 
</dyntpl>
<?php display_highlight( 'xml' ); ?>