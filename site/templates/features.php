<?php snippet('header') ?>

<main class="main" role="main">

  <h1 class="alpha margin-bottom"><?php echo kirbytext($page->title(), false) ?></h1>
  <?php echo kirbytext($page->text()) ?>

  <ul class="feature-list list-3">
    <?php foreach($features = $page->children()->visible() as $feature): ?>
      <li class="text smaller">
        <h3 class="gamma"><?php echo html($feature->title()) ?></h3>
        <p><?php echo $feature->text() ?></p>
      </li>
    <?php endforeach ?>
  </ul>

</main>

<?php snippet('footer') ?>
