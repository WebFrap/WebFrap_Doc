<h2>Color Source</h2>

<p>
Über <span>color_source</span> kann einen Quelle für Farben im Listenelement
definiert werden. Es ist immer nur eine Farbquelle möglich.
Wenn in der Farbquelle für den aktuellen Zustand keine Farbinformationen hinterlegt 
sind fällt das System auf die Standardfärbung für den Datensatz zurück.
</p>

<p>Über <span class="attribute" >attribute</span> kann auf die Farbquelle verlinkt
werden. Die Tabelle wird dann wenn nicht schon vorhanden automatisch dazu gejoint
und die Farbinformationen werden pro Eintrag ausgelesen.</p>

<h3>Example</h3>
<?php start_highlight(); ?>
<_..._>
  <ui>
    <list>
      <!-- geht innerhalb oder auserhalb eines contextes -->
      <color_source attribute="id_status" >
        <background field="bg_color"  />
        <text field="text_color" />
        <border field="border_color" />
      </color_source>
    </list>
  </ui>
</_..._>
<?php display_highlight( 'xml' ); ?>

<p>
Es müssen nicht alle farbwerte verwendet werden, sinnvollerweise jedoch mindestens
einer. Wenn z.B. nur die Schrift eingefärbt werden soll werden die anderen Werte einfach weggelassen.
</p>

<h3>Beispiel Schrift</h3>
<?php start_highlight(); ?>
<_..._>
  <ui>
    <list>
      <!-- geht innerhalb oder auserhalb eines contextes -->
      <color_source attribute="id_status" >
        <text field="text_color" />
      </color_source>
    </list>
  </ui>
</_..._>
<?php display_highlight( 'xml' ); ?>

