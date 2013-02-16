<h1>Value In</h1>

<p>
Prüfen ob ein Wert auf dem Datensatz in einer gegebenen Menge / Liste 
von Einträgen vorkommt.
</p>

<label>Code Beispiel</label>
<?php start_highlight(); ?>
<_..._>
  <conditions default="success" >
  
    <condition type="value_in" >
      
      <!--  
        name: Name des Attributes
        ref: Name des Pfad Attributes, wenn die Werte nicht direkt auf der Tabelle liegen
      -->
      <attribute name="access_key" ref="id_status" />
      
      <!-- Liste der Values gegen welche geprüft werden soll -->
      <values>
        <value>new</value>
        <value>almost_new</value>
        <value>was_new_not_long_ago</value>
      </values>
      
    </condition>
  
  </conditions>
</_..._>
<?php display_highlight( 'xml' ); ?>