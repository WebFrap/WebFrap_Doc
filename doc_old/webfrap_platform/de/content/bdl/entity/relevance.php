<h1>Relevance</h1>

<p>Die Relevanz einer Entity / eines Management Nodes hat einfluss darauf welche Architekturelemente 
für diesen Managment Node generiert werden.</p>

<ul>
  <li><span class="keyword" >d</span>: Domain Datenknoten, haben starken bezug zu einer Domain. Snd die Nutzdaten des Systems</li>
  <li><span class="keyword" >c</span>: Core Datenknoten, sind im Grnde Domain Nodes, gehöhren aber zu den Stammdaten und werden sehr stark aus anderen Domains referenziert.</li>
  <li><span class="keyword" >s</span>: System Datenknoten, werden nahezu ausschlieslich für die implementierung von technischen Features verwenden</li>
</ul>

<ul>

  <li><span>d-1</span> haupt datensätze
    <ul>
      <li>crud</li>
      <li>acl</li>
      <li>acl_dset</li>
      <li>acl_domain</li>
      <li>list</li>
      <li>table</li>
      <li>treetable</li>
      <li>selection</li>
      <li>maintenance</li>
      <li>export</li>
      <li>global_menu</li>
      <li>access_protocol_list</li>
      <li>access_protocol_dataset</li>
    </ul>
  </li>
  <li><span>d-2</span>
    <ul>
      <li>crud</li>
      <li>acl</li>
      <li>acl_dset</li>
      <li>acl_domain</li>
      <li>list</li>
      <li>table</li>
      <li>treetable</li>
      <li>selection</li>
      <li>maintenance</li>
      <li>export</li>
      <li>global_menu</li>
      <li>access_protocol_list</li>
      <li>access_protocol_dataset</li>
    </ul>
  </li>
  <li><span>d-3</span>
    <ul>
      <li>crud</li>
      <li>selection</li>
      <li>maintenance</li>
      <li>export</li>
      <li>global_menu</li>
      <li>access_protocol_list</li>
      <li>access_protocol_dataset</li>
    </ul>
  </li>
  <li><span>d-3-m</span>
    <ul>
      <li>crud</li>
      <li>selection</li>
      <li>global_menu</li>
      <li>access_protocol_list</li>
    </ul>
  </li>

      
      // coredata
      'c-1' => array
      (
        'crud',
        'list',
        'table',
        'treetable',
        'selection',
        'global_menu',
        'access_protocol_list',
        'access_protocol_dataset'
      ),
      'c-2' => array
      (
        'crud',
        'selection',
        'access_protocol_list',
      ),
      
      // Systemdata mit eigenen acls
      's-1' => array
      (
        'crud',
        'acl',
        'acl_dset',
        'acl_domain',
        'list',
        'table',
        'export',
        'treetable',
        'selection',
        'maintenance',
        'global_menu',
        'access_protocol_list',
        'access_protocol_dataset'
      ),
      's-2' => array // sekundäre daten die über das window element zugewiesen werden
      (
        'crud',
        'list',
        'table',
        'treetable',
        'selection',
        'global_menu',
        'access_protocol_list',
        'access_protocol_dataset'
      ),
      's-2-s' => array // für types, status, categories und sonstige metadaten die 
      ( // vor allem über selectboxes oder autocomplete geladen werden
        'crud',
        'list',
        'table',
        'treetable',
        'global_menu'
      ),
      's-3' => array // crud & selection
      (
        'crud',
        'selection',
        'access_protocol_list'
      ),
      /**
       * Werden nur als referenzen eingebunden
       */
      's-3-r' => array 
      (
        'crud',
        'selection',
        'access_protocol_list',
      ),
      's-4' => array // nothing
      (
      
      ),

</ul>