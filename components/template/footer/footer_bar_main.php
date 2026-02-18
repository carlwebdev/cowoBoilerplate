<?php 
/*
 * Footer - Bar - Main
 */
?> 
<div class="footer_bar_main">

  <div class="footerContent">
    <?php include('components/template/footer/logo_footer.php'); ?>
    <?php include('components/template/footer/footer_copyright.php'); ?>
    <?php include('components/template/footer/footer_contact.php'); ?>
    <?php include('components/template/footer/footer_social.php'); ?>
  </div> <!-- /footerContent -->	

  <?php
  $footerColumns = array();

  if (isset($footer_links_columns) && is_array($footer_links_columns) && !empty($footer_links_columns)) {
    $footerColumns = $footer_links_columns;
  }
  ?>

  <?php if (!empty($footerColumns)) { ?>
    <div class="grid_footer" aria-label="Footer links">
      <?php foreach ($footerColumns as $column) { ?>
        <?php
        $columnTitle = isset($column['title']) ? $column['title'] : '';
        $columnLinks = (isset($column['links']) && is_array($column['links'])) ? $column['links'] : array();
        ?>
        <div class="item">
          <?php if ($columnTitle !== '') { ?>
            <h5><?php echo htmlspecialchars($columnTitle, ENT_QUOTES, 'UTF-8'); ?></h5>
          <?php } ?>
          <?php if (!empty($columnLinks)) { ?>
            <div class="text">
              <ul>
                <?php foreach ($columnLinks as $link) { ?>
                  <?php
                  $label = isset($link['label']) ? $link['label'] : '';
                  $url = isset($link['url']) ? $link['url'] : '#';
                  ?>
                  <?php if ($label !== '') { ?>
                    <li>
                      <a href="<?php echo htmlspecialchars($url, ENT_QUOTES, 'UTF-8'); ?>"><?php echo htmlspecialchars($label, ENT_QUOTES, 'UTF-8'); ?></a>
                    </li>
                  <?php } ?>
                <?php } ?>
              </ul>
            </div> <!-- /text -->
          <?php } ?>
        </div> <!-- /item -->
      <?php } ?>
    </div> <!-- /grid_footer -->
  <?php } ?>

</div> <!-- /footer_bar_main -->    