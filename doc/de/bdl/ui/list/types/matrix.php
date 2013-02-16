<h1>Matrix</h1>



<p>Matrix elements</p>

<label>Hier wäre ein super Platz für ein Codebeispiel</label>
<?php start_highlight(); ?>
<_..._>
<ui>
  <list>

    <matrix>
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
					<icon src="control/text.png" alt="Title list" />
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
							<field name="id_project.name" />
							<field name="id_milestone.name" />
						</left>

						<right>
							<field name="id_develop_status.label" />
							<field name="id_category.name" />
						</right>

						<bottom name="description" />

					</fields>
				</cell>

			</cells>

			<x_axis
			  name="id_project.name"
			  label_attr="id_project.name"  ></x_axis>
      <y_axis
        name="id_develop_status.label"
        label_attr="id_develop_status.label" ></y_axis>

      <group>
        <field name="id_project" />
        <field name="id_milestone" />
        <field name="id_develop_status" />
        <field name="id_category" />
      </group>

    </matrix>

  </list>
</ui>
</_..._>
<?php display_highlight( 'xml' ); ?>