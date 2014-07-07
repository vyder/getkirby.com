<?php snippet('header') ?>

<main class="main columns" role="main">
  <h1 class="vh">Contact</h1>

  <section class="column three text">
    <h2 class="alpha">Contact me</h2>
    <?php echo kirbytext($page->text()) ?>
  </section>

  <section class="column three last text">
    <h2 class="alpha">Follow Kirby</h2>
    <?php echo kirbytext($page->web()) ?>
  </section>

</main>

<?php snippet('footer') ?>