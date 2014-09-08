<?php snippet('header') ?>

  <main class="main" role="main">

    <h1 class="alpha"><?php echo html($page->title()) ?></h1>
    <p class="zeta subtitle margin-bottom"><?php echo $page->excerpt() ?></p>

    <section class="text col-4-6">
      <?php echo kirbytext($page->text()) ?>
    </section>

    <nav class="sidebar col-2-6 last">
      <ul>
        <li><a href="<?php echo url('docs/cheatsheet#') ?><?php echo $page->parent()->uid() ?>"><small>↑</small>Back to the Cheat Sheet</a></li>

        <?php if($prev = $page->prevVisible()): ?>
        <li><a href="<?php echo $prev->url() ?>"><small>&larr;</small> <?php echo html($prev->title()) ?></a></li>
        <?php endif ?>

        <?php if($next = $page->nextVisible()): ?>
        <li><a href="<?php echo $next->url() ?>"><small>&rarr;</small> <?php echo html($next->title()) ?></a></li>
        <?php endif ?>
      </ul>
    </nav>

  </main>

<?php snippet('footer') ?>