<h1>State Forms</h1>

<p>Über Stateforms lassen sich basierend auf einem Status key Datensätez von referenzierten
Tabellen als Form einbinden.</p>

<label>Hier wäre ein super Platz für ein Codebeispiel</label>
<?php start_highlight(); ?>
<_..._>
  <item
    name="my_form"
    type="user_form"
    source="project_story_rating"
    source_id="id_story"
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
</_..._>
<?php display_highlight( 'xml' ); ?>
