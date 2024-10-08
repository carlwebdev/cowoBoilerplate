<!DOCTYPE html>
<html lang="en">
<head>
<?php include('config/head/head_top.php'); ?>
<?php include('config/config.php'); ?>
<?php $pagename = $pagename_testimonials ?>
<?php include('config/seo.php'); ?>
<?php include('config/head/head_bottom.php'); ?> 
</head>
<body>
<?php 
// PAGE START
include ( 'components/template/page/page_start.php'); 
?> 
  <?php 
  // HEADER
  include('components/template/header.php'); 
  ?> 
  <?php 
  // PAGE CONTENT START
  include ('components/template/page/page_content_start.php'); 
  ?> 
    
    
    
    <?php 
      /* 
       *
       * PAGE BASICS 
       *
       */
      // header positioning options
      // header layout options

      // show popups etc etcetce

      $show_dev_columns = '0';

      /* PAGE BASICS - FOR CMS CUSTOMIZATION TOWARDS WP THEME */
      $show_page_banner = '1'; // hacky situation in this case .... or not
      $show_page_banner_map = '0';
    
    
    
    
    
    
      $show_breadcrumbs = '0'; 
      $show_page_title = '0'; 
      $show_page_excerpt = '1';

      // ad the content, asin wp_eoimoe ... 

    
      include('components/includes/page_basics.php'); // PAGE BASICS
    ?> 
    
    
    
     
    
    
    <!--
    BLOG, ADD GROID-LIST VIEW ETC !!!!!!!!!!!!!!
    -->
    
    
    <!--
    
    ALSO BUOLD SERAHC RESUYLKTS ...  AS GOOGLE-ISH AS POSSIBLE ....
    
    -->
    
    <!--
    1 NAV - PAGES DEV, MOVE INTO DEV, Y LUEGO YA LIMPARKLO SI ACASO TODO ...
    -->
    
    
    
<?php /*?>		
<section class="padding accent">
</section>
<?php */?>
    
             

  <?php 
  // PAGE CONTENT END
  include ('components/template/page/page_content_end.php'); 
  ?> 	
  <?php 
  // FOOTER
  include('components/template/footer.php'); 
  ?>
  <?php 
  /*
   * Cookes Popup
   */
  include('components/cowo_cookies.php'); 
  ?> 
  <?php // include "components/side_menu.php"; ?>   
<?php 
// PAGE END
include ('components/template/page/page_end.php'); 
?> 
<?php 
// SCRIPTS
include('config/scripts.php'); 
?>
<?php // include('config/credits.php'); ?>  
</body>
</html>