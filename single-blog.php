<!DOCTYPE html>
<html lang="en"><!-- InstanceBegin template="/Templates/master_en.dwt.php" codeOutsideHTMLIsLocked="false" -->
<head>
<?php include('config/head/head_top.php'); ?>
<?php include('config/config.php'); ?>
<!-- InstanceBeginEditable name="config" -->
<?php $pagename = "Single Blog Post" ?>
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

    
    
    
    
    
    
    
    
    
    

  <?php /*?>here in single bog posyt, ahve title over the banner, at least to start off with.. no, just kekep it hthere ....<?php */?>
  <?php /*?>banner text , test cover with another layoutm so must have modifiers fomr the start  - i really want to see the tiotle at teh ebototm left, over tyhe image... nice visual <?php */?>


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
      $show_page_banner = '1'; // hacky situation in this case .... or not
      $show_page_banner_map = '0'; // hacky situation in this case .... or not - / TODO - ADD - SOPTION FOR FULLPAGE ...................................
      $show_breadcrumbs = '1'; // ADD OPTIN FOR BREADCRUMBS INSIDE THE BANNER ........ AND ALSO THE TITLE, CHOOSE... OPTIONS AS COMBOS... 
      $show_page_title = '0'; 
      $show_page_excerpt = '0';
      // ad the content, asin wp_eoimoe ... 
      include('components/includes/page_basics.php'); // PAGE BASICS
    ?> 
    
    
  
  <?php
  /*
   * SECTION - BLOG - SINGLE
   */ 
  ?> 
  <section class="padding_3">
    <div class="frame wide___NOT">  
      <?php include('components/sections/blog/blog_single.php'); ?>
    </div>
  </section>
    

    
  <section class="padding_3 test___NOT">  
    <div class="frame wide___NOT"> 
      <div class="section_title">Image Gallery<!--Slideshow aka Some pictures!--></div>
      <?php include('components/molecules/slider.php'); ?> <!--card slider o algo definri el aspect ratio dle slider, no?? o que ? hmm -->
    </div>    
  </section> 
    
    
  
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