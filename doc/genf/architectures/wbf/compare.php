<h1>Compare</h1>

<p>Logik zum vergleichen und mergen von Datensätzen sowie die Versionierung
von Datensätzen.</p>

<h3>Nötigen Cartridge Klassen</h3>
<?php start_highlight(); ?>
<process>
  <cartridges>
    <!-- ## Compare ## -->
    <cartridge class="CompareModel"       type="Management" />
    <cartridge class="CompareSubwindow"   type="Management" />
    <cartridge class="CompareSubwindowMenu"   type="Management" />
    <cartridge class="CompareMaintab"     type="Management" />
    <cartridge class="CompareMaintabMenu"     type="Management" />
    <cartridge class="CompareController"  type="Management" />
    <cartridge class="CompareTemplates"   type="Management" />
    <cartridge class="CompareAccessDataset"   type="Management" />
  </cartridges>
</process>
<?php display_highlight( 'xml' ); ?>