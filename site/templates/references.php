<?php snippet('header') ?>

<main class="main columns" role="main">

  <h1 class="alpha">Made with Kirby and <strong>&#9829;</strong></h1>

  <ul class="reference-list">
    <?php $references = $page->children()->flip()->paginate(30) ?>
    <?php $count = 1; foreach($references as $reference): ?>
    <li class="column two<?php e($count++%3==0, ' last') ?>">
      <a href="<?php echo $reference->link() ?>">
        <?php if($reference->hasImages()): ?>
        <?php $image = $reference->images()->first() ?>
        <img src="<?php echo thumb($image, array('width' => 320, 'height' => 200, 'crop' => true))->url() ?>" alt="Screenshot: <?php echo $reference->title() ?>" />
        <?php endif ?>
      </a>
      <h2 class="gamma"><?php echo html($reference->title()) ?></h2>
      <p class="delta"><?php echo url::short($reference->link()) ?></p>
    </li>
    <?php endforeach ?>
  </ul>

  <?php $pagination = $references->pagination(); ?>
  <?php if($references->pagination()->hasPages()): ?>
  <nav class="pagination clear">
    <?php if($references->pagination()->hasPrevPage()): ?>
    <a class="prev" href="<?php echo $references->pagination()->prevPageURL() ?>">newer entries</a>
    <?php endif ?>
    <?php if($references->pagination()->hasNextPage()): ?>
    <a class="next" href="<?php echo $references->pagination()->nextPageURL() ?>">older entries</a>
    <?php endif ?>
  </nav>
  <?php endif ?>

</main>

<?php snippet('footer') ?>