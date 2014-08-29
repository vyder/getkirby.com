<?php snippet('header') ?>

<main class="main" role="main">

  <h1 class="alpha"><?php echo html($page->headline()) ?></h1>
  <p class="beta margin-bottom"><?php echo html($page->subheadline()) ?></p>

  <div class="grid">
    <div class="col-3-6">

      <div class="text">
        <?php echo kirbytext($page->text()) ?>
      </div>

    </div>
    <div class="col-3-6 last">
      <figure class="screenshot framed"><a href="http://github.com/getkirby" title="Watch Kirby's organization on GitHub"><img src="<?php echo $page->image()->url() ?>" alt="Screenshot GitHub repo Kirby" /></a></figure>
    </div>
  </div>

</main>

<?php snippet('footer') ?>