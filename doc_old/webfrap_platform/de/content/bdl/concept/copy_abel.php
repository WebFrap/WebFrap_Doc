<h1>Copy Able</h1>

<p>
Eine Entity / Maske als copierbar taggen.
So wird es ermöglicht einen Datensatz einfach und schnell zu kopieren, wenn viele ähnliche
Datensätze angelegt werden sollen.
</p>

<label>Der Konzept Knoten</label>
<?php start_highlight(); ?>
<entities>
  <entity name="name" >
    
    <concepts>
      
      <!-- type: falt & deep
        bei flat werde die IDs auf referenzen mitkopiert
        bei deep werden neue Datensätzen in den Referenzen erstellt
       -->
      <concept name="copy_abel" type="deep" >
        <!-- Liste der Felder deren Wert übernommen werden soll  -->
        <fields>
          <field name="name1" />
          <field name="name2" src="some_embeded_ref" />
        </fields>
      </concept>
    </concepts>

  </entity>
</entities>
<?php display_highlight( 'xml' ); ?>