
<h1>Sub Pages</h1>

<p>Hier könnte ihre Dokumentation stehen... Wenn sie endlich jemand schreiben würde...</p>

<h3>Einfaches Beispiel</h3>
<?php start_highlight(); ?>
<pages>

  <page name="sbiz_page" >
    
    <subpage name="welcome" method="GET" >
    
      <title>
        <text lang="de" >Project-Details</text>
        <text lang="en" >Project-Details</text>
      </title>
      
      <master>sbiz_page_default</master>
      
      <layout>
      
        <fieldset>
          <legend></legend>
          
          <form entity="" target="" >
            <input name="" />
            <input name="" />
            <input name="" />
          </form>
          
        </fieldset>
        
      </layout>
      
    </subpage>
          
  </page>
  
</pages>
<?php display_highlight( 'xml' ); ?>