<a class="nav-open" href="#nav">Menu</a>
<nav class="nav-main cf" id="nav" role="navigation">
  <span class="vh">Main Menu</span>

  <ul class="nav cf">
    <?php foreach($pages->visible() as $item): ?>
    <li<?php e($item->isOpen(), ' class="is-active"') ?>><a href="<?php echo $item->url() ?>"><?php echo html($item->title()) ?></a></li>
    <?php endforeach ?>
  </ul>

  <ul class="nav nav-right menu-items cf">
    <li class="is-hidden-on-mobile<?php e($page->uid() == 'try', ' is-active') ?>"><a title="Download and test Kirby on your local machine as long as you want." href="<?php echo url('try') ?>">Try</a></li>
    <li class="is-hidden-on-mobile<?php e($page->uid() == 'made-with-kirby-and-love', ' is-active') ?>"><a class="red" title="Build an awesome website with Kirby!" href="<?php echo url('references/made-with-kirby-and-love') ?>">&#9829;</a></li>
    <li><a title="Buy a Kirby license for just $39" href="<?php echo url('buy') ?>">Buy</a></li>
  </ul>
  <a class="btn-red nav-close" href="#">Close menu ↑</a>

</nav>