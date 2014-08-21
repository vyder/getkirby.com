
    <footer class="site-footer cf" role="contentinfo">
      <?php echo kirbytext($site->copyright()) ?>
      <ul class="nav nav-right" role="navigation">
        <li><a href="#">↑ Up</a></li>
        <li><a href="<?php echo url('contact') ?>">Contact</a></li>
        <li><a href="<?php echo url('license') ?>">License</a></li>
        <li><a href="<?php echo url('imprint') ?>">Imprint</a></li>
        <li><a href="<?php echo url('made-with-kirby-and-love') ?>">Made with Kirby and <b class="red">&#9829;</b></a></li>
      </ul>
    </footer>

    <div class="sites-nav-wrap">
      <a class="sites-nav-open gamma" href="#sites-nav">All Kirby sites</a>
      <nav class="sites-nav" id="sites-nav">
        <ul class="dropdown arrow-right">
          <li class="is-active"><a href="<?php echo url() ?>">Kirby CMS</a></li>
          <li><a href="http://forum.getkirby.com">Kirby FORUM</a></li>
          <li><a href="http://themes.getkirby.com">Kirby THEMES</a></li>
        </ul>
        <a class="sites-nav-close" href="#">Close menu</a>
      </nav>
    </div>

  </div><!-- [.site] end -->

  <?php echo js('assets/js/jquery.js') ?>
  <?php echo js('assets/js/prism.js') ?>
  <?php echo js('@auto') ?>

</body>

</html>