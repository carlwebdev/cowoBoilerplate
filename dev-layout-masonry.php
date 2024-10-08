<!DOCTYPE html>
<html lang="en"><!-- InstanceBegin template="/Templates/master_en.dwt.php" codeOutsideHTMLIsLocked="false" -->
<head>
<?php include('config/head/head_top.php'); ?>
<?php include('config/config.php'); ?>
<!-- InstanceBeginEditable name="config" -->
<?php 
$pagename = 'Masonry' // Layout - Grid - Masonry
?>
<!-- InstanceEndEditable -->
<?php include('config/seo.php'); ?>
<?php include('config/head/head_bottom.php'); ?> 

<!-- InstanceBeginEditable name="head" -->
<!-- InstanceEndEditable -->

</head>
<body>
<?php 
/*  
 * PAGE START
 */
include ( 'components/template/page/page_start.php'); 
?> 
  <?php 
  /*
   * Header
   */
  include('components/template/header.php'); 
  ?> 
  <?php 
  /* Page Content Start 
   * PAGE CONTENT START - Sticky Footer Solved By FlexBox - start
   */
  include ('components/template/page/page_content_start.php'); 
  ?> 
    
	<!-- InstanceBeginEditable name="content" -->



<!--<br>
<br>
<br>
-->
<!--remove this, and add the auto padding top script !!!    -->
    





    <?php 
      /* 
       *
       * PAGE BASICS
       *
       */
      // DEV QA  
      $show_dev_columns = '0';
      /* PAGE BASICS - FOR CMS CUSTOMIZATION TOWARDS WP THEME */
      $show_page_banner = '0'; // hacky situation in this case .... or not
      $show_page_banner_map = '0';
      // AQUI FALTA EL VIDEO ...
      $show_breadcrumbs = '1'; 
      $show_page_title = '1'; 
      $show_page_excerpt = '0';
      // ad the content, asin wp_eoimoe ... here just as a bollc sexample with htmleditro modil eetc ...
      include('components/includes/page_basics.php'); // PAGE BASICS
    ?> 
    <?php // include('components/template/page/page_title.php'); ?>



    <?php 
    /* 
     * START - LAYOUT SYSTEM - BACKGROUNDS (AND EVEN CSS GRID WHATEVER ... )
     */
    ?>    
    <div class="backgrounds">

      <section class="background padding_2">
        <div class="frame wide___NOT full">
          <?php include ('components/dev-masonry-structure.php'); ?>   
          <!-- DEJARLO COMO BASE, Y ASI SEPEARA POAR AOTROS USESO PRECATOICOS , BUT FIRST MAKE IT WORTK WITH BLOG STH ... -->
        </div> <!-- /frame --> 
      </section>

      <section class="background padding_2">
        <div class="frame wide___NOT">
          <?php // include('components/patterns/grid_blog.php'); ?>
          <?php include('components/patterns/grid_blog_masonry_js.php'); ?>
        </div> <!-- /frame --> 
      </section>

    <?php 
    /* 
     * END - LAYOUT SYSTEM - BACKGROUNDS
     */
    ?>  
    </div> <!-- /backgrounds -->



		<!-- InstanceEndEditable -->
  <?php 
  /* Page Content End 
   * PAGE CONTENT END - Sticky Footer Solved By FlexBox - end
   */
  include ('components/template/page/page_content_end.php'); 
  ?> 	
  <?php 
  /*
   * Footer
   */
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
/*  
 * PAGE END
 */
include ('components/template/page/page_end.php'); 
?> 
<?php 
/*
 * Scripts
 */
include('config/scripts.php'); 
?>
<!-- InstanceBeginEditable name="scripts" -->
<!-- InstanceEndEditable -->
<?php // include('config/credits.php'); ?>  
</body>
<!-- InstanceEnd --></html>