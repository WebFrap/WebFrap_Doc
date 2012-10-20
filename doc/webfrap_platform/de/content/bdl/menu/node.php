
<h2>Menu</h2>

<h3>Example</h3>
<?php start_highlight(); ?>
<menus>

  <node name="my_tasks">
    <label>
      <text lang="de">My Tasks</text>
      <text lang="en">My Tasks</text>
    </label>
    <icon src="control/entity.png" alt="my tasks" />
    <action href="maintab.php?c=My.Tasks.listing" />
  </node>

</menus>
<?php display_highlight( 'xml' ); ?>

