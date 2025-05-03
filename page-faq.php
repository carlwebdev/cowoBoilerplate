<!DOCTYPE html>
<html lang="en"><!-- InstanceBegin template="/Templates/master_en.dwt.php" codeOutsideHTMLIsLocked="false" -->
<head>
<?php include('config/head/head_top.php'); ?>
<?php include('config/config.php'); ?>
<!-- InstanceBeginEditable name="config" -->
<?php $pagename = $pagename_faq ?>
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
    
    
    
    <?php 
      /* 
       *
       * PAGE BASICS 
       *
       */
      // header positioning options
      // header layout options

      // show popups etc etcetce

      $show_dev_columns = '1';

      /* PAGE BASICS - FOR CMS CUSTOMIZATION TOWARDS WP THEME */
      $show_page_banner = '1'; // hacky situation in this case .... or not
      $show_page_banner_map = '0';
      $show_breadcrumbs = '1'; 
      $show_page_title = '1'; 
      $show_page_excerpt = '0';

      // ad the content, asin wp_eoimoe ... 

    
      include('components/includes/page_basics.php'); // PAGE BASICS
    ?> 
    
    
    <?php include('components/atoms/breadcrumbs_about.php'); ?> <?php /*?>!!!!!!!!!!!!!!!!!!!<?php */?>
    
  
    <!-- page-about-faq... -->
    
    
    
    
    
<?php 
/*
 * jQuery - ACCORDION
 */?>
<section class="padding test___NOT">  
	<div class="frame">  
    
		<?php /*?><div class="section_title">Accordion</div>  <?php */?>
  
    <?php 
      $section_title = 'List';
      include('components/dynamic/section_title.php'); 
    ?>
    
    
		<?php include('components/cowo_accordion_vallenato.php'); ?> <!-- TO DO  - FIND A WAY TO RE-CONSUME THESE UI'S WITHOUT CNTAMINATING THEM !!!!!! -->
	</div> <!-- /frame -->     
</section> 
    
    

    
             

	<!-- InstanceEndEditable -->
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