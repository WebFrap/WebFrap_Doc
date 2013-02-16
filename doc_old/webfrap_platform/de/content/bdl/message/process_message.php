
<h1>Process Messages</h1>

<p>Process Messages sind spezielle Messages welche aus Prozessen heraus
getriggert werden. Zb. "Ein neues Project xy wurde angelegt" and einen Projektmanager.
</p>

<h2>Hier wäre ein super Platz für ein Codebeispiel</h2>
<?php start_highlight(); ?>
<messages>

  <message 
    name="project_project-development-accepted"
    entity="project_project"
    extends="project_project-development-base" >
    
    <!-- 
    Relevante Datenquellen hinzufügen
     -->
    <data_sources>
    </data_sources>
        
    <subject>{@env:app_name@} Notice: Project {@data:project_project.name@} was accepted</subject>
        
    <templates>
      <index name="index" type="template"  />
      <content type="embeded"  />
    </templates>
        
    <attachments>
    </attachments>
    
    <content>
      <html type="text" ><![CDATA[

<p class="mail_head" >
  <a href="{@env:server_address@}" >{@env:app_name@}</a> 
  Notice: Idea {@data:project_project.acronym@} was approved
</p>

<p class="text_def" > 
  <strong>Dear {@receiver:firstname@} {@receiver:lastname@},</strong>
</p>
  
<p class="text_def" >
A new Project
  <a href="{@env:server_address@}maintab.php?c=Project.Project_Viewer.edit&amp;objid={@data:project_project@}" >
    {@data:project_project.acronym@}
  </a>
was created.
</p>

<p>
  <strong>Comment:</strong> <br />
  <em>{@process:user_comment@}</em><br />
</p>

<p>
  <a 
    href="{@env:server_address@}maintab.php?c=Project.Project_Development_Process.form&amp;objid={@process:activ_status@}" 
    >Click here to see the actual status of the Project, or have a look in the process history.</a>
</p>

    ]]></html>
    </content>
      
  </message>
</messages>
<?php display_highlight( 'xml' ); ?>