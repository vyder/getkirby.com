<?php snippet('header') ?>

<article class="main">

  <h1 class="alpha"><?php echo kirbytext($page->title(), false) ?></h1>
  <div class="text">
    <?php echo kirbytext($page->text()) ?>
  </div>

</article>

<?php snippet('footer') ?>
