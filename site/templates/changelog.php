<?php snippet('header') ?>

<main class="main" role="main">

  <section class="grid">
    <?php snippet('aboutmenu') ?>

    <div class="col-5-6 last">
      <?php snippet('breadcrumb') ?>
      <div class="text">
        <h1 class="alpha"><?php echo $page->title() ?></h1>

        <?php $releases = $page->children()->visible()->flip() ?>
        <?php foreach($releases as $release): ?>
          <article class="grid">
            <h2 class="beta col-1-6"><?php echo $release->title() ?></h2>
            <div class="col-5-6 last">
              <time class="beta" datetime="<?php echo $release->date('c') ?>"><?php echo $release->date('F, dS Y') ?></time>
              <?php echo kirbytext($release->text()) ?>
            </div>
          </article>
        <?php endforeach ?>
      </div>
    </div>
  </section>

</main>

<?php snippet('footer') ?>