
<h1>Table</h1>

<p>Hier könnte ihre Dokumentation stehen... Wenn sie endlich jemand schreiben würde...</p>

<label>Hier wäre ein super Platz für ein Codebeispiel</label>
<?php start_highlight(); ?>
<_..._>
    <table>
      <layout>
        <row>
          <col
            label="name"
            width="250"
            order_attr="name"
            search_fields="name;title" >
            <value name="name" /><nl />
            <value tag="em" name="title" />
          </col>
          <col
            label="category"
            width="150"
            order_attr="id_category"
            order_ref_attr="name"
            search_fields="id_category.name"  >
            <value name="id_category" field="name" />
          </col>
          <col
            label="status"
            width="80"
            order="desc"
            order_attr="id_status"
            order_ref_attr="m_order" >
            <value name="id_status" >
              <ui_element type="process" />
            </value>
          </col>
          <col  label="schedule" width="100" >
            <!-- order="desc" order_attr="start_date"  order_ref="root_task"  -->
            <text>c: </text><value name="m_time_created" /><nl />
            <text>s: </text><value name="start_date" src="root_task" /><nl />
            <text>e: </text><value name="end_date" src="root_task" />
          </col>
          <col label="Manager" width="220" >
            <roles name="manager" >
              <display>
                <role name="owner" />
                <role name="project_manager" />
              </display>
            </roles>
          </col>
          <col
           type="ref_counter"
           label="tasks"
           target="project_task" >

            <reference type="counter" name="project_task" target="project_task" >
              <groups path="id_develop_status.access_key" >
                <seperator><![CDATA[<br />]]></seperator>
                <group name="open" >
                  <label>
                    <text lang="en" >Open</text>
                  </label>
                  <keys>
                    <key>new</key>
                    <key>accepted</key>
                    <key>checking</key>
                    <key>assigned</key>
                    <key>need_more_information</key>
                    <key>adopt</key>
                    <key>manager_accepted</key>
                    <key>manager_rejected</key>
                    <key>staff_accepted</key>
                    <key>staff_need_more_information</key>
                    <key>staff_rejected</key>
                  </keys>
                </group>
                <group name="running" >
                  <label>
                    <text lang="en" >Running</text>
                  </label>
                  <keys>
                    <key>running</key>
                    <key>observe</key>
                    <key>request_closing</key>
                    <key>need_rework</key>
                  </keys>
                </group>
                <group name="completed" >
                  <label>
                    <text lang="en" >Completed</text>
                  </label>
                  <keys>
                    <key>completed</key>
                    <key>deployed</key>
                  </keys>
                </group>
              </groups>
            </reference>

          </col>
          <col label="description" width="250" >
            <value name="description" />
          </col>
          <col type="menu" />
        </row>
      </layout>

    </table>
</_..._>
<?php display_highlight( 'xml' ); ?>