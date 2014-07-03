<?php snippet('header') ?>

<main class="main downloads" role="main">

  <h1 class="alpha margin-bottom">Downloads</h1>

  <section class="section columns">
    <h2 class="beta">Kirby</h2>

    <ul class="download-items">
      <li class="column three">
        <a href="http://download.getkirby.com">
          <img class="icon" src="<?php echo url('assets/images/kirby-dark.png') ?>" alt="Kirby icon" />
          <h3 class="gamma">kirby-2.0.0.zip</h3>
          <p class="epsilon">Download Kirby's minimal setup</p>
        </a>
      </li>
      <li class="column three last">
        <a href="http://download.getkirby.com/minimal/panel:true">
          <img class="icon" src="<?php echo url('assets/images/kirby-dark.png') ?>" alt="Kirby icon" />
          <h3 class="gamma">kirby-2.0.0-with-panel.zip</h3>
          <p class="epsilon">Download Kirby's minimal setup including the panel</p>
        </a>
      </li>
    </ul>

  </section>

  <?php foreach($page->children() as $category): ?>

  <section class="section columns">

    <h2 class="beta"><?php echo html($category->title()) ?></h2>

    <ul class="download-items">
      <?php $count = 1; foreach($category->children() as $download): ?>
      <li class="column three<?php e($count++%2==0, ' last') ?>">
        <a href="<?php echo $download->url() ?>">
          <img class="icon" src="<?php echo $download->images()->first()->url() ?>" alt="<?php echo $download->title() ?> icon" />
          <h3 class="gamma"><?php echo html($download->title()) ?></h3>
          <p class="epsilon"><?php echo html($download->subtitle()) ?></p>
        </a>
      </li>
      <?php endforeach ?>
    </ul>

  </section>

  <?php endforeach ?>

</main>

<?php snippet('footer') ?>