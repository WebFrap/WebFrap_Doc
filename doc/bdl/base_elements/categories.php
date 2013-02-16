<h2>Categories</h2>

<p>
  Mit <span class="keyword" >categories</span> und 
  <span class="keyword" >category</span> können Elemente gruppiert werden.
  Die wichtigste ist die main category. Diese ist zwingend nötig für alle
  <span class="keyword" >management</span>, <span class="keyword" >entity</span>
  und <span class="keyword" >attribute</span> elemente.
  Wenn sie nicht explizit definiert wird, dann setzt das System den Standard auf
  <span class="def_value" >default</span>.
  Wenn mit Defnitionen gearbeiet wird kann auch eine andere Standard-Category über die
  Definition gesetzt werden.
</p>

<p>
  Der Name der <span class="keyword" >category</span> kann frei gewählt werden.
  Sie ist ein Bezeichner, wichtig ist jedoch, dass sie semantisch so korrekt
  wie möglich ist, da es sonst leicht zu Namens-Konflikten kommen kann.
</p>

<?php start_highlight(); ?>
<categories main="main_category" >

  <category name="sub_category" >
    <label />
    <docu />
    <description />
    <access />
  </category>
  
  <category name="sub_category2" />
</categories>
<?php display_highlight( 'xml' ); ?>