<?php 
/*
 * FOOTER
 */
?>
<footer class="block" id="site-footer" role="contentinfo">
  <div class="frame">
    <div class="inner">

      <?php
      if (!empty($footer_enable_bar_top)) {
        include('components/template/footer/footer_bar_top.php');
      }

      include('components/template/footer/footer_bar_main.php');
      include('components/template/footer/footer_bar_bottom.php');
      ?>

    </div> <!-- /inner -->
  </div> <!-- /frame -->   

  <?php if (!empty($footer_show_marquee)) { ?>
    <marquee>
      <div class="marquee_content">
        Developed In Barcelona by <a href="https://cowowo.cat" target="_blank" rel="noopener noreferrer"><img src="assets/img/logos/logo_cowowo.png" alt="COWOWO"></a>
      </div> <!-- /marquee_content -->
    </marquee>
  <?php } ?>

</footer>