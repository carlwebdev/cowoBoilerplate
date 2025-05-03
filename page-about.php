<!DOCTYPE html>
<html lang="en"><!-- InstanceBegin template="/Templates/master_en.dwt.php" codeOutsideHTMLIsLocked="false" -->
<head>
<?php include('config/head/head_top.php'); ?>
<?php include('config/config.php'); ?>
<!-- InstanceBeginEditable name="config" -->
<?php $pagename = $pagename_about ?> 
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
      
    
    
  <!--
    <pre>










    
    TODO - MAKE FLEX STICKY FOOTER WORK HERE AGAIN
    </pre>
    -->
    
    
    
		<?php // include('components/pages/page-about.php'); ?> 
    <?php /*?>THIS SYSTEM IS NOT GOOD, IT'S TO MODULAR AND FAR -REACHING , KISSS !!!!!!!!!!!<?php */?>
    
    <?php 
      /* 
       *
       * PAGE BASICS 
       *
       */
      $show_dev_columns = '0'; // THIS SHOULD BE A GENRAL FILE, NOT PER PAGE .... HMMM OK
      // $show_dev_columns = '0'; 
      // THIS SHOUDL BE DEIFNED I CONFIG, FOR THE PAGE BASICS INCLUDE .. OR EVEN HAVE IT LCATED ELSEWHERE 
    
      // PLUS ADD THE CSS DEBUGGING THSINGS, ALT IMAGE % ETC , EASY  
      /* PAGE BASICS - FOR CMS CUSTOMIZATION TOWARDS WP THEME */
      $show_page_banner = '1'; // hacky situation in this case .... or not
      $show_page_banner_map = '0'; // hacky situation in this case .... or not - / TODO - ADD - SOPTION FOR FULLPAGE .................................... 
      $show_breadcrumbs = '0'; // ADD OPTIN FOR BREADCRUMBS INSIDE THE BANNER ........ AND ALSO THE TITLE, CHOOSE... OPTIONS AS COMBOS... 
      $show_page_title = '1'; 
      $show_page_excerpt = '0';
      // ad the content, asin wp_eoimoe ... 
      include('components/includes/page_basics.php'); // PAGE BASICS
    ?> 
  
    
    <section class="padding">
      <div class="frame">
        <?php include('components/molecules/grid_features_about.php'); // TODO RENAMRE AS features_grid_about or features_about_grid vs list, etc ?>
      </div>   
    </section>

    
    <section class="padding">
      <div class="frame wide___NOT">
        <?php include('components/molecules/slider.php'); ?>
      </div> 
    </section>






    <section class="padding_4">
      <div class="frame">

        <?php include('components/template/page/page_content.php'); // no es random enought esto, keep & duplicate !!! ?>

        <!--
        http://localhost/sync/sites/_carl_github/cowoBoilerplate/style-sample-page.php
        -->

        <?php /*?><hr>  <?php */?>
        
      </div> <!-- /frame --> 
    </section>



    
    
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