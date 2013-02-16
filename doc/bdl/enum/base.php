

<h2>Enum</h2>

<p>
Enums sind einfache Key:Value paar Wertelisten.
Für jedes Enum wird automatisch noch eine Selectbox generiert so dass Enums
einfach in Formularen eingebunden werden können.
</p>

<h3>Code Beispiel Enum</h3>
<?php start_highlight(); ?>
<enums>

  <enum 
    name="cms_page_type" 
    module="cms" >
  
    <label>
      <text lang="de" >Page Type</text>
      <text lang="en" >Page Type</text>
    </label>
    
    <values>
      <!-- Wert 1 -->
      <value name="simple" value="1" >
        <label>
          <text lang="en" >Simple</text>
        </label>
      </value>
      <!-- Wert 2 ( oder auch 42, muss keine sortierung haben ) -->
      <value name="sliced" value="2" >
        <label>
          <text lang="en" >Slices</text>
        </label>
      </value>
      <!-- Bis jetzt sollte man das Muster erkannt haben... -->
    </values>

  </enum>

</enums>
<?php display_highlight( 'xml' ); ?>

<h3>Customizing</h3>

<p>
Für jedes Enum wird standardmäßig eine Selectbox erstellt.
Diese kann über <span class="bdl_path" >ui/properties/var</span> konfiguriert 
oder auch komplett entfernt werden.
</p>

<?php start_highlight(); ?>
<enums>

  <enum 
    name="cms_page_type" 
    module="cms" >
    
    <ui>
      <properties>
      
        <!-- (K)Einen leere Eintrag an den Anfang der Selectbox -->
        <first_free>false</first_free>
        
        <!-- Selectbox ganz deaktivieren -->
        <no_selectbox  />
      </properties>
    </ui>
    
  </enum>

</enums>
<?php display_highlight( 'xml' ); ?>

<h3>Code Beispiel Enum auf Attribute mappen</h3>


<?php start_highlight(); ?>
<entities>

  <entity  name="example"  >

    <attributes>
      <!-- Das Attribute muss natürlich den Wert des Enums auch aufnehmen können -->
      <attribute name="the_value" type="type_of_the_enum_value" >
        <!-- Einfach Type Selectbox und den Namen des Enums angeben. Fertig -->
        <uiElement type="selectbox" name="name_of_the_enum" />
      </attribute>
    </attributes>

  </entity>

</entities>
<?php display_highlight( 'xml' ); ?>

<p>
Wenn das Enum in dieser Art auf das Attribute gemappt wurde, werden wie Werte
auch in Liste automatisch richtig angezeigt.
</p>
