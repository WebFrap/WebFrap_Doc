<h2>Order</h2>

<p>
Mit <span class="bdl" >order_by</span> kann die Standard Sortierung der Listenelemente
festgelegt werden. 
</p>

<p>
Diese Sortierung kann durch im UI Elemente definierte Sort Elemente überschrieben
werden. Wird keine UI Element explizit definiert werden diese Informationen
verwendet um Sort Elemente im Default UI Element zu platzieren.
</p>


<label>Example</label>
<?php start_highlight(); ?>

<_..._>
  <ui>
    <list>
      <!-- geht innerhalb oder auserhalb eines contextes -->
      <order_by>
        <!-- per order kann die Sortierrichtung definiert werden, default ist asc 
          desc: Absteigend
          asc:   Aufsteigend
        -->
        <field name="name" order="desc" />
        <field name="title" />
      </order_by>
    </list>
  </ui>
</_..._>

<?php display_highlight( 'xml' ); ?>