<?php snippet('header') ?>

<main class="main" role="main">

  <div class="col-4-6 last">

    <article>
      <div class="text">
        <h1><?php echo html($page->title()) ?></h1>
        <?php echo kirbytext($page->text()) ?>
      </div>

      <ul class="list-2">
        <?php foreach($page->children()->visible() as $item): ?><!--
     --><li>
          <div class="text">
            <h4><a href="<?php echo $item->url() ?>"><?php echo html($item->title()) ?></a></h4>
            <?php echo kirbytext($item->description()) ?>
          </div>
        </li><!--
     --><?php endforeach ?>
      </ul>

    </article>

  </div>

  <?php snippet('submenu') ?>

</main>

<?php snippet('footer') ?>