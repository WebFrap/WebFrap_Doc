<h2>Controls</h2>

<p>
  Mit den Controls können die Action Buttons bei <span class="bdl" >Referenzen</span> 
  gesteuert werden. 
</p>

<h3>Many To Many</h3>
<ul class="doc_tree" >
  <li><span class="key_word" >connect</span> 
    Nach einem bereits vorhandenen Datensatz suchen und diesen anhängen</li>
  <li><span class="key_word" >create</span> Einen neuen Datensatz anlegen</li>
  <li><span class="key_word" >multi_assign</span> 
    Ein Element welches alle noch nicht angehängten Datensätze auflistet
    und diese <span class="event" >onclick</span> anhängt.</li>
  <li><span class="key_word" >listing</span> Öffnen der Hauptmaske der referenzierten Datensätze</li>
</ul>

<h3>Many To One</h3>

<ul class="doc_tree" >
  <li><span class="key_word" >connect</span> Die Referenz eines existierenden
    Datensatzes auf den aktiven umhängen</li>
  <li><span class="key_word" >create</span> Einen neuen Referenzdatensatz erstellen</li>
</ul>

<h3>Example</h3>
<?php start_highlight(); ?>

<_..._>
  <ref>
    <ui>
      <list>
        <!-- Den Context nicht vergessen!  -->
        <table>
          <controls>
            <action name="connect" />
            <action name="listing" />
          </controls>
        </table>
      </list>
    </ui>
  </ref>
</_..._>

<?php display_highlight( 'xml' ); ?>