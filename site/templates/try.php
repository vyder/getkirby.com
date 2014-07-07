<?php snippet('header') ?>

<main class="main" role="main">

  <header class="main-header">
    <h1 class="alpha with-beta"><?php echo html($page->headline()) ?></h1>
    <p class="beta"><?php echo html($page->subheadline()) ?></p>
  </header>

  <div class="columns">

    <div class="column three text">
      <?php echo kirbytext($page->text()) ?>
    </div>

    <div class="column three text last">
      <?php echo kirbytext($page->steps()) ?>
    </div>

  </div>

</main>

<?php snippet('footer') ?>