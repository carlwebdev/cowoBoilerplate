<!DOCTYPE html>
<html lang="en"><!-- InstanceBegin template="/Templates/master_en.dwt.php" codeOutsideHTMLIsLocked="false" -->
<head>
<?php include('config/head/head_top.php'); ?>
<?php include('config/config.php'); ?>
<!-- InstanceBeginEditable name="config" -->
<?php 
$pagename = 'Layouts' // incc Layout - Grid - Masonry
?>
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


    <?php 
      /* 
       *
       * PAGE BASICS
       *
       */
      // DEV QA  
      $show_dev_columns = '0';
      /* PAGE BASICS - FOR CMS CUSTOMIZATION TOWARDS WP THEME */
      $show_page_banner = '0'; // hacky situation in this case .... or not
      $show_page_banner_map = '0';
      // AQUI FALTA EL VIDEO ...
      $show_breadcrumbs = '1'; 
      $show_page_title = '1'; 
      $show_page_excerpt = '0';
      // ad the content, asin wp_eoimoe ... here just as a bollc sexample with htmleditro modil eetc ...
      include('components/includes/page_basics.php'); // PAGE BASICS
    ?> 
    <?php // include('components/template/page/page_title.php'); ?>


    <!--
    TODO : add cowowindex for nav tdown to sections
    
    -->
    <!-- <li><a href="dev-layout-masonry.php">Masonry</a></li> -->
    <!-- <li><a href="dev-grid.php">Grid</a></li> -->

    <?php 
    /* 
     * START - LAYOUT SYSTEM - BACKGROUNDS (AND EVEN CSS GRID WHATEVER ... )
     */
    ?>    
    <div class="backgrounds">




      <section class="background padding_2">
        <div class="frame wide___NOT full">
          <?php include ('components/dev-masonry-structure.php'); ?>   
          <!-- DEJARLO COMO BASE, Y ASI SEPEARA POAR AOTROS USESO PRECATOICOS , BUT FIRST MAKE IT WORTK WITH BLOG STH ... -->
        </div> <!-- /frame --> 
      </section>




      <section class="background padding_4">
        <div class="frame wide___NOT">
        
        <?php /*?>BUILD BLOG PAGE, AND BLOG ARTICLE, AND ASLOC CATEGORY PAGE !!!! <?php */?>     
        <?php 
        /* 
        * GRID ABC - BUILD EXTERANLLY AS STANDALONE COMPONENT 
        */
        ?>
        <div class="grid_base">	
          <?php for ($i = 1; $i <= 12; $i++){ ?>

            <div class="m_item_base_01">	<?php /*?>TODO - RENAM E AS CARD - AND AL BLOG INTO BLOG FOLDER ....<?php */?>
              <?php /*?><div class="image" style="background-image: url('https://picsum.photos/id/237/200/300');"><?php */?>
              <div class="image" style="background-image: url('<?php echo $cb_img_random; ?>');">
                <?php /*?>image<?php */?>
              </div> <!-- /image -->
              <div class="info">	
                <div class="title">title</div> <!-- /title --> 
                <div class="text">text</div> <!-- /text --> 
                <div class="link">link</div> <!-- /link -->  
              </div> <!-- /info -->        
            </div> <!-- /m_item_base_01 -->

          <?php }  ?>
        </div> <!-- /grid_base -->      
            

        </div> <!-- /frame --> 
      </section>   





      <section class="background padding_2">
        <div class="frame wide___NOT">
          <?php // include('components/patterns/grid_blog.php'); ?>
          <?php include('components/patterns/grid_blog_masonry_js.php'); ?>
        </div> <!-- /frame --> 
      </section>




    <?php 
    /* 
     * END - LAYOUT SYSTEM - BACKGROUNDS
     */
    ?>  
    </div> <!-- /backgrounds -->





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