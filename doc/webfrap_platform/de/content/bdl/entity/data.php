<h1>Data Tag</h1>

<p>Über das Datatag können Standard/Stammdaten direkt im Modell hinterlegt werden.
Das ist vor allem bei vordefinierten Status, Type und Category Tabellen sinnvoll,
da diese immer mit den gleichen Daten befüllt werden.
</p>
<p>
Darüber hinaus sollten auch alle Daten die für das Routing in der Applikation
relevant sind fest in Modell vordefiniert werden, um später die volle 
Funktionalität sicher stellen zu können.
</p>

<p>Ebenfalls hinterlegt werden sollten Modul Settings.</p>



<h3>Einfaches Beispiel</h3>
<?php start_highlight(); ?>
<?xml version="1.0" encoding="UTF-8"?>
<bdl>
  <entities>

    <entity name="wbfsys_module_setting" >

      <data>
        <body>
          
          <row key="cms_def_page" >
            <val name="value" >default</val>
            <val name="id_module" >cms</val>
            <val name="description" >Default page for the cms</val>
          </row>
          
          <row key="cms_def_project" >
            <val name="value" >default</val>
            <val name="id_module" >cms</val>
            <val name="description" >Default project to use for the cms</val>
          </row>
          
        </body>
      </data>
      
    </entity>

  </entities>
</bdl>
<?php display_highlight( 'xml' ); ?>