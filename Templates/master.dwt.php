<!DOCTYPE html>
<html lang="en">
<head>
<?php include('../config/head/head_top.php'); ?>
<?php include('../config/config.php'); ?>
<!-- TemplateBeginEditable name="config" -->
<!-- TemplateEndEditable -->
<?php include('../config/seo.php'); ?>
<?php include('../config/head/head_bottom.php'); ?> 
<!-- TemplateBeginEditable name="head" -->
<!-- TemplateEndEditable -->
</head>
<body>
<?php 
/*  
 * PAGE START
 */
include ( '../components/template/page/page_start.php'); 
?> 
  <?php 
  /*
   * Header
   */
  include('../components/template/header.php'); 
  ?> 
  <?php 
  /* Page Content Start 
   * PAGE CONTENT START - Sticky Footer Solved By FlexBox - start
   */
  include ('../components/template/page/page_content_start.php'); 
  ?> 
    
	<!-- TemplateBeginEditable name="content" -->
  <!-- TemplateEndEditable -->
  <?php 
  /* Page Content End 
   * PAGE CONTENT END - Sticky Footer Solved By FlexBox - end
   */
  include ('../components/template/page/page_content_end.php'); 
  ?> 	
  <?php 
  /*
   * Footer
   */
  include('../components/template/footer.php'); 
  ?>
  <?php 
  /*
   * Cookes Popup
   */
  include('../components/cowo_cookies.php'); 
  ?> 
  <?php // include "../components/side_menu.php"; ?>   
<?php 
/*  
 * PAGE END
 */
include ('../components/template/page/page_end.php'); 
?> 
<?php 
/*
 * Scripts
 */
include('../config/scripts.php'); 
?>
<!-- TemplateBeginEditable name="scripts" -->
<!-- TemplateEndEditable -->
<?php // include('../config/credits.php'); ?>  
</body>
</html>