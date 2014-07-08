<?php snippet('header') ?>

<main class="main columns" role="main">

  <h1 class="alpha">Imprint</h1>

  <section class="column three text">
    <h2 class="beta">Contact & Responsibility</h2>
    <?php echo kirbytext($page->contact()) ?>
  </section>

  <section class="column three last text smaller">
    <h2 class="beta">Disclaimer</h2>
    <?php echo kirbytext($page->disclaimer()) ?>
  </section>

</main>

<?php snippet('footer') ?>