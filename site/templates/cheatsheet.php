<?php snippet('header') ?>

<main class="main grid" role="main">

  <h1 class="alpha"><?php echo html($page->title()) ?></h1>

  <?php foreach($page->children() as $child): ?>
  <section class="text">
    <h2 class="beta"><?php echo html($child->title()) ?></h2>
    <?php echo kirbytext($child->text()) ?>


    <?php foreach($child->children() as $doc): ?>
    <div>
      <h3 class="gamma"><?php echo html($doc->title()) ?></h3>
      <?php echo kirbytext($doc->excerpt()) ?>
    </div>
    <?php endforeach ?>

  </section>
  <?php endforeach ?>

</main>

<?php snippet('footer') ?>