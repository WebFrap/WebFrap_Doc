# Multi Body

Verschiedene Bodies

## Example
<?php start_highlight(); ?>
<ui>
  <list>
    <table>
      <layout group_body="id_category.access_key" >
        <thead>
          <row>
            <col label="name"  ></col>
            <col label="category"  ></col>
            <col label="status"   ></col>
            <col label="description" ></col>
            <col type="menu" />
          </row>
        </thead>
        <tbody case="product" route="" >
          <row>
            <col label="name"  >
              <value tag="em" name="title" />
            </col>
            <col label="category"  >
              <value name="id_category" field="name" />
            </col>
            <col label="status"   >
              <value name="id_status" field="label" >
                <ui_element type="process" />
              </value>
            </col>
            <col label="description" >
              <value name="description" />
            </col>
            <col type="menu" />
          </row>
        </tbody>
        <tbody case="startup" route="" >
          <row>
            <col label="name"  >
              <value tag="em" name="title" />
            </col>
            <col label="category"  >
              <value name="id_category" field="name" />
            </col>
            <col label="status"   >
              <value name="id_status" field="label" >
                <ui_element type="process" />
              </value>
            </col>
            <col label="description" >
              <value name="description" />
            </col>
            <col type="menu" />
          </row>
        </tbody>
        <!-- no case is else -->
        <tbody route="" >
          <row>
            <col label="name"  >
              <value tag="em" name="title" />
            </col>
            <col label="category"  >
              <value name="id_category" field="name" />
            </col>
            <col label="status"   >
              <value name="id_status" field="label" >
                <ui_element type="process" />
              </value>
            </col>
            <col label="description" >
              <value name="description" />
            </col>
            <col type="menu" />
          </row>
        </tbody>
      </layout>

    </table>
  </list>
</ui>
<?php display_highlight( 'xml' ); ?>