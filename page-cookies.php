<!DOCTYPE html>
<html lang="en">
<head>
<?php include('config/head/head_top.php'); ?>
<?php include('config/config.php'); ?>
<?php $pagename = $pagename_cookies ?>
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
    
    <?php // include('components/pages/cookies_view.php'); // ?>
    
    <?php 
      /* 
       * SITE BASICS 
       */
      // header positioning options
      // header layout options

      /* 
       * PAGE BASICS 
       */
      // show popups etc etcetce

      // $show_dev_columns = '0';

      /* PAGE BASICS - FOR CMS CUSTOMIZATION TOWARDS WP THEME */
      // $show_page_banner = '0'; // hacky situation in this case .... or not
      // $show_page_banner_map = '0';
      // $show_breadcrumbs = '0'; // ADD OPTIN FOR BREADCRUMBS INSIDE THE BANNER ........ AND ALSO THE TITLE, CHOOSE... OPTIONS AS COMBOS... 
      // $show_page_title = '0'; 
      // $show_page_excerpt = '0';

      // add the content, asin wp_eoimoe ... 

      include('components/includes/page_basics.php'); // PAGE BASICS
    ?> 
    
    <section class="padding_4">
      <div class="frame wide___NOT">

        <div class="m_htmleditor">	<!-- TODO - CERATE  CAS FOR LEGAL... SMALLER ETC -->
          <?php include('components/atoms/sample_text_cookies.php'); ?> 
        </div> <!-- /m_htmleditor -->

      </div> <!-- /frame --> 
    </section>    

<?php
// PAGE BACKGROUNDS END
// include 'components/template/page/page_backgrounds_end.php';  
// PAGE BOTTOM
include ('template_parts/page/page_bottom.php'); 
?>  
</body>
</html>