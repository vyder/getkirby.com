<?php snippet('header') ?>

<main class="main text" role="main">

  <h1 class="alpha"><?php echo kirbytext($page->title(), false) ?></h1>
  <?php echo kirbytext($page->text()) ?>

</main>

<?php snippet('footer') ?>
