<?php snippet('header') ?>

<main class="main grid" role="main">
  <h1 class="vh">Contact</h1>

  <section class="col-3-6">
    <h2 class="alpha margin-bottom">Contact me</h2>
    <div class="text">
      <?php echo kirbytext($page->text()) ?>
    </div>
  </section>

  <section class="col-3-6 last">
    <h2 class="beta margin-bottom">Follow Kirby</h2>
    <div class="text">
      <?php echo kirbytext($page->web()) ?>
    </div>
  </section>

</main>

<?php snippet('footer') ?>