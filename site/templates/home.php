<?php snippet('header') ?>

<main class="main home" role="main">

  <h1 class="is-invisible"><?php echo $page->title() ?></h1>

  <header class="introduction section text intro">

    <h1 class="alpha with-beta"><?php echo html($page->headline()) ?></h1>
    <h2 class="beta"><?php echo html($page->subheadline()) ?></h2>

    <?php echo kirbytext($page->intro()) ?>

  </header>

  <section class="features section columns">
    <h1 class="beta">Features</h1>

    <?php $count = 1; foreach($pages->find('features')->children() as $feature): ?>

    <article class="column two<?php e($count++%3==0, ' last') ?>">
      <h1 class="gamma"><?php echo html($feature->title()) ?></h1>
      <p class="text">
        <?php echo kirbytext($feature->text(), false) ?>
        <?php if($feature->link() != ''): ?>
        <a class="more" href="<?php echo $feature->link() ?>">Read more…</a>
        <?php endif ?>
      </p>
    </article>

    <?php e(($count-1)%3==0, '<hr class="c" />') ?>
    <?php endforeach ?>

  </section>


  <section class="references section columns">
    <h1 class="beta"><a href="<?php echo url('references/made-with-kirby-and-love') ?>">Made with Kirby and <strong>&#9829;</strong></a></h1>

    <ul class="reference-list">
      <?php $references = $page->children()->flip()->paginate(30) ?>
      <?php $count = 1; foreach($pages->find('references/made-with-kirby-and-love')->children()->shuffle()->limit(3) as $reference): ?>
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

  </section>

  <section class="latest-posts section columns">
    <h2 class="beta"><a href="<?php echo url('blog') ?>">Latest blog posts</a></h2>
    <?php $count = 1; $latest = $pages->find('blog')->children()->visible()->flip()->limit(2) ?>
    <?php foreach($latest as $post): ?>
    <article class="column three<?php e($count++%2==0, ' last') ?>">
      <h3 class="gamma"><?php echo $post->title() ?></h3>
      <time datetime="<?php echo $post->date('c') ?>"><?php echo $post->date('d M y') ?></time>
      <p><?php echo excerpt($post->text(), 160) ?> <a href="<?php echo $post->url() ?>">read more...</a></p>
    </article>
    <?php endforeach ?>
  </section>

  <section class="voices section columns last">

    <h1 class="beta"><a href="<?php echo url('references/voices') ?>">What others say about Kirby</a></h1>

    <?php $count = 1; foreach(page('references/voices')->children()->visible()->shuffle()->limit(4) as $voice): ?>
    <article class="voice column three<?php e($count++%2==0, ' last') ?>">

      <figure>
        <a href="http://twitter.com/<?php echo $voice->username() ?>"><img src="http://twitter.com/api/users/profile_image/<?php echo $voice->username() ?>" /></a>
      </figure>

      <h1 class="gamma"><?php echo twitter($voice->username(), $voice->title()) ?></h1>
      <h2 class="delta"><?php echo twitter($voice->username()) ?></h2>

      <blockquote>
        <?php echo kirbytext($voice->text()) ?>
      </blockquote>

    </article>

    <?php e(($count-1)%2==0, '<hr class="c" />') ?>
    <?php endforeach ?>

  </section>

</main>

<?php snippet('footer') ?>