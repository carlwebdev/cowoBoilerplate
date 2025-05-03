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
// PAGE START
include ( '../components/template/page/page_start.php'); 
?> 
  <?php 
  // HEADER
  include('../components/template/header.php'); 
  ?> 
  <?php 
  // PAGE CONTENT START - Sticky Footer Solved By FlexBox - start
  include ('../components/template/page/page_content_start.php'); 
  ?>  
	<!-- TemplateBeginEditable name="content" -->
  <!-- TemplateEndEditable -->
  <?php 
  // PAGE CONTENT END - Sticky Footer Solved By FlexBox - end
  include ('../components/template/page/page_content_end.php'); 
  ?> 	
  <?php 
  // FOOTER
  include('../components/template/footer.php'); 
  ?>
  <?php 
  // COOKIES POPUP
  include('../components/cowo_cookies.php'); 
  ?> 
  <?php // include "../components/side_menu.php"; ?>   
<?php 
// PAGE END
include ('../components/template/page/page_end.php'); 
?> 
<?php 
// SCRIPTS
include('../config/scripts.php'); 
?>
<!-- TemplateBeginEditable name="scripts" -->
<!-- TemplateEndEditable -->
<?php // include('../config/credits.php'); ?>  
</body>
</html>