<!DOCTYPE html>
<html lang="en">
<head>
<?php include('config/head/head_top.php'); ?>
<?php include('config/config.php'); ?>
<?php $pagename = $pagename_blog ?>
<?php // $pagename = $pagename_news ?>
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
     * PAGE BASICS - PAGE LAYOUT OPTIONS ETC
     */
    $show_dev_columns = '0';

    /* PAGE BASICS - FOR CMS CUSTOMIZATION TOWARDS WP THEME */
    $show_page_banner = '1'; // hacky situation in this case .... or not
    $show_page_banner_map = '0';
    
    $show_breadcrumbs = '1'; // ADD OPTIN FOR BREADCRUMBS INSIDE THE BANNER ........ AND ALSO THE TITLE, CHOOSE... OPTIONS AS COMBOS... 
    $show_page_title = '1'; 
    $show_page_excerpt = '0';
    $show_page_content = '0';
    // ad the content, asin wp_eoimoe ... 
    include('components/includes/page_basics.php'); // PAGE BASICS
  ?> 
 
    
    
<?php /*?>
BUILD BLOG PAGE, AND BLOG ARTICLE, AND ASLOC CATEGORY PAGE !!!! 
(AS IN MORE THAN JUSTA A LLIST OF POSTS, SI ACASO UN GRID DONDE LSO DE ARRIBA SON SPECIAL !!! NCIE !!!
<?php */?> 


<?php /*?> 
BUT TEST FRAME WIDE !!!! WITH JWUERY SCRIPT EHER FASTO    
<?php */?>


<?php /*?>s
BUILD BLOG PAGE, AND BLOG ARTICLE, AND ASLOC CATEGORY PAGE !!!! 
(AS IN MORE THAN JUSTA A LLIST OF POSTS, SI ACASO UN GRID DONDE LSO DE ARRIBA SON SPECIAL !!! NCIE !!!
<?php */?> 

    
    
 
<?php /*?>
<pre>    
TASKS:
- implement backgrounds system, to get some background going here
- create a blog layout thing, eith css grid, to make a more interesting system, and even with php, make the 1, and 2,3, to be a wholly different compoenent, insetad of alterin a mod   
</pre>
<?php */?>
    
    
    
<?php /*?>
1) TODO: IMLPEMET BACKGROUNDS, EASY COPY ÀSTE ANYWAYS 
<?php */?>



<?php
// PAGE BACKGROUNDS START
include 'components/template/page/page_backgrounds_start.php';  
?>  




  <section class="background padding_3_4___NOT padding_4">
      <div class="frame wide___NOT full___NOT">
        <?php 
        // GRID BLOG RECENT - THS ONE CAME FOMR THE HOMEPAGE 
        include('components/post_types/blog/section_blog_recent.php'); 
        ?>
      </div> 
    </section> 



    <section class="background light___not padding_3_4">
      <div class="frame wide___NOT full___NOT">
        <?php 
        // BLOG - RECENT - GRID
        include('components/post_types/blog/section_blog_recent.php'); 
        ?>   
      </div>
    </section> 





    <section class="background accent___NOT padding_4"> <!-- STODO - SUACVIZAR EL ACCENT - Y REVISAR LOS OCLORES !!! -->
      <div class="frame wide___NOT narrow">
        <?php 
        // SECTION - BLOG - FEATURED     - THS ONE CAME FOMR THE HOMEPAGE 
        include('components/sections/blog/blog_featured.php'); 
        ?>
      </div> 
    </section>


    <section class="background padding_3_4">
      <div class="frame wide___NOT narrow_TAMPOCO medium__WTF narrow">
        <?php 
        // BLOG - FEATURED 
        include('components/sections/blog/blog_featured.php'); 
        ?>
      </div>
    </section>
    
    

    


    <section class="background padding_3">
      <div class="frame wide ___NOT full___NOT">
        <?php 
        // SECTION - - - BLOG - ALL - GRID
        include('components/post_types/blog/section_blog_all.php'); 
        ?>
      </div>
    </section>




    <section class="background light___NOT padding_3_4">
      <div class="frame wide___NOT">
        <?php 
        // SECTION - GRID BLOG RECENT 
        include('components/post_types/blog/section_blog_recent.php'); 
        ?>
      </div> 
    </section> 


   
    <section class="background padding_3">
      <div class="frame wide___NOT">
        <?php 
        // SECTION - GRID BLOG ALL 
        include('components/post_types/blog/section_blog_all.php'); 
        ?>
      </div>
    </section>




  <?php
  // PAGE BACKGROUNDS END
  include 'components/template/page/page_backgrounds_end.php';  
  ?>     
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
// Scripts
include('config/scripts.php'); 
?>
<?php // include('config/credits.php'); ?>  
</body>
</html>