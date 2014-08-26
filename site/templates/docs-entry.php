<?php snippet('header') ?>

<main class="main" role="main">
  <h1 class="alpha"><?php echo html($page->title()) ?></h1>
  <p class="gamma subtitle"><?php echo $page->description() ?></p>

    <form class="search-form" role="search" action="<?php echo url('search') ?>">
      <label class="beta" for="q">Search the docs</label>
      <input type="search" class="searchword" name="q" id="q" placeholder="What are you looking for...?"/>
    </form>

  <ul class="list-4">
    <?php foreach($page->children()->visible() as $item): ?><!--
 --><li>
      <div class="text">
        <h2 class="delta"><?php echo $item->title() ?></h2>
        <?php echo kirbytext($item->description()) ?>
      </div>
      <a class="btn" href="<?php echo url('docs') ?>/<?php echo $item->uid() ?>">Learn more</a>
    </li><!--
 --><?php endforeach ?>
  </ul>

</main>

<?php snippet('footer') ?>