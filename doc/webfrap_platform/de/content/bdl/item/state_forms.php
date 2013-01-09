<h1>State Form</h1>

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
    name="actual_phase"
    type="state_form"
    class="task_state_data" >

    <source path="id_status.id_actual_node.access_key" />
    <target path="project_phase.state_key" />
    <user field="id_user" />

    <!-- Standard Layout element  -->
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