<?php snippet('header') ?>

<main class="main text" role="main">

  <h1 class="alpha"><?php echo $page->title() ?></h1>
  <?php echo kirbytext($page->text()) ?>

</main>

<?php snippet('footer') ?>
