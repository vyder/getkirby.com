
    <footer class="site-footer cf" role="contentinfo">
      <div class="copyright"><?php echo html::a('contact', '© 2009-' . date('Y') . ' Bastian Allgeier GmbH') ?></div>
      <ul class="nav nav-right" role="navigation">
        <li><?php echo twitter('@getkirby') ?></li>
        <li><a href="<?php echo url('contact') ?>">Contact</a></li>
        <li><a href="<?php echo url('made-with-kirby-and-love') ?>">Made with Kirby and <b class="red">&#9829;</b></a></li>
      </ul>
    </footer>

  </div><!-- [.site] end -->

  <?php echo js('assets/js/jquery.js') ?>
  <?php echo js('assets/js/jquery.autocomplete.js') ?>
  <?php echo js('assets/js/prism.js') ?>
  <?php echo js('@auto') ?>

</body>
</html>