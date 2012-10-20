<h2>Attributes</h2>

<p>
Auf jeder Entity, wenn nicht anders deklariert sind Standardmäßig diverse
Metadaten Felder vorhanden.
Der Pk wird immer automatisch angelegt, heißt <strong>rowid</strong> ist ein int wert und
verweißt auf eine globale sequence.
Weiter werden zusätzliche Metadaten automatisch angelegt:
<p>

<label>Standard Attribute bzw Colums auf der Entity:</label>
<ul class="doc_tree" >
  <li><strong>rowid</strong> (int)  Erstellungszeitpunkt</li>
  <li><strong>m_time_created</strong> (timestamp)  Erstellungszeitpunkt</li>
  <li><strong>m_role_create</strong> (ref:wbfsys_role_user)  Speicher den Ersteller</li>
  <li><strong>m_time_changed</strong> (timestamp)  Zeitpunkt der letzten Änderung</li>
  <li><strong>m_role_change</strong> (ref:wbfsys_role_user)  Die Person, welche den Datensatz zuletzt geändert hat</li>
  <li><strong>m_time_deleted</strong> (timestamp)  Zeitpunkt wann der Eintrag als gelöscht markiert wurde</li>
  <li><strong>m_role_deleted</strong> (ref:wbfsys_role_user)  Die Person, welche den Datensatz gelöscht hat</li>
  <li><strong>m_version</strong> (int) Anzahl der Updates auf den Datensatz, wird für Kollisionsprävention verwendet</li>
  <li><strong>m_uuid</strong> (UUID) eine global eindeutige ID für den Datensatz. Wird zum austauschen des Datensatzes mit anderen Systemen verwendet</li>
</ul>


<h3>Haupt XML Attribute auf den Attribute Tags</h3>
<ul class="doc_tree" >
  <li><strong>name</strong> (string) {required} Name des Attributes, und das Einzige wirkliche 
          Pflichtfeld, alle anderen Attribute haben default values</li>
  <li><strong>type</strong> [int,text,numeric,date...] {def:text} Datentype<br />
    <label>Liste der Typen:</label>
    <ul class="doc_tree" >
      <li>smallint</li>
      <li>int</li>
      <li>bigint</li>
      <li>numeric</li>
      <li>text</li>
      <li>date</li>
      <li>time</li>
      <li>timestamp</li>
      <li>uuid</li>
      <li>money</li>
      <li>binary</li>
      <li>enrypted</li>
    </ul>
  </li>
  <li><strong>size</strong>  (int:size)|(int:size,int:presicion) {def:null} größe des Feldes</li>
  <li><strong>required</strong> (true/false) {def:false} deklariert ob dieses Feld ein Pflichtfeld auf der Datenebene ist.
    Hierbei ist wichtig zu beachten, dass es einen Unterschied gibt ob ein Datenfeld auf der Entity oder in der UI als
    required deklariert wird. Auf der Entity wird das Feld in der Datenbank als not null deklariert.
    Auf der Maske verweigert nur der Userinput Handler die Annahme der Daten, auf der Datenbank selbst
    wird das Feld jedoch nicht als not null geflaggt.
  </li>
  <li><strong>minSize</strong>  (int:size) {def:null} Constraint für minimale anzahl zeichen, oder minimalen numerischen Wert</li>
  <li><strong>maxSize</strong>  (int:size) {def:null} Constraint für maximale Anzahl zeichen, oder maximale numerischen Wert</li>
  <li><strong>target</strong>  (string:entity name) name einer entity, auf die das attribute verweist ( wenn das attribute eine referenz ist)
                 Namen von referenzattributen fangen immer!!! per konvention mit "id_" an.
                 Es sollte jedoch nicht stupide der name der entity verwendet werden sondern ein beschreibender name z.B.
                 id_supervisor bei einer referenz auf einen employee mit der rolle supervisor in dem kontext</li>
  <li><strong>is_a</strong>    Verweis auf eine "Definition". Definitionen geben default Eigenschaften vor die jedoch überschrieben werden 
                 können. Das überschreiben von Definitionseigenschaften sollte jedoch nur in Ausnamefällen passieren.
                 Bei einer Definition geht es primär darum die Semantik im Modell zu erhöhen.
                 Daher ist es sogar erwünscht dass eine neue Definition erstellt wird, um etwas zu beschreiben, auch wenn
                 eine Definition mit ähnlichen Eigenschaften bereits existiert, welche jedoch Semantisch eine andere Bedeutung hat.</li>
</ul>




<?php start_highlight(); ?>
<entities>

  <entity name="name" >

  <attributes>

    <attribute 
      name="an_attribute" 
      type="text" 
      size="200" 
      required="false" 
      minSize=""
      maxSize=""
      target=""
      is_a=""
      >
      
      <!-- 
      Das UI Element kann definiter werden, muss aber nicht. Wenn kein uiElement vorhanden ist
      legt der Interpreter automatisch ein passendes Element anhand des angegeben Datentype an.  

      Attribute:
      
      type: der type
      name: Name des Elements ( wird z.B. bei speziellen Selectboxen benötigt )
      src: Die Datenquelle des UIElements, wir benötigt wenn "many to one" elemente, 
            wie z.B. eine Selectbox, verwendet werden src wird automatisch gesetzt, 
            wenn das "attribute" ein "target" Attribute hat
      
             
      -->
      <uiElement 
        type="text" 
        name="" 
        src=""
        >
          
          <!-- UI Element wird nicht angezeigt per default, kann aber eingeblendet werden. 
            Im Gegensatz zu type:hidden wird das gewählte Element verwendet, 
            aber ist erst mal ausgeblendet -->
          <hidden />
          
          <!-- Das UI Element ist in Formularen per default nur Readonly, 
            Änderungen durch z.B durch das Clientprogramm werden jedoch persistiert -->
          <readonly />
          
          <!-- Element kann nur gelesen werden, Änderungen die der Client an 
            das Backend sendet werden ignoriert. Kann nur impliziet im Backend geändert werden  -->
          <disabled />
          
          <!-- Wird in der Maske zwar als required angezeigt, in der Datenbank jedoch
          nicht als not null geflaggt  -->
          <required />
        
          <!-- Die Größe des UI Elements. Anders als bei display::size wird hier 
            die größe mit (CSS) Klassen angegeben
            width:
              - xxsmall
              - xsmall
              - small
              - medium
              - large
              - xlarge
              - xxlarge
              - full
           
            Height macht nur bei Textarea, oder ähnlichen Inputelementen Sinn
            height:
              - small_height
              - medium_height
              - large_height
              - full_height
              
            Soweit nicht angegeben werden je nach gewählten Inputelement 
            die passenden default Werten verwendet.
              
          -->
          <size
            width="medium"
            height=""
            />
            
          <!--  
           position wird verwendet im die standardeigenschaften des UI Elements 
           bei der Positionierung in automatisch generierten Formularen anzupassen.
           Position wird nur dann verwendet wenn keine expliziete Positionierung 
           durch <ui> Tags vorgegeben wird.
           
           valign: {def: middle}
            - top     im oberen Bereich anordnen
            - middle  mittlerer Bereich
            - bottom  im unteren Bereich
            
            
           align: {def: null}
            - left in der linkesten spalte
            - center in der mittleren Spalte / einer der Mittleren ( mach nur Sinn bei mehr als 2 Spalten)
            - right rechten Spalte
            
           piority: [int:0-100] {def: 50}
            je höher die Priorität desto weiter links oben, wird das UI Element angeordnet

          -->
          <position 
            valign="middle"
            align="center"
            priority="50"
          />

        
        </uiElement>
        
        
        <!-- 
          Das display Tag wird verwendet um die Ausgabe des Attributes 
          innerhalb der erzeugten UIs zu steuern.
          
          Per default werden alle Attribute in CRUD Formularen platziert, 
          nicht aber in Searchforms oder Listenelementen.
          
          Attribute:
          
          field:
          Wenn das Attribute eine Referenz auf einen Datensatz in einer anderen Tabelle ist, 
          kann mit dem "field" attribute angegeben werden welches Feld aus der 
          Referenztabelle anstelle des "in der regel numerischen" Wertes im 
          Attribut, angezeigt werden soll.
          
          width:
          Die Breite des Elements in Listingelementen, soweit möglich diese zu setzen.
          Die Breite wird in Pixeln angegeben
      
         -->
        
        <display 
          field="name" 
          width="125"
          >
          
          <!-- alle subknoten können ebenfalls ein field attribute haben 
            mit dem sie das field attribute
            aus display überschreiben können  -->
          
          <!-- Wenn in einem Inputelement ( z.B. das Window UIElement ) ein Text 
            auseggeben wird, werden die Daten aus diesem Attribute mit angezeigt -->
          <input />
          <text /><!-- Daten werden bein $entity->text() mit ausgegeben  -->
          
          <!-- Listing typen -->
          
          <!-- listing ist ein Sammeltag, dieses Attribute wird dann in alle 
            Listingelement angezeigt, z.B. Tabellen, Listen, Trees...  -->
          <listing />
          
          <!-- Feld wird in Tabellen Elementen Angezeigt -->
          <table />
          
          <!-- Feld wird in List Elementen Angezeigt -->
          <list />
          
          <!-- Feld wird in Tree Elementen Angezeigt -->
          <tree />
          
          <!-- Feld wird in Treetable Elementen Angezeigt -->
          <treetable />
          
          <!-- Feld wird in Blocklist Elementen Angezeigt -->
          <blocklist />
        
        </display>
      
        
        <!-- Setzen eines Default Values, sollte 
          logischerweise zum Datensatz passen -->
        <default></default>
        
        <!-- Es ist möglich auf Datensätze zu verweise, 
          die Entity auf die verwiesen wird muss jedoch einen
          Access Key implementieren -->
        <default target="entity_name" attr="access_key_value" ></default>
        
        
        <!-- Unique, definiert, dass der Wert in einem Datensatz unique sein muss -->
        <unique />
      
      </attribute>

      
  </attributes>
  

  </entity>
</entities>
<?php display_highlight( 'xml' ); ?>


<h3>UI Elemente</h3>

<p>
Nicht jedes Element ist mit jedem Datentype kompatibel.
Mit etwas gesundem Menschenverstand dürfte es nicht zu schwer fallen unsinnige
Kombinationen zu vermeiden.
</p>

<label>Momentan vorhandene UI Typen</label>
<ul>
  <li>Autocomplete</li>
  <li>Bitmask</li>
  <li>Checkbox</li>
  <li>Color</li>
  <li>Date</li>
  <li>Email</li>
  <li>File</li>
  <li>FileImage</li>
  <li>Guess</li>
  <li>Hidden</li>
  <li>ImageFile</li>
  <li>Input</li>
  <li>Integer</li>
  <li>Money</li>
  <li>Numeric</li>
  <li>Password</li>
  <li>Percent</li>
  <li>Priority</li>
  <li>Progress</li>
  <li>Radio</li>
  <li>Ratingbar</li>
  <li>Selectbox</li>
  <li>Text</li>
  <li>Textarea</li>
  <li>Time</li>
  <li>Timestamp</li>
  <li>Url</li>
  <li>Uuid</li>
  <li>Window</li>
  <li>Wysiwyg</li>
</ul>

