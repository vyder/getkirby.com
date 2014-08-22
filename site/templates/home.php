<?php snippet('header') ?>

<main class="main" role="main">

  <header class="intro section grid">
    <div class="col-4-6">
      <h1 class="alpha with-beta"><?php echo html($page->headline()) ?></h1>
      <p class="beta"><?php echo html($page->subheadline()) ?></p>
      <a class="hero-btn" href="<?php echo url('try') ?>">Try</a>
      <a class="hero-btn-red" href="<?php echo url('buy') ?>">Buy 39$/30€</a>
      <?php $slides = $pages->find('home/intro-slides')->images() ?></div>
    <div class="col-2-6 last">
      <ul class="slider slider-intro">
      <?php foreach($slides as $slide): ?>
        <li class="slide">
          <img src="<?php echo $slide->url() ?>" alt="<?php echo $slide->title() ?>" />
        </li>
      <?php endforeach ?>
      </ul>
    </div>
  </header>

  <section class="features section">
    <h2 class="beta"><a href="<?php echo url('home/features') ?>">Features</a></h2>

    <ul class="feature-list list-3">
      <?php foreach($pages->find('home/features')->children()->limit(6) as $feature): ?><!--
   --><li class="text smaller">
        <?php if($feature->hasImages()): ?>
        <img src="<?php echo thumb($feature->image(), array('width' => 640, 'height' => 400, 'crop' => true))->url() ?>" alt="Screenshot: <?php echo $feature->title() ?>" />
        <?php endif ?>
        <h3 class="gamma"><?php echo html($feature->title()) ?></h3>
        <p>
          <?php echo $feature->text() ?>
          <?php if($feature->link() != ''): ?>
          <a class="read-more" href="<?php echo $feature->link() ?>">Read more →</a>
          <?php endif ?>
        </p>
      </li><!--
   --><?php endforeach ?>
    </ul>
  </section>

  <section class="panel section">
    <h2 class="beta">The all new Panel</h2>

    <?php $slides = $pages->find('home/panel-slides')->images() ?>
    <ul class="slider slider-panel">
    <?php foreach($slides as $slide): ?>
      <li class="slide screenshot">
        <img src="<?php echo $slide->url() ?>" alt="<?php echo $slide->title() ?>" />
      </li>
    <?php endforeach ?>
    </ul>
  </section>

  <section class="random-refs section">
    <h2 class="beta"><a href="<?php echo url('made-with-kirby-and-love') ?>">Made with Kirby and &#9829;</a></h2>

    <ul class="reference-list list-3">
      <?php foreach($pages->find('made-with-kirby-and-love')->children()->shuffle()->limit(3) as $reference): ?><!--
   --><li class="screenshot">
        <div class="screen-wrap">
          <?php if($reference->hasImages()): ?>
          <img src="<?php echo thumb($reference->image(), array('width' => 350, 'height' => 220, 'crop' => true))->url() ?>" alt="Screenshot: <?php echo $reference->title() ?>" />
          <?php endif ?>
          <div class="screen-refl"><a class="btn-white" href="<?php echo $reference->link() ?>">visit</a></div>
        </div>
        <a href="<?php echo $reference->link() ?>">
          <h2 class="gamma truncate"><?php echo html($reference->title()) ?></h2>
          <p><?php echo url::short($reference->link()) ?></p>
        </a>
      </li><!--
   --><?php endforeach ?>
    </ul>
  </section>

  <section class="latest-posts section">
    <h2 class="beta"><a href="<?php echo url('blog') ?>">Latest blog posts</a></h2>
    <ul class="list-2">
      <?php $latest = $pages->find('blog')->children()->visible()->flip()->limit(2) ?>
      <?php foreach($latest as $post): ?><!--
   --><li class="text smaller">
        <time datetime="<?php echo $post->date('c') ?>"><?php echo $post->date('d M y') ?></time>
        <h3 class="gamma"><?php echo $post->title() ?></h3>
        <p><?php echo excerpt($post->text(), 180) ?> <a class="read-more" href="<?php echo $post->url() ?>">read more →</a></p>
      </li><!--
   --><?php endforeach ?>
    </ul>
  </section>

  <section class="random-voices section">
    <h2 class="beta"><a href="<?php echo url('voices') ?>">What others say about Kirby</a></h2>

    <ul class="voice-list list-2">
      <?php foreach(page('voices')->children()->visible()->shuffle()->limit(4) as $voice): ?><!--
   --><li>
        <a href="http://twitter.com/<?php echo $voice->username() ?>">
          <img class="avatar" src="http://twitter.com/api/users/profile_image/<?php echo $voice->username() ?>" alt="Useravatar: <?php echo $voice->username() ?>" />
          <h2 class="gamma"><?php echo $voice->title() ?></h2>
          <p class="zeta">@<?php echo $voice->username() ?></p>
        </a>
        <blockquote>
          <?php echo kirbytext($voice->text()) ?>
        </blockquote>
      </li><!--
   --><?php endforeach ?>
    </ul>
  </section>

  <section class="section">
    <h2 class="beta">Featured on...</h2>
    <ul class="featured-on-list list-4">
      <?php foreach(page('about/featured-on')->images()->shuffle()->limit(4) as $featured): ?><!--
   --><li><?php if($featured->link() != ''): ?><a href="<?php echo $featured->link() ?>"><?php endif ?><img src="<?php echo $featured->url() ?>" alt="<?php echo $featured->title() ?>" /><?php if($featured->link() != ''): ?></a><?php endif ?></li><!--
   --><?php endforeach ?>
    </ul>
  </section>

  <section class="connect section last">
    <h2 class="beta">Connect</h2>
    <ul class="list-3"><!--
   --><li>
        <a href="http://twitter.com/getkirby">
          <img src="<?php echo url() ?>/assets/images/twitter.svg">
          <h3 class="gamma">Follow Kirby on Twitter!</h3>
          <p class="zeta">@getkirby</p>
        </a>
      </li><!--
   --><li>
        <a href="http://forum.getkirby.com">
          <img src="<?php echo url() ?>/assets/images/bubbles.svg">
          <h3 class="gamma">Be part of the community!</h3>
          <p class="zeta">forum.getkirby.com</p>
        </a>
      </li><!--
   --><li>
        <a href="#">
          <img src="<?php echo url() ?>/assets/images/mail.svg">
          <h3 class="gamma">Sign up for the newsletter!</h3>
          <p class="zeta">newsletter.getkirby.com</p>
        </a>
      </li><!--
 --></ul>
  </section>

</main>

<?php snippet('footer') ?>