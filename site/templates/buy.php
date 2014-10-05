<?php if(c::get('stage')) go('http://getkirby.com/buy') ?>
<?php snippet('header') ?>

  <main class="main" role="main">

    <h1 class="alpha"><?php echo $page->title()->html() ?></h1>
    <h2 class="beta margin-bottom"><?php echo $page->subtitle()->html() ?></h2>

    <div class="grid">
      <div class="col-3-6 buy-section">
        <div class="text">
          <h3 class="gamma"><a href="http://download.getkirby.com">Kirby 2 Personal license</a></h3>
          <h4>Free</h4>
          <?php echo $page->personal()->kirbytext() ?>
        </div>
        <a href="http://download.getkirby.com" class="btn">Download now</a>

      </div><!--
   --><div class="col-3-6 buy-section">
        <div class="text">
          <h3 class="gamma"><a href="https://sites.fastspring.com/openwe/instant/kirby2">Kirby 2 Commercial license</a></h3>
          <h4>€79 / $99 <small>(excluding VAT)</small></h4>
          <?php echo $page->commercial()->kirbytext() ?>
        </div>
        <a href="https://sites.fastspring.com/openwe/instant/kirby2" class="btn">Buy now</a>

      </div>
    </div>

  </main>

<?php snippet('footer') ?>
