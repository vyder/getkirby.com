<?php snippet('header') ?>

<main class="main" role="main">

  <h1 class="alpha margin-bottom">Downloads</h1>

  <section class="section">
    <h2 class="beta">Kirby Starterkit</h2>
    <ul class="download-list"><!--
   --><li>
        <a href="http://download.getkirby.com">
          <img class="icon" src="<?php echo url('assets/images/kirby-dark.png') ?>" alt="Kirby icon" />
          <h3 class="gamma">kirby-2.0.0-beta3.zip</h3>
          <p>Download Kirby's Starterkit</p>
        </a>
      </li><!--
 --></ul>

  </section>

  <section class="section">
    <h2 class="beta">Plugins, Snippets and Templates</h2>

    <div class="text">
      We are currently reviewing all plugins, snippets and templates for Kirby 2.
      Check back soon for the full list of downloads.
      In the meantime you can find many new <a href="<?php echo url('docs/solutions') ?>">solutions and tutorials</a> on how to build things with Kirby in the docs.
    </div>

  </section>



  <?php foreach($page->children()->visible() as $category): ?>

  <section class="section">

    <h2 class="beta"><?php echo html($category->title()) ?></h2>

    <ul class="download-list list-2"><!--
      <?php foreach($category->children()->visible() as $download): ?><!--
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