<?php snippet('header') ?>

<main class="main columns" role="main">

  <h1 class="alpha margin-bottom"><?php echo html($page->title()) ?></h1>

  <ul class="list-2">
    <?php foreach($page->children() as $voice): ?><!--
 --><li class="voice">
      <figure>
        <a href="http://twitter.com/<?php echo $voice->username() ?>"><img src="http://twitter.com/api/users/profile_image/<?php echo $voice->username() ?>" /></a>
      </figure>
      <h2 class="gamma"><?php echo twitter($voice->username(), $voice->title()) ?></h2>
      <p class="delta"><?php echo twitter($voice->username()) ?></p>
      <blockquote>
        <?php echo kirbytext($voice->text()) ?><!--
   --></blockquote>
    </li>
    <?php endforeach ?>
  </ul>

</main>

<?php snippet('footer') ?>