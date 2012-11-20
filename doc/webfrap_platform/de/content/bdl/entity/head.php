<h2>Head</h2>

<p>
Über den Head können diverse Eigenschaften der der Entity beschrieben werden,
die Einfluss auf den generierten Code und dessen Architektur haben.

Hier werden vor allem Informationen abgelegt die normalerweise vom Entwickler
on the fly beim programmieren basierend auf persönlichen Erfahrungen und dem Projektkontext
abgeleitet werden, aber so sonst nicht unbedingt dokumentiert oder beschrieben werden.
</p>


<h3>Konfiguration für welche Profile Masken dieser Entity sichtbar sind</h3>
<?php start_highlight(); ?>
<entities>
  <entity>
    
    <head>

      <!--  profiles -->
      <profiles>
        <profile name="developer">
        
          <menu>
            <navigation />
            <explorer />
            <usermenu />
          </menu>
        
        </profile>
      </profiles>
      
    </head>
    
  </entity>
</entities>
<?php display_highlight( 'xml' ); ?>


<h3>Metadaten</h3>

<label>Konfiguration der Metadaten</label>
<?php start_highlight(); ?>
<entities>
  <entity>
    
    <head>
      
      <!-- true|false def: true -->
      <muteable></muteable>
      
      <!-- true|false def: true -->
      <syncable></syncable>
      
      <!-- true|false def: false -->
      <transaction></transaction>
      
      <!-- true|false def: true -->
      <track_creation></track_creation>
      
      <!-- true|false def: true -->
      <track_changes></track_changes>
      
      <!-- true|false def: false -->
      <track_deletion></track_deletion>

    </head>
    
  </entity>
</entities>
<?php display_highlight( 'xml' ); ?>

<h3>Erwartetes Datenvolumen in der Tabelle</h3>

<p>Mit dem erwarteten Datenvolumen kann definiert werden wiviele Informationen 
sich später ca in einer Tabelle befinden werden.
Diese Information hat einen entscheidenten Einfluss auf die Architektur, da sie
relevant für den effizienten Aufbau von Queries, Caches, Sync Nodes etc. ist.
</p>

<ul>
  <li><span>xxsmall</span> 1-20</li>
  <li><span>xsmall</span> 20-100</li>
  <li><span>small</span> 100-500</li>
  <li><span>medium</span> 500-10.000</li>
  <li><span>large</span> 10.000-1.000.000</li>
  <li><span>xlarge</span> 1.000.000-100.000.000</li>
  <li><span>xxlarge</span> &gt; 100.000.000</li>
</ul>

<label>Example</label>
<?php start_highlight(); ?>
<entities>
  <entity>
    
    <head>
      
      <data volume="medium" />
      
    </head>
    
  </entity>
</entities>
<?php display_highlight( 'xml' ); ?>


<h3>Die Standard Maske zum öffnen und auflisten des Datensatzes</h3>

<p>
Die Standard Maske wird verwendet, wenn nicht auf die Maske mit den Entity
Namen verwiesen werden soll, sondern auf eine andere Maske.
</p>

<?php start_highlight(); ?>
<entities>
  <entity>
    
    <head>

      <!--  urls -->
      <urls>
        <default key="mgmt_key" />
      </urls>
      
    </head>
    
  </entity>
</entities>
<?php display_highlight( 'xml' ); ?>

