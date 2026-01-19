<!DOCTYPE html>
<html lang="en">
<head>
<?php include('config/head/head_top.php'); ?>
<?php include('config/config.php'); ?>
<?php $pagename = $pagename_legal; ?>
<?php 
  /* PAGE BASICS - FOR CMS CUSTOMIZATION TOWARDS WP THEME */
  $show_dev_columns = '0';

  $show_page_banner = '0'; // hacky situation in this case .... or not
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
       * PAGE BASICS 
       */
      // header positioning options
      // header layout options

      // show popups etc etcetce

      // $show_dev_columns = '0';

      /* PAGE BASICS - FOR CMS CUSTOMIZATION TOWARDS WP THEME */
      // $show_page_banner = '0'; // hacky situation in this case .... or not
      // $show_page_banner_map = '0';
      // $show_breadcrumbs = '1'; // ADD OPTIN FOR BREADCRUMBS INSIDE THE BANNER ........ AND ALSO THE TITLE, CHOOSE... OPTIONS AS COMBOS... 
      // $show_page_title = '1'; 
      // $show_page_excerpt = '0';
      // ad the content, asin wp_eoimoe ... 


      // todo add alyout godlen, as in wp_eimoe, for these secondar y text pages ..,,,,

      include('components/includes/page_basics.php'); // PAGE BASICS
    ?> 
    


    
<?php
// PAGE BACKGROUNDS START
include 'components/template/page/page_backgrounds_start.php';  
?>  
    
    
  <section class="background padding_3_4">
    <div class="frame wide___NOT">

      <div class="m_htmleditor">	
        <?php // include('components/atoms/sample_text_cookies.php'); ?> 
        <?php include('components/atoms/sample_text_htmleditor.php'); ?> <!-- TODO - IMRPOVE THIS !!!!!!!!!!! SEPARATE .... -->
      </div> <!-- /m_htmleditor -->

    </div> <!-- /frame --> 
  </section>    

  <section class="background padding_3_4">
    <div class="frame wide___NOT">

      <div class="m_htmleditor">	
        <?php // include('components/atoms/sample_text_cookies.php'); ?> 
        <?php include('components/atoms/sample_text_htmleditor.php'); ?> <!-- TODO - IMRPOVE THIS !!!!!!!!!!! SEPARATE .... -->
      </div> <!-- /m_htmleditor -->

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