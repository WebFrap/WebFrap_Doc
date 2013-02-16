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
      
        <action 
          name="some_action" 
          class="some_log_action_class_name" 
          key="shorter_name_for_code" >
          
          <interface type="type_of_the_interface" />
          <call method="method_on_action_to_call" />
          
        </action>
        
      </event>
      
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
<a href="content.php?page=bdl.action.base#interface-types" target="main" >Siehe Liste der Action Interfaces</a>
</p>


<h3>Code</h3>
<p>
In den Events kann 3GL Code platziert werden. 
Es ist jedoch unbedingt darauf zu achten, dass in diesem Fall
für alle Zielarchitekturen Code hinterlegt werden sollte.
</p>

<h3>Liste der Events</h3>

<h4>CRUD Controller</h4>

<span>crud_controller</span>

<ul>
  <li><span>create</span>
    <ul>
      <li>check_access</li>
      <li>before</li>
      <li>after</li>
      <li>success</li>
      <li>fail</li>
    </ul>
  </li>
  <li><span>edit</span>
    <ul>
      <li>check_access</li>
      <li>before</li>
      <li>after</li>
      <li>success</li>
      <li>fail</li>
    </ul>
  </li>
  <li><span>edit_where</span>
    <ul>
      <li>check_access</li>
      <li>before</li>
      <li>after</li>
      <li>success</li>
      <li>fail</li>
    </ul>
  </li>
  <li><span>show</span>
    <ul>
      <li>check_access</li>
      <li>before</li>
      <li>after</li>
      <li>success</li>
      <li>fail</li>
    </ul>
  </li>
  <li><span>data</span>
    <ul>
      <li>check_access</li>
      <li>before</li>
      <li>after</li>
      <li>success</li>
      <li>fail</li>
    </ul>
  </li>
  <li><span>append</span>
    <ul>
      <li>check_access</li>
      <li>before</li>
      <li>after</li>
      <li>success</li>
      <li>fail</li>
    </ul>
  </li>
  <li><span>item</span>
    <ul>
      <li>check_access</li>
      <li>before</li>
      <li>after</li>
      <li>success</li>
      <li>fail</li>
    </ul>
  </li>
  <li><span>insert</span>
    <ul>
      <li>check_access</li>
      <li>before</li>
      <li>after</li>
      <li>success</li>
      <li>fail</li>
    </ul>
  </li>
  <li><span>update</span>
    <ul>
      <li>check_access</li>
      <li>check_method_param</li>
      <li>before</li>
      <li>after</li>
      <li>success</li>
      <li>fail</li>
    </ul>
  </li>
  <li><span>listing</span>
    <ul>
      <li>check_access</li>
      <li>before</li>
      <li>after</li>
      <li>success</li>
      <li>fail</li>
    </ul>
  </li>
  <li><span>selection</span>
    <ul>
      <li>check_access</li>
      <li>before</li>
      <li>after</li>
      <li>success</li>
      <li>fail</li>
    </ul>
  </li>
  <li><span>search</span>
    <ul>
      <li>check_access</li>
      <li>before</li>
      <li>after</li>
      <li>success</li>
      <li>fail</li>
    </ul>
  </li>
  <li><span>filter</span>
    <ul>
      <li>check_access</li>
      <li>before</li>
      <li>after</li>
      <li>success</li>
      <li>fail</li>
    </ul>
  </li>
  <li><span>delete</span>
    <ul>
      <li>check_access</li>
      <li>before</li>
      <li>after</li>
      <li>success</li>
      <li>fail</li>
    </ul>
  </li>
  <li><span>text_by_key</span>
    <ul>
      <li>check_access</li>
      <li>before</li>
      <li>after</li>
      <li>success</li>
      <li>fail</li>
    </ul>
  </li>
  <li><span>automplete</span>
    <ul>
      <li>check_access</li>
      <li>before</li>
      <li>after</li>
      <li>success</li>
      <li>fail</li>
    </ul>
  </li>
  <li><span>change_order</span>
    <ul>
      <li>check_access</li>
      <li>before</li>
      <li>after</li>
      <li>success</li>
      <li>fail</li>
    </ul>
  </li>
</ul>

<h4>CRUD Model</h4>

<span>crud_model</span>

<ul>
  <li><span>insert</span>
    <ul>
      <li>before</li>
      <li>begin_transaction</li>
      <li>end_transaction</li>
      <li>after</li>
      <li>success</li>
      <li>fail</li>
      <li>check_method_param</li>
      <li>validate</li>
    </ul>
  </li>
  <li><span>update</span>
    <ul>
      <li>before</li>
      <li>begin_transaction</li>
      <li>end_transaction</li>
      <li>after</li>
      <li>success</li>
      <li>fail</li>
      <li>check_method_param</li>
      <li>validate</li>
    </ul>
  </li>
  <li><span>delete</span>
    <ul>
      <li>before</li>
      <li>begin_transaction</li>
      <li>end_transaction</li>
      <li>after</li>
      <li>success</li>
      <li>fail</li>
    </ul>
  </li>
</ul>

<h4>CRUD Ref Model</h4>

<span>crud_model_ref</span>
<ul>
  <li><span>delete</span>
    <ul>
      <li>before</li>
      <li>begin_transaction</li>
      <li>end_transaction</li>
      <li>after</li>
      <li>success</li>
      <li>fail</li>
    </ul>
  </li>
</ul>

<h4>CRUD Multi Controller</h4>

<span>multi_controller</span>
<ul>
  <li><span>save</span>
    <ul>
      <li>invalid_request</li>
      <li>check_access</li>
      <li>before</li>
      <li>begin_transaction</li>
      <li>end_transaction</li>
      <li>after</li>
      <li>success</li>
      <li>fail</li>
    </ul>
  </li>
  <li><span>insert</span>
    <ul>
      <li>invalid_request</li>
      <li>check_access</li>
      <li>before</li>
      <li>begin_transaction</li>
      <li>end_transaction</li>
      <li>after</li>
      <li>success</li>
      <li>fail</li>
    </ul>
  </li>
  <li><span>update</span>
    <ul>
      <li>invalid_request</li>
      <li>check_access</li>
      <li>before</li>
      <li>begin_transaction</li>
      <li>end_transaction</li>
      <li>after</li>
      <li>success</li>
      <li>fail</li>
    </ul>
  </li>
  <li><span>delete</span>
    <ul>
      <li>invalid_request</li>
      <li>check_access</li>
      <li>before</li>
      <li>begin_transaction</li>
      <li>end_transaction</li>
      <li>after</li>
      <li>success</li>
      <li>fail</li>
    </ul>
  </li>
  <li><span>delete_all</span>
    <ul>
      <li>invalid_request</li>
      <li>check_access</li>
      <li>before</li>
      <li>begin_transaction</li>
      <li>end_transaction</li>
      <li>after</li>
      <li>success</li>
      <li>fail</li>
    </ul>
  </li>
</ul>

<h4>CRUD Maintab Edit Menu</h4>

<span>crud_maintab_edit_menu</span>
<ul>
  <li><span>build_menu</span>
    <ul>
      <li>entries</li>
      <li>end_main_buttons</li>
    </ul>
  </li>
</ul>

<h4>CRUD View Edit Menu</h4>

<span>crud_view_edit_menu</span>
<ul>
  <li><span>build_menu</span>
    <ul>
      <li>entries</li>
      <li>end_main_buttons</li>
    </ul>
  </li>
</ul>

<h4>CRUD Maintab Create Menu</h4>

<span>crud_maintab_create_menu</span>
<ul>
  <li><span>build_menu</span>
    <ul>
      <li>entries</li>
      <li>end_main_buttons</li>
    </ul>
  </li>
</ul>

<h4>CRUD View Create Menu</h4>

<span>crud_view_create_menu</span>
<ul>
  <li><span>build_menu</span>
    <ul>
      <li>entries</li>
      <li>end_main_buttons</li>
    </ul>
  </li>
</ul>

<h4>CRUD Maintab Show Menu</h4>

<span>crud_maintab_show_menu</span>
<ul>
  <li><span>build_menu</span>
    <ul>
      <li>entries</li>
      <li>end_main_buttons</li>
    </ul>
  </li>
</ul>

<h4>CRUD View Show Menu</h4>

<span>crud_view_show_menu</span>
<ul>
  <li><span>build_menu</span>
    <ul>
      <li>entries</li>
      <li>end_main_buttons</li>
    </ul>
  </li>
</ul>

<h4>CRUD Multi Model</h4>

<span>multi_model</span>
<ul>
  <li><span>save</span>
    <ul>
      <li>before_insert</li>
      <li>after_insert</li>
      <li>success_insert</li>
      <li>fail_insert</li>
      <li>before_update</li>
      <li>after_update</li>
      <li>success_update</li>
      <li>fail_update</li>
      <li>before</li>
      <li>after</li>
      <li>success</li>
      <li>fail</li>
    </ul>
  </li>
  <li><span>insert</span>
    <ul>
      <li>before</li>
      <li>after</li>
      <li>success</li>
      <li>fail</li>
    </ul>
  </li>
  <li><span>update</span>
    <ul>
      <li>before</li>
      <li>after</li>
      <li>success</li>
      <li>fail</li>
    </ul>
  </li>
  <li><span>delete_all</span>
    <ul>
      <li>before_delete</li>
      <li>after_delete</li>
      <li>success_delete</li>
      <li>fail_delete</li>
      <li>before</li>
      <li>after</li>
      <li>success</li>
      <li>fail</li>
    </ul>
  </li>
</ul>

