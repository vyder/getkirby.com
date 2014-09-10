<?php snippet('header') ?>

<main class="main" role="main">

  <div class="col-4-6 last">

    <article class="text">
      <h1><?php echo html($page->title()) ?></h1>

      <h2>Available Translations</h2>
      <dl>
        <?php $langs = yaml($page->languages()) ?>
        <?php foreach($langs as $lang): ?>
        <dt class="gamma"><?php echo $lang['lang'] ?></dt>
        <dd><span>Author: </span><?php echo $lang['author'] ?></dd>
        <dd><span>Since: </span><?php echo $lang['since'] ?></dd>
        <dd><span>File: </span><a href="<?php echo $lang['link'] ?>"><?php echo $lang['file'] ?></a></dd>
        <?php endforeach ?>
      </dl>

      <?php echo str_replace('(\\', '(', kirbytext($page->text())) ?>
    </article>

  </div>

  <?php snippet('submenu') ?>

</main>

<?php snippet('footer') ?>