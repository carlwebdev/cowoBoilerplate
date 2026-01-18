<!DOCTYPE html>
<html lang="en">
<head>
<?php include('config/head/head_top.php'); ?>
<?php include('config/config.php'); ?>
<?php $pagename = $pagename_faq ?>
<?php include('config/seo.php'); ?>
<?php include('config/head/head_bottom.php'); ?> 
</head>
<body>
<?php 
// PAGE TOP
include ('template_parts/page/page_top.php'); 
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
    
    

    
             


  <?php 
  // PAGE CONTENT END
  include ('components/template/page/page_content_end.php'); 
  // FOOTER
  include('components/template/footer.php'); 
  // Cookes Popup
  include('components/cowo_cookies.php'); 
  // include "components/side_menu.php";   
// PAGE END
include ('components/template/page/page_end.php'); 
// SCRIPTS
include('config/scripts.php'); 
// include('config/credits.php'); 
?>  
</body>
</html>