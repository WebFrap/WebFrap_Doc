
<h1>Variables</h1>

<p>Hier könnte ihre Dokumentation stehen... Wenn sie endlich jemand schreiben würde...</p>

<label>Hier wäre ein super Platz für ein Codebeispiel</label>
<?php start_highlight(); ?>
<project>
  <var name="PATH_PROJECT"      value="{$PATH_ROOT}SDB_Mod_Base/" />
  
  <var name="PATH_42_SDB"       value="{$PATH_ROOT}SDB_42/" />
  <var name="PATH_42_SBIZ"  value="{$PATH_ROOT}SDB_42_SBiz/bdl/" />
  <var name="PATH_42_CORE"      value="{$PATH_ROOT}WebFrap_42_Core/bdl/" />
  <var name="PATH_42_BUSINESS"  value="{$PATH_ROOT}WebFrap_42_Business/bdl/" />

  <var name="PATH_OUTPUT"   value="{$PATH_ROOT}cache/genf/sdb-sbiz/" />
  <var name="PATH_DEPLOY"   value="{$PATH_ROOT}SDB_Mod_Base/" />
</project>
<?php display_highlight( 'xml' ); ?>