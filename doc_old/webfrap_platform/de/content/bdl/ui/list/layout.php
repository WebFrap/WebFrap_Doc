<h1>Layout</h1>

<p>
  Über das Layout können die Listenelemente gecustomized werden.
  Das <span class="bdl" >layout</span> ist optional.
  Wenn es nicht vorhanden ist verwendet das System automatisch die 
  <span class="bdl" >display</span> Eigenschaften der Attribute.
</p>

<h2>Cols</h2>

<p>
Es gibt verschiedene spezielle Col-Typen, allerdings kann eine Col auch als
reiner Container verwendet werden.
</p>

<label>Col Types</label>
<ul class="doc_tree" >
  <li><span>Field</span> Default, wenn eine name Attribut gesetz wurde, wird
    das Feld angezeigt, wenn nur ein Label gesetzt wurde, verhält sich die Col
    wie ein Container.
  </li>
  <li><span>Check</span></li>
  <li><span>Menu</span></li>
  <li><span>Ref</span></li>
  <li><span>Roles</span></li>
</ul>

<h3>Values</h3>

<p>Mit den Values können auf bestimmte Attribute der Datenquelle zugegriffen werden.</p>

<label>Example</label>
<?php start_highlight(); ?>
<_..._>
  <row>
    <!-- Wenn die Col ein name Attribute hat repräsentiert sie exklusiv diesen einen Wert -->
    <col name="acronym" order="asc" ></col>
    
    <!-- Wenn eine Col nur ein Label hat ist sie erst einmal leer und muss
    mit den layout tags befüllt werden -->
    <col label="name" >
      <!-- die value tags repräsentieren ein attribute auf der datenquelle -->
      <value name="name" /><nl />
      <!-- Es können wie hier leicht zu sehen ist auch mehrere Values in eine
      Zelle gepackt werden -->
      <value name="title" />
    </col>
    <col label="status"  >
      <!-- sortieren nach dem name feld der status referenz -->
      <value name="id_status" field="name" />
    </col>
    <col label="task" >
      <value name="name" ref="root_task" /><nl />
      <value name="id_status" field="name" ref="root_task" />
    </col>
  </row>
</_..._>
<?php display_highlight( 'xml' ); ?>


<h3>Breite</h3>

<p>Die Breite der Spalten kann mit dem <span class="attribute" >width</span> Attribute festgelegt werden.
Wenn keine <span class="attribute" >unit</span> definiert wird, wird die Breite in px verwendet.</p>

<h3>Sortierung</h3>

<p>
  Wenn um <span class="bdl" >layout</span> auf den Cols keine Sortierung defniert wurde, sucht das System
  in <span class="bdl_path" >ui/list/order_by</span>. Wenn auch dort keine Informationen hinterlegt
  sind wird automatisch nach dem PK sortiert und es besteht keine Möglichkeit die
  Sortierung im UI Element zu ändern.
</p>

<p>
  Angaben zu Sortierung müssen auf der <span>col</span> angelegt werden. 
  Wenn die <span>col</span> ein Container ist muss zusätzlich das <span>order_field</span> definiert werden,
  da sonst nicht eindeutig ist auf welches Feld sich die Order beziehen soll.<br />
  Wenn sich das Feld darüber hinaus nicht auf der Hauptddatenquelle befindet
  muss weiter einer <span>order_src</span> gegeben werden, 
  da sonst das Feld nicht eindeutig zu bestimmen ist.
</p>

<ul class="doc_tree">
  <li>asc</li>
  <li>desc</li>
  <li>none</li>
</ul>

<label>Example</label>
<?php start_highlight(); ?>
<_..._>
  <row>
    <col name="acronym" order="asc" ></col>
    <col label="name" order="desc" order_attr="name" >
      <value name="name" /><nl />
      <value name="title" />
    </col>
    <col label="status" order_attr="id_status" order_ref_attr="name" >
      <!-- sortieren nach dem name feld der status referenz -->
      <value name="id_status" />
    </col>
    <col label="task" order_attr="name" order_ref="root_task" >
      <value name="name" ref="root_task" /><nl />
      <value name="title" ref="root_task"/>
    </col>
  </row>
</_..._>
<?php display_highlight( 'xml' ); ?>


<h3>Inner List Search</h3>

<p>Suchfelder im Grid Head</p>

<label>Liste der Attribute</label>
<ul class="doc_tree" >
  <li><span>search</span> </li>
  <li><span>search_fields</span> </li>
  <li><span>search_attr</span> </li>
  <li><span>search_ref_attr</span> </li>
  <li><span>search_ref</span> </li>
  <li><span>search_sensitivity</span> </li>
  <li><span>search_not</span> </li>
</ul>


<label>Typen</label>
<ul class="doc_tree" >
  <li><span>equals</span> Standard bei Zahlen und Zeitangaben</li>
  <li><span>like</span> Standard bei Textwerten</li>
  <li><span>start_with</span> Textwerte</li>
  <li><span>end_with</span> Textwerte</li>
  <li><span>bigger</span> Datum, Zahlen</li>
  <li><span>smaller</span> Datum, Zahlen</li>
  <li><span>between</span> Bei Datumsangaben, bzw. Min/Max Werten</li>
  <li><span>in</span> Bei Multiplen Search Parametern, zb. bei Selectboxen</li>
</ul>

<label>Sensivity</label>
<ul class="doc_tree" >
  <li><span>strict</span> Wert muss exact dem entsprechen was gesucht wurde</li>
  <li><span>text</span> Suche ist Case Insensitiv</li>
  <li><span>full</span> Volltextindex (not yet implemented)</li>
  <li><span>fuzzy</span> Fuzzy Search (not yet implemented)</li>
</ul>

<label>Mehrere Suchfelder</label>

<p>ref_type/src:attr.ref_attr;</p>

<label>Example</label>
<?php start_highlight(); ?>
<_..._>
  <row>
    <col name="acronym" search="equals" ></col>
    <col label="name" search="like" search_sensitivity="text" search_attr="name" >
      <value name="name" /><nl />
      <value name="title" />
    </col>
    <!-- Mit search_not kann die Suche negiert werden: Zeige nur Einträge and die NICHT dem suchwort entsprechen -->
    <col label="status" search_attr="id_status" search_ref_attr="name" search_not="" >
      <!-- suchen nach dem name feld der status referenz -->
      <value name="id_status" />
    </col>
    <col label="task" search_ref_attr="name" search_ref="root_task" >
      <value name="name" ref="root_task" />
    </col>
    
    <!-- Suche soll über mehrere felder gehen -->
    <col label="task_multi" search_fields="root_task:name;root_task:title"  >
      <value name="name" ref="root_task" /><nl />
      <value name="title" ref="root_task"/>
    </col>
    
  </row>
</_..._>
<?php display_highlight( 'xml' ); ?>




<h3>Gesamt Beispiel</h3>

<label>Code Beispiel für ein Table Layout</label>
<?php start_highlight(); ?>
<_..._>
<ui>
  <list>
    
    <!-- 
    Customizing der Tabelle. 
    Andere potentiell vorhandenen Listenelemente sind davon nicht betroffen  
    -->
    <table>
    
      <layout>
        <!-- Im Moment unterstützen Listenelemente nur eine row -->
        <row>
          <col label="name" width="250" >
            <value name="name" action="edit" /><nl />
            <value tag="em" name="title" action="edit" />
          </col>
          <col name="id_category" field="name" width="150" ></col>
          <col label="status" width="80" >
            <value name="id_status" >
              <ui_element type="process" />
            </value>
          </col>
          <col  label="schedule" width="80" >
            <text>Start: </text><value name="start_date" src="root_task" /><nl />
            <text>End: </text><value name="end_date" src="root_task" />
          </col>
          <col label="Manager"  >
            <roles name="manager" >
              <display>
                <role name="owner" />
                <role name="project_manager" />
              </display>
            </roles>
          </col>
          <col type="ref" label="tasks" target="tasks" >
            <reference name="tasks" target="tasks"  >
              <field tag="i" name="name" />
            </reference>
          </col>
          <col label="description" width="250" >
            <value name="description" />
          </col>
          <col type="menu" />
        </row>
      </layout>

    </table>
    
  </list>
</ui>
</_..._>
<?php display_highlight( 'xml' ); ?>



<h3>Besonderheiten in Referenz Layouts</h3>

<p>
Bei Many To Many Referenz Listenelementen ist eine Besonderheit zu beachten.
Die Values könnten auf der connection oder der target Entity liegen.
</p>

<?php start_highlight(); ?>
<_..._>
<ui>
  <list>

    <table>
    
      <layout>
        <row>
          <col label="Key" width="250" >
            <!-- access_key liegt auf der connection entity: kein ref_type -->
            <value name="access_key" action="edit" />
          </col>
          <col 
            label="Name" 
            width="250"
            search_fields="target/name" >
            <!-- 
              Bei many to many Referenzen muss per ref_type=target
              deklariert werden, dass das gewünschte Feld sich auf der Target
              entity befindet.
              
              Values ohne ref_type werden auf der connection entity gesucht
            
             -->
            <value name="name" ref_type="target" />
          </col>
          <col label="category" width="150" >
            <value name="id_category" field="name" />
          </col>
          <col type="menu" />
        </row>
      </layout>

    </table>
    
  </list>
</ui>
</_..._>
<?php display_highlight( 'xml' ); ?>