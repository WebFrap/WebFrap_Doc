<h1>Definieren von Standard Werten in Attributen</h1>

<p>Definieren von Standardwerten in Attributen</p>

<h2>Statische Werte</h2>

<p>Es wird einfach der Wert in einem Default Tag angegebene.</p>

<?php start_highlight(); ?>
<_..._>
  <attribute name="example_number"  >
    <default>22</default>
  </attribute>
</_..._>
<?php display_highlight( 'xml' ); ?>

<p>Bei referenzen benötigt der zu referenzierende Wert einen Access Key.</p>

<?php start_highlight(); ?>
<_..._>
  <attribute name="id_type"  >
    <default>type_42</default>
  </attribute>
</_..._>
<?php display_highlight( 'xml' ); ?>

<p>Darüber hinaus kann jedoch auch expliziet auf einen Wert verwiesen werden.</p>

<?php start_highlight(); ?>
<_..._>
  <attribute name="some_value"  >
    <default target="entity_name" attr="name_of_the_attribute" >type_42</default>
  </attribute>
</_..._>
<?php display_highlight( 'xml' ); ?>


<h2>Dynamische Defaults</h2>

<p>Der aktuell eingeloggte User kann referenziert werden.</p>

<?php start_highlight(); ?>
<_..._>
  <attribute name="id_user"  >
    <default type="user"  />
  </attribute>
</_..._>
<?php display_highlight( 'xml' ); ?>


<p>Zusätzlich sind Datum und Zeitangaben möglich</p>
<p>Zu den Formaten siehe: <a href="http://www.php.net/manual/de/dateinterval.format.php" rel="nofollow" >http://www.php.net/manual/de/dateinterval.format.php</a></p>

<?php start_highlight(); ?>
<_..._>

  <!-- Absolute Defaults können direkt ohne die Nutzung des Datetypes angegeben werden -->

  <!-- now -->
  <attribute name="some_date"  >
    <default type="date" ></default>
  </attribute>
  
  <!-- now + x -->
  <attribute name="some_date"  >
    <default type="date" add="" ></default>
  </attribute>
  
  <!-- now -x -->
  <attribute name="some_date"  >
    <default type="date" sub=""  ></default>
  </attribute>

</_..._>
<?php display_highlight( 'xml' ); ?>