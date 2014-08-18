<?php

$items = false;

// get the open item on the first level
if($root = $pages->findOpen()) {

  // get visible children for the root item
  $items = $root->children()->visible();
}

// only show the menu if items are available
if($items && $items->count() > 0):

?>
<nav class="submenu col-1-6" role="navigation">
  <h2 class="vh">Sub Menu</h2>
  <ul>
    <?php foreach($items as $item): ?>
    <li><a<?php ecco($item->isOpen(), ' class="is-active"') ?> href="<?php echo $item->url() ?>"><?php echo html($item->title()) ?></a></li>
    <?php endforeach ?>
  </ul>
</nav>
<?php endif ?>