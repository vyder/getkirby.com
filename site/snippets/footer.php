
    <footer class="site-footer cf" role="contentinfo">
      <?php echo kirbytext($site->copyright()) ?>
      <ul class="nav nav-right" role="navigation">
        <li><?php echo twitter('@getkirby') ?></li>
        <li><a href="<?php echo url('imprint') ?>">Imprint</a></li>
        <li><a href="<?php echo url('made-with-kirby-and-love') ?>">Made with Kirby and <b class="red">&#9829;</b></a></li>
      </ul>
    </footer>

  </div><!-- [.site] end -->

  <?php echo js('assets/js/jquery.js') ?>
  <?php echo js('assets/js/prism.js') ?>
  <?php echo js('@auto') ?>

</body>

</html>