#Command Line Generator Interface

Beschreibung wie der Generator über das CLI bedient werden kann.

<label>Liste benötigter Projekte</label>

<ul class="doc_tree" >
  <li><a href="content.php?page=dev_guide.repositories.core.webfrap" target="main" >WebFrap</a></li>
  <li><a href="content.php?page=dev_guide.repositories.genf.webfrap_genf" target="main" >WebFrap_Genf</a></li>
  <li><a href="content.php?page=dev_guide.repositories.genf.webfrap_genf_wbf" target="main" >WebFrap_Genf_Wbf</a></li>
  <li><a href="content.php?page=dev_guide.repositories.genf.webfrap_42_business" target="main" >WebFrap_42_Business</a></li>
</ul>


Ein einfach anpassbares Buildscript zum starten des Compilers

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