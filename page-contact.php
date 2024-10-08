<!DOCTYPE html>
<html lang="en">
<head>
<?php include('config/head/head_top.php'); ?>
<?php include('config/config.php'); ?>
<? $pagename = $pagename_contact ?>
<?php include('config/seo.php'); ?>
<?php include('config/head/head_bottom.php'); ?> 
</head>
<body>
<?php 
//  PAGE START
include ( 'components/template/page/page_start.php'); 
?> 
  <?php 
  // HEADER
  include('components/template/header.php'); 
  ?> 
  <?php 
  // PAGE CONTENT START
  include ('components/template/page/page_content_start.php'); 
  ?> 
    

    <?php 
      /* 
       *
       * PAGE BASICS 
       *
       */
      // header positioning options
      // header layout options

      // show popups etc etcetce

      $show_dev_columns = '0';
      // $show_dev_columns = '1';

      /* PAGE BASICS - FOR CMS CUSTOMIZATION TOWARDS WP THEME */
      // $show_page_banner = '0'; // hacky situation in this case .... or not
      $show_page_banner = '1'; // hacky situation in this case .... or not
    
    
      // $show_page_banner_map = '1'; // hacky situation in this case .... or not - / TODO - ADD - SOPTION FOR FULLPAGE .................................... 
      $show_page_banner_map = '0'; // hacky situation in this case .... or not - / TODO - ADD - SOPTION FOR FULLPAGE .................................... 
    
    
      $show_breadcrumbs = '0'; // ADD OPTIN FOR BREADCRUMBS INSIDE THE BANNER ........ AND ALSO THE TITLE, CHOOSE... OPTIONS AS COMBOS... 
      // $show_breadcrumbs = '1'; // ADD OPTIN FOR BREADCRUMBS INSIDE THE BANNER ........ AND ALSO THE TITLE, CHOOSE... OPTIONS AS COMBOS... 
    
      $show_page_title = '0'; 
      // $show_page_title = '1'; 
    
      $show_page_excerpt = '0';
      // $show_page_excerpt = '1';

      // ad the content, asin wp_eoimoe ... 

      include('components/includes/page_basics.php'); // PAGE BASICS
    ?> 
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    

    
    
    
    
    
    
    
    <?php /*?>rename as s_htmleditor !!!!!!!!! <?php */?>
    
<?php /*?>    <div class="m_htmleditor"> 
      <?php include('components/atoms/sample_text_htmleditor.php'); ?>  
    </div> <!-- /m_htmleditor --> <?php */?>


<?php /*?><div class="m_htmleditor">	
  <h2>Contact Form</h2>
</div> <!-- /m_htmleditor --><?php */?>

    
<?php /*?><div class="m_htmleditor">	
  <h2>Contact Form</h2>
</div> <!-- /m_htmleditor -->    <?php */?>    
    
    
    
    
    
    
    
    
    <!--    
    TODO - BUIDL CONTACT PAGE MODULE, WITH HALF PAGE CONTRACT MAP, NICE, JUST DO IT !!!!!!!!!!!!!!
    -->    





    <section class="fullscreen___NOT padding_3">
      <div class="frame">

        <?php 
        /* 
         * SECTION CONTACT - GRID, WHATEVER
         */
        ?> 
        <?php include('components/sections/contact/grid_contact.php'); // contact, comms, basics perhaps ... ?>

      </div> <!-- /frame --> 
    </section> 





    <!--    
    THIS CAN BE USED IN THT HOMEPAGE FOR EXAMPLE....   INCLUDES: section_:contact_text & fomr, VS toitle & map, etc .... son componets, entre molecules & organsis really, rwally are organisms .... hmmm
    -->

    <!--
    page_abot/ histiry - y meter el timeline plugin ese !!! nice !!!!!!!!!!!!! 
    -->

    
    <section class="fullscreen light padding_4">
      <div class="frame">

        <?php 
        /* 
         * SECTION CONTACT - MAP
         */
        ?> 
        <?php include('components/sections/contact/section_contact_map.php'); ?> 

      </div> <!-- /frame --> 
    </section> 
    
    
  <?php 
  // PAGE CONTENT END
  include ('components/template/page/page_content_end.php'); 
  ?> 	
  <?php 
  // FOOTER  
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
// PAGE END
include ('components/template/page/page_end.php'); 
?> 
<?php 
// SCRIPTS
include('config/scripts.php'); 
?>
<?php // include('config/credits.php'); ?>  
</body>
</html>