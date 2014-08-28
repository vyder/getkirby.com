<?php snippet('header') ?>

<main class="main grid" role="main">

  <h1 class="alpha"><?php echo html($page->title()) ?></h1>

  <?php foreach($page->children()->visible() as $child): ?>
  <?php if($child->hasVisibleChildren()): ?>
  <section class="text">
    <h2 class="beta"><?php echo html($child->title()) ?></h2>
    <?php echo kirbytext($child->text()) ?>

    <div class="cheatsheet-grid">
      <?php foreach($child->children() as $doc): ?>
      <div class="cheatsheet-grid-item">
        <h3 class="gamma"><?php echo html($doc->title()) ?></h3>
        <?php echo kirbytext($doc->excerpt()) ?>
      </div>
      <?php endforeach ?>
    </div>

  </section>
  <?php endif ?>
  <?php endforeach ?>

</main>

<?php snippet('footer') ?>