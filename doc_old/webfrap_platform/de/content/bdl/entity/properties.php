<h1>Properties</h1>

<p>Eigenschaften einer Entity</p>


<h2>relevance</h2>

<p>
Kategorisieren der Entities in A/B/C Entities.

Default is D-1

<ul>
  <li>d (domain): Hauptdatensätze ( Projekt, User, Company )
    <ul>
      <li>d-1: Hauptknoten welche eigene Berechtigungen brauchen</li>
      <li>d-2: Datenknoten welche eindeutig zu einem Hauptknoten zugewiesen sind, aber trotzdem eigene Berechtigungen benötigen</li>
      <li>d-3: Datenknoten welche eindeutig einem Hauptknoten zugewiesen sind und keine eigenen Berechtigungen benötigen</li>
    </ul>
  </li>
  <li>c (core_data):  Status, Kategorie
    <ul>
      <li>c-1: mit crud, listen und tabellen etc</li>
      <li>c-2: nur crud und selection</li>
    </ul>
  </li>
  <li>s (system): 
    <ul>
      <li>s-1: mit crud, listen und tabellen etc</li>
      <li>s-2: nur crud und selection</li>
      <li>s-3: nur crud und selection</li>
      <li>s-4: nur Entity, und Metadata</li>
    </ul>
  </li>
</ul>

</p>

<pre>
      // domaindata
      'd-1' => array // haupt datensätze
      (
        'crud',
        'acl',
        'acl_dset',
        'acl_domain',
        'list',
        'selection',
        'maintenance',
        'export',
        'global_menu'
      ),
      'd-2' => array
      (
        'crud',
        'acl',
        'acl_dset',
        'acl_domain',
        'list',
        'selection',
        'maintenance',
        'export',
        'global_menu'
      ),
      'd-3' => array
      (
        'crud',
        'selection',
      ),
      
      // coredata
      'c-1' => array
      (
        'crud',
        'list',
        'selection',
        'global_menu'
      ),
      'c-2' => array
      (
        'crud',
        'selection',
      ),
      
      // Systemdata mit eigenen acls
      's-1' => array
      (
        'crud',
        'acl',
        'acl_dset',
        'acl_domain',
        'list',
        'selection',
        'maintenance',
        'global_menu',
      ),
      's-2' => array // keine acls aber liste und globales menü
      (
        'crud',
        'list',
        'selection',
        'global_menu',
      ),
      's-3' => array // crud & selection
      (
        'crud',
        'selection',
      ),
      's-4' => array // nothing
      (
      
      ),
</pre>



<label>Hier wäre ein super Platz für ein Codebeispiel</label>
<?php start_highlight(); ?>
<entities>
  <entity name="example" type="" relevance="d-1" >
  </entity>
</entities>
<?php display_highlight( 'xml' ); ?>