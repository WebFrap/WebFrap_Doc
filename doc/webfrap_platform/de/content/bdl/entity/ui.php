<h2>Ui</h2>

<p>
Über die <span class="bdl" >ui</span> Angaben kann die spätere 
Applikation umfangreich gecustomized werden. Da es möglich ist direkt
HTML einzubinden ist praktisch alles möglich was irgendwie Sinn macht.
</p>


<label>Entity nicht im Menü anzeigen</label>
<?php start_highlight(); ?>
  <ui>
    <global>
      <menutree type="disabled" />
    </global>
  </ui>
<?php display_highlight( 'xml' ); ?>



<label>Actions</label>
<?php start_highlight(); ?>
  <ui>
    <actions>
      <action type="table" status="false" />
      <action type="list" status="false" />
    <actions>
  </ui>
<?php display_highlight( 'xml' ); ?>
