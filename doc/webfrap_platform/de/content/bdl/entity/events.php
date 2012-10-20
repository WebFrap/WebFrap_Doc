<h2>Events</h2>

<p>
Über Events können Custom Actions an einer vielzahl vordefinierter
Einsprungpunkte in den Cartridges platziert werden.
</p>

<p>
Um Sinnvoll Events platzieren zu können ist jedoch eine genau Kenntniss
der generierten Architektur nötig, da es große Unterschiede macht wann 
und wo eine <a href="content.php?page=bdl.action.base" class="bdl" target="main" >action</a> platziert wird.<br />
Es ist ebenfalls darauf zu achten, dass durch die Actions das MVC nicht 
gebrochen wird.
</p>

<h3>Einfaches Beispiel Example</h3>

<?php start_highlight(); ?>
<managements>

  <management name="example" src="example" >
    
    <events>
    
      <event 
        class="crud_model"
        method="update"
        on="success" >
      </event>
      
      <action 
        name="some_action" 
        class="some_log_action_class_name" 
        key="shorter_name_for_code" >
        
        <interface type="type_of_the_interface" />
        <call method="method_on_action_to_call" />
        
      </action>
      
    </events>

  </management>
</managements>
<?php display_highlight( 'xml' ); ?>

<h4>Die Event Attribute</h4>

<p>
<strong>name</strong>
Name des Events, wird unter anderem bei merge benötigt.
Kann der Actionname sein, muss aber nicht, da es durchaus möglich ist
2 mal die gleich Action aufzurufen mit unterschiedlichen Parametern oder
unterschiedlichen Methoden.
</p>

<p>
<strong>class</strong>
Name der Actionklasse. Wird benötigt um diese einzubinden.
</p>

<p>
<strong>key</strong>
Ist optional, wenn nicht vorhanden wird <strong>name</strong> als key verwendet.
Key wird im Code als Domainname des Action Objektes verwendet.
</p>

<p>
Es gibt eine ganze Reihe von Action Interfaces, das macht Sinn, da
sonst jeder Action alle möglicherweise nötigen Informationen übergeben werden müssten.
<a href="content.php?page=bdl.action.introduction#interface-types" target="main" >Siehe Liste der Action Interfaces</a>
</p>


<h3>Code</h3>
<p>
In den Events kann 3GL Code platziert werden. 
Es ist jedoch unbedingt darauf zu achten, dass in diesem Fall
für alle Zielarchitekturen Code hinterlegt werden sollte.
</p>
          
          
