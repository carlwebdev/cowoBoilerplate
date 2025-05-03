<?php 
/* 
 * GRID BLOG 
 */
// CDO CASE WHATAVE,R PARA EL LAYOT CHANGE WAPO
?>
<div class="grid_blog">
  <?php for ($i = 0; $i <= 3; $i++) { ?>
    <?php include('components/post_types/blog/card_blog.php'); ?>
  <?php } ?>
</div> <!-- /grid_blog -->     