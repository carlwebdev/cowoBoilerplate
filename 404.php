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
// PAGE TOP
include ('template_parts/page/page_top.php'); 
?>  
    
<?php /*?>      
APROVECHAR 404 PAGE (TTHOUGH HAVE DEDICTAED PAGE FOR STICKY FOOTER ETETSING ... 
    TO AKE EACH OF THE 2 STICKY FOOTER SCENARIOS TO WORK !!!!)    
    
 
Y LO BUENO DE FLEX SITIATION ES QU PERMITE TENER UNA CAPA QUE VAYA HASTA ABAJO ... HMMM
     
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
    

<?php /*?>    
meter imagen fullfold or casi, con texto on top etc 
fukllpage image with text on top, at least as one of the options...
<?php */?> 

<!--    
2 optis:
    1 - simpe text
    2 - img situation
-->    
<div class="fullpage_text" style="background-image: url('https://picsum.photos/id/237/1920/1080');">
  <div class="frame">
    <div class="text">
      <?=$pagename ?> - Page Not Found
    </div> <!-- /text --> 
  </div> <!-- /frame --> 
</div> <!-- /m_fullPage --> 


<?php /*?>   
<section class="padding_4 test___NOT">  
	<div class="frame">
		<?php include('components/pages/page-404.php'); ?>
	</div> <!-- /frame --> 
</section>
<?php */?>
    
    
    
<?php /*?><?php include('components/modules/page_title.php'); ?><?php */?>


    
<?php
// PAGE BACKGROUNDS END
// include 'components/template/page/page_backgrounds_end.php';  
// PAGE BOTTOM
include ('template_parts/page/page_bottom.php'); 
?>  
</body>
</html>