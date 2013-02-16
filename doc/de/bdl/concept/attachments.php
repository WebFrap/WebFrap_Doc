<h1>Attachments</h1>

<p>
  Attachments bewirkt, dass eine Attachments Reference an die Entity angehängt
  wird.<br />
  Wenn keine weiteren UI Informationen vorhanden sind, wird die Reference 
  Standardmäßig als Attachments Tab angezeigt.
</p>

<label>Der Konzept Knoten</label>
<?php start_highlight(); ?>
<entities>
  <entity name="name" >
    
    <concepts>
      <concept name="attachments" />
    </concepts>

  </entity>
</entities>
<?php display_highlight( 'xml' ); ?>


<label>Der erzeugte Modell Knoten</label>
<?php start_highlight(); ?>
<entities>
  <entity name="{$entName}" >
    <references>
      <ref name="attachments" binding="connected"  relation="manyToMany" >

        <label>
          <text lang="de">Anhänge</text>
          <text lang="en">Attachments</text>
        </label>

        <src        name="{$entName}"  id="vid"  ></src>
        <connection name="wbfsys_entity_attachment"     ></connection>
        <target     name="wbfsys_file"   id="id_file" ></target>

        <ui>

          <controls>
            <action name="create"   status="true"  />
            <action name="connect"  status="true"  />
          </controls>

          <list>
            <table>
              <footer type="simple" />
            </table>
          </list>
        </ui>

      </ref>
    </references>
  </entity>
</entities>
<?php display_highlight( 'xml' ); ?>