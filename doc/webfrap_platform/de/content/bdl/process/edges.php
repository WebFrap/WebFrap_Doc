
<h1>Edges</h1>

<p>Hier könnte ihre Dokumentation stehen... Wenn sie endlich jemand schreiben würde...</p>


<label>Edge Attributes</label>
<ul class="doc_tree" >
  <li><span>target</span> key des nodes auf welchen die egdge erweitert</li>
  <li><span>direction</span> forward|back</li>
</ul>

<label>Edge Subtags</label>
<ul class="doc_tree" >
  <li><span>label</span> Label</li>
  <li><span>description</span> Description</li>
  <li><span>color</span> ColorScheme</li>
  <li><span>confirm</span></li>
  <li><span>order</span></li>
  <li><span>access</span> Verweis auf eine/n Responsible Node/List</li>
  <li><span>actions</span></li>
  <li><span>roles</span></li>
  <li><span>profiles</span></li>
  <li><span>phase</span> Verweis auf die Phase in welcher der Node sich befindet</li>
</ul>


<label>Edges</label>
<?php start_highlight(); ?>
<processes>
  <process name="process_name" >
    <nodes>
      <node name="node_name" >

        <edges>
        
          <edge target="in_negotiation" >
            
            <label>
              <text lang="de" >Verhandeln</text>
              <text lang="en" >Negotiat</text>
            </label>

            
            <!-- Zugriff auf den Edge regeln -->
            <access key="creator" ></access>
            
            <!-- Actions triggern -->
            <actions>
              <action name="idea_published" position="success" />
            </actions>
  
          </edge>                
          
          <edge target="accepted" >
            
            <label>
              <text lang="de" >Akzeptieren</text>
              <text lang="en" >Accept</text>
            </label>
    
          </edge>
                    
          <edge target="declined" >
            
            <label>
              <text lang="de" >Ablehnen</text>
              <text lang="en" >Decline</text>
            </label>

          </edge>               
        </edges>
        
      </node>
    </nodes>
  </process>
</processes>
<?php display_highlight( 'xml' ); ?>