<?php snippet('header') ?>

<main class="main" role="main">

  <section class="support-items">

    <h1 class="vh"><?php echo html($page->title()) ?></h1>

    <ul class="list-4">
      <?php foreach($page->children()->visible() as $item): ?><!--
   --><li>
        <img src="<?php echo $item->image()->url() ?>" alt="<?php echo $item->title() ?>">
        <div class="text">
          <h2 class="beta"><?php echo $item->title() ?></h2>
          <?php echo kirbytext($item->text()) ?>
        </div>
        <?php if($item->uid() == 'contact'):?>
        <?php echo kirbytext($item->link()) ?>
        <?php else: ?>
        <a class="btn" href="<?php echo $item->link() ?>"><?php echo url::short($item->link()) ?></a>
        <?php endif ?>
      </li><!--
   --><?php endforeach ?>
    </ul>
  </section>

  <section class="answers">

    <header>
      <img src="<?php echo $page->find('answers')->image()->url() ?>" alt="FAQ">
      <h2 class="alpha">FAQ</h2>
    </header>

    <div class="columns">
      <?php foreach($page->find('answers')->children()->visible() as $answer): ?>
      <article class="answer" id="<?php echo $answer->uid() ?>">
        <h2 class="zeta"><a href="#<?php echo $answer->uid() ?>"><?php echo html($answer->title()) ?></a></h2>
        <div class="inner text">
          <?php echo kirbytext($answer->text()) ?>
        </div>
      </article>
      <?php endforeach ?>
    </div>

  </section>

</main>

<?php snippet('footer') ?>