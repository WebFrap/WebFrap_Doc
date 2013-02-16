
<h1>Full_example</h1>

<p>Hier könnte ihre Dokumentation stehen... Wenn sie endlich jemand schreiben würde...</p>

<label>Hier wäre ein super Platz für ein Codebeispiel</label>
<?php start_highlight(); ?>
<?xml version="1.0" encoding="UTF-8"?>
<project name="SDB_SBiz" title="SDB SBiz" >

  <author><![CDATA[Dominik Bonsch <db@webfrap.net>]]></author>
  <copyright><![CDATA[Softwareentwicklung Dominik Bonsch <db@s-db.de>]]></copyright>
  <licence>GPLv3</licence>
  <url>http://s-db.de</url>
  <name>S-DB Small Business Core</name>
  <key>sbiz</key>
  <header>{$PATH_ROOT}SDB_42/data/header/sdb-code-header.plain.tpl</header>
  <sandbox>false</sandbox>
  
  <!--  -->
  <target_group>kmu</target_group>
 
  
  <settings>
    <var key="display_button_text" value="false" />
  </settings>

  <version>1</version>
  <revision>1</revision>

  <model version="" key="bdl" ></model>
  
  <architecture version="" key="wbf" >
    
    <list_search type="dropdown" />
    
    <mask 
      controls="splitbutton"
      tab_type="accordion" />
    
    <list entry_controls="splitbutton" />
    
    <protocol level="access" />
    
  </architecture>


  <description><![CDATA[Project Description]]></description>
  
  <concepts>
    <concept name="protocol" ></concept>
  </concepts>

  <languages default="en" code="en"  >
    <lang>de</lang>
    <lang>en</lang>
    <!-- 
    <lang>fr</lang>
    <lang>es</lang>
    <lang>it</lang>
    <lang>pl</lang>
     -->
  </languages>

  <path>
    <path_gw>{$PATH_PROJECT}</path_gw>
    <path_output>{$PATH_OUTPUT}</path_output>
    <path_deploy>{$PATH_DEPLOY}</path_deploy>
    <path_root>{$PATH_ROOT}</path_root>
    <path_include_list>{$PATH_PROJECT}conf/include/gmod/</path_include_list>
  </path>

  <repositories>
    <repository name="sdb" >{$PATH_42_SDB}</repository>
    <repository name="sbiz" >{$PATH_42_SBIZ}</repository>
    <repository name="core" >{$PATH_42_CORE}</repository>
    <repository name="business" >{$PATH_42_BUSINESS}</repository>
  </repositories>

  <var name="PATH_PROJECT"      value="{$PATH_ROOT}SDB_Mod_Base/" />
  
  <var name="PATH_42_SDB"       value="{$PATH_ROOT}SDB_42/" />
  <var name="PATH_42_SBIZ"      value="{$PATH_ROOT}SDB_42_SBiz/bdl/" />
  <var name="PATH_42_CORE"      value="{$PATH_ROOT}WebFrap_42_Core/bdl/" />
  <var name="PATH_42_BUSINESS"  value="{$PATH_ROOT}WebFrap_42_Business/bdl/" />

  <var name="PATH_OUTPUT"   value="{$PATH_ROOT}cache/genf/sdb-sbiz/" />
  <var name="PATH_DEPLOY"   value="{$PATH_ROOT}SDB_Mod_Base/" />


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
        <docus />
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
        <docus />
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
        <docus />
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
        <docus />
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
        <docus />
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
        <docus />
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
        <docus />
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
        <docus />
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
        <docus />
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
        <docus />
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
        <docus />
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
        <docus />
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
        <docus />
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
        <docus />
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
        <docus />
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
        <docus />
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
        <docus />
      </use>
    </namespace>
    
    <namespace name="coupon" deploy="custom" >
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
        <docus />
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
        <docus />
      </use>
    </namespace>
    
    <namespace name="distribution" deploy="custom" >
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
        <docus />
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
        <docus />
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
        <docus />
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
        <docus />
      </use>
    </namespace>
    
    <namespace name="funds" deploy="custom" >
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
        <docus />
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
        <docus />
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
        <docus />
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
        <docus />
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
        <docus />
      </use>
    </namespace>
    
    <namespace name="game" deploy="custom" >
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
        <docus />
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
        <docus />
      </use>
    </namespace>
    
     <namespace name="logistic" deploy="custom" >
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
        <docus />
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
        <docus />
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
        <docus />
      </use>
    </namespace>
    
     <namespace name="office" deploy="custom" >
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
        <docus />
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
        <docus />
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
        <docus />
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
        <docus />
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
        <docus />
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
        <docus />
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
        <docus />
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
        <docus />
      </use>
    </namespace>
    
    <namespace name="tax" deploy="custom" >
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
        <docus />
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
        <docus />
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
        <docus />
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
        <docus />
      </use>
    </namespace>

  </import>

  <deployment>
    <!-- <mod name="*" overwrite="all" >{$PATH_DEPLOY}</mod>--><!-- Alles in den Projektpfad deployen -->
    
    <mod name="accounting" key="SDB_Mod_Accounting" overwrite="all"  >      
      <path>{$PATH_ROOT}SDB_Mod_Accounting/</path>
    </mod>
    
    <mod name="association" key="SDB_Mod_Association" overwrite="all" >      
      <path>{$PATH_ROOT}SDB_Mod_Association/</path>
      <path_test>{$PATH_ROOT}SDB_Test_SBiz/</path_test>
    </mod>
    
    <mod name="banking" key="SDB_Mod_Banking" overwrite="all" >      
      <path>{$PATH_ROOT}SDB_Mod_Banking/</path>
    </mod>
    
    <mod name="bdl" key="SDB_Mod_Bdl" overwrite="all"  >      
      <path>{$PATH_ROOT}SDB_Mod_Bdl/</path>
    </mod>
    
    <mod name="daidalos"  key="SDB_Mod_Daidalos" overwrite="all"  >      
      <path>{$PATH_ROOT}SDB_Mod_Daidalos/</path>
    </mod>
    
    <mod name="building" key="SDB_Mod_Building" overwrite="all"  >      
      <path>{$PATH_ROOT}SDB_Mod_Building/</path>
    </mod>
    
    <mod name="booking" key="SDB_Mod_Booking" overwrite="all"  >
      <path>{$PATH_ROOT}SDB_Mod_Booking/</path>
    </mod>

    <mod name="business" key="SDB_Mod_Business" overwrite="all"  >
      <path>{$PATH_ROOT}SDB_Mod_Business/</path>
    </mod>

    <mod name="canteen" key="SDB_Mod_Canteen" overwrite="all"  >      
      <path>{$PATH_ROOT}SDB_Mod_Canteen/</path>
    </mod>
    
    <mod name="catering" key="SDB_Mod_Catering" overwrite="all"  >      
      <path>{$PATH_ROOT}SDB_Mod_Catering</path>
    </mod>
    
    <mod name="cms" key="SDB_Mod_Cms" overwrite="all"  >      
      <path>{$PATH_ROOT}SDB_Mod_Cms/</path>
    </mod>
   
    <mod name="colab" key="SDB_Mod_Colab" overwrite="all"  >      
      <path>{$PATH_ROOT}SDB_Mod_Colab/</path>
    </mod>
    
    <mod name="core" key="SDB_Mod_Core" overwrite="all" >      
      <path>{$PATH_ROOT}SDB_Mod_Core/</path>
    </mod>
    
    <mod name="coupon" key="SDB_Mod_Coupon"  overwrite="all" >      
      <path>{$PATH_ROOT}SDB_Mod_Coupon/</path>
    </mod>
    
    <mod name="crm" key="SDB_Mod_Crm"  overwrite="all" >      
      <path>{$PATH_ROOT}SDB_Mod_Crm/</path>
    </mod>
   
    <mod name="dms" key="SDB_Mod_Dms" overwrite="all" >      
      <path>{$PATH_ROOT}SDB_Mod_Dms/</path>
    </mod>
    
     <mod name="colab" key="SDB_Mod_Colab" overwrite="all" >      
      <path>{$PATH_ROOT}SDB_Mod_Colab/</path>
    </mod>
    
    <mod name="distribution" key="SDB_Mod_Distribution" overwrite="all" >      
      <path>{$PATH_ROOT}SDB_Mod_Distribution/</path>
    </mod>
   
    <mod name="doku" key="SDB_Mod_Doku" overwrite="all" >      
      <path>{$PATH_ROOT}SDB_Mod_Doku/</path>
    </mod>
    
 
    <mod name="enterprise"  key="SDB_Mod_Enterprise" overwrite="all"  >      
      <path>{$PATH_ROOT}SDB_Mod_Enterprise/</path>
    </mod>
    
    <mod name="event" key="SDB_Mod_Event" overwrite="all"  >      
      <path>{$PATH_ROOT}SDB_Mod_Event/</path>
    </mod>
    
    <mod name="finance" key="SDB_Mod_Finance" overwrite="all"  >      
      <path>{$PATH_ROOT}SDB_Mod_Finance/</path>
    </mod>
    
    <mod name="forum" key="SDB_Mod_Forum" overwrite="all" >      
      <path>{$PATH_ROOT}SDB_Mod_Forum/</path>
    </mod>
    
    <mod name="funds" key="SDB_Mod_Funds" overwrite="all" >      
      <path>{$PATH_ROOT}SDB_Mod_Funds/</path>
    </mod>
    
    <mod name="gallery" key="SDB_Mod_Gallery" overwrite="all"  >      
      <path>{$PATH_ROOT}SDB_Mod_Gallery/</path>
    </mod>
    
    <mod name="game" key="SDB_Mod_Game" overwrite="all"  >      
      <path>{$PATH_ROOT}SDB_Mod_Game/</path>
    </mod>
    
    <mod name="hosting" key="SDB_Mod_Hosting" overwrite="all"  >      
      <path>{$PATH_ROOT}SDB_Mod_Hosting/</path>
    </mod>
    
    <mod name="hotel" key="SDB_Mod_Hotel" overwrite="all"  >      
      <path>{$PATH_ROOT}SDB_Mod_Hotel/</path>
    </mod>
    
    <mod name="hr" key="SDB_Mod_Hr" overwrite="all" >      
      <path>{$PATH_ROOT}SDB_Mod_Hr/</path>
    </mod>
    
    <mod name="human"  key="SDB_Mod_Human"  overwrite="all"  >      
      <path>{$PATH_ROOT}SDB_Mod_Human/</path>
    </mod>

    <mod name="insurance" key="SDB_Mod_Insurance" overwrite="all"  >      
      <path>{$PATH_ROOT}SDB_Mod_Insurance/</path>
    </mod>
    
    <mod name="issue" key="SDB_Mod_Issue" overwrite="all"  >      
      <path>{$PATH_ROOT}SDB_Mod_Issue/</path>
    </mod>
    
    <mod name="it" key="SDB_Mod_It" overwrite="all"  >      
      <path>{$PATH_ROOT}SDB_Mod_It/</path>
    </mod>
    
     <mod name="logistic" key="SDB_Mod_Logistic" overwrite="all"  >
      <path>{$PATH_ROOT}SDB_Mod_Logistic/</path>
    </mod>
    
    <mod name="mrp" key="SDB_Mod_Mrp" overwrite="all"  >
      <path>{$PATH_ROOT}SDB_Mod_Mrp/</path>
    </mod>
    
    <mod name="orga" key="SDB_Mod_Orga" overwrite="all"  >
      <path>{$PATH_ROOT}SDB_Mod_Orga/</path>
    </mod>
    
    <mod name="payment" key="SDB_Mod_Payment" overwrite="all"  >      
      <path>{$PATH_ROOT}SDB_Mod_Payment/</path>
    </mod>
    
    <mod name="product" key="SDB_Mod_Product"  overwrite="all"  >      
      <path>{$PATH_ROOT}SDB_Mod_Product/</path>
    </mod>
    
    <mod name="project" key="SDB_Mod_Project" overwrite="all"  >      
      <path>{$PATH_ROOT}SDB_Mod_Project/</path>
    </mod>
    
    <mod name="rental" key="SDB_Mod_Rental" overwrite="all"  >      
      <path>{$PATH_ROOT}SDB_Mod_Rental/</path>
    </mod>
    
    <mod name="recruiting" key="SDB_Mod_Recruiting" overwrite="all"  >      
      <path>{$PATH_ROOT}SDB_Mod_Recruiting/</path>
    </mod>
    
    <mod name="shop" key="SDB_Mod_Shop" overwrite="all"  >      
      <path>{$PATH_ROOT}SDB_Mod_Shop/</path>
    </mod>
    
    <mod name="software" key="SDB_Mod_Software" overwrite="all"  >      
      <path>{$PATH_ROOT}SDB_Mod_Software/</path>
    </mod>
    
    <mod name="stakeholder" key="SDB_Mod_Stakeholder" overwrite="all"  >      
      <path>{$PATH_ROOT}SDB_Mod_Stakeholder/</path>
    </mod>
    
    <mod name="survey" key="SDB_Mod_Survey" overwrite="all"  >      
      <path>{$PATH_ROOT}SDB_Mod_Survey/</path>
    </mod>
    
    <mod name="sync" key="SDB_Mod_Sync" overwrite="all"  >      
      <path>{$PATH_ROOT}SDB_Mod_Sync/</path>
    </mod>
    
    <mod name="service" key="SDB_Mod_Service" overwrite="all"  >      
      <path>{$PATH_ROOT}SDB_Mod_Service/</path>
      <path_test>{$PATH_ROOT}SDB_Test_SBiz/</path_test>
      <url user="buildservice" passwd="tulipl54!" >https://hg.webfrap-servers.de/s-db/SDB_Mod_Base</url>
    </mod>
    
    <mod name="staffing" key="SDB_Mod_Staffing" overwrite="all"  >      
      <path>{$PATH_ROOT}SDB_Mod_Staffing/</path>
      <path_test>{$PATH_ROOT}SDB_Test_SBiz/</path_test>
      <url user="buildservice" passwd="tulipl54!" >https://hg.webfrap-servers.de/s-db/SDB_Mod_Base</url>
    </mod>
    
    <mod name="trade" key="SDB_Mod_Trade" overwrite="all"  >      
      <path>{$PATH_ROOT}SDB_Mod_Trade/</path>
      <path_test>{$PATH_ROOT}SDB_Test_SBiz/</path_test>
      <url user="buildservice" passwd="tulipl54!" >https://hg.webfrap-servers.de/s-db/SDB_Mod_Base</url>
    </mod>
    
    <mod name="tax" key="SDB_Mod_Tax" overwrite="all"  >      
      <path>{$PATH_ROOT}SDB_Mod_Tax/</path>
      <path_test>{$PATH_ROOT}SDB_Test_SBiz/</path_test>
      <url user="buildservice" passwd="tulipl54!" >https://hg.webfrap-servers.de/s-db/SDB_Mod_Base</url>
    </mod>
    
    <mod name="wawi" key="SDB_Mod_Wawi" overwrite="all"  >      
      <path>{$PATH_ROOT}SDB_Mod_Wawi/</path>
      <path_test>{$PATH_ROOT}SDB_Test_SBiz/</path_test>
      <url user="buildservice" passwd="tulipl54!" >https://hg.webfrap-servers.de/s-db/SDB_Mod_Base</url>
    </mod>
    
    <mod name="wbfsys" key="SDB_Mod_Wbfsys" overwrite="all"  >      
      <path>{$PATH_ROOT}SDB_Mod_Wbfsys/</path>
      <path_test>{$PATH_ROOT}SDB_Sbiz_Test_Base/</path_test>
      <url user="buildservice" passwd="tulipl54!" >https://hg.webfrap-servers.de/s-db/SDB_Mod_Base</url>
    </mod>
    
    <mod name="profiles" key="SDB_Mod_Base" overwrite="all"  >
      <path>{$PATH_ROOT}SDB_Mod_Base/</path>
      <path_test>{$PATH_ROOT}SDB_Sbiz_Test_Base/</path_test>
      <url user="buildservice" passwd="tulipl54!" >https://hg.webfrap-servers.de/s-db/SDB_Mod_Base</url>
    </mod>
    
    <mod name="sbiz"  key="SDB_Mod_Base"  overwrite="all"  >
      <path>{$PATH_ROOT}SDB_Mod_Base/</path>
      <path_test>{$PATH_ROOT}SDB_Sbiz_Test_Base/</path_test>
      <url user="buildservice" passwd="tulipl54!" >https://hg.webfrap-servers.de/s-db/SDB_Mod_Base</url>
    </mod>
    
    <mod name="webfrap" key="SDB_Mod_Base"  overwrite="all"  >
      <path>{$PATH_ROOT}SDB_Mod_Base/</path>
      <path_test>{$PATH_ROOT}SDB_Sbiz_Test_Base/</path_test>
      <url user="buildservice" passwd="tulipl54!" >https://hg.webfrap-servers.de/s-db/SDB_Mod_Base</url>
    </mod>
    
    <mod name="all" key="SDB_Mod_Base"  overwrite="all"  >
      <path>{$PATH_ROOT}SDB_Mod_Base/</path>
      <url user="buildservice" passwd="tulipl54!" >https://hg.webfrap-servers.de/s-db/SDB_Mod_Base</url>
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
    <node>docu</node>
  </nodes>

  <cartridges>
      
    <!-- ## Desktop & Profile ## -->
    <cartridge class="Profile"      type="Profile" />
   
    <cartridge class="Desktop"            type="Desktop" />
    <cartridge class="DesktopTemplate"    type="Desktop" />
    <cartridge class="DesktopIndex"       type="Desktop" />
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
    
    <!-- Doku Cartridges -->
    <cartridge class="DocuProfile"        type="Profile" />
    <cartridge class="DocuRole"           type="Role" />
    <cartridge class="DocuModule"         type="Module" />
    <cartridge class="DocuService"        type="Service" />
    <cartridge class="DocuEntity"         type="Entity" />
    <cartridge class="DocuManagement"     type="Management" />
    <cartridge class="DocuCustom"         type="Docu" />

    <cartridge class="Domain"  type="Management" />
    
    <!-- ## ACL ## -->
    <cartridge class="Acl"  type="Management" />
    
    
    <!-- ## Module ## -->
    <cartridge class="Module"               type="Module" />
    <cartridge class="ModuleI18n"           type="Module" />
    <cartridge class="ModuleController"     type="Module" />
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
    
    
    <cartridge class="CrudModalCreate"          type="Management" />
    <cartridge class="CrudModalCreateTemplate"  type="Management" />

 
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
    

    <!-- ## Export ## -->
    <cartridge class="ExportController"   type="Management" />

     
    <!-- ## Maintenance ## -->
    <cartridge class="Maintenance"       type="Management" />

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

  </cartridges>

</project>

<?php display_highlight( 'xml' ); ?>