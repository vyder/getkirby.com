<?php snippet('header') ?>

<main class="main" role="main">

  <h1 class="alpha"><?php echo html($page->title()) ?></h1>
  <p class="beta margin-bottom"><?php echo html($page->subheadline()) ?></p>

  <ul class="list-4 ">
    <?php foreach($page->children()->visible() as $item): ?><!--
 --><li>
      <img src="<?php echo $item->image()->url() ?>" alt="">
      <div class="text">
        <h2 class="beta"><?php echo $item->title() ?></h2>
        <?php echo kirbytext($item->text()) ?>
      </div>
      <?php if($item->uid() == 'contact'):?>
      <?php echo kirbytext($item->link()) ?>
      <?php else: ?>
      <a class="btn" href="<?php echo $item->link() ?>"><?php echo url::short($item->link()) ?></a>
      <?php endif ?>
    </li><!--
 --><?php endforeach ?>
  </ul>

</main>

<?php snippet('footer') ?>