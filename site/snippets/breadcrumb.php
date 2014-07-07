<nav class="nav breadcrumb" role="navigation">
  <h1 class="vh">Breadcrumb</h1>
  <ul>
    <?php foreach($site->breadcrumb() AS $crumb): ?>
    <li><a<?php e($crumb->isActive(), ' class="is-active"') ?> href="<?php echo $crumb->url() ?>"><?php echo html($crumb->title()) ?></a></li>
    <?php endforeach; ?>
  </ul>
</nav>