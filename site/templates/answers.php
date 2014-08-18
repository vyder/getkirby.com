<?php snippet('header') ?>

<main class="main grid" role="main">
  <?php snippet('aboutmenu') ?>

  <section class="col-5-6 last">
    <?php snippet('breadcrumb') ?>

    <h1 class="alpha">Answers</h1>

    <?php foreach($page->children() as $answer): ?>
    <article class="answer">
      <h2 class="zeta"><a href=""><?php echo html($answer->title()) ?></a></h2>
      <div class="inner text vh">
        <?php echo kirbytext($answer->text()) ?>
      </div>
    </article>
    <?php endforeach ?>

    <aside class="questions">
      <h2 class="alpha">Questions?</h2>
      <div class="body text">
        <?php echo kirbytext($page->questions()) ?>
      </div>
    </aside>

  </section>

</main>

<?php snippet('footer') ?>