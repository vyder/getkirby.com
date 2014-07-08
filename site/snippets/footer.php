
    <footer class="site-footer cf" role="contentinfo">
      <?php echo kirbytext($site->copyright()) ?>
      <ul class="nav-footer cf" role="navigation">
        <li><a href="#">↑ Up</a></li>
        <li><a href="<?php echo url('contact') ?>">Contact</a></li>
        <li><a href="<?php echo url('license') ?>">License</a></li>
        <li><a href="<?php echo url('imprint') ?>">Imprint</a></li>
        <li><a href="<?php echo url('references/made-with-kirby-and-love') ?>">Made with Kirby and <b class="love">&#9829;</b></a></li>
      </ul>
    </footer>

  </div>

  <?php echo js('assets/js/jquery.js') ?>
  <?php echo js('assets/js/site.js') ?>
  <?php echo js('@auto') ?>

</body>

</html>