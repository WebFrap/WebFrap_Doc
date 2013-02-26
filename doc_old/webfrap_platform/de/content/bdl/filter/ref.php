
<h1>Ref Filter</h1>

<p>Ref Filter verweisen auf eine Referenz</p>

<label>Beispiel</label>
<?php start_highlight(); ?>
<_..._>
  <ui>
    <list>
      <filter>
      
        <params>
          <param name="id_project" />
        </params>
      
        <check type="ref" key="project" >

        </check>
        
      </filter>
    </list>
  </ui>
</_..._>
<?php display_highlight( 'xml' ); ?>