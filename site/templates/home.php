<?php snippet('header') ?>

<main class="main home" role="main">

  <header class="introduction section text intro">
    <h1 class="alpha with-beta"><?php echo html($page->headline()) ?></h1>
    <p class="beta"><?php echo html($page->subheadline()) ?></p>
    <?php echo kirbytext($page->intro()) ?>
  </header>

  <section class="features section columns">
    <h2 class="beta">Features</h2>

    <ul>
      <?php $count = 1; foreach($pages->find('features')->children()->limit(6) as $feature): ?>

      <li class="text column two<?php e($count++%3==0, ' last') ?>">
        <h3 class="gamma"><?php echo html($feature->title()) ?></h3>
        <p>
          <?php echo $feature->text() ?>
          <?php if($feature->link() != ''): ?>
          <a class="more" href="<?php echo $feature->link() ?>">Read more →</a>
          <?php endif ?>
        </p>
      </li>

      <?php e(($count-1)%3==0, '<hr class="c" />') ?>
      <?php endforeach ?>
    </ul>
  </section>

  <section class="random-refs section columns">
    <h2 class="beta"><a href="<?php echo url('references/made-with-kirby-and-love') ?>">Made with Kirby and <strong>&#9829;</strong></a></h2>

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
        <h3 class="gamma"><?php echo html($reference->title()) ?></h3>
        <p class="delta"><?php echo url::short($reference->link()) ?></p>
      </li>

      <?php endforeach ?>
    </ul>
  </section>

  <section class="latest-posts section columns">
    <h2 class="beta"><a href="<?php echo url('blog') ?>">Latest blog posts</a></h2>

    <?php $count = 1; $latest = $pages->find('blog')->children()->visible()->flip()->limit(2) ?>
    <?php foreach($latest as $post): ?>

    <article class="text column three<?php e($count++%2==0, ' last') ?>">
      <time datetime="<?php echo $post->date('c') ?>"><?php echo $post->date('d M y') ?></time>
      <h3 class="gamma"><?php echo $post->title() ?></h3>
      <p><?php echo excerpt($post->text(), 180) ?> <a href="<?php echo $post->url() ?>">read more →</a></p>
    </article>

    <?php endforeach ?>
  </section>

  <section class="random-voices section columns last">
    <h2 class="beta"><a href="<?php echo url('references/voices') ?>">What others say about Kirby</a></h2>

    <ul>
      <?php $count = 1; foreach(page('references/voices')->children()->visible()->shuffle()->limit(4) as $voice): ?>

      <li class="voice column three<?php e($count++%2==0, ' last') ?>">
        <figure>
          <a href="http://twitter.com/<?php echo $voice->username() ?>"><img src="http://twitter.com/api/users/profile_image/<?php echo $voice->username() ?>" /></a>
        </figure>
        <h3 class="gamma"><?php echo twitter($voice->username(), $voice->title()) ?></h3>
        <p class="delta"><?php echo twitter($voice->username()) ?></p>
        <blockquote>
          <?php echo kirbytext($voice->text()) ?>
        </blockquote>
      </li>

      <?php e(($count-1)%2==0, '<hr class="c" />') ?>
      <?php endforeach ?>
    </ul>
  </section>

</main>

<?php snippet('footer') ?>