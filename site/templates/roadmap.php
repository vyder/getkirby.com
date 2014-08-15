<?php snippet('header') ?>

<main class="main" role="main">

  <section class="grid">
    <?php snippet('aboutmenu') ?>

    <div class="col-5-6 last">
      <?php snippet('breadcrumb') ?>
      <h1 class="alpha"><?php echo kirbytext($page->title(), false) ?></h1>
      <div class="text"><?php echo kirbytext($page->text()) ?></div>
    </div>
  </section>

</main>

<?php snippet('footer') ?>