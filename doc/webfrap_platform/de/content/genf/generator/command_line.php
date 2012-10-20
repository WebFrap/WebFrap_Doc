<h1>Command Line Generator Interface</h1>

<p>Beschreibung wie der Generator über das CLI bedient werden kann.</p>

<label>Liste benötigter Projekte</label>

<ul class="doc_tree" >
  <li><a href="content.php?page=dev_guide.repositories.core.webfrap" target="main" >WebFrap</a></li>
  <li><a href="content.php?page=dev_guide.repositories.core.webfrap_pontos" target="main" >WebFrap_Pontos</a></li>
  <li><a href="content.php?page=dev_guide.repositories.core.webfrap_daidalos" target="main" >WebFrap_Daidalos</a></li>
  <li><a href="content.php?page=dev_guide.repositories.genf.webfrap_genf" target="main" >WebFrap_Genf</a></li>
  <li><a href="content.php?page=dev_guide.repositories.genf.webfrap_genf_cartridge_wbf" target="main" >WebFrap_Genf_Cartridge_Wbf</a></li>
  <li><a href="content.php?page=dev_guide.repositories.genf.webfrap_42_business" target="main" >WebFrap_42_Business</a></li>
  <li><a href="content.php?page=dev_guide.repositories.genf.webfrap_42_core" target="main" >WebFrap_42_Core</a></li>
  <li><a href="content.php?page=dev_guide.repositories.genf.webfrap_kb_base" target="main" >WebFrap_Kb_Base</a></li>
  <li><a href="content.php?page=dev_guide.repositories.genf.webfrap_lib_bdl" target="main" >WebFrap_Lib_BDL</a></li>
</ul>


<p>Ein einfach anpassbares Buildscript zum starten des Compilers</p>

<label>Build Script</label>
<?php start_highlight(); ?>
#!/bin/bash

actual=`pwd`
php="php"

# Pfad zu dem Compiler Gateway
pathCompiler="/var/www/workspace/WebFrap_Gw_Develop"

# Pfad zum Project BDL File
projectFile="/var/www/workspace/WebFrap_42/projects/demo/Project.bdl"

# Name des Logfiles in welches der Compileroutput gedumpt werden soll
logFile="build_webfrap_demo.log"

# Pfad in welchem die generierten Module liegen werden
deplRoot="/var/www/workspace/"

# Prefix zum löschen der alten generierten Dateien bevor die neuen generierten
# Dateien geschrieben werden
deplCleaner="WebFrap_Demo_Mod_"


cd $pathCompiler

echo Cleaning the compiler cache
$php ./cli.php Daidalos.Projects.clean "pfile=${projectFile}"

if [ "" != "$1" ]; then
  echo "Compiling using Cartridges ${1}"
  $php ./cli.php Daidalos.Projects.build "pfile=${projectFile}" "cartridges=${1}"  | tee $actual/$logFile  
else
  echo "Compiling full Project"
  $php ./cli.php Daidalos.Projects.build "pfile=${projectFile}" | tee $actual/$logFile 
fi

if [ "clean" = "$2" ]; then
  echo Please confirm to clean the deploy target first
  rm -rfi ${deplRoot}/${deplCleaner}*/{conf,data,i18n,module,templates}
fi

echo Starting deployment
$php ./cli.php Daidalos.Projects.deploy "pfile=${projectFile}"
<?php display_highlight( 'bash' ); ?>


<label>Sync der Datenbank mit dem Model</label>
<?php start_highlight(); ?>
#!/bin/bash

actual=`pwd`
php="php"
pathGw="/var/www/workspace/WebFrap_Gw_Demo"
logFile="sync_demo_db.log"

cd $pathGw

if [ "" != "$1" ]; then
  $php cli.php Daidalos.deploy.syncDatabase "${1}" | tee $actual/$logFile 
else
  $php cli.php Daidalos.deploy.syncDatabase "sync_col=true" | tee $actual/$logFile 
fi

$php cli.php Daidalos.deploy.syncData 

$php cli.php Daidalos.deploy.syncMetaData
<?php display_highlight( 'bash' ); ?>