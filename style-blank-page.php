<!DOCTYPE html>
<html lang="en" data-theme="light">
<head>
<?php include('config/head/head_top.php'); ?>
<?php include('config/config.php'); ?>
<?php $pagename = 'Blank Page' // to Test Sticky Footer  - RENAME THIS FILE AS PAGE-BKLANK, AND ALSO HAVE PAGE_SAMPLE, Y LISTSO. ?>
<?php include('config/seo.php'); ?>
<?php include('config/head/head_bottom.php'); ?> 
</head>
<body>
<?php 
// PAGE TOP
include ('template_parts/page/page_top.php'); 
?>  
  
    <?php // include('components/atoms/page_banner.php'); ?>
    <?php // include('components/atoms/breadcrumbs.php'); ?>
    <?php // include('components/atoms/page_title.php'); ?>
    <?php // include('components/atoms/page_excerpt.php'); ?>
    
    <!--
		PAGES, NLANCK PAGE, JYUST ADD THE PAGE TITLE, BUT MAKE IT BEING THE H1, SO RESET THE H1 IN RESTE, AND TEHN REDOI AMRGINS OF ALL H'2 IN THE HTMLEDITOSD MODULE !!! IF IT MAKES ANY SENS E
		JUSTAMENET ME GUARDE LA INFO DE LSO FEADUALT HEADRE SIZES AND MARGINS... 
		-->
    
    <?php 
      /* 
       *
       * PAGE BASICS 
       *
       */
      // header positioning options
      // header layout options

      // show popups etc etcetc
      $show_dev_columns = '0';

      /* PAGE BASICS - FOR CMS CUSTOMIZATION TOWARDS WP THEME */
      $show_page_banner = '0'; // hacky situation in this case .... or not
      $show_page_banner_map = '0'; // hacky situation in this case .... or not - / TODO - ADD - SOPTION FOR FULLPAGE .................................... 
    
      $show_breadcrumbs = '0'; // ADD OPTIN FOR BREADCRUMBS INSIDE THE BANNER ........ AND ALSO THE TITLE, CHOOSE... OPTIONS AS COMBOS... 
      $show_page_title = '0'; // won't be visible as the header is fixed ... 
      $show_page_excerpt = '0';

      // ad the content, asin wp_eoimoe ... 
      include('components/includes/page_basics.php'); // PAGE BASICS
    ?> 
    
<?php
// PAGE BACKGROUNDS END
// include 'components/template/page/page_backgrounds_end.php';  
// PAGE BOTTOM
include ('template_parts/page/page_bottom.php'); 
?>  
</body>
</html>