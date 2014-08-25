

  </div><!-- [.site] end -->

    <footer class="site-footer cf" role="contentinfo">
      <div class="site">
        <div class="action">
          <a href="#" title="Back to top ↑"><img src="<?php echo url('assets/images/kirbyicon-footer.svg') ?>" /></a>
          <a class="btn" href="<?php echo url('try') ?>">Try Kirby</a>
          <a class="btn" href="<?php echo url('buy') ?>">Buy Kirby</a>
        </div>
        <ul class="list-6"><!--
       --><li>
            <h2 class="gamma">Discover</h2>
            <ul>
              <li><a href="<?php echo url() ?>">Kirby CMS</a></li>
              <li><a href="http://forum.getkirby.com">Kirby FORUM</a></li>
              <li><a href="http://themes.getkirby.com">Kirby THEMES</a></li>
            </ul>
          </li><!--
       --><li>
            <h2 class="gamma">Grab</h2>
            <ul>
              <li><a href="<?php echo url('try') ?>">Try Kirby</a></li>
              <li><a href="<?php echo url('buy') ?>">Buy Kirby</a></li>
            </ul>
          </li><!--
       --><li>
            <h2 class="gamma">Connect</h2>
            <ul>
              <li><a href="http://twitter.com/getkirby">Twitter</a></li>
              <li><a href="http://github.com/getkirby">GitHub</a></li>
              <li><a href="<?php echo url('feed') ?>">Blog Feed</a></li>
            </ul>
          </li><!--
       --><li>
            <h2 class="gamma">About</h2>
            <ul>
              <li><a href="<?php echo url('about/history') ?>">History</a></li>
              <li><a href="<?php echo url('contact') ?>">Contact</a></li>
              <li><a href="<?php echo url('license') ?>">License</a></li>
              <li><a href="<?php echo url('imprint') ?>">Imprint</a></li>
            </ul>
          </li><!--
       --><li>
            <h2 class="gamma">Navigate</h2>
            <ul>
              <?php foreach($pages->visible()->not('forum') as $item): ?>
              <li<?php e($item->isOpen(), ' class="is-active"') ?>><a href="<?php echo $item->url() ?>"><?php echo html($item->title()) ?></a></li>
              <?php endforeach ?>
            </ul>
          </li><!--
       --><li>
            <h2 class="gamma">Learn</h2>
            <ul>
              <?php foreach(page('docs')->children()->visible() as $item): ?>
              <li<?php e($item->isOpen(), ' class="is-active"') ?>><a href="<?php echo $item->url() ?>"><?php echo html($item->title()) ?></a></li>
              <?php endforeach ?>
            </ul>
          </li><!--
     --></ul>
        <div class="colophon"><?php echo kirbytext($site->copyright()) ?>
        <!--
          <div><?php echo kirbytext($site->copyright()) ?></div>
          <div class="float-right align-right"><a href="<?php echo url('made-with-kirby-and-love') ?>">Made with Kirby and &#9829;</a></div>-->
        </div>
      </div>
    </footer>

  <?php echo js('assets/js/jquery.js') ?>
  <?php echo js('assets/js/prism.js') ?>
  <?php echo js('@auto') ?>

</body>

</html>