<!DOCTYPE html>
<html lang="en"><!-- InstanceBegin template="/Templates/master_en.dwt.php" codeOutsideHTMLIsLocked="false" -->
<head>
<?php include('config/head/head_top.php'); ?>
<?php include('config/config.php'); ?>
<!-- InstanceBeginEditable name="config" -->
<?php $pagename = "Single Service"; // THIS IS A NEW PAGE ...  ?>
<!-- InstanceEndEditable -->
<?php include('config/seo.php'); ?>
<?php include('config/head/head_bottom.php'); ?> 

<!-- InstanceBeginEditable name="head" -->
<!-- InstanceEndEditable -->

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
  // PAGE CONTENT START - Sticky Footer Solved By FlexBox - start
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
      $show_breadcrumbs = '1'; // ADD OPTIN FOR BREADCRUMBS INSIDE THE BANNER ........ AND ALSO THE TITLE, CHOOSE... OPTIONS AS COMBOS... 
      $show_page_title = '0'; 
      $show_page_excerpt = '0';

      // ad the content, asin wp_eoimoe ... 

      include('components/includes/page_basics.php'); // PAGE BASICS
    ?> 
    
    
    
    
    
  <?php
  /*
   *
   *
   * PAGE CONTENT...  - - -BUILS SECTION CLASS, FOR 100VH HEIGHT, FULLCREEN POR EJEMP ... & ALSO VERTILALLY CENTER, I MEAN YES ESOS
   *
   *
   */ 
  ?>



    
  <!-- InstanceEndEditable -->
  <?php 
  // PAGE CONTENT END - Sticky Footer Solved By FlexBox - end
  include ('components/template/page/page_content_end.php'); 
  ?> 	
  <?php 
  // FOOTER
  include('components/template/footer.php'); 
  ?>
  <?php 
  // COOKIES POPUP
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
<!-- InstanceBeginEditable name="scripts" -->
<!-- InstanceEndEditable -->
<?php // include('config/credits.php'); ?>  
</body>
<!-- InstanceEnd --></html>