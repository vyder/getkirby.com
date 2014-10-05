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

  <section class="section grid">
    <ul class="list-2">
      <li>
        <h2 class="beta">Code snippets &amp; examples</h2>
        <div class="text">
          If you are looking for code snippets and tutorials how to build all kinds of solutions with Kirby, please <a href="/docs/solutions"><strong>check out the new docs</strong></a>.
        </div>
      </li><!--
   --><li>
        <h2 class="beta">More Kirby 2 plugins…</h2>
        <div class="text">
          Please come back soon for more brand new Kirby 2 plugins and extensions.
        </div>
      </li>
    </ul>
  </section>

</main>

<?php snippet('footer') ?>