

<h2>User</h2>

<h3>User Levels</h3>
<ul class="doc_tree" >
  <li><span class="key_word" >public_edit</span> (<span class="key_word" >0</span>)</li>
  <li><span class="key_word" >public_access</span> (<span class="key_word" >10</span>)</li>
  <li><span class="key_word" >user</span> (<span class="key_word" >20</span>)</li>
  <li><span class="key_word" >ident</span> (<span class="key_word" >30</span>)</li>
  <li><span class="key_word" >employee</span> (<span class="key_word" >40</span>)</li>
  <li><span class="key_word" >superior</span> (<span class="key_word" >50</span>)</li>
  <li><span class="key_word" >l4_manager</span> (<span class="key_word" >60</span>)</li>
  <li><span class="key_word" >l3_manager</span> (<span class="key_word" >70</span>)</li>
  <li><span class="key_word" >l2_manager</span> (<span class="key_word" >80</span>)</li>
  <li><span class="key_word" >l1_manager</span> (<span class="key_word" >90</span>)</li>
  <li><span class="key_word" >system</span> (<span class="key_word" >100</span>)</li>
</ul>

<h3>User Types</h3>
<ul class="doc_tree" >
  <li><span class="key_word" >user</span></li>
  <li><span class="key_word" >organization</span></li>
  <li><span class="key_word" >wbf_node</span></li>
  <li><span class="key_word" >bot</span></li>
  <li><span class="key_word" >spider</span></li>
  <li><span class="key_word" >system</span></li>
</ul>


<h3>Example</h3>
<?php start_highlight(); ?>
<users>

  <!-- 
  Knoten zum anlegen von Usern
   -->
  <user name="name" >
  
    <firstname></firstname>
    <lastname></lastname>
    <academic_title></academic_title>
    <noblesse_title></noblesse_title>
    
    <password></password>
    <employee></employee>
    <non_cert_login></non_cert_login>
    <type></type>

    
    <description></description>

    <main_profile>profile_name</main_profile>
    <user_level>employee</user_level>
    
    <contact>
      <item value="example@webfrap.net" type="email" />
    </contact>

    <roles>
      <role name="example_role" />
    </roles>
    
    <profiles>
      <profile name="example_profile" />
    </profiles>
    
    <access>
      <areas>
        <area name="example_area" role="some_role" />
        <area name="example_area" role="some_other_role" key="" />
      </areas>
    </access>
  
  </user>
  
</users>
<?php display_highlight( 'xml' ); ?>

