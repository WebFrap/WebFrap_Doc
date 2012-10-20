<h1>Color Source</h1>

<p>
  Color Source deklariert die Entity als Informationsträger für Farbprofile.
  Diese Profile können z.B. bei Typen, Categories... etc. eingesetzt werden
  um Listen anhand des Types, der Category... etc. des Datensatzes einzufärben.
</p>

<label>Der Konzept Knoten</label>
<?php start_highlight(); ?>
<entities>
  <entity name="name" >
    
    <concepts>
      <concept name="color_source" >
        <!-- optional: wenn vorhanden  -->
        <highlight_able />
        <select_able />
        <stripped />
      </concept>
    </concepts>

  </entity>
</entities>
<?php display_highlight( 'xml' ); ?>


<label>Der erzeugte Modell Knoten</label>
<?php start_highlight(); ?>
<entities>
  <entity name="name" >
    
    <attributes>
      
      <!-- Die Standardmäßig hinzugefügten Attribute -->
      <attribute name="bg_color" is_a="color" >
        <label>
          <text lang="de" >Hintergrundfarbe</text>
          <text lang="en" >Background Color</text>
          <text lang="af" >Agtergrondkleur</text>
          <text lang="yi" >באַקקגראָונדקאָלאָר</text>
          <text lang="fr" >Couleur de Fond</text>
          <text lang="it" >Colore di Sfondo</text>
          <text lang="ma" >боја на позадината</text>
          <text lang="pl" >kolor tła</text>
          <text lang="es" >el color de fondo</text>
        </label>
        <categories main="color_source" />
      </attribute>

      <attribute name="text_color" is_a="color" >
        <label>
          <text lang="de" >Text Farbe</text>
          <text lang="en" >Font Color</text>
          <text lang="fr" >Couleur du Texte</text>
          <text lang="es" >el color del texto</text>
        </label>
        <categories main="color_source" />
      </attribute>

      <attribute name="border_color" is_a="color" >
        <label>
          <text lang="de" >Rahmen Farbe</text>
          <text lang="en" >Border Color</text>
          <text lang="fr" >couleur de la bordure</text>
          <text lang="es" >borde de color</text>
          <text lang="pl" >kolor obramowania</text>
        </label>
        <categories main="color_source" />
      </attribute>
      
      <!-- Dieser Teil wird nur hinzugefügt wenn "highlight_able" gesetzt wurde  -->
      <attribute name="bg_color_highlight" is_a="color" >
        <label>
          <text lang="de" >Hintergrundfarbe Aktiv</text>
          <text lang="en" >Background Color Active</text>
        </label>

        <categories main="color_source" />
      </attribute>

      <attribute name="text_color_highlight" is_a="color" >
        <label>
          <text lang="de" >Text Farbe Aktiv</text>
          <text lang="en" >Font Color Active</text>
        </label>
        <categories main="color_source" />
      </attribute>

      <attribute name="border_color_highlight" is_a="color" >
        <label>
          <text lang="de" >Rahmen Farbe Aktiv</text>
          <text lang="en" >Border Color Active</text>
        </label>
        <categories main="color_source" />
      </attribute>
      
      <!-- Dieser Teil wird nur hinzugefügt wenn "select_able" gesetzt wurde  -->
        <attribute name="bg_color_selected" is_a="color" >
          <label>
            <text lang="de" >Hintergrundfarbe Markiert</text>
            <text lang="en" >Background Color Selected</text>
          </label>

          <categories main="color_source" />
          
        </attribute>
        
        <attribute name="text_color_selected" is_a="color" >
          <label>
            <text lang="de" >Text Farbe Markiert</text>
            <text lang="en" >Font Color Selected</text>
          </label>
          <categories main="color_source" />
        </attribute>
        
        <attribute name="border_color_selected" is_a="color" >
          <label>
            <text lang="de" >Rahmen Farbe Markiert</text>
            <text lang="en" >Border Color Selected</text>
          </label>
          <categories main="color_source" />
        </attribute>
      
      <!-- Dieser Teil wird nur hinzugefügt wenn "stripped" gesetzt wurde  -->
      <attribute name="bg_color_2" is_a="color" >
        <label>
          <text lang="de" >Hintergrundfarbe 2</text>
          <text lang="en" >Background Color 2</text>
        </label>

        <categories main="color_source" />

      </attribute>

      <attribute name="text_color_2" is_a="color" >
        <label>
          <text lang="de" >Text Farbe 2</text>
          <text lang="en" >Font Color 2</text>
        </label>
        <categories main="color_source" />
      </attribute>

      <attribute name="border_color_2" is_a="color" >
        <label>
          <text lang="de" >Rahmen Farbe 2</text>
          <text lang="en" >Border Color 2</text>
        </label>
        <categories main="color_source" />
      </attribute>
      
    </attributes>

  </entity>
</entities>
<?php display_highlight( 'xml' ); ?>