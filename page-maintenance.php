<!DOCTYPE html>
<html lang="en">
<head>
<?php include('config/head/head_top.php'); ?>
<?php include('config/config.php'); ?>
<?php $pagename = 'Maintenance' ?>
<?php 
  /* PAGE BASICS - FOR CMS CUSTOMIZATION TOWARDS WP THEME */
  $show_dev_columns = '0';

  $show_page_banner = '0'; // hacky situation in this case .... or not
  $show_page_banner_map = '0';
  $show_breadcrumbs = '0'; 
  $show_page_title = '0'; 
  $show_page_excerpt = '0'; 
?> 
<?php include('config/seo.php'); ?>
<?php include('config/head/head_bottom.php'); ?> 


<style>
header, footer {display:none;}
</style>



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
      // PAGE BASICS 
      // $show_dev_columns = '1';
      /* PAGE BASICS - FOR CMS CUSTOMIZATION TOWARDS WP THEME */
      // $show_page_banner = '0'; // hacky situation in this case .... or not
      // $show_page_banner_map = '0';
      // $show_breadcrumbs = '0'; // ADD OPTIN FOR BREADCRUMBS INSIDE THE BANNER ........ AND ALSO THE TITLE, CHOOSE... OPTIONS AS COMBOS... 
      // $show_page_title = '0'; 
      // $show_page_excerpt = '0';
      include('components/includes/page_basics.php'); // PAGE BASICS
    ?> 
    
    


    

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
      <?=$pagename ?>
    </div> <!-- /text --> 
  </div> <!-- /frame --> 
</div> <!-- /m_fullPage --> 

    
  
<?php /*?><?php include('components/modules/page_title.php'); ?><?php */?>


    
<?php
// PAGE BACKGROUNDS END
// include 'components/template/page/page_backgrounds_end.php';  
// PAGE BOTTOM
include ('template_parts/page/page_bottom.php'); 
?>  
</body>
</html>