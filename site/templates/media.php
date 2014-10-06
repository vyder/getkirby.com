<?php snippet('header') ?>
<?php $zip = $page->files()->filterBy('extension', '*=', 'zip')->first() ?>

<main class="main grid download" role="main">
  <h1 class="alpha"><?php echo $page->title() ?></h1>

  <article class="col-4-6">
    <p class="gamma subtitle"><?php echo $page->subtitle() ?></p>
    <figure>
      <a href="<?php echo $zip->url() ?>"><img src="<?php echo $page->files()->filterBy('extension', '*=', 'png')->first()->url() ?>" alt="<?php echo $page->title() ?>" /></a>
    </figure>
  </article>

  <aside class="col-2-6 last download-meta">
    <h2 class="gamma">Download</h2>
    <ul>
      <li><a href="<?php echo $zip->url() ?>"><?php echo $zip->filename() ?> [<?php echo $zip->niceSize() ?>]</a></li>
    </ul>
  </aside>

</main>

<?php snippet('footer') ?>