<!DOCTYPE html>
<html lang="en"><!-- InstanceBegin template="/Templates/master_en.dwt.php" codeOutsideHTMLIsLocked="false" -->
<head>
<?php include('config/head/head_top.php'); ?>
<?php include('config/config.php'); ?>
<!-- InstanceBeginEditable name="config" -->
<!-- InstanceEndEditable -->
<?php include('config/seo.php'); ?>
<?php include('config/head/head_bottom.php'); ?> 

<!-- InstanceBeginEditable name="head" -->
  
<?php
// $pagename = $pagename_index;
$pagename = 'This is a template';
// $pagename = 'This is a not just a template';
?>

<?php /*?>(copied form cjnet) - I HAVE DEVELOPED 2 DIFRERENT WAYS TO MANEGE THE INCLUDES OF RELATIVE PATHS INSIEDE THE FILES.<?php */?>  
  
<?php /*?>LESS VERBOSE SYSTEM - either empty "", or "../" <?php */?>
<?php // $level = "root" ?> <?php /*?>MORE VERBOSE SYSTEM<?php */?>  
<?php /*?><!-- 
havcer una functrion, con esto por default, excepto en deisgnated pages, ergoprojec, demo ,tool , etc items
--><?php */?>
  
<?php // $path2root = ""; ?> <?php /*?>THIS SI THE SECOND SYSTEM, WHICH IS CLEANER, IAND IT' SWHAT I WIL BE USING <?php */?>
<?php // $level = "root" ?> <?php /*?>THIS WAS THE OLD SOLUTION., WHICH IS MORE VERBOSE THAN THE NEW ONE <?php */?>
  
<?php /* if($level=='root') { ?>
  <?php include('xxx/yyy/zzz.php'); ?> 
<?php } elseif($level=='sub') { ?>
  <?php include('../xxx/yyy/zzz.php'); ?>
<?php } */ ?> 
  
<?php // include $path2root."js/components/EXAMPLE.php"; ?>   
  
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
  /* 
   * PAGE CONTENT START - Sticky Footer Solved By FlexBox - start
   */
  include ('components/template/page/page_content_start.php'); 
  ?> 
	<!-- InstanceBeginEditable name="content" -->
		

<?php /*?>    
<section>
	<div class="frame">

		section<br>
    <br>
    meter un grid de ie blog posts..

	</div> <!-- /frame -->  
</section>
    
  MODU9ELE FOR STAFF
  WITH CIRCULAR IMAGES ETC 
  
  <br>
<br>
  
  MODULE FOR TESTIONIALS  CAROUSEL ETC  
    
  <?php */?>
    
  
<?php /*?>
DESIGN - TYPICAL LAYOUT OF A HOMEPAGE:   - - - aka INDEX FOR THE HOMEPAGE

fuLlpage module WITH cta etc <br>
<br>
selection of services, products, news, <br>
<br>
contact form, etc

add blog, news, team, testimonials, staff etc offices !!!
<?php */?>
    
    
    

    
    
  
    
    
    
<?php 
  /* 
   *
   * PAGE BASICS 
   *
   */  
  $show_dev_columns = '0'; // ADD TO DEV BUTOTN SA !! - // NICE DEV FEATURE !!!!!!!!!!!!!!!!!!!!!!!!!!!! - 1) fix this, and 2) add this to css dev mode ... 

  /* PAGE BASICS - FOR CMS CUSTOMIZATION TOWARDS WP THEME */
  $show_page_banner = '1'; // hacky situation in this case .... or not
  $show_page_banner_map = '0'; // ADD OTPION TO ADD THIS IN THE FOOTER !!!!!!!!!! ABOVE THE OFOOTER, OSE A... NICE !! AS WELL ANS SIGN UP TO NEWSLETTE & PTHER CONATT DETAISL & ETC

  $show_breadcrumbs = '0'; // not shwo bt state for example: 0, 1, 2 3 etc 1 above, 2 below, 0 nne ,etc
  $show_page_title = '0'; // $state_page_title:  0 & 1
  $show_page_excerpt = '0'; 
  // ad the content, asin wp_eoimoe ... 
  include('components/includes/page_basics.php'); // PAGE BASICS
?> 
   
    

<?php /*?> test dev partial, debufgging, etc  bno, not edebugigng, as its not the same as dev-temp <?php */?>
<?php /*?>
<div class="todo">
  KILL THIS, ITS NOW REDUNDANT... S & D !!!!!!! - now it's acytually funcional again ! :-)
</div> <!-- /todo -->
<?php */?>
    
    
    
    
<?php /*?>

DESIGN - TYPICAL LAYOUT OF A HOMEPAGE
fuklpage module<br>
<br>
selection of services, products, news, <br>
<br>
contact form, etc<br>


add blog, news, team, testimonials, staff etc offices !!!

  
<?php */?>
    
    
    
    
    
  
    
    
<?php /*?><section class="fullHeightTest">
  <div class="frame">
  	fullHeightTest
  </div> <!-- /frame --> 
</section><?php */?>



<?php /*?>MODULE - Fullpage module<?php */?>
<?php /*?><div class="m_fullPage" style="background-image: url('https://picsum.photos/id/237/200/300');">
  <div class="frame">
    <div class="text">
      Centered Text
    </div> <!-- /text --> 
  </div> <!-- /frame --> 
</div><?php */?>


    
 
    

    
<?php 
  // $section_title = 'List';
  // include('components/dynamic/section_title.php'); 
?>  
    
    
<section class="dev_hide padding_4 accent___NOT light___NOT accent___NOT dark__NOT_EXISTS accent">
  <div class="frame">
    
    <?php include('components/molecules/slider.php'); ?> <?php /*?>VS CAROUSEL ..... DEV_SLKDER & DEV_CAROUSEL, OR DEMO_SLIDER & DEMO_CAROUSEL, AND DEMO_TABS ETC ETEC E YES, MUCH BETTER WITH DEMO_ <?php */?>
    
  </div> <!-- /frame -->   
</section>  
    


    
  
    
    
    
    
    

    
<?php 
/* 
 * START - LAYOUT SYSTEM - BACKGROUNDS (AND EVEN CSS GRID WHATEVER ... )
 */
?>    
<div class="backgrounds">



<section class="background padding">
      <div class="frame wide___NOT">
        <?php 
          $section_title = 'TODO';
          include('components/dynamic/section_title.php'); 
        ?> 



<pre>
THINGS TO DO:

- Structural aspects
  - turn site from dwt template to plain old html/php, with js templates, else php includes, etc... 
    - Step 1 - recue the number of pages, to minimize the chasos - lest not forget that thi si boieplat eto be actually used.




</pre>
      </div> <!-- /frame --> 
    </section>







  <section class="background fullscreen___NOT vcenter padding_4___NOT padding_8___NOT padding_3_4       accent___NOT light___NOT">
    <div class="frame">

      <div class="section_title center">What we're about !</div> 

      <?php 
        $section_title = ''; //s add positioning, alignment, align: pero aaaa... 
        include('components/dynamic/section_title.php'); // FIOLDER NAMING QUE IMPLIQUE QUE SON VARIABLES ANBLE S.. DYNAMIC 
      ?> 

      <?php /*?>    
      includes
      grid :featires
      & then extras
      <?php */?>

      <!-- remove vpadding fomr class, and move onto the section ...  -->
      <?php include('components/molecules/grid_features_home.php'); ?>

      <?php /*?><hr><?php */?>

    </div> <!-- /frame -->   
  </section> 

  
  
  
  
  
  
  
  
  

  <?php 
  /* 
   * SECTION - GRID PRICING (ALL)
   */
  include('components/sections/pricing/section_pricing.php'); 
  ?>


  
  
  
  
  
  
  
  
    <?php 
    /* 
     * SECTION - GRID BLOG RECENT 
     */
    ?>  
    <section class="background padding_3_4___BOT padding_4">
      <div class="frame wide___NOT full___NOT">
        <?php include('components/post_types/blog/section_blog_recent.php'); ?>
      </div> 
    </section> 


  
    <?php 
    /* 
     * SECTION - BLOG - FEATURED 
     */
    ?>  
    <section class="accent padding_4"> <!-- STODO - SUACVIZAR EL ACCENT - Y REVISAR LOS OCLORES !!! -->
      <div class="frame wide___NOT narrow">
        <?php include('components/sections/blog/blog_featured.php'); ?>
      </div> 
    </section>

    

  
  
  
  
  
    <?php /*?>  
    BUILD CTA MOCDULE, AS HERO HOME KINDA TING, BUT REYUISABEL ....
    
    2 COLS, BG OPACITYSTH HAPEING, TOTLE, ETXT,M CTA BUTTON, ONLY ONE, TO THE RIGHT BOTTOM, AND CLEAR, TH BIG BUTTON PILL TYP ...
    
    THIS IS A NICE BUILDING THING, NOT JUST ORG THINGEES,,,
    <?php */?>
  
  
  
  
    <?php 
    /* 
     * GRID CONTACT - AS IN MODULE, CONTACT ......................
     */
    ?>   
    <section class="background fullscreen vcenter padding_4 accent___NOT light___NOT">    
      <div class="frame"> 
        <?php include('components/sections/contact/grid_contact.php'); // AS IN MODULE, CONTACT ...................... ?>   
      </div>   
    </section> 

  
  
  
    
  
    <?php 
    /* 
     * SECTION CONTACT - MAP - THIS COULD BE A MODULE, LIKE CNTACT,WITH THE MAP TO THE SIDE, AND OTHER CONTACT INFOS SUCH AS ADRES SAEC 
     */
    ?> 
    <?php /*?><?php */?>
    <section class="background fullscreen___NOT vcenter___NOT padding_4___NOT accent___NOT light___NOT padding_3_4">
      <div class="frame">
        <?php include('components/sections/contact/section_contact_map.php'); ?> 
      </div> <!-- /frame --> 
    </section> 
    
  
  
  
  
  
  
  

  
    <?php include('components/template/page/page_banner_map.php'); // here shoudl be page banner, sino standalone module, to not confuse with actualpage banners !?>
    

  

<?php 
/* 
 * END - LAYOUT SYSTEM - BACKGROUNDS
 */
?>  
</div> <!-- /backgrounds -->
    
    

    
    
    <!--
    BLOG, ADD GROID-LIST VIEW ETC !!!!!!!!!!!!!!
    -->
    
    
    <!--
    
    ALSO BUOLD SERAHC RESUYLKTS ...  AS GOOGLE-ISH AS POSSIBLE ....
    
    -->
    
    <!--
    1 NAV - PAGES DEV, MOVE INTO DEV, Y LUEGO YA LIMPARKLO SI ACASO TODO ...
    -->
    
    
    
<?php /*?>		
<section class="padding accent">
</section>
<?php */?>  
    
    
    
    
    
    
    
    
    
    

    
    
    
    
    
    

    

    
    
    
<!-- partial - layout_page_basics ... -->    

    
    
  
    
    
    
<!--
map box - find us, also add the adress details, contat detas, specifci for address, ... stanfalone fomr email & tel ...
-->

    
    
    
    


    

<?php /*?><div class="todo">
  KILL THIS, ITS NOW REDUNDANT... S & D !!!!!!!
</div> <!-- /todo -->
<section class="fullHeightTest">
  <div class="frame">
  	fullHeightTest
  </div> <!-- /frame --> 
</section><?php */?>



<?php /*?>MODULE - Fullpage module<?php */?>
    
    
    
    
<?php /*?><div class="m_fullPage" style="background-image: url('https://picsum.photos/id/237/1920/1080');">
  <div class="frame">
    <div class="text">
      Centered Text<?php */?><?php /*?><br>
			FitText.js !!<?php */?>
<?php /*?>    </div> <!-- /text --> 
  </div> <!-- /frame --> 
</div>
<?php */?>


    
    
    
    
    
    
    
    
    

    
    
    
    
    
    
    
    


    
    
    
    
    

    
    
    
    
    

    
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