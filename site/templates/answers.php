<?php snippet('header') ?>

<main class="main grid" role="main">

  <section class="answers col-4-6">

    <h1 class="alpha">Answers</h1>

    <?php foreach($page->children() as $answer): ?>
    <article class="answer">
      <h2 class="zeta"><a href=""><?php echo html($answer->title()) ?></a></h2>
      <div class="inner text vh">
        <?php echo kirbytext($answer->text()) ?>
      </div>
    </article>
    <?php endforeach ?>

  </section>

  <aside class="col-2-6 last questions">
    <h2 class="alpha">Questions?</h2>
    <div class="body text">
      <?php echo kirbytext($page->questions()) ?>
    </div>
  </aside>

</main>

<?php snippet('footer') ?>