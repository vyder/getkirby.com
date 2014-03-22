<?php snippet('header') ?>

<article class="main">

  <header class="main-header">
    <h1 class="alpha with-beta"><?php echo html($page->headline()) ?></h1>
    <h2 class="beta"><?php echo html($page->subheadline()) ?></h2>
  </header>

  <div class="columns">

    <div class="column three text">
      <?php echo kirbytext($page->text()) ?>
    </div>

    <div class="column three text last">
      <?php echo kirbytext($page->steps()) ?>
    </div>

  </div>

</article>

<?php snippet('footer') ?>