<h1>Form UI</h1>

<a class="go_back" href="content.php?page=bdl.ui.desc" >Zurück zum UI Node</a>

<p>
Anpassen der Create, Edit und Show Masken.
</p>

<ul>
  <li><span class="bdl" >layout</span></li>
  <li><span class="bdl" ></span></li>
</ul>

<h3>Umfangreiches Beispiel</h3>
<?php start_highlight(); ?>
<_..._>
  <ui>
    <form>      

      <edit>
        <layout>
          <tabs>
            <body>
             <tab name="default" >
               <body>
               
                  <group name="page" cols="2" >
                    <body>
                      <field name="title" ></field>
                      <field name="caption" ></field>
                      <field name="access_key" ></field>
                      <field name="type" ></field>
                      <field name="id_category" ></field>
                    </body>
                  </group>
                  
                  <group name="template" cols="2" >
                    <body>
                      <field name="id_template" ></field>
                      <field name="id_parent" ></field>
                      <field name="id_project" ></field>
                      <field name="id_age_rating"  ></field>
                    </body>
                  </group>
  
              
                  <group name="content" cols="1" >
                    <body>
                      <field name="page_content" ></field>
                    </body>
                  </group>
                  
                  <box name="slices" size="62" class="wgt-border"  >
                    <body>
                      <reference name="page_slice" >
                        <listing>
                          <panel clear="true" />
                          <properties>
                            <list_body height="small" />
                          </properties>
                        </listing>
                      </reference>
                    </body>
                  </box>
                  
  
                  <category name="meta" />
                </body>
              </tab>
          
              <tab name="description"  >
                <label>
                  <text lang="en" >Description</text>
                </label>
                <body>
                  <group class="description" >
                    <body>
                      <field name="description"  ></field>
                    </body>
                  </group>
                </body>
              </tab>
           
              <tab name="team" type="load" >
                <label>
                  <text lang="de" >Team</text>
                  <text lang="en" >Team</text>
                </label>
                <body>
                  <item name="staff" type="role_list" source="cms_page" >
                    
                    <area name="cms_page" />
                  
                    <roles>
                      <role name="owner" ></role>
                      <role name="author" ></role>
                      <role name="staff" ></role>
                    </roles>
                  </item>
                  
                </body>
              </tab>
  
              <tab name="comments" type="load" >
                <body>
                  <box layout="clear" size="full" >
                    <body>
                      <reference name="comments" >
                      </reference>
                    </body>
                  </box>
                  <box layout="clear" size="full" >
                    <body>
                      <reference name="tags" />
                    </body>
                  </box>
                </body>
              </tab>
          
              <tab name="attachments" type="load" >
                <body>
                  <reference name="attachments" />
                </body>
              </tab>
  
            </body>
          </tabs>
        </layout>
      </edit>
      
    </form>
  </ui>
</_..._>
<?php display_highlight( 'xml' ); ?>