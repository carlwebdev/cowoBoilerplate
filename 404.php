<!DOCTYPE html>
<html lang="en"><!-- InstanceBegin template="/Templates/master_en.dwt.php" codeOutsideHTMLIsLocked="false" -->
<head>
<?php include('config/head/head_top.php'); ?>
<?php include('config/config.php'); ?>
<!-- InstanceBeginEditable name="config" -->
<?php $pagename = $pagename_404 ?>
  
<?php 
  /* PAGE BASICS - FOR CMS CUSTOMIZATION TOWARDS WP THEME */
  $show_page_banner = '0'; // hacky situation in this case .... or not
  $show_breadcrumbs = '0'; 
  $show_page_title = '0'; 
  $show_page_excerpt = '0'; 
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
    
    
<?php /*?>    
<!--    
APROVECHAR 404 PAGE (TTHOUGH HAVE DEDICTAED PAGE FOR STICKY FOOTER ETETSING ... 
    TO AKE EACH OF THE 2 STICKY FOOTER SCENARIOS TO WORK !!!!)    
    
    
Y LO BUENO DE FLEX SITIATION ES QU PERMITE TENER UNA CAPA QUE VAYA HASTA ABAJO ... HMMM
<!--
    
    
    <?php */?>


    
    
    
    
    
    <?php 
      /* 
       *
       * PAGE BASICS 
       *
       */
      $show_dev_columns = '0';
      /* PAGE BASICS - FOR CMS CUSTOMIZATION TOWARDS WP THEME */
      $show_page_banner = '0'; // hacky situation in this case .... or not
      $show_page_banner_map = '0';
      $show_breadcrumbs = '0'; // ADD OPTIN FOR BREADCRUMBS INSIDE THE BANNER ........ AND ALSO THE TITLE, CHOOSE... OPTIONS AS COMBOS... 
      $show_page_title = '0'; 
      $show_page_excerpt = '0';
      include('components/includes/page_basics.php'); // PAGE BASICS
    ?> 
    
    
    
    
    
    
    <!--

  todo add alyout godlen, as in wp_eimoe, for these secondar y text pages ..,,,,
    
    
  -->  

    
    
    
    
    
    
    
<?php /*?>MODULE - Fullpage module<?php */?>
<?php /*?><?php */?>
    
    
    
<div class="fullpage_text" style="background-image: url('https://picsum.photos/id/237/1920/1080');">
  <div class="frame">
    <div class="text">
      <?=$pagename ?> - Page Not Found
    </div> <!-- /text --> 
  </div> <!-- /frame --> 
</div> <!-- /m_fullPage --> 



    
    
    
    
<?php /*?>    
meter imagen fullfold or casi, con texto on top etc 
fukllpage image with text on top, at least as one of the options...
<?php */?>
    
<?php /*?>   
<section class="padding_4 test___NOT">  
	<div class="frame">
		<?php include('components/pages/page-404.php'); ?>
	</div> <!-- /frame --> 
</section>
<?php */?>
    
    
    
    
    
    

    
    
    
    
<?php /*?><?php include('components/modules/page_title.php'); ?><?php */?>

<?php /*?><section class="fullHeightTest">
  <div class="frame">
  	
    
    <?=$pagename ?> - Page Not Found
    
    
  </div> <!-- /frame --> 
</section><?php */?>


    
<!--    
2 optis:
    1 - simpe text
    2 - img situation
-->    
    
    
    
    
    
    
    


    
    
    

    
    
    
  
    
    
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