<!DOCTYPE html>
<html lang="en"><!-- InstanceBegin template="/Templates/master_en.dwt.php" codeOutsideHTMLIsLocked="false" -->
<head>
<?php include('config/head/head_top.php'); ?>
<?php include('config/config.php'); ?>
<!-- InstanceBeginEditable name="config" -->
<? $pagename = 'Style - Sample Page' ?>
<!-- InstanceEndEditable -->
<?php include('config/seo.php'); ?>
<?php include('config/head/head_bottom.php'); ?> 

<!-- InstanceBeginEditable name="head" -->
<!-- InstanceEndEditable -->

</head>
<body>
<?php 
/*  
 * PAGE START
 */
include ( 'components/template/page/page_start.php'); 
?> 
  <?php 
  /*
   * Header
   */
  include('components/template/header.php'); 
  ?> 
  <?php 
  /* Page Content Start 
   * PAGE CONTENT START - Sticky Footer Solved By FlexBox - start
   */
  include ('components/template/page/page_content_start.php'); 
  ?> 
    
	<!-- InstanceBeginEditable name="content" -->
	  
	  
    
    <?php 
      /* 
       *
       * PAGE BASICS 
       *
       */

      $show_dev_columns = '0'; // THIS SHOULD BE A GENRAL FILE, NOT PER PAGE .... HMMM OK
        // PLUS ADD THE CSS DEBUGGING THSINGS, ALT IMAGE % ETC , EASY
        
      /* PAGE BASICS - FOR CMS CUSTOMIZATION TOWARDS WP THEME */
      $show_page_banner = '1'; // hacky situation in this case .... or not
    
    
      $show_page_banner_map = '0'; // hacky situation in this case .... or not - / TODO - ADD - SOPTION FOR FULLPAGE .................................... 
    
      $show_breadcrumbs = '1'; // ADD OPTIN FOR BREADCRUMBS INSIDE THE BANNER ........ AND ALSO THE TITLE, CHOOSE... OPTIONS AS COMBOS... 
      $show_page_title = '1'; 
      $show_page_excerpt = '1';

      // ad the content, asin wp_eoimoe ... 

      include('components/includes/page_basics.php'); // PAGE BASICS
    ?> 
    
    
    
    
<?php 
  $dev_msg = 'dev_msg this is a dev_msg';
  include('components/dynamic/dev_msg.php'); 
?> 
    
    
    
    <?php 
    /*
     * cowoBoilerplate - Dashboard page
     */
    ?>    
    <section class="padding_4">
      <div class="frame wide___NOT">

        <div class="section_title">(sample) HTHML Editor - WYSIWYG Output</div>

        <div class="m_htmleditor"> <?php /*?>rename as s_htmleditor !!!!!!!!! <?php */?>
          <?php include('components/atoms/sample_text_htmleditor.php'); ?>  
        </div> <!-- /m_htmleditor --> 

      </div> <!-- /frame -->   
    </section>
		
		<!-- InstanceEndEditable -->
  <?php 
  /* Page Content End 
   * PAGE CONTENT END - Sticky Footer Solved By FlexBox - end
   */
  include ('components/template/page/page_content_end.php'); 
  ?> 	
  <?php 
  /*
   * Footer
   */
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
/*  
 * PAGE END
 */
include ('components/template/page/page_end.php'); 
?> 
<?php 
/*
 * Scripts
 */
include('config/scripts.php'); 
?>
<!-- InstanceBeginEditable name="scripts" -->
<!-- InstanceEndEditable -->
<?php // include('config/credits.php'); ?>  
</body>
<!-- InstanceEnd --></html>