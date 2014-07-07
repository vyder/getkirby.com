<?php snippet('header') ?>

<main class="main home" role="main">

  <header class="introduction section intro">
    <h1 class="alpha with-beta"><?php echo html($page->headline()) ?></h1>
    <p class="beta"><?php echo html($page->subheadline()) ?></p>
    <a class="btn-hero--dark" href="<?php echo url('try') ?>">Try</a><a class="btn-hero--red" href="<?php echo url('buy') ?>">Buy 39$/30€</a>
  </header>

  <section class="features section columns">
    <h2 class="beta">Features</h2>

    <ul>
      <?php $count = 1; foreach($pages->find('about/features')->children()->limit(6) as $feature): ?>

      <li class="text small column two<?php e($count++%3==0, ' last') ?>">
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

    <ul class="reference-list list-3">
      <?php $references = $page->children()->flip()->paginate(30) ?>
      <?php $count = 1; foreach($pages->find('references/made-with-kirby-and-love')->children()->shuffle()->limit(3) as $reference): ?>

      <li class="screenshot">
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
      <p><?php echo excerpt($post->text(), 190) ?> <a href="<?php echo $post->url() ?>">read more →</a></p>
    </article>

    <?php endforeach ?>
  </section>

  <section class="random-voices section columns">
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

  <section class="connect section columns last">
    <h2 class="beta">Connect</h2>
    <ul>
      <li class="column two">
        <a href="http://forum.getkirby.com">
          <img src="<?php echo url() ?>/assets/images/ph.jpg">
          <h3 class="gamma">Be part of the community!</h3>
          <p class="delta">forum.getkirby.com</p>
        </a>
      </li>
      <li class="column two">
        <a href="http://twitter.com/getkirby">
          <img src="<?php echo url() ?>/assets/images/ph.jpg">
          <h3 class="gamma">Follow Kirby on Twitter!</h3>
          <p class="delta">@getkirby</p>
        </a>
      </li>
      <li class="column two last">
        <a href="#">
          <img src="<?php echo url() ?>/assets/images/ph.jpg">
          <h3 class="gamma">Sign up for the newsletter!</h3>
          <p class="delta">newsletter.getkirby.com</p>
        </a>
      </li>
    </ul>
  </section>

</main>

<?php snippet('footer') ?>