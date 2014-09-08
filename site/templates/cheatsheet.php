<?php snippet('header') ?>

<main class="main" role="main">

  <h1 class="alpha"><?php echo html($page->title()) ?></h1>

  <section class="text">
    <h2 class="beta">Objects & Collections</h2>
    <div class="cheatsheet-grid">
      <?php foreach($page->children()->visible() as $child): ?>
      <?php if($child->hasVisibleChildren()): ?>
      <div class="cheatsheet-grid-item">
        <h3 class="gamma">
          <a href="#<?php echo $child->uid() ?>">
            <?php echo html($child->title()) ?>
          </a>
        </h3>
      </div>
      <?php endif ?>
      <?php endforeach ?>
    </div>
  </section>

  <?php foreach($page->children()->visible() as $child): ?>
  <?php if($child->hasVisibleChildren()): ?>
  <section class="text" id="<?php echo $child->uid() ?>">
    <h2 class="beta"><?php echo html($child->title()) ?></h2>
    <?php echo kirbytext($child->text()) ?>

    <div class="cheatsheet-grid">
      <?php foreach($child->children() as $doc): ?>
      <div class="cheatsheet-grid-item">
        <?php if($doc->text() != ''): ?>
        <a href="<?php echo $doc->url() ?>">
          <h3 class="gamma"><?php echo html($doc->title()) ?></h3>
          <?php echo kirbytext($doc->excerpt()) ?>
        </a>
        <?php else: ?>
        <h3 class="gamma"><?php echo html($doc->title()) ?></h3>
        <?php echo kirbytext($doc->excerpt()) ?>
        <?php endif ?>
      </div>
      <?php endforeach ?>
    </div>

  </section>
  <?php endif ?>
  <?php endforeach ?>

</main>

<?php snippet('footer') ?>