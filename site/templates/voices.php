<?php snippet('header') ?>

<main class="main" role="main">

  <h1 class="alpha margin-bottom"><?php echo html($page->title()) ?></h1>

  <ul class="voice-list list-2">
    <?php foreach($page->children() as $voice): ?><!--
 --><li>
      <a href="http://twitter.com/<?php echo $voice->username() ?>">
        <?php if($voice->image()): ?>
        <img class="avatar" src="<?php echo thumb($voice->image(), array('width' => 100, 'height' => 100, 'crop' => true))->url() ?>" alt="Avatar of <?php echo $voice->title() ?>" />
        <?php endif ?>
        <h2 class="gamma"><?php echo $voice->title() ?></h2>
        <p class="zeta">@<?php echo $voice->username() ?></p>
      </a>
      <blockquote>
        <?php echo kirbytext($voice->text()) ?>
      </blockquote>
    </li><!--
 --><?php endforeach ?>
  </ul>

</main>

<?php snippet('footer') ?>