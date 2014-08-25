<?php snippet('header') ?>

<main class="main" role="main">

  <h1 class="alpha margin-bottom">Downloads</h1>

  <section class="section">
    <h2 class="beta">Kirby</h2>

    <ul class="download-list list-2"><!--
   --><li>
        <a href="http://download.getkirby.com">
          <img class="icon" src="<?php echo url('assets/images/kirby-dark.png') ?>" alt="Kirby icon" />
          <h3 class="gamma">kirby-2.0.0.zip</h3>
          <p>Download Kirby's minimal setup</p>
        </a>
      </li><!--
   --><li>
        <a href="http://download.getkirby.com/minimal/panel:true">
          <img class="icon" src="<?php echo url('assets/images/kirby-dark.png') ?>" alt="Kirby icon" />
          <h3 class="gamma">kirby-2.0.0-with-panel.zip</h3>
          <p>Download Kirby's minimal setup including the panel</p>
        </a>
      </li><!--
 --></ul>

  </section>

  <?php foreach($page->children() as $category): ?>

  <section class="section">

    <h2 class="beta"><?php echo html($category->title()) ?></h2>

    <ul class="download-list list-2"><!--
      <?php foreach($category->children() as $download): ?><!--
   --><li>
        <a href="<?php echo $download->url() ?>">
          <span class="icon" style="background-image: url(<?php echo $download->images()->first()->url() ?>)"></span>
          <h3 class="gamma"><?php echo html($download->title()) ?></h3>
          <p><?php echo html($download->subtitle()) ?></p>
        </a>
      </li><!--
   --><?php endforeach ?>
    </ul>

  </section>

  <?php endforeach ?>

</main>

<?php snippet('footer') ?>