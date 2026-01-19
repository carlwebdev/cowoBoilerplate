<!DOCTYPE html>
<html lang="en">
<head>
<?php include('config/head/head_top.php'); ?>
<?php include('config/config.php'); ?>
<?php $pagename = $pagename_staff ?>
<?php include('config/seo.php'); ?>
<?php include('config/head/head_bottom.php'); ?> 
</head>
<body>
<?php 
// PAGE TOP
include ('template_parts/page/page_top.php'); 
?>  
    
    
<?php 
  // PAGE BASICS 
  // header positioning options
  // header layout options
  // show popups etc etcetce
  $show_dev_columns = '0'; // ADD THIS TO THEME SETTINGS SYSTEMS - ASIN DEV ... 
  /* PAGE BASICS - FOR CMS CUSTOMIZATION TOWARDS WP THEME */
  $show_page_banner = '1'; // hacky situation in this case .... or not
  $show_page_banner_map = '0';

  $show_breadcrumbs = '1'; 
  $show_page_title = '1'; 
  $show_page_excerpt = '0';
  // ad the content, asin wp_eoimoe ... 
  include('components/includes/page_basics.php'); // PAGE BASICS
?> 
    
    

<?php
// PAGE BACKGROUNDS START
include 'components/template/page/page_backgrounds_start.php';  
?>  



    <?php
    /*
     * GRID STAFF - falta el title 
     */ 
    ?>  
    <section class="padding___NOT padding_3">
      <div class="frame">
        <?php include('components/sections/staff/grid_staff.php'); ?>
      </div>
    </section>

     

<?php
// PAGE BACKGROUNDS END
include 'components/template/page/page_backgrounds_end.php';  
// PAGE BOTTOM
include ('template_parts/page/page_bottom.php'); 
?>  
</body>
</html>