
<h2>Project Settings</h2>

<ul class="doc_tree" >

  <li>
    <span>display_button_text</span> (true|false) Flag ob bei den Buttons der Text mit angezeigt
    werden soll oder ob nur ein Icon angezeigt werden soll.
  </li>
  
  <li>
    <span>meta_sec_areas</span> (min|default) Sollen für Attribute und Kategorien auch Sec Areas generiert werden?
  </li>
  
  <li>
    <span>def_module_roles</span> (true|false) Sollen für die Module Standard Admin, Maintenance und User Rollen generiert werden?
  </li>
  
  <li>
    <span>def_profile_roles</span> (true|false) Sollen für die Profile Standard Rollen generiert werden?
  </li>
  
  <li>
    <span>list_context_menu</span> (true|false) Sollen auf den Listenelementen Contextmenüs mitgeneriert werden.
  </li>
  
</ul>


<?php start_highlight(); ?>
<project>
  <settings>
  
    <var key="display_button_text" value="true" />
    
    <var key="meta_sec_areas" value="min" />
    
    <var key="def_module_roles" value="false" />
    
    <var key="def_profile_roles" value="false" />
    
  </settings>
</project>
<?php display_highlight( 'xml' ); ?>