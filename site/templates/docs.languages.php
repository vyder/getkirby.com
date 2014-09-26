<?php snippet('header') ?>

<main class="main" role="main">

  <div class="col-4-6 last">

    <article class="text">
      <h1><?php echo html($page->title()) ?></h1>

      <h2>Available Translations</h2>
      <dl>
        <?php $langs = a::sort(yaml($page->languages()), 'lang', 'asc') ?>
        <?php foreach($langs as $lang): ?>
        <dt class="gamma"><a href="https://github.com/getkirby/panel/blob/master/app/languages/<?php echo $lang['code'] ?>.php"><?php echo $lang['lang'] ?></a></dt>
        <dd><span>Author: </span><?php echo $lang['author'] ?></dd>
        <dd><span>Code: </span><?php echo $lang['code'] ?></dd>
        <?php endforeach ?>
      </dl>

      <?php echo str_replace('(\\', '(', kirbytext($page->text())) ?>
    </article>

  </div>

  <?php snippet('submenu') ?>

</main>

<?php snippet('footer') ?>