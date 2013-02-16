<h1>Workarea</h1>

<p>
Die Workare definiert den teil des Desktops in welchem Später auch die
Inhalte mit den Tabs geladen werden.
</p>

<p>
Der momentan einzige zu empfehlende Type ist dashboard.
Darüber hinaus werden einige anderen Typen folgen.
</p>
<?php start_highlight(); ?>
<_..._>
  <desktop>
    <workarea name="admin" type="dashboard" >
      <area name="navigation" ></area>
    </workarea>
  </desktop>
</_..._>
<?php display_highlight( 'xml' ); ?>


<label>Alternativer Desktop nur mit wallpaper</label>
<?php start_highlight(); ?>

<desktop>

  <workarea name="admin" >
    <area name="dashboard" >
      <containers type="Wallpaper" />
    </area>
  </workarea>

</desktop>

<?php display_highlight( 'xml' ); ?>