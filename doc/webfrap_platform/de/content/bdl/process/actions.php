
<h1>Process Actions</h1>


<?php start_highlight(); ?>
<processes>
  
  <!-- 
    name: Name des Prozesses (Cname)
    src: Die Datenquelle für den Process
   -->
  <process 
    name="project_project-development"
    src="project_project" >

    <actions>
    
      <action name="in_negotiation" >
      
        <procedures>
          <procedure type="send_mail" >
            <message name="in_negotiation" />
            
            <messages>
              <success>
                <text lang="en" >Notified Creator and responsible Managers</text>
              </success>
            </messages>
            
            <channels>
              <mail />
              <message />
            </channels>
            
            <receivers>
              <receiver type="responsible" name="project_owner" />
            </receivers>
            
          </procedure>
        </procedures>
        
      </action>
      
      <action name="declined" >
      
        <procedures>
          <procedure type="send_mail" >
            <message name="declined" />
            
            <messages>
              <success>
                <text lang="en" >Notified Creator and responsible Managers</text>
              </success>
            </messages>
            
            <channels>
              <mail />
              <message />
            </channels>
            
            <receivers>
              <receiver type="responsible" name="project_owner" />
            </receivers>
            
          </procedure>
        </procedures>
        
      </action>
      
      <action name="accepted" >
      
        <procedures>
          <procedure type="send_mail" >
            <message name="accepted" />
            
            <messages>
              <success>
                <text lang="en" >Notified Creator and responsible Managers</text>
              </success>
            </messages>
            
            <channels>
              <mail />
              <message />
            </channels>
            
            <receivers>
              <receiver type="responsible" name="project_owner" />
            </receivers>
            
          </procedure>
        </procedures>
        
      </action>
      
      <action name="frozen" >
      
        <procedures>
          <procedure type="send_mail" >
            <message name="frozen" />
            
            <messages>
              <success>
                <text lang="en" >Notified Creator and responsible Managers</text>
              </success>
            </messages>
            
            <channels>
              <mail />
              <message />
            </channels>
            
            <receivers>
              <receiver type="responsible" name="participants" />
            </receivers>
            
          </procedure>
        </procedures>
        
      </action>
      
      <action name="running" >
      
        <procedures>
          <procedure type="send_mail" >
            <message name="running" />
            
            <messages>
              <success>
                <text lang="en" >Notified Creator and responsible Managers</text>
              </success>
            </messages>
            
            <channels>
              <mail />
              <message />
            </channels>
            
            <receivers>
              <receiver type="responsible" name="participants" />
            </receivers>
            
          </procedure>
        </procedures> 

      </action>
      
      <action name="rollout" >
      
        <procedures>
          <procedure type="send_mail" >
            <message name="rollout" />
            
            <messages>
              <success>
                <text lang="en" >Notified Creator and responsible Managers</text>
              </success>
            </messages>
            
            <channels>
              <mail />
              <message />
            </channels>
            
            <receivers>
              <receiver type="responsible" name="participants" />
            </receivers>
            
          </procedure>
        </procedures> 

      </action>
      
      <action name="completed" >
      
        <procedures>
          <procedure type="send_mail" >
            <message name="completed" />
            
            <messages>
              <success>
                <text lang="en" >Notified Creator and responsible Managers</text>
              </success>
            </messages>
            
            <channels>
              <mail />
              <message />
            </channels>
            
            <receivers>
              <receiver type="responsible" name="participants" />
            </receivers>
            
          </procedure>
        </procedures> 

      </action>
      
      <action name="rollout" >
      
        <procedures>
          <procedure type="send_mail" >
            <message name="rollout" />
            
            <messages>
              <success>
                <text lang="en" >Notified Creator and responsible Managers</text>
              </success>
            </messages>
            
            <channels>
              <mail />
              <message />
            </channels>
            
            <receivers>
              <receiver type="responsible" name="participants" />
            </receivers>
            
          </procedure>
        </procedures> 

      </action>
      
      <action name="support" >
      
        <procedures>
          <procedure type="send_mail" >
            <message name="support" />
            
            <messages>
              <success>
                <text lang="en" >Notified Creator and responsible Managers</text>
              </success>
            </messages>
            
            <channels>
              <mail />
              <message />
            </channels>
            
            <receivers>
              <receiver type="responsible" name="management" />
            </receivers>
            
          </procedure>
        </procedures> 

      </action>
      
      <action name="re_opened" >
      
        <procedures>
          <procedure type="send_mail" >
            <message name="re_opened" />
            
            <messages>
              <success>
                <text lang="en" >Notified Creator and responsible Managers</text>
              </success>
            </messages>
            
            <channels>
              <mail />
              <message />
            </channels>
            
            <receivers>
              <receiver type="responsible" name="participants" />
            </receivers>
            
          </procedure>
        </procedures> 

      </action>
      
      <action name="completed" >
      
        <procedures>
          <procedure type="send_mail" >
            <message name="completed" />
            
            <messages>
              <success>
                <text lang="en" >Notified Creator and responsible Managers</text>
              </success>
            </messages>
            
            <channels>
              <mail />
              <message />
            </channels>
            
            <receivers>
              <receiver type="responsible" name="participants" />
            </receivers>
            
          </procedure>
        </procedures> 

      </action>
      
      <action name="closed" >
      
        <procedures>
          <procedure type="send_mail" >
            <message name="closed" />
            
            <messages>
              <success>
                <text lang="en" >Notified Creator and responsible Managers</text>
              </success>
            </messages>
            
            <channels>
              <mail />
              <message />
            </channels>
            
            <receivers>
              <receiver type="responsible" name="project_owner" />
            </receivers>
            
          </procedure>
        </procedures> 

      </action>
      
      <action name="terminated" >
      
        <procedures>
          <procedure type="send_mail" >
            <message name="terminated" />
            
            <messages>
              <success>
                <text lang="en" >Notified Creator and responsible Managers</text>
              </success>
            </messages>
            
            <channels>
              <mail />
              <message />
            </channels>
            
            <receivers>
              <receiver type="responsible" name="participants" />
            </receivers>
            
          </procedure>
        </procedures> 

      </action>
      
      <action name="archived" >
      
        <procedures>
          <procedure type="send_mail" >
            <message name="archived" />
            
            <messages>
              <success>
                <text lang="en" >Notified Creator and responsible Managers</text>
              </success>
            </messages>
            
            <channels>
              <mail />
              <message />
            </channels>
            
            <receivers>
              <receiver type="responsible" name="project_owner" />
            </receivers>
            
          </procedure>
        </procedures> 

      </action>
      
    </actions>

  </process>

</processes>
<?php display_highlight( 'xml' ); ?>