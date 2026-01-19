<!DOCTYPE html>
<html lang="en">
<head>
<?php include('config/head/head_top.php'); ?>
<?php include('config/config.php'); ?>
<?php $pagename = $pagename_faq ?>
<?php 
  /* PAGE BASICS - FOR CMS CUSTOMIZATION TOWARDS WP THEME */
  $show_dev_columns = '0';

  $show_page_banner = '1'; // hacky situation in this case .... or not
  $show_page_banner_map = '0';
  $show_breadcrumbs = '1'; 
  $show_page_title = '1'; 
  $show_page_excerpt = '1'; 
?> 
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

  // $show_dev_columns = '1';

  /* PAGE BASICS - FOR CMS CUSTOMIZATION TOWARDS WP THEME */
  // $show_page_banner = '1'; // hacky situation in this case .... or not
  // $show_page_banner_map = '0';
  // $show_breadcrumbs = '1'; 
  // $show_page_title = '1'; 
  // $show_page_excerpt = '0';

  // ad the content, asin wp_eoimoe ... NOT

  include('components/includes/page_basics.php'); // PAGE BASICS
?> 
    
    
<?php
// PAGE BACKGROUNDS START
include 'components/template/page/page_backgrounds_start.php';  
?>  
    
    
<?php 
/*
 * jQuery - ACCORDION
 */
?>
<section class="background padding test___NOT">  
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
/*
 * jQuery - ACCORDION
 */
?>
<section class="background padding test___NOT">  
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
// PAGE BACKGROUNDS END
include 'components/template/page/page_backgrounds_end.php';  
// PAGE BOTTOM
include ('template_parts/page/page_bottom.php'); 
?>  
</body>
</html>