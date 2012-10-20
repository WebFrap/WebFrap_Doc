
<h1>Project</h1>

<p>Beschreiben eines Projektes</p>

<h3>Beispiel für ein Projekt</h3>


<?php start_highlight(); ?>
<project name="SDB_SBiz" title="SDB SBiz" >

  <author><![CDATA[Dominik Bonsch <dominik.bonsch@s-db.de>]]></author>
  <copyright><![CDATA[Softwareentwicklung Dominik Bonsch <contact@webfrap.net>]]></copyright>
  <licence>GPLv3</licence>
  <url>http://s-db.de</url>
  <name>S-DB Small Business Core</name>
  <key>sbiz</key>
  <header>{$PATH_ROOT}SDB_42/data/header/sdb-code-header.tpl</header>
  <sandbox>false</sandbox>
  

  <icons>
    <folder_big></folder_big>
  </icons>
  
  <settings>
    <var key="display_button_text" value="false" />
  </settings>

  <version>1</version>
  <revision>1</revision>

  <model version="" >bdl</model>
  <architecture version="" >wbf</architecture>


  <description><![CDATA[Project Description]]></description>
  
  <concepts>
    <concept name="protocol" ></concept>
  </concepts>

  <languages default="en" code="en"  >
    <lang>de</lang>
    <lang>en</lang>
    <lang>fr</lang>
    <lang>es</lang>
    <lang>it</lang>
    <lang>pl</lang>
  </languages>

  <path>
    <path_gw>{$PATH_PROJECT}</path_gw>
    <path_output>{$PATH_OUTPUT}</path_output>
    <path_deploy>{$PATH_DEPLOY}</path_deploy>
    <path_root>{$PATH_ROOT}</path_root>
  </path>

  <repositories>
    <repository name="sdb" >{$PATH_42_SDB}</repository>
    <repository name="sbiz" >{$PATH_42_SBIZ}</repository>
    <repository name="core" >{$PATH_42_CORE}</repository>
    <repository name="business" >{$PATH_42_BUSINESS}</repository>
  </repositories>

  <var name="PATH_PROJECT"      value="{$PATH_ROOT}SDB_App_SBiz/" />
  
  <var name="PATH_42_SDB"       value="{$PATH_ROOT}SDB_42/" />
  <var name="PATH_42_SBIZ"  value="{$PATH_ROOT}SDB_42_SBiz/bdl/" />
  <var name="PATH_42_CORE"      value="{$PATH_ROOT}WebFrap_42_Core/" />
  <var name="PATH_42_BUSINESS"  value="{$PATH_ROOT}WebFrap_42_Business/" />

  <var name="PATH_OUTPUT"   value="{$PATH_ROOT}cache/genf/sdb-sbiz/" />
  <var name="PATH_DEPLOY"   value="{$PATH_ROOT}SDB_App_SBiz/" />


  <databases>

    <connection driver="Postgresql" type="Postgresql" name="sdb_all" >
      <host>localhost</host>
      <db>sdb_gw_sbiz</db>
      <port>5432</port>
      <dataschema>production</dataschema>
      <owner>sdb_gw_sbiz</owner>
      <user>deployment</user>
      <pwd>deployment</pwd>
    </connection>
    
    <connection driver="Postgresql" type="Postgresql" name="sdb_test" >
      <host>localhost</host>
      <db>sdb_gw_sbiz</db>
      <port>5432</port>
      <dataschema>test</dataschema>
      <owner>sdb_test</owner>
      <user>deployment</user>
      <pwd>deployment</pwd>
    </connection>

  </databases>

  <import>
  
  
    <!-- <modul name="core"  path="{$42_PATH}bdl/" deploy="convention" /> -->
        
    <!-- -->
    <namespace name="sbiz" deploy="custom" >
      <repositories>
        <repository name="sbiz" />
      </repositories>
      <use>
        <profiles />
        <desktops />
        <pages />
        <items />
        <roles />
        <events />
        <enums />
      </use>
    </namespace>

    <namespace name="webfrap" deploy="custom" >
      <repositories>
        <repository name="core" />
      </repositories>
      <template>
        <masks />
        <menus />
      </template>
      <use>
        <profiles />
        <desktops />
        <processes />
        <widgets />
        <actions />
        <messages />
        <items />
        <roles />
        <events />
        <enums />
      </use>
    </namespace>
    
    <namespace name="core" deploy="custom" >
      <repositories>
        <repository name="core" />
      </repositories>
      <template>
        <masks />
        <menus />
      </template>
      <use>
        <module />
        <entities />
        <managements />
        <components />
        <desktops />
        <profiles />
        <widgets />
        <processes />
        <frontends />
        <messages />
        <rules />
        <actions />
        <data />
        <items />
        <roles />
        <events />
        <services />
        <enums />
      </use>
    </namespace>
    
    <namespace name="bdl" deploy="custom" >
      <repositories>
        <repository name="core" />
      </repositories>
      <template>
        <masks />
        <menus />
      </template>
      <use>
        <module />
        <entities />
        <managements />
        <components />
        <desktops />
        <profiles />
        <widgets />
        <processes />
        <frontends />
        <messages />
        <rules />
        <actions />
        <data />
        <items />
        <roles />
        <events />
        <services />
        <enums />
      </use>
    </namespace>
    
    <namespace name="daidalos" deploy="custom" >
      <repositories>
        <repository name="core" />
      </repositories>
      <template>
        <masks />
        <menus />
      </template>
      <use>
        <module />
        <entities />
        <managements />
        <components />
        <desktops />
        <profiles />
        <widgets />
        <processes />
        <frontends />
        <messages />
        <rules />
        <actions />
        <data />
        <items />
        <roles />
        <events />
        <services />
        <enums />
      </use>
    </namespace>

    <namespace name="wbfsys" deploy="custom" >
      <repositories>
        <repository name="core" />
      </repositories>
      <template>
        <masks />
        <menus />
      </template>
      <use>
        <module />
        <entities />
        <managements />
        <components />
        <desktops />
        <profiles />
        <widgets />
        <processes />
        <frontends />
        <messages />
        <rules />
        <actions />
        <data />
        <items />
        <roles />
        <events />
        <services />
        <enums />
      </use>
    </namespace>
    
    <namespace name="sync" deploy="custom" >
      <repositories>
        <repository name="core" />
      </repositories>
      <template>
        <masks />
        <menus />
      </template>
      <use>
        <module />
        <entities />
        <managements />
        <components />
        <desktops />
        <profiles />
        <widgets />
        <processes />
        <frontends />
        <messages />
        <rules />
        <actions />
        <data />
        <items />
        <roles />
        <events />
        <services />
        <enums />
      </use>
    </namespace>

  <!-- business  -->
  
    <namespace name="accounting" deploy="custom" >
      <repositories>
        <repository name="business" />
      </repositories>
      <template>
        <masks />
        <menus />
      </template>
      <use>
        <module />
        <entities />
        <managements />
        <components />
        <desktops />
        <profiles />
        <widgets />
        <processes />
        <frontends />
        <messages />
        <rules />
        <actions />
        <data />
        <items />
        <roles />
        <events />
        <services />
        <enums />
      </use>
    </namespace>

    <namespace name="banking" deploy="custom" >
      <repositories>
        <repository name="business" />
      </repositories>
      <template>
        <masks />
        <menus />
      </template>
      <use>
        <module />
        <entities />
        <managements />
        <components />
        <desktops />
        <profiles />
        <widgets />
        <processes />
        <frontends />
        <messages />
        <rules />
        <actions />
        <data />
        <items />
        <roles />
        <events />
        <services />
        <enums />
      </use>
    </namespace>
    
     <namespace name="booking" deploy="custom" >
      <repositories>
        <repository name="business" />
      </repositories>
      <template>
        <masks />
        <menus />
      </template>
      <use>
        <module />
        <entities />
        <managements />
        <components />
        <desktops />
        <profiles />
        <widgets />
        <processes />
        <frontends />
        <messages />
        <rules />
        <actions />
        <data />
        <items />
        <roles />
        <events />
        <services />
        <enums />
      </use>
    </namespace>
    
     <namespace name="building" deploy="custom" >
      <repositories>
        <repository name="business" />
      </repositories>
      <template>
        <masks />
        <menus />
      </template>
      <use>
        <module />
        <entities />
        <managements />
        <components />
        <desktops />
        <profiles />
        <widgets />
        <processes />
        <frontends />
        <messages />
        <rules />
        <actions />
        <data />
        <items />
        <roles />
        <events />
        <services />
        <enums />
      </use>
    </namespace>
        
    <namespace name="business" deploy="custom" >
      <repositories>
        <repository name="business" />
      </repositories>
      <template>
        <masks />
        <menus />
      </template>
      <use>
        <module />
        <entities />
        <managements />
        <components />
        <desktops />
        <profiles />
        <widgets />
        <processes />
        <frontends />
        <messages />
        <rules />
        <actions />
        <data />
        <items />
        <roles />
        <events />
        <services />
        <enums />
      </use>
    </namespace>
    
    <namespace name="canteen" deploy="custom" >
      <repositories>
        <repository name="business" />
      </repositories>
      <template>
        <masks />
        <menus />
      </template>
      <use>
        <module />
        <entities />
        <managements />
        <components />
        <desktops />
        <profiles />
        <widgets />
        <processes />
        <frontends />
        <messages />
        <rules />
        <actions />
        <data />
        <items />
        <roles />
        <events />
        <services />
        <enums />
      </use>
    </namespace>
    
     <namespace name="catering" deploy="custom" >
      <repositories>
        <repository name="business" />
      </repositories>
      <template>
        <masks />
        <menus />
      </template>
      <use>
        <module />
        <entities />
        <managements />
        <components />
        <desktops />
        <profiles />
        <widgets />
        <processes />
        <frontends />
        <messages />
        <rules />
        <actions />
        <data />
        <items />
        <roles />
        <events />
        <services />
        <enums />
      </use>
    </namespace>
    
    <namespace name="cms" deploy="custom" >
      <repositories>
        <repository name="business" />
      </repositories>
      <template>
        <masks />
        <menus />
      </template>
      <use>
        <module />
        <entities />
        <managements />
        <components />
        <desktops />
        <profiles />
        <widgets />
        <processes />
        <frontends />
        <messages />
        <rules />
        <actions />
        <data />
        <items />
        <roles />
        <events />
        <services />
        <enums />
      </use>
    </namespace>
    
    <namespace name="crm" deploy="custom" >
      <repositories>
        <repository name="business" />
      </repositories>
      <template>
        <masks />
        <menus />
      </template>
      <use>
        <module />
        <entities />
        <managements />
        <components />
        <desktops />
        <profiles />
        <widgets />
        <processes />
        <frontends />
        <messages />
        <rules />
        <actions />
        <data />
        <items />
        <roles />
        <events />
        <services />
        <enums />
      </use>
    </namespace>
    
     <namespace name="colab" deploy="custom" >
      <repositories>
        <repository name="business" />
      </repositories>
      <template>
        <masks />
        <menus />
      </template>
      <use>
        <module />
        <entities />
        <managements />
        <components />
        <desktops />
        <profiles />
        <widgets />
        <processes />
        <frontends />
        <messages />
        <rules />
        <actions />
        <data />
        <items />
        <roles />
        <events />
        <services />
        <enums />
      </use>
    </namespace>
    
     <namespace name="dms" deploy="custom" >
      <repositories>
        <repository name="business" />
      </repositories>
      <template>
        <masks />
        <menus />
      </template>
      <use>
        <module />
        <entities />
        <managements />
        <components />
        <desktops />
        <profiles />
        <widgets />
        <processes />
        <frontends />
        <messages />
        <rules />
        <actions />
        <data />
        <items />
        <roles />
        <events />
        <services />
        <enums />
      </use>
    </namespace>
    
    <namespace name="disposal" deploy="custom" >
      <repositories>
        <repository name="business" />
      </repositories>
      <template>
        <masks />
        <menus />
      </template>
      <use>
        <module />
        <entities />
        <managements />
        <components />
        <desktops />
        <profiles />
        <widgets />
        <processes />
        <frontends />
        <messages />
        <rules />
        <actions />
        <data />
        <items />
        <roles />
        <events />
        <services />
        <enums />
      </use>
    </namespace>
    
    <namespace name="enterprise" deploy="custom" >
      <repositories>
        <repository name="business" />
        <repository name="core" />
      </repositories>
      <template>
        <masks />
        <menus />
      </template>
      <use>
        <module />
        <entities />
        <managements />
        <components />
        <desktops />
        <profiles />
        <widgets />
        <processes />
        <frontends />
        <messages />
        <rules />
        <actions />
        <data />
        <items />
        <roles />
        <events />
        <services />
        <enums />
      </use>
    </namespace>
    
    <namespace name="event" deploy="custom" >
      <repositories>
        <repository name="business" />
      </repositories>
      <template>
        <masks />
        <menus />
      </template>
      <use>
        <module />
        <entities />
        <managements />
        <components />
        <desktops />
        <profiles />
        <widgets />
        <processes />
        <frontends />
        <messages />
        <rules />
        <actions />
        <data />
        <items />
        <roles />
        <events />
        <services />
        <enums />
      </use>
    </namespace>
    
    <namespace name="finance" deploy="custom" >
      <repositories>
        <repository name="business" />
      </repositories>
      <template>
        <masks />
        <menus />
      </template>
      <use>
        <module />
        <entities />
        <managements />
        <components />
        <desktops />
        <profiles />
        <widgets />
        <processes />
        <frontends />
        <messages />
        <rules />
        <actions />
        <data />
        <items />
        <roles />
        <events />
        <services />
        <enums />
      </use>
    </namespace>
    
    <namespace name="gallery" deploy="custom" >
      <repositories>
        <repository name="business" />
      </repositories>
      <template>
        <masks />
        <menus />
      </template>
      <use>
        <module />
        <entities />
        <managements />
        <components />
        <desktops />
        <profiles />
        <widgets />
        <processes />
        <frontends />
        <messages />
        <rules />
        <actions />
        <data />
        <items />
        <roles />
        <events />
        <services />
        <enums />
      </use>
    </namespace>
    
    <namespace name="hotel" deploy="custom" >
      <repositories>
        <repository name="business" />
      </repositories>
      <template>
        <masks />
        <menus />
      </template>
      <use>
        <module />
        <entities />
        <managements />
        <components />
        <desktops />
        <profiles />
        <widgets />
        <processes />
        <frontends />
        <messages />
        <rules />
        <actions />
        <data />
        <items />
        <roles />
        <events />
        <services />
        <enums />
      </use>
    </namespace>
    
    <namespace name="it" deploy="custom" >
      <repositories>
        <repository name="business" />
      </repositories>
      <template>
        <masks />
        <menus />
      </template>
      <use>
        <module />
        <entities />
        <managements />
        <components />
        <desktops />
        <profiles />
        <widgets />
        <processes />
        <frontends />
        <messages />
        <rules />
        <actions />
        <data />
        <items />
        <roles />
        <events />
        <services />
        <enums />
      </use>
    </namespace>
    
    <namespace name="insurance" deploy="custom" >
      <repositories>
        <repository name="business" />
      </repositories>
      <template>
        <masks />
        <menus />
      </template>
      <use>
        <module />
        <entities />
        <managements />
        <components />
        <desktops />
        <profiles />
        <widgets />
        <processes />
        <frontends />
        <messages />
        <rules />
        <actions />
        <data />
        <items />
        <roles />
        <events />
        <services />
        <enums />
      </use>
    </namespace>
    
    <namespace name="hosting" deploy="custom" >
      <repositories>
        <repository name="business" />
      </repositories>
      <template>
        <masks />
        <menus />
      </template>
      <use>
        <module />
        <entities />
        <managements />
        <components />
        <desktops />
        <profiles />
        <widgets />
        <processes />
        <frontends />
        <messages />
        <rules />
        <actions />
        <data />
        <items />
        <roles />
        <events />
        <services />
        <enums />
      </use>
    </namespace>
    
      <namespace name="mrp" deploy="custom" >
      <repositories>
        <repository name="business" />
      </repositories>
      <template>
        <masks />
        <menus />
      </template>
      <use>
        <module />
        <entities />
        <managements />
        <components />
        <desktops />
        <profiles />
        <widgets />
        <processes />
        <frontends />
        <messages />
        <rules />
        <actions />
        <data />
        <items />
        <roles />
        <events />
        <services />
        <enums />
      </use>
    </namespace>
    
     <namespace name="orga" deploy="custom" >
      <repositories>
        <repository name="business" />
      </repositories>
      <template>
        <masks />
        <menus />
      </template>
      <use>
        <module />
        <entities />
        <managements />
        <components />
        <desktops />
        <profiles />
        <widgets />
        <processes />
        <frontends />
        <messages />
        <rules />
        <actions />
        <data />
        <items />
        <roles />
        <events />
        <services />
        <enums />
      </use>
    </namespace>
    
    <namespace name="project" deploy="custom" >
      <repositories>
        <repository name="business" />
      </repositories>
      <template>
        <masks />
        <menus />
      </template>
      <use>
        <module />
        <entities />
        <managements />
        <components />
        <desktops />
        <profiles />
        <widgets />
        <processes />
        <frontends />
        <messages />
        <rules />
        <actions />
        <data />
        <items />
        <roles />
        <events />
        <services />
        <enums />
      </use>
    </namespace>
    
    <namespace name="payment" deploy="custom" >
      <repositories>
        <repository name="business" />
      </repositories>
      <template>
        <masks />
        <menus />
      </template>
      <use>
        <module />
        <entities />
        <managements />
        <components />
        <desktops />
        <profiles />
        <widgets />
        <processes />
        <frontends />
        <messages />
        <rules />
        <actions />
        <data />
        <items />
        <roles />
        <events />
        <services />
        <enums />
      </use>
    </namespace>

    <namespace name="product" deploy="custom" >
      <repositories>
        <repository name="business" />
      </repositories>
      <template>
        <masks />
        <menus />
      </template>
      <use>
        <module />
        <entities />
        <managements />
        <components />
        <desktops />
        <profiles />
        <widgets />
        <processes />
        <frontends />
        <messages />
        <rules />
        <actions />
        <data />
        <items />
        <roles />
        <events />
        <services />
        <enums />
      </use>
    </namespace>
    
    <namespace name="shop" deploy="custom" >
      <repositories>
        <repository name="business" />
      </repositories>
      <template>
        <masks />
        <menus />
      </template>
      <use>
        <module />
        <entities />
        <managements />
        <components />
        <desktops />
        <profiles />
        <widgets />
        <processes />
        <frontends />
        <messages />
        <rules />
        <actions />
        <data />
        <items />
        <roles />
        <events />
        <services />
        <enums />
      </use>
    </namespace>
    
    <namespace name="service" deploy="custom" >
      <repositories>
        <repository name="business" />
      </repositories>
      <template>
        <masks />
        <menus />
      </template>
      <use>
        <module />
        <entities />
        <managements />
        <components />
        <desktops />
        <profiles />
        <widgets />
        <processes />
        <frontends />
        <messages />
        <rules />
        <actions />
        <data />
        <items />
        <roles />
        <events />
        <services />
        <enums />
      </use>
    </namespace>

    <namespace name="software" deploy="custom" >
      <repositories>
        <repository name="business" />
      </repositories>
      <template>
        <masks />
        <menus />
      </template>
      <use>
        <module />
        <entities />
        <managements />
        <components />
        <desktops />
        <profiles />
        <widgets />
        <processes />
        <frontends />
        <messages />
        <rules />
        <actions />
        <data />
        <items />
        <roles />
        <events />
        <services />
        <enums />
      </use>
    </namespace>
    
    <namespace name="staffing" deploy="custom" >
      <repositories>
        <repository name="business" />
      </repositories>
      <template>
        <masks />
        <menus />
      </template>
      <use>
        <module />
        <entities />
        <managements />
        <components />
        <desktops />
        <profiles />
        <widgets />
        <processes />
        <frontends />
        <messages />
        <rules />
        <actions />
        <data />
        <items />
        <roles />
        <events />
        <services />
        <enums />
      </use>
    </namespace>
    
    <namespace name="recruiting" deploy="custom" >
      <repositories>
        <repository name="business" />
      </repositories>
      <template>
        <masks />
        <menus />
      </template>
      <use>
        <module />
        <entities />
        <managements />
        <components />
        <desktops />
        <profiles />
        <widgets />
        <processes />
        <frontends />
        <messages />
        <rules />
        <actions />
        <data />
        <items />
        <roles />
        <events />
        <services />
        <enums />
      </use>
    </namespace>
    
    <namespace name="trade" deploy="custom" >
      <repositories>
        <repository name="business" />
      </repositories>
      <template>
        <masks />
        <menus />
      </template>
      <use>
        <module />
        <entities />
        <managements />
        <components />
        <desktops />
        <profiles />
        <widgets />
        <processes />
        <frontends />
        <messages />
        <rules />
        <actions />
        <data />
        <items />
        <roles />
        <events />
        <services />
        <enums />
      </use>
    </namespace>
    
     <namespace name="wawi" deploy="custom" >
      <repositories>
        <repository name="business" />
      </repositories>
      <template>
        <masks />
        <menus />
      </template>
      <use>
        <module />
        <entities />
        <managements />
        <components />
        <desktops />
        <profiles />
        <widgets />
        <processes />
        <frontends />
        <messages />
        <rules />
        <actions />
        <data />
        <items />
        <roles />
        <events />
        <services />
        <enums />
      </use>
    </namespace>

  </import>

  <deployment>
    <!-- <mod name="*" overwrite="all" >{$PATH_DEPLOY}</mod>--><!-- Alles in den Projektpfad deployen -->
    
    <mod name="accounting" overwrite="all"  >      
      <path>{$PATH_ROOT}SDB_App_SBiz/</path>
      <path_test>{$PATH_ROOT}SDB_Test_SBiz/</path_test>
      <url user="legion" passwd="ave_mir" >https://hg.server.de/repo/SDB_App_SBiz</url>
    </mod>
    
    <mod name="association" overwrite="all" >      
      <path>{$PATH_ROOT}SDB_App_SBiz/</path>
      <path_test>{$PATH_ROOT}SDB_Test_SBiz/</path_test>
      <url user="legion" passwd="ave_mir" >https://hg.server.de/repo/SDB_App_SBiz</url>
    </mod>
    
    <mod name="banking" overwrite="all" >      
      <path>{$PATH_ROOT}SDB_App_SBiz/</path>
      <path_test>{$PATH_ROOT}SDB_Test_SBiz/</path_test>
      <url user="legion" passwd="ave_mir" >https://hg.server.de/repo/SDB_App_SBiz</url>
    </mod>
    
    <mod name="bdl" overwrite="all"  >      
      <path>{$PATH_ROOT}SDB_App_SBiz/</path>
      <path_test>{$PATH_ROOT}SDB_Test_SBiz/</path_test>
      <url user="legion" passwd="ave_mir" >https://hg.server.de/repo/SDB_App_SBiz</url>
    </mod>
    
    <mod name="daidalos" overwrite="all"  >      
      <path>{$PATH_ROOT}SDB_App_SBiz/</path>
      <path_test>{$PATH_ROOT}SDB_Test_SBiz/</path_test>
      <url user="legion" passwd="ave_mir" >https://hg.server.de/repo/SDB_App_SBiz</url>
    </mod>
    
    <mod name="building" overwrite="all"  >      
      <path>{$PATH_ROOT}SDB_App_SBiz/</path>
      <path_test>{$PATH_ROOT}SDB_Test_SBiz/</path_test>
      <url user="legion" passwd="ave_mir" >https://hg.server.de/repo/SDB_App_SBiz</url>
    </mod>
    
    <mod name="booking" overwrite="all"  >
      <path>{$PATH_ROOT}SDB_Sbiz_Mod_Business/</path>
      <path_test>{$PATH_ROOT}SDB_Sbiz_Test_Business/</path_test>
      <url user="legion" passwd="ave_mir" >https://hg.server.de/repo/SDB_App_SBiz</url>
    </mod>

    <mod name="business" overwrite="all"  >
      <path>{$PATH_ROOT}SDB_Sbiz_Mod_Business/</path>
      <path_test>{$PATH_ROOT}SDB_Sbiz_Test_Business/</path_test>
      <url user="legion" passwd="ave_mir" >https://hg.server.de/repo/SDB_App_SBiz</url>
    </mod>
   
    <mod name="chemical" overwrite="all"  >      
      <path>{$PATH_ROOT}SDB_App_SBiz/</path>
      <path_test>{$PATH_ROOT}SDB_Test_SBiz/</path_test>
      <url user="legion" passwd="ave_mir" >https://hg.server.de/repo/SDB_App_SBiz</url>
    </mod>
    
    <mod name="canteen" overwrite="all"  >      
      <path>{$PATH_ROOT}SDB_SBiz_Mod_Service/</path>
      <path_test>{$PATH_ROOT}SDB_SBiz_Test_Service/</path_test>
      <url user="legion" passwd="ave_mir" >https://hg.server.de/repo/SDB_App_SBiz</url>
    </mod>
    
    <mod name="catering" overwrite="all"  >      
      <path>{$PATH_ROOT}SDB_SBiz_Mod_Service/</path>
      <path_test>{$PATH_ROOT}SDB_SBiz_Test_Service/</path_test>
      <url user="legion" passwd="ave_mir" >https://hg.server.de/repo/SDB_App_SBiz</url>
    </mod>
    
    <mod name="cms" overwrite="all"  >      
      <path>{$PATH_ROOT}SDB_App_SBiz/</path>
      <path_test>{$PATH_ROOT}SDB_Test_SBiz/</path_test>
      <url user="legion" passwd="ave_mir" >https://hg.server.de/repo/SDB_App_SBiz</url>
    </mod>
   
    <mod name="colab" overwrite="all"  >      
      <path>{$PATH_ROOT}SDB_App_SBiz/</path>
      <path_test>{$PATH_ROOT}SDB_Test_SBiz/</path_test>
      <url user="legion" passwd="ave_mir" >https://hg.server.de/repo/SDB_App_SBiz</url>
    </mod>
    
    <mod name="core" overwrite="all" >      
      <path>{$PATH_ROOT}SDB_Sbiz_Mod_Base/</path>
      <path_test>{$PATH_ROOT}SDB_Sbiz_Test_Base/</path_test>
      <url user="legion" passwd="ave_mir" >https://hg.server.de/repo/SDB_App_SBiz</url>
    </mod>
    
    <mod name="crm" overwrite="all" >      
      <path>{$PATH_ROOT}SDB_App_SBiz/</path>
      <path_test>{$PATH_ROOT}SDB_Test_SBiz/</path_test>
      <url user="legion" passwd="ave_mir" >https://hg.server.de/repo/SDB_App_SBiz</url>
    </mod>
   
    <mod name="dms" overwrite="all" >      
      <path>{$PATH_ROOT}SDB_App_SBiz/</path>
      <path_test>{$PATH_ROOT}SDB_Test_SBiz/</path_test>
      <url user="legion" passwd="ave_mir" >https://hg.server.de/repo/SDB_App_SBiz</url>
    </mod>
    
     <mod name="colab" overwrite="all" >      
      <path>{$PATH_ROOT}SDB_App_SBiz/</path>
      <path_test>{$PATH_ROOT}SDB_Test_SBiz/</path_test>
      <url user="legion" passwd="ave_mir" >https://hg.server.de/repo/SDB_App_SBiz</url>
    </mod>
    
    <mod name="disposal" overwrite="all" >      
      <path>{$PATH_ROOT}SDB_App_SBiz/</path>
      <path_test>{$PATH_ROOT}SDB_Test_SBiz/</path_test>
      <url user="legion" passwd="ave_mir" >https://hg.server.de/repo/SDB_App_SBiz</url>
    </mod>
   
    <mod name="doku" overwrite="all" >      
      <path>{$PATH_ROOT}SDB_App_SBiz/</path>
      <path_test>{$PATH_ROOT}SDB_Test_SBiz/</path_test>
      <url user="legion" passwd="ave_mir" >https://hg.server.de/repo/SDB_App_SBiz</url>
    </mod>
    
    <mod name="edu" overwrite="all" >      
      <path>{$PATH_ROOT}SDB_App_SBiz/</path>
      <path_test>{$PATH_ROOT}SDB_Test_SBiz/</path_test>
      <url user="legion" passwd="ave_mir" >https://hg.server.de/repo/SDB_App_SBiz</url>
    </mod>
 
    <mod name="enterprise" overwrite="all"  >      
      <path>{$PATH_ROOT}SDB_Sbiz_Mod_Business/</path>
      <path_test>{$PATH_ROOT}SDB_Sbiz_Test_Business/</path_test>
      <url user="legion" passwd="ave_mir" >https://hg.server.de/repo/SDB_App_SBiz</url>
    </mod>
    
    <mod name="event" overwrite="all"  >      
      <path>{$PATH_ROOT}SDB_App_SBiz/</path>
      <path_test>{$PATH_ROOT}SDB_Test_SBiz/</path_test>
      <url user="legion" passwd="ave_mir" >https://hg.server.de/repo/SDB_App_SBiz</url>
    </mod>
    
    <mod name="finance" overwrite="all"  >      
      <path>{$PATH_ROOT}SDB_App_SBiz/</path>
      <path_test>{$PATH_ROOT}SDB_Test_SBiz/</path_test>
      <url user="legion" passwd="ave_mir" >https://hg.server.de/repo/SDB_App_SBiz</url>
    </mod>
    
    <mod name="forum" overwrite="all" >      
      <path>{$PATH_ROOT}SDB_App_SBiz/</path>
      <path_test>{$PATH_ROOT}SDB_Test_SBiz/</path_test>
      <url user="legion" passwd="ave_mir" >https://hg.server.de/repo/SDB_App_SBiz</url>
    </mod>
    
    <mod name="gallery" overwrite="all"  >      
      <path>{$PATH_ROOT}SDB_Sbiz_Mod_Base/</path>
      <path_test>{$PATH_ROOT}SDB_Test_SBiz/</path_test>
      <url user="legion" passwd="ave_mir" >https://hg.server.de/repo/SDB_App_SBiz</url>
    </mod>
    
    <mod name="hosting" overwrite="all"  >      
      <path>{$PATH_ROOT}SDB_App_SBiz/</path>
      <path_test>{$PATH_ROOT}SDB_Test_SBiz/</path_test>
      <url user="legion" passwd="ave_mir" >https://hg.server.de/repo/SDB_App_SBiz</url>
    </mod>
    
    <mod name="hotel" overwrite="all"  >      
      <path>{$PATH_ROOT}SDB_App_SBiz/</path>
      <path_test>{$PATH_ROOT}SDB_Test_SBiz/</path_test>
      <url user="legion" passwd="ave_mir" >https://hg.server.de/repo/SDB_App_SBiz</url>
    </mod>
    
    <mod name="hr" overwrite="all" >      
      <path>{$PATH_ROOT}SDB_App_SBiz/</path>
      <path_test>{$PATH_ROOT}SDB_Test_SBiz/</path_test>
      <url user="legion" passwd="ave_mir" >https://hg.server.de/repo/SDB_App_SBiz</url>
    </mod>
    
    <mod name="human" overwrite="all"  >      
      <path>{$PATH_ROOT}SDB_App_SBiz/</path>
      <path_test>{$PATH_ROOT}SDB_Test_SBiz/</path_test>
      <url user="legion" passwd="ave_mir" >https://hg.server.de/repo/SDB_App_SBiz</url>
    </mod>

    <mod name="insurance" overwrite="all"  >      
      <path>{$PATH_ROOT}SDB_App_SBiz/</path>
      <path_test>{$PATH_ROOT}SDB_Test_SBiz/</path_test>
      <url user="legion" passwd="ave_mir" >https://hg.server.de/repo/SDB_App_SBiz</url>
    </mod>
    
    <mod name="issue" overwrite="all"  >      
      <path>{$PATH_ROOT}SDB_App_SBiz/</path>
      <path_test>{$PATH_ROOT}SDB_Test_SBiz/</path_test>
      <url user="legion" passwd="ave_mir" >https://hg.server.de/repo/SDB_App_SBiz</url>
    </mod>
    
    <mod name="it" overwrite="all"  >      
      <path>{$PATH_ROOT}SDB_App_SBiz/</path>
      <path_test>{$PATH_ROOT}SDB_Test_SBiz/</path_test>
      <url user="legion" passwd="ave_mir" >https://hg.server.de/repo/SDB_App_SBiz</url>
    </mod>
    
    <mod name="mrp" overwrite="all"  >
      <path>{$PATH_ROOT}SDB_App_SBiz/</path>
      <path_test>{$PATH_ROOT}SDB_Test_SBiz/</path_test>
      <url user="legion" passwd="ave_mir" >https://hg.server.de/repo/SDB_App_SBiz</url>
    </mod>
    
    <mod name="orga" overwrite="all"  >
      <path>{$PATH_ROOT}SDB_App_SBiz/</path>
      <path_test>{$PATH_ROOT}SDB_Test_SBiz/</path_test>
      <url user="legion" passwd="ave_mir" >https://hg.server.de/repo/SDB_App_SBiz</url>
    </mod>
    
    <mod name="payment" overwrite="all"  >      
      <path>{$PATH_ROOT}SDB_App_SBiz/</path>
      <path_test>{$PATH_ROOT}SDB_Test_SBiz/</path_test>
      <url user="legion" passwd="ave_mir" >https://hg.server.de/repo/SDB_App_SBiz</url>
    </mod>
    
    <mod name="product" overwrite="all"  >      
      <path>{$PATH_ROOT}SDB_App_SBiz/</path>
      <path_test>{$PATH_ROOT}SDB_Test_SBiz/</path_test>
      <url user="legion" passwd="ave_mir" >https://hg.server.de/repo/SDB_App_SBiz</url>
    </mod>
    
    <mod name="project" overwrite="all"  >      
      <path>{$PATH_ROOT}SDB_Sbiz_Mod_Project/</path>
      <path_test>{$PATH_ROOT}SDB_Test_SBiz/</path_test>
      <url user="legion" passwd="ave_mir" >https://hg.server.de/repo/SDB_Sbiz_Mod_Project</url>
    </mod>
    
    <mod name="rental" overwrite="all"  >      
      <path>{$PATH_ROOT}SDB_App_SBiz/</path>
      <path_test>{$PATH_ROOT}SDB_Test_SBiz/</path_test>
      <url user="legion" passwd="ave_mir" >https://hg.server.de/repo/SDB_App_SBiz</url>
    </mod>
    
    <mod name="recruiting" overwrite="all"  >      
      <path>{$PATH_ROOT}SDB_App_SBiz/</path>
      <path_test>{$PATH_ROOT}SDB_Test_SBiz/</path_test>
      <url user="legion" passwd="ave_mir" >https://hg.server.de/repo/SDB_App_SBiz</url>
    </mod>
    
    <mod name="shop" overwrite="all"  >      
      <path>{$PATH_ROOT}SDB_App_SBiz/</path>
      <path_test>{$PATH_ROOT}SDB_Test_SBiz/</path_test>
      <url user="legion" passwd="ave_mir" >https://hg.server.de/repo/SDB_App_SBiz</url>
    </mod>
    
    <mod name="software" overwrite="all"  >      
      <path>{$PATH_ROOT}SDB_App_SBiz/</path>
      <path_test>{$PATH_ROOT}SDB_Test_SBiz/</path_test>
      <url user="legion" passwd="ave_mir" >https://hg.server.de/repo/SDB_App_SBiz</url>
    </mod>
    
    <mod name="stakeholder" overwrite="all"  >      
      <path>{$PATH_ROOT}SDB_App_SBiz/</path>
      <path_test>{$PATH_ROOT}SDB_Test_SBiz/</path_test>
      <url user="legion" passwd="ave_mir" >https://hg.server.de/repo/SDB_App_SBiz</url>
    </mod>
    
    <mod name="survey" overwrite="all"  >      
      <path>{$PATH_ROOT}SDB_App_SBiz/</path>
      <path_test>{$PATH_ROOT}SDB_Test_SBiz/</path_test>
      <url user="legion" passwd="ave_mir" >https://hg.server.de/repo/SDB_App_SBiz</url>
    </mod>
    
    <mod name="sync" overwrite="all"  >      
      <path>{$PATH_ROOT}SDB_App_SBiz/</path>
      <path_test>{$PATH_ROOT}SDB_Test_SBiz/</path_test>
      <url user="legion" passwd="ave_mir" >https://hg.server.de/repo/SDB_App_SBiz</url>
    </mod>
    
    <mod name="service" overwrite="all"  >      
      <path>{$PATH_ROOT}SDB_App_SBiz/</path>
      <path_test>{$PATH_ROOT}SDB_Test_SBiz/</path_test>
      <url user="legion" passwd="ave_mir" >https://hg.server.de/repo/SDB_App_SBiz</url>
    </mod>
    
    <mod name="staffing" overwrite="all"  >      
      <path>{$PATH_ROOT}SDB_App_SBiz/</path>
      <path_test>{$PATH_ROOT}SDB_Test_SBiz/</path_test>
      <url user="legion" passwd="ave_mir" >https://hg.server.de/repo/SDB_App_SBiz</url>
    </mod>
    
    <mod name="trade" overwrite="all"  >      
      <path>{$PATH_ROOT}SDB_Sbiz_Mod_Trading/</path>
      <path_test>{$PATH_ROOT}SDB_Test_SBiz/</path_test>
      <url user="legion" passwd="ave_mir" >https://hg.server.de/repo/SDB_App_SBiz</url>
    </mod>
    
    <mod name="wawi" overwrite="all"  >      
      <path>{$PATH_ROOT}SDB_App_SBiz/</path>
      <path_test>{$PATH_ROOT}SDB_Test_SBiz/</path_test>
      <url user="legion" passwd="ave_mir" >https://hg.server.de/repo/SDB_App_SBiz</url>
    </mod>
    
    <mod name="wbfsys" overwrite="all"  >      
      <path>{$PATH_ROOT}SDB_Sbiz_Mod_Base/</path>
      <path_test>{$PATH_ROOT}SDB_Sbiz_Test_Base/</path_test>
      <url user="legion" passwd="ave_mir" >https://hg.server.de/repo/SDB_App_SBiz</url>
    </mod>
    
    <mod name="profiles" overwrite="all"  >
      <path>{$PATH_ROOT}SDB_Sbiz_Mod_Base/</path>
      <path_test>{$PATH_ROOT}SDB_Sbiz_Test_Base/</path_test>
      <url user="legion" passwd="ave_mir" >https://hg.server.de/repo/SDB_App_SBiz</url>
    </mod>
    
    <mod name="sbiz" overwrite="all"  >
      <path>{$PATH_ROOT}SDB_Sbiz_Mod_Base/</path>
      <path_test>{$PATH_ROOT}SDB_Sbiz_Test_Base/</path_test>
      <url user="legion" passwd="ave_mir" >https://hg.server.de/repo/SDB_App_SBiz</url>
    </mod>
    
    <mod name="webfrap" overwrite="all"  >
      <path>{$PATH_ROOT}SDB_Sbiz_Mod_Base/</path>
      <path_test>{$PATH_ROOT}SDB_Sbiz_Test_Base/</path_test>
      <url user="legion" passwd="ave_mir" >https://hg.server.de/repo/SDB_App_SBiz</url>
    </mod>
    
    <mod name="all" overwrite="all"  >
      <path>{$PATH_ROOT}SDB_Sbiz_Mod_Base/</path>
      <url user="legion" passwd="ave_mir" >https://hg.server.de/repo/SDB_App_SBiz</url>
    </mod>

    <!-- <mod name="all" >{$PATH_PROJECT}</mod> -->
  </deployment>

  <nodes>
    <node>entity</node>
    <node>module</node>
    <node>management</node>
    <node>component</node>
    <node>profile</node>
    <node>desktop</node>
    <node>widget</node>
    <node>page</node>
    <node>menu</node>
    <node>service</node>
    <node>message</node>
    <node>process</node>
    <node>action</node>
    <node>role</node>
    <node>event</node>
    <node>action</node>
    <node>item</node>
    <node>enum</node>
    <!--
    <node>definition</node>
    <node>process</node>
    -->
  </nodes>

  <cartridges>
      
    <!-- ## Desktop & Profile ## -->
    <cartridge class="Profile"      type="Profile" />
   
    <cartridge class="Desktop"            type="Desktop" />
    <cartridge class="DesktopTemplate"    type="Desktop" />
    <cartridge class="DesktopIndexSimple" type="Desktop" />
    <cartridge class="DesktopNavigation"  type="Desktop" />
    <cartridge class="DesktopNavigationTree"  type="Desktop" />
    <cartridge class="DesktopPanel"       type="Desktop" />
    <cartridge class="DesktopMainmenu"    type="Desktop" />
    
    <!-- ## Metadata ## -->
    <cartridge class="MetadataModule"           type="Module" />
    <cartridge class="MetadataModuleAccess"     type="Module" />
    
    <cartridge class="MetadataEntity"           type="Entity" />
    <cartridge class="MetadataEntityAccess"     type="Entity" />
    <cartridge class="MetadataDbSyncPostgresql" type="Entity" />
    
    <cartridge class="MetadataManagement"       type="Management" />
    <cartridge class="MetadataManagementAccess" type="Management" />
    <cartridge class="MetadataManagementMaintenance" type="Management" />
    <cartridge class="MetadataManagementAcl"    type="Management" />
    
    <cartridge class="MetadataProfile"          type="Profile" />
    <cartridge class="MetadataProcess"          type="Process" />
    <cartridge class="MetadataWidget"           type="Widget" />
    <cartridge class="MetadataDesktop"          type="Desktop" />
    <cartridge class="MetadataRole"             type="Role" />
    
    <!-- ## ACL ## -->
    <cartridge class="Acl"  type="Management" />
    
    
    <!-- ## Module ## -->
    <cartridge class="Module"               type="Module" />
    <cartridge class="ModuleI18n"           type="Module" />
    <cartridge class="ModuleController"     type="Module" />
    <cartridge class="ModuleSubwindow"      type="Module" />
    <cartridge class="ModuleSubwindowMenu"  type="Module" />
    <cartridge class="ModuleMaintab"        type="Module" />
    <cartridge class="ModuleMaintabMenu"    type="Module" />
    
    
    <!-- ## ELSE ## -->
    <cartridge class="Language"    type="Management" />
    <cartridge class="Webservice"  type="Management" />
    <cartridge class="WgtMenu"     type="Management" />
    
    <!-- ## CRUD MGMT ## -->
    <cartridge class="Entity"      type="Entity" />
    <cartridge class="WgtForm"     type="Entity" />
        
    <!-- ## CRUD ## -->
    <cartridge class="Crud"      type="Management" />
    
    <cartridge class="CrudModel"      type="Management" />
    <cartridge class="CrudController" type="Management" />
    <cartridge class="CrudQuery"      type="Management" />
    <cartridge class="CrudQueryPostgresql"      type="Management" />
    <cartridge class="CrudUi"         type="Management" />
    <cartridge class="CrudAjaxView"   type="Management" />
    
    <!-- ## CRUD Access ## -->
    <cartridge class="CrudAclContainerCreate"     type="Management" />
    <cartridge class="CrudAclContainerDataset"    type="Management" />
    <cartridge class="CrudAclContainerDelete"     type="Management" />
    <cartridge class="CrudAclContainerEdit"       type="Management" />
    <cartridge class="CrudAclContainerInsert"     type="Management" />
    <cartridge class="CrudAclContainerUpdate"     type="Management" />
    <cartridge class="CrudAclContainerShow"       type="Management" />
    <cartridge class="CrudAclContainerTab"        type="Management" />

    <cartridge class="CrudSubwindowCreate"      type="Management" />
    <cartridge class="CrudSubwindowMenuCreate"  type="Management" />
    <cartridge class="CrudSubwindowEdit"        type="Management" />
    <cartridge class="CrudSubwindowMenuEdit"    type="Management" />
    <cartridge class="CrudSubwindowTemplates"   type="Management" />
 
    <cartridge class="CrudMaintabCreate"      type="Management" />
    <cartridge class="CrudMaintabMenuCreate"  type="Management" />
    <cartridge class="CrudMaintabEdit"        type="Management" />
    <cartridge class="CrudMaintabMenuEdit"    type="Management" />
    <cartridge class="CrudMaintabTemplates"   type="Management" />

    <cartridge class="CrudTabController"  type="Management" />
    <cartridge class="CrudTabAjaxView"    type="Management" />
    <cartridge class="CrudTabTemplates"   type="Management" />

    <cartridge class="CrudRefController"  type="Management" />
    <cartridge class="CrudRefModel"       type="Management" />
    <cartridge class="CrudRefModelMulti"  type="Management" />
    <cartridge class="CrudRefUi"          type="Management" />
    
    <!-- ## Multi ## -->
    <cartridge class="Multi"       type="Management" />
    
    <!-- ## Filter ## -->
    <cartridge class="FilterQuery"  type="Management" />
    
    <!-- ## Generic Listing Logic ## -->
    <cartridge class="Listing"     type="Management" />
    
    <!-- ## Table ## -->
    <cartridge class="Table"           type="Management" />
    <cartridge class="TableQuery"           type="Management" />
    <cartridge class="TableQueryPostgresql" type="Management" />
    <cartridge class="TableElement"         type="Management" />
    <cartridge class="TableUi"              type="Management" />
    <cartridge class="TableAjaxView"        type="Management" />
    <cartridge class="TableModel"           type="Management" />
    <cartridge class="TableAccessContainer" type="Management" />

    <cartridge class="TableSubwindowView"       type="Management" />
    <cartridge class="TableSubwindowMenu"       type="Management" />
    <cartridge class="TableSubwindowTemplates"  type="Management" />
   
    <cartridge class="TableMaintabView"       type="Management" />
    <cartridge class="TableMaintabMenu"       type="Management" />
    <cartridge class="TableMaintabTemplates"  type="Management" />
    
   
    <cartridge class="TableRefModel"      type="Management" />
    <cartridge class="TableRefQuery"      type="Management" />
    <cartridge class="TableRefQueryPostgresql"      type="Management" />
    <cartridge class="TableRefElement"    type="Management" />
    <cartridge class="TableRefUi"         type="Management" />
    <cartridge class="TableRefAjaxView"   type="Management" />
    <cartridge class="TableRefAreaView"   type="Management" />
    <cartridge class="TableRefTemplates"  type="Management" />
    <cartridge class="TableRefAccessContainer"  type="Management" />
    
    <!-- ## Treetable ## -->
    <cartridge class="Treetable"           type="Management" />
    <cartridge class="TreetableQuery"       type="Management" />
    <cartridge class="TreetableQueryPostgresql"       type="Management" />
    <cartridge class="TreetableElement"        type="Management" />
    <cartridge class="TreetableUi"          type="Management" />
    <cartridge class="TreetableAjaxView"    type="Management" />
    <cartridge class="TreetableModel"       type="Management" />
    <cartridge class="TreetableAccessContainer" type="Management" />
    
    <cartridge class="TreetableMaintabView"       type="Management" />
    <cartridge class="TreetableMaintabMenu"       type="Management" />
    <cartridge class="TreetableMaintabTemplates"  type="Management" />
    
    <cartridge class="TreetableRefModel"      type="Management" />
    <cartridge class="TreetableRefQuery"      type="Management" />
    <cartridge class="TreetableRefQueryPostgresql"      type="Management" />
    <cartridge class="TreetableRefElement"       type="Management" />
    <cartridge class="TreetableRefUi"         type="Management" />
    <cartridge class="TreetableRefAjaxView"   type="Management" />
    <cartridge class="TreetableRefAreaView"   type="Management" />
    <cartridge class="TreetableRefTemplates"  type="Management" />
    <cartridge class="TreetableRefAccessContainer"  type="Management" />
    
    <!-- ## Selection ## -->
    <cartridge class="Selection"     type="Management" />
    <cartridge class="SelectionQuery"     type="Management" />
    <cartridge class="SelectionQueryPostgresql"     type="Management" />
    <cartridge class="SelectionElement"      type="Management" />
    <cartridge class="SelectionModel"     type="Management" />
    <cartridge class="SelectionUi"        type="Management" />
    <cartridge class="SelectionAjaxView"  type="Management" />
    <cartridge class="SelectionAccessContainer" type="Management" />
    
    <cartridge class="SelectionSubwindow"           type="Management" />
    <cartridge class="SelectionSubwindowMenu"       type="Management" />
    <cartridge class="SelectionSubwindowTemplates"  type="Management" />


    <!-- ## Export ## -->
    <cartridge class="ExportController"   type="Management" />
    <!--
    <cartridge class="ExportModel"        type="Management" />
    <cartridge class="ExportView"         type="Management" />
    <cartridge class="ExportSubwindow"    type="Management" />
    <cartridge class="ExportQuery"        type="Management" />
    <cartridge class="ExportQueryPostgresql"        type="Management" />
    <cartridge class="ExportExcel"        type="Management" />
    <cartridge class="ExportXml"          type="Management" />
    <cartridge class="ExportAccessDataset"   type="Management" />
    <cartridge class="ExportAccessListing"   type="Management" />
    -->
    
    <!-- ## Compare ## 
    <cartridge class="CompareModel"       type="Management" />
    <cartridge class="CompareSubwindow"   type="Management" />
    <cartridge class="CompareSubwindowMenu"   type="Management" />
    <cartridge class="CompareMaintab"     type="Management" />
    <cartridge class="CompareMaintabMenu"     type="Management" />
    <cartridge class="CompareController"  type="Management" />
    <cartridge class="CompareTemplates"   type="Management" />
    <cartridge class="CompareAccessDataset"   type="Management" />
    -->
     
    <!-- ## Maintenance ## -->
    <cartridge class="MaintenanceModel"       type="Management" />
    <cartridge class="MaintenanceSubwindow"   type="Management" />
    <cartridge class="MaintenanceSubwindowStatsEntity"  type="Management" />
    <cartridge class="MaintenanceController"  type="Management" />
    <cartridge class="MaintenanceTemplates"   type="Management" />
    <cartridge class="MaintenanceAccessDataset"   type="Management" />
    <cartridge class="MaintenanceAccessListing"   type="Management" />

     <!-- ## Enum ##  -->
    <cartridge class="Enum"             type="Enum" />

    <!-- ## Service ## -->
    <cartridge class="Service"       type="Service" />
    
    <!-- ## Components ## -->
    <cartridge class="Components"       type="Component" />
    
    <!-- ## Widget ##  -->
    <cartridge class="Widget"           type="Widget" />
    
     <!-- ## Item ##  -->
    <cartridge class="Item"             type="Item" />
    
    <!-- ## Process ##  -->
    <cartridge class="Process"          type="Process" />
    
    <!-- ## Message ##  -->
    <cartridge class="Message"          type="Message" />
    
    <!-- ## Action ##  -->
    <cartridge class="Action"          type="Action" />
     
    <!-- ## Page ##  -->
    <cartridge class="PageController"       type="Page" />
    <cartridge class="PageModel"            type="Page" />
    <cartridge class="PageTemplates"        type="Page" />
    <cartridge class="PageView"             type="Page" />
    <cartridge class="PageMasterTemplates"  type="Page" />
    
    <!-- ## Test Classes ##  
    <cartridge class="TestDbms"          type="Entity" />
    <cartridge class="TestEntity"        type="Entity" />
    -->
    
    <!--
    <cartridge class="DdlPostgresql"  type="Ddl"  >
      <owner>sdb_gw_sbiz</owner>
      <schema>production</schema>
      <appendDump>{$PATH_ROOT}SDB_42/ddl/def_views.sql</appendDump>
    </cartridge>
    
    
    <cartridge class="DokuErd" type="Entity"   >
      <owner>sdb_gw_sbiz</owner>
      <schema>production</schema>
    </cartridge>
    
-->
    <!--
    <cartridge class="DocApi" type="Documentation"   >
      <owner>sdb_gw_sbiz</owner>
      <schema>production</schema>

      <style>
        <css></css>
        <header></header>
        <logic></logic>
      </style>

      <path>{$PROJECT_PATH}doc/erd/</path>
    </cartridge>
     -->

  </cartridges>

</project>
<?php display_highlight( 'xml' ); ?>