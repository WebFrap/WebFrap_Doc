
<h1>Reference UI</h1>

<p>Customizing des Referenz UI elements sowie des dazugehörigen control panels.</p>

<label>Actions</label>

<p>
  Die Buttons in den Referenzen.
</p>

<?php start_highlight(); ?>
<_..._>

<references>
  <ref>
    <ui>

      <!-- Controls -->
      <list>
      
        <!-- Für alle listen -->
        <controls>
          <action name="create" />
          <action name="connect" />
        </controls>
        
        <!-- Nur für tables -->
        <table>
          <controls>
            
          </controls>
        </table>
        
      </list>
    </ui>
  </ref>
</references>

</_..._>
<?php display_highlight( 'xml' ); ?>


<label>List Element Menu</label>

<p>
Über das Listenelementmenü kann das Menü des Listenelements beeinflusst werden,
ohne die Funktionalität des Codes selbst beeinflussen zu müssen.<br />
Im Gegensatz zu Management Actions wird weiterhin der Code erstellt.<br />
Es werden nur die Actions im Menü angezeigt die hier gelistet werden, unabhängig davon
ob noch custom actions für die liste definiert wurden.
</p>

<?php start_highlight(); ?>
<_..._>

<references>
  <ref>
    <ui>
      
      <list>  
        <menu>
          <action name="edit" />
        </menu>
        
        <table>
          <menu>
            <action name="edit" />
          </menu>
        </table>
        
      </list>
      
    </ui>
  </ref>
</references>

</_..._>
<?php display_highlight( 'xml' ); ?>


<label>Clear the Panel</label>
<?php start_highlight(); ?>
<_..._>

<references>
  <ref>
    <ui>
      
      <list>  
        <panel clear="true" />
        
        <table>
          <panel clear="true" />
        </table>
        
      </list>
      
    </ui>
  </ref>
</references>

</_..._>
<?php display_highlight( 'xml' ); ?>


<label>Menu Aktionen in den Listenelementen selbst</label>
<?php start_highlight(); ?>
<_..._>

<references>
  <ref>
    <ui>

      <list>  
        <actions>
              
          <!-- adopt action -->
          <node name="custom_adop_action" >
          
            <label>
              <text lang="de" >Adopt</text>
              <text lang="en" >Adopt</text>
            </label>
            
            <!-- nur anzeigen unter bestimmten bedingungen -->
            <conditions default="success" >
              
              <!-- Irgendjemand hat schon die Rollen responsible -->
              <condition type="somebody_has_roles_explicit" >
                <!-- nicht anzeigen wenn er bereits adoptiert hat  -->
                <granularity>0</granularity>
                <not />
                <break />
                <area key="actual_entity" relation="entity" accuracy="dataset"  />
                <role name="responsible" />
              </condition>
              
              <!-- Die Aktuelle Rolle hat die rolle manager global -->
              <condition type="has_role" >
                <not />
                <break />
                <area key="actual_entity" relation="global" />
                <role name="manager" />
              </condition>
              
            </conditions>
            
            <!-- Hat mindestens das Accesslevel access -->
            <access access_level="access" ></access>
            
            <!-- Wird als button gerendert -->
            <ui type="button" ></ui>
            
            <!-- Es sollt eine action getriggert werden -->
            <action type="action" context="reference" ><![CDATA[ajax.php?c=Actual.AdoptAsResponsible_Action.trigger&amp;objid=]]></action>
            <icon name="adopt" alt="adopt" ><![CDATA[control/adopt.png]]></icon>
            
          </node>
          
          <!-- Eine Custommaske ansprechen -->
          <node name="custom_mask" >
            <label>
              <text lang="de" >Custom Mask</text>
              <text lang="en" >Planning</text>
            </label>
            
            <access access_level="access" ></access>
            
            <conditions default="success" >
              
              <!-- nur anzeigen wenn die daten eine bestimmte konsistenz haben -->
              <condition type="value_in" >
                <attribute name="access_key" ref="id_status" />
                
                <not />
                <break />
                
                <values>
                  <value>dow_approved</value>
                </values>
                
              </condition>

            </conditions>
            
            <ui type="button" ></ui>
            <action type="window" context="reference" ><![CDATA[maintab.php?c=Plan.Project.plan&amp;objid=]]></action>
            <icon name="planProject" alt="planning" ><![CDATA[control/plan.png]]></icon>
          </node>

          <!-- open a special mask -->
          <node name="special_mask" >
            <label>
              <text lang="de" >Special</text>
              <text lang="en" >Special</text>
            </label>
            <action mgmt="entity_special_mask_management" call="edit" />
            
            <icon name="special" alt="special" ><![CDATA[control/special.png]]></icon>
          </node>
          
          <!-- Einen Report einbinden -->
          <node name="some_report" >
            <label>
              <text lang="de" >Some Report</text>
              <text lang="en" >Some Report</text>
            </label>
            
            <!-- Ist ein Binary Dokument -->
            <ui type="document" />
            <icon key="some_report" alt="Some Report" ><![CDATA[control/report.png]]></icon>
            <action 
              type="document" 
              target="report" 
              context="report" ><![CDATA[document.php?c=Some.Custom.report&amp;objid=]]></action>
          </node>
              
        </actions>

      </list>
      
    </ui>
  </ref>
</references>

</_..._>
<?php display_highlight( 'xml' ); ?>


<label>Suche</label>

<p>
  Die Felder welche bei der Extended Search angezeigt werden
</p>

<?php start_highlight(); ?>
<_..._>

<references>
  <ref>
    <ui>

      <!-- Controls -->
      <list>
      
        <!-- Für alle listen -->
        <controls>
          <action name="create" />
          <action name="connect" />
        </controls>
        
        <!-- Nur für tables -->
        <table>
          <controls>
            
          </controls>
        </table>
        
      </list>
    </ui>
  </ref>
</references>

</_..._>
<?php display_highlight( 'xml' ); ?>