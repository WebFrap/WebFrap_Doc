<h1>Matrix</h1>



<p>Matrix elements</p>

<label>Hier wäre ein super Platz für ein Codebeispiel</label>
<?php start_highlight(); ?>
<_..._>
<ui>
  <list>

    <matrix>

      <!-- definieren der zell typen -->
      <cells>

        <cell type="counter" >
          <icon src="control/sum.png" alt="Sum" />
          <action type="edit" />
          <tooltip>
            <text lang="de" >Summe der XY in relation zur aktuellen Wahl.</text>
          </tooltip>
          <field name="rowid" />
        </cell>

        <cell type="value" >
          <icon src="control/text.png" alt="Title list"  />
          <action type="edit" />
          <tooltip>
            <text lang="de" >Kurzstext liste</text>
          </tooltip>
          <fields>
            <key name="rowid" />
            <label name="title" />
          </fields>
        </cell>

        <cell type="tile" >
          <icon src="control/tile.png" />
          <action type="edit" />
          <tooltip>
            <text lang="de" >Kacheln</text>
          </tooltip>
          <fields>

            <key name="rowid" />

            <title name="title" />

            <left>
              <field name="f1" />
              <field name="f2" />
            </left>

            <right>
              <field name="f3" />
              <field name="f4" />
            </right>

            <content>
              <field name="f1" />
              <field name="f2" />
              <field name="f3" />
              <field name="f4" />
            </content>

            <bottom name="title" />

          </fields>
        </cell>

      </cells>
    </matrix>

  </list>
</ui>
</_..._>
<?php display_highlight( 'xml' ); ?>