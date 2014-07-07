<?php snippet('header') ?>

<main class="main columns" role="main">

  <section class="answers column four">

    <h1 class="alpha">Answers</h1>

    <?php foreach($page->children() as $answer): ?>
    <article class="answer">
      <h1 class="delta"><a href=""><?php echo html($answer->title()) ?></a></h1>
      <div class="inner text vh">
        <?php echo kirbytext($answer->text()) ?>
      </div>
    </article>
    <?php endforeach ?>

  </section>

  <aside class="column two last questions text">
    <h1 class="alpha">Questions?</h1>
    <div class="body">
      <?php echo kirbytext($page->questions()) ?>
    </div>
  </aside>

</main>

<?php snippet('footer') ?>