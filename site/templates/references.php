<?php snippet('header') ?>

<main class="main references" role="main">

  <h1 class="alpha margin-bottom">Made with Kirby and <strong>&#9829;</strong></h1>

  <ul class="reference-list list-3">
    <?php $references = $page->children()->flip()->paginate(30) ?>
    <?php $count = 1; foreach($references as $reference): ?>
    <li class="screenshot">
      <a href="<?php echo $reference->link() ?>">
        <div>
          <?php if($reference->hasImages()): ?>
          <?php $image = $reference->images()->first() ?>
          <img src="<?php echo thumb($image, array('width' => 320, 'height' => 200, 'crop' => true))->url() ?>" alt="Screenshot: <?php echo $reference->title() ?>" />
          <?php endif ?>
        </div>
        <h2 class="gamma"><?php echo html($reference->title()) ?></h2>
        <p><?php echo url::short($reference->link()) ?></p>
      </a>
    </li>
    <?php endforeach ?>
  </ul>

  <?php $pagination = $references->pagination(); ?>
  <?php if($references->pagination()->hasPages()): ?>
  <nav class="pagination clear">
    <?php if($references->pagination()->hasPrevPage()): ?>
    <a class="btn prev" href="<?php echo $references->pagination()->prevPageURL() ?>">newer entries</a>
    <?php endif ?>
    <?php if($references->pagination()->hasNextPage()): ?>
    <a class="btn next" href="<?php echo $references->pagination()->nextPageURL() ?>">older entries</a>
    <?php endif ?>
  </nav>
  <?php endif ?>

</main>

<?php snippet('footer') ?>