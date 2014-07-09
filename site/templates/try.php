<?php snippet('header') ?>

<main class="main" role="main">

  <h1 class="alpha with-beta"><?php echo html($page->headline()) ?></h1>
  <p class="beta margin-bottom"><?php echo html($page->subheadline()) ?></p>

  <div class="grid">
    <div class="col-3-6 text">
      <?php echo kirbytext($page->text()) ?>
    </div>
    <div class="col-3-6 last">
      <figure class="screenshot framed"><a href="http://github.com/getkirby" title="Watch Kirby's organization on GitHub"><img src="<?php echo $page->image()->url() ?>" alt="Screenshot GitHub repo Kirby" /></a></figure>
    </div>
  </div>

  <ul class="try-process list-4">
    <?php foreach($page->children()->visible() as $item): ?>
      <li>
        <h2 class="delta"><?php echo $item->title() ?></h2>
        <div class="text smaller">
          <?php echo kirbytext($item->text()) ?>
        </div>
      </li>
    <?php endforeach ?>
  </ul>

</main>

<?php snippet('footer') ?>