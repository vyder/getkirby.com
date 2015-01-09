<?php snippet('header') ?>

  <main class="main" role="main">

    <h1 class="alpha">Kirby Shirt Pre-order</h1>
    <h2 class="beta margin-bottom"></h2>

    <div class="grid">
      <div class="col-3-6">
        <div class="text">
          <?php echo $page->info()->kirbytext() ?>
        </div>
      </div><!--
   --><div class="col-3-6 buy-section">
        <div class="text">
          <h3 class="gamma"><a href="https://getkirby.wufoo.com/forms/kirby-shirt-preorder/">Kirby Shirt</a></h3>
          <h4><a href="https://getkirby.wufoo.com/forms/kirby-shirt-preorder/">€20 / $24</a> <small>(incl. VAT, excl. Shipping)</small></h4>
          <?php echo $page->shirt()->kirbytext() ?>
        </div>
        <a href="https://getkirby.wufoo.com/forms/kirby-shirt-preorder/" class="btn btn-with-label">Pre-order now &rarr;</a>
      </div>
    </div>

  </main>

<?php snippet('footer') ?>
