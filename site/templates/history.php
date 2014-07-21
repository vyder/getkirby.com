<?php snippet('header') ?>

<main class="main history" role="main">

  <h1 class="alpha"><?php echo kirbytext($page->title(), false) ?></h1>
  <div class="text"><?php echo kirbytext($page->text()) ?></div>

  <div class="text"><?php echo kirbytext($page->milestones()) ?></div>
  <ul class="milestones cf smaller">
    <?php foreach($milestones = $page->children()->visible() as $milestone): ?>
      <li>
        <time><?php echo $milestone->date('M Y') ?></time>
        <div class="text">
          <h3 class="gamma"><?php echo html($milestone->title()) ?></h3>
          <?php echo kirbytext($milestone->description()) ?>
        </div>
      </li>
    <?php endforeach ?>
  </ul>

</main>

<?php snippet('footer') ?>