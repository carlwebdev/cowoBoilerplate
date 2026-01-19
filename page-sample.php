<!DOCTYPE html>
<html lang="en">
<head>
<?php include('config/head/head_top.php'); ?>
<?php include('config/config.php'); ?>
<?php $pagename = 'Sample Page' ?>
<?php 
/* PAGE BASICS - FOR CMS CUSTOMIZATION TOWARDS WP THEME */
$show_dev_columns = '0'; // THIS SHOULD BE A GENRAL FILE, NOT PER PAGE .... HMMM OK
// PLUS ADD THE CSS DEBUGGING THSINGS, ALT IMAGE % ETC , EASY
/* PAGE BASICS - FOR CMS CUSTOMIZATION TOWARDS WP THEME */
$show_page_banner = '1'; // hacky situation in this case .... or not
$show_page_banner_map = '0'; // hacky situation in this case .... or not - / TODO - ADD - SOPTION FOR FULLPAGE .................................... 
$show_breadcrumbs = '1'; // ADD OPTIN FOR BREADCRUMBS INSIDE THE BANNER ........ AND ALSO THE TITLE, CHOOSE... OPTIONS AS COMBOS... 
$show_page_title = '1'; 
$show_page_excerpt = '1';
// ad the content, asin wp_eoimoe ... 
?> 
<?php include('config/seo.php'); ?>
<?php include('config/head/head_bottom.php'); ?> 
</head>
<body>
<?php 
// PAGE TOP
include ('template_parts/page/page_top.php'); 
// PAGE BASICS 
include('components/includes/page_basics.php'); // PAGE BASICS
// PAGE BACKGROUNDS START
include 'components/template/page/page_backgrounds_start.php';  
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
    <section class="background padding_4">
      <div class="frame wide___NOT">

        <div class="section_title">(sample) HTHML Editor - WYSIWYG Output</div>

        <div class="m_htmleditor"> <?php /*?>rename as s_htmleditor !!!!!!!!! <?php */?>
          <?php include('components/atoms/sample_text_htmleditor.php'); ?>  
        </div> <!-- /m_htmleditor --> 

      </div> <!-- /frame -->   
    </section>
		


    <section class="background padding_4">
      <div class="frame wide___NOT">

        <div class="section_title">(sample) HTHML Editor - WYSIWYG Output</div>

        <div class="m_htmleditor"> <?php /*?>rename as s_htmleditor !!!!!!!!! <?php */?>
          <?php include('components/atoms/sample_text_htmleditor.php'); ?>  
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