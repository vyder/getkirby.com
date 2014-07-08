<?php snippet('header') ?>

<main class="main home" role="main">

  <header class="intro section">
    <h1 class="alpha with-beta"><?php echo html($page->headline()) ?></h1>
    <p class="beta"><?php echo html($page->subheadline()) ?></p>
    <a class="btn-hero-dark" href="<?php echo url('try') ?>">Try</a><a class="btn-hero-red" href="<?php echo url('buy') ?>">Buy 39$/30€</a>
  </header>

  <section class="features section">
    <h2 class="beta">Features</h2>

    <ul class="feature-list list-3">
      <?php foreach($pages->find('about/features')->children()->limit(6) as $feature): ?>
      <li class="text smaller">
        <h3 class="gamma"><?php echo html($feature->title()) ?></h3>
        <p>
          <?php echo $feature->text() ?>
          <?php if($feature->link() != ''): ?>
          <a class="more" href="<?php echo $feature->link() ?>">Read more →</a>
          <?php endif ?>
        </p>
      </li>
      <?php endforeach ?>
    </ul>
  </section>

  <section class="random-refs section">
    <h2 class="beta"><a href="<?php echo url('references/made-with-kirby-and-love') ?>">Made with Kirby and <strong>&#9829;</strong></a></h2>

    <ul class="reference-list list-3">
      <?php $references = $page->children()->flip()->paginate(30) ?>
      <?php foreach($pages->find('references/made-with-kirby-and-love')->children()->shuffle()->limit(3) as $reference): ?>
      <li class="screenshot">
        <a href="<?php echo $reference->link() ?>">
          <div>
            <?php if($reference->hasImages()): ?>
            <?php $image = $reference->images()->first() ?>
            <img src="<?php echo thumb($image, array('width' => 320, 'height' => 200, 'crop' => true))->url() ?>" alt="Screenshot: <?php echo $reference->title() ?>" />
            <?php endif ?>
          </div>
          <h3 class="gamma"><?php echo html($reference->title()) ?></h3>
          <p><?php echo url::short($reference->link()) ?></p>
        </a>
      </li>
      <?php endforeach ?>
    </ul>
  </section>

  <section class="latest-posts section">
    <h2 class="beta"><a href="<?php echo url('blog') ?>">Latest blog posts</a></h2>
    <ul class="list-2">
      <?php $latest = $pages->find('blog')->children()->visible()->flip()->limit(2) ?>
      <?php foreach($latest as $post): ?>
      <li class="text smaller">
        <time datetime="<?php echo $post->date('c') ?>"><?php echo $post->date('d M y') ?></time>
        <h3 class="gamma"><?php echo $post->title() ?></h3>
        <p><?php echo excerpt($post->text(), 180) ?> <a href="<?php echo $post->url() ?>">read more →</a></p>
      </li>
      <?php endforeach ?>
    </ul>
  </section>

  <section class="random-voices section">
    <h2 class="beta"><a href="<?php echo url('references/voices') ?>">What others say about Kirby</a></h2>

    <ul class="voice-list list-2">
      <?php foreach(page('references/voices')->children()->visible()->shuffle()->limit(4) as $voice): ?>
      <li>
        <a href="http://twitter.com/<?php echo $voice->username() ?>">
          <img src="http://twitter.com/api/users/profile_image/<?php echo $voice->username() ?>" />
          <h2 class="gamma"><?php echo $voice->title() ?></h2>
          <p class="zeta">@<?php echo $voice->username() ?></p>
        </a>
        <blockquote>
          <?php echo kirbytext($voice->text()) ?><!--
     --></blockquote>
      </li>
      <?php endforeach ?>
    </ul>
  </section>

  <section class="connect section last">
    <h2 class="beta">Connect</h2>
    <ul class="list-3">
      <li>
        <a href="http://twitter.com/getkirby">
          <img src="<?php echo url() ?>/assets/images/twitter.svg">
          <h3 class="gamma">Follow Kirby on Twitter!</h3>
          <p class="zeta">@getkirby</p>
        </a>
      </li>
      <li>
        <a href="http://forum.getkirby.com">
          <img src="<?php echo url() ?>/assets/images/bubbles.svg">
          <h3 class="gamma">Be part of the community!</h3>
          <p class="zeta">forum.getkirby.com</p>
        </a>
      </li>
      <li>
        <a href="#">
          <img src="<?php echo url() ?>/assets/images/mail.svg">
          <h3 class="gamma">Sign up for the newsletter!</h3>
          <p class="zeta">newsletter.getkirby.com</p>
        </a>
      </li>
    </ul>
  </section>

</main>

<?php snippet('footer') ?>