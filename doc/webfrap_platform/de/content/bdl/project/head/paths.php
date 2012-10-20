
<h1>Paths</h1>

<p>Hier könnte ihre Dokumentation stehen... Wenn sie endlich jemand schreiben würde...</p>

<label>Hier wäre ein super Platz für ein Codebeispiel</label>
<?php start_highlight(); ?>
<project>
  <path>
    <path_gw>{$PATH_PROJECT}</path_gw>
    <path_output>{$PATH_OUTPUT}</path_output>
    <path_deploy>{$PATH_DEPLOY}</path_deploy>
    <path_root>{$PATH_ROOT}</path_root>
    <path_include_list>{$PATH_PROJECT}conf/include/gmod/</path_include_list>
  </path>
</project>
<?php display_highlight( 'xml' ); ?>