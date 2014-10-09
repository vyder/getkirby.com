<?php snippet('header') ?>

<main class="main" role="main">

  <h1 class="alpha"><?php echo html($page->headline()) ?></h1>

  <div class="grid text">
    <div class="col-3-6">
      <?php echo kirbytext($page->text()) ?>
    </div>
    <div class="col-3-6 last">
      <?php echo kirbytext($page->getstarted()) ?>
    </div>
  </div>

</main>

<?php snippet('footer') ?>