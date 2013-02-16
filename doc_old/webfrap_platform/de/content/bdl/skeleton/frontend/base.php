
<h1>Skeleton Frontend</h1>

<p>Frontend Skeletons beschreiben Frontend MVC konstrukte</p>

<label>Kleines Fronten Beispiel</label>
<?php start_highlight(); ?>
<?xml version="1.0" encoding="UTF-8"?>
<bdl>
<skeletons>

  <skeleton 
    name="shop_front-article" 
    type="frontend"
    gen_type="base" >
    
    <description>
      <text lang="de" >Shop Frontend zum anzeigen dynamischer Inhalte aus dem CMS.</text>
    </description>
  
    <access>
      <default type="public" />
    </access>

    <services>

      <service name="show" >
        
        <views>
          <view type="frontend" />
        </views>
        
        <methodes>
          <method type="get" />
        </methodes>
        
        <request>
          <parameters>
            <parameter name="key" validator="ckey" required="true" >
              <error status="400" >
                <text lang="de" >Es wurde keine Seite spezifiziert.</text>
              </error>
            </parameter>
          </parameters>
        </request>
        
      </service>
      
      <service name="search_form" >
        
        <views>
          <view type="frontend" />
        </views>
        
        <methodes>
          <method type="get" />
        </methodes>
        
      </service>
      
      <service name="search_result" >
        
        <views>
          <view type="frontend" />
          <view type="area" />
        </views>
        
        <methodes>
          <method type="get" />
        </methodes>
        
      </service>
     
      
    </services>

  </skeleton>

</skeletons>
</bdl>
<?php display_highlight( 'xml' ); ?>