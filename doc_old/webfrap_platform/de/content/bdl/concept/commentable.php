<h1>CommentAble</h1>

<p>
  CommentAble bewirkt, dass eine Comment Reference an die Entity angehängt
  wird.<br />
  Wenn keine weiteren UI Informationen vorhanden sind, wird die Reference 
  Standardmäßig als Comments Tab angezeigt.
</p>

<label>Der Konzept Knoten</label>
<?php start_highlight(); ?>
<entities>
  <entity name="name" >
    
    <concepts>
      <concept name="commen_table" />
    </concepts>

  </entity>
</entities>
<?php display_highlight( 'xml' ); ?>


<label>Der erzeugte Modell Knoten</label>
<?php start_highlight(); ?>
<entity name="{$entName}" >
  <references>
    <ref name="comments" binding="connected"  relation="manyToMany" >
      <label>
        <text lang="de">Kommentare</text>
        <text lang="en">Comments</text>
      </label>
      <src        name="{$entName}"  id="vid" ></src>
      <connection name="wbfsys_entity_comment"     ></connection>
      <target     name="wbfsys_comment"   id="id_comment" ></target>

      <ui>

        <controls>
          <action name="create" status="true"  />
          <action name="connect" status="false"  />
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
<?php display_highlight( 'xml' ); ?>