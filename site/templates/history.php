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

  <section class="milestones">
    <h2 class="beta center">Milestones</h2>
    <p class="gamma center">The Kirby chronicle so far</p>
    <ul class="milestones-list cf smaller">
      <?php foreach($milestones = $page->children()->visible() as $milestone): ?>
        <li>
          <time><?php echo $milestone->date('M Y') ?></time>
          <div class="text">
            <h3 class="gamma"><?php echo html($milestone->title()) ?></h3>
            <?php echo kirbytext($milestone->description()) ?>
          </div>
        </li>
      <?php endforeach ?>
    </ul>
  </section>

</main>

<?php snippet('footer') ?>