
<h1>User Form</h1>

<p>Das User Form Item.</p>

<label>Code Beispiel mit Integration</label>
<?php start_highlight(); ?>
<_...>
  <!--
    name:
    type:
    source:
    class:
   -->
  <item
    name="my_form"
    type="user_form"
    target="project_story_rating"
    target_id="id_story"
    user_attr="id_user"
    class="personal_rating" >

    <layout>

      <fieldset>
        <legend>Some User Form</legend>

        <div><field name="" /></div>

        <div>
          <submit>
            <label>
              <text lang="en" ></text>
              <text lang="de" ></text>
            </label>
          </submit>
        </div>

      </fieldset>

    </layout>

  </item>
</_...>
<?php display_highlight( 'xml' ); ?>
