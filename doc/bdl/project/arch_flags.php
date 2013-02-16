
<h1>Architecture Flags</h1>

<p>Über Architecture Flags kann gesteuert werden welche Teile der Cartridge verwendet werden sollen.</p>

<label>Integration</label>
<?php start_highlight(); ?>
<bdl>
  <project>
    <architecture version="" key="wbf" >
      <list_search type="dropdown" />
    </architecture>
  </project>
</bdl>
<?php display_highlight( 'xml' ); ?>

<label>Benutzung in der Cartridge</label>
<?php start_highlight(); ?>

/**
 * @param string $key Flagkey
 * @param string $subKey Key des Attributes, wenn nicht vorhanden wird der Textwert genommen
 * @param string $def Default Value welcher verwendet wird wenn keine Daten zur Flag vorhanden sind
 * @return string
 */
//public function getArchitectureFlag( $key, $subKey = null, $def = null )
  
// Catridges und Generatoren sollten alle das Project auf $builder haben
$value = $this->builder->getArchitectureFlag( 'grid_filter', 'type', 'buttons' );

// Statischer Zugriff ist theoretisch auch möglich, aber wenn der nötig wird stimmt vermutlich was nicht
$value = LibGenfBuild::getDefault()->getArchitectureFlag( 'grid_filter', 'type', 'buttons' );

<?php display_highlight( 'php' ); ?>

<label>Liste der Flags</label>
<ul class="doc-tree" >
  <li><span>list_search</span>
    <ul>
      <li><span>type, def: buttons</span>
        <ul>
          <li>dropdown</li>
          <li>buttons</li>
        </ul>
      </li>
    </ul>
  </li>
  <li><span>desktop</span>
    <ul>
      <li><span>type, def: treenav</span>
        <ul>
          <li>treenav</li>
          <li>meganav</li>
        </ul>
      </li>
    </ul>
  </li>
  <li><span>mask</span>
    <ul>
      <li><span>controls, def: buttons</span>
        <ul>
          <li>buttons</li>
          <li>splitbutton</li>
        </ul>
      </li>
    </ul>
  </li>
  <li><span>crud_dataset</span>
    <ul>
      <li><span>tabhead, def: tab</span>
        <ul>
          <li>tab</li>
          <li>accordion</li>
        </ul>
      </li>
    </ul>
  </li>
  <li><span>listing</span>
    <ul>
      <li><span>menu_type, def: buttons</span>
        <ul>
          <li>buttons</li>
          <li>dropdown</li>
        </ul>
      </li>
    </ul>
  </li>
</ul>