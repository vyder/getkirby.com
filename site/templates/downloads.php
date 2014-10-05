<?php snippet('header') ?>

<main class="main" role="main">

  <h1 class="alpha">Downloads</h1>

  <section class="section">
    <h2 class="beta">Kirby Starterkit</h2>
    <ul class="download-list"><!--
   --><li>
        <a href="http://download.getkirby.com">
          <h3 class="gamma">kirby-2-starterkit.zip</h3>
          <p>Download the latest version of Kirby's Starterkit</p>
        </a>
      </li><!--
 --></ul>

  </section>


  <?php if(c::get('stage')): ?>
  <section class="section">
    <h2 class="beta">Plugins, Snippets and Templates</h2>

    <div class="text">
      We are currently reviewing all plugins, snippets and templates for Kirby 2.
      Check back soon for the full list of downloads.
      In the meantime you can find many new <a href="<?php echo url('docs/solutions') ?>">solutions and tutorials</a> on how to build things with Kirby in the docs.
    </div>

  </section>
  <?php endif ?>


  <?php foreach($page->children()->visible() as $category): ?>

  <section class="section">

    <h2 class="beta"><?php echo $category->title()->html() ?></h2>

    <ul class="download-list list-2"><!--
      <?php foreach($category->children()->visible() as $download): ?><!--
   --><li>
        <a href="<?php echo $download->url() ?>">
          <h3 class="gamma"><?php echo $download->title()->html() ?></h3>
          <p><?php echo $download->subtitle()->html() ?></p>
        </a>
      </li><!--
   --><?php endforeach ?>
    </ul>

  </section>

  <?php endforeach ?>

</main>

<?php snippet('footer') ?>