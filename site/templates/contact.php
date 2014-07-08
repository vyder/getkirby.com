<?php snippet('header') ?>

<main class="main grid" role="main">
  <h1 class="vh">Contact</h1>

  <section class="col-3-6 text">
    <h2 class="alpha">Contact me</h2>
    <?php echo kirbytext($page->text()) ?>
  </section>

  <section class="col-3-6 last text">
    <h2 class="alpha">Follow Kirby</h2>
    <?php echo kirbytext($page->web()) ?>
  </section>

</main>

<?php snippet('footer') ?>