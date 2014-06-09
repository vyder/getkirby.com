<?php snippet('header') ?>

<main class="main" role="main">

  <h1 class="alpha margin-bottom"><?php echo kirbytext($page->title(), false) ?></h1>
  <?php echo kirbytext($page->text()) ?>

  <ul class="columns">
    <?php $count = 1; foreach($features = $page->children()->visible() as $feature): ?>
      <li class="text column two<?php e($count++%3==0, ' last') ?>">
        <h3 class="gamma"><?php echo html($feature->title()) ?></h3>
        <p><?php echo $feature->text() ?></p>
      </li>

      <?php e(($count-1)%3==0, '<hr class="c" />') ?>
    <?php endforeach ?>
  </ul>

</main>

<?php snippet('footer') ?>
