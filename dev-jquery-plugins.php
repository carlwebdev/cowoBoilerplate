<!DOCTYPE html>
<html lang="en"><!-- InstanceBegin template="/Templates/master_en.dwt.php" codeOutsideHTMLIsLocked="false" -->
<head>
<?php include('config/head/head_top.php'); ?>
<?php include('config/config.php'); ?>
<!-- InstanceBeginEditable name="config" -->
<?php 
$pagename = 'jQuery Plugins' // Plugins
?>
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
      // DEV QA  
      $show_dev_columns = '0';
      /* PAGE BASICS - FOR CMS CUSTOMIZATION TOWARDS WP THEME */
      $show_page_banner = '1'; // hacky situation in this case .... or not
      $show_page_banner_map = '0';
      // AQUI FALTA EL VIDEO ...
      $show_breadcrumbs = '0'; 
      $show_page_title = '0'; 
      $show_page_excerpt = '0';
      // ad the content, asin wp_eoimoe ... here just as a bollc sexample with htmleditro modil eetc ...
      include('components/includes/page_basics.php'); // PAGE BASICS
    ?> 
    
    







<?php /*?>
- AND MAKE THSI WHOLE PAGE WITH PAGEPILE OR THE OTHER VERSIONS, SO THAT EACH DEMO IS CENTERD IN EACH FULLPAGE..
- i can now do this with scrol behaviour, and do it smooth, and thereshold, and qwithh altenating bg colro sustem as well !!!
<?php */?>
    
<?php 
/*
 * COWO-INDEX
 */
?> 
<section class="padding_4 test">  
	<div class="frame">         
  	<div class="section_title">Index</div>


<pre>
TODO
Distinguish between funcitnlity irtems, and media items a secas etc

site goals - turn this into a usabel boilerplate, that the concpet !! for spaghetti pho suiets!! 

</pre>
    
    <div class="cowo-index">
      <ul>
        <li><a href="dev-jquery-plugins.php#cowo-lightbox">Lightbox<?php /*?>(lightboxme)<?php */?></a></li>
        <li><a href="dev-jquery-plugins.php#cowo-fitvids">Fitvids (old school - obsolete, as we have aspect ratio & object fit)</a></li>
        <li><a href="dev-jquery-plugins.php#cowo-slider">Slick - Slider</a></li>
        <li><a href="dev-jquery-plugins.php#cowo-carrousel">Slick - Carrousel</a></li>
      </ul> 
    </div>

    
<?php /*?>   also fix the counters !!!!
   and check fullish page behavior cross-broeswer...<?php */?>
    
    
	</div> <!-- /frame -->     
</section>    
  
  
    
    
    
    
    
<?php 
/*
 * Responsive jQuery Plugins
 */
?>
    

    
    
    
<?php 
/*
 * LIGHTBOX - RWD - LIGHTBOXME
 */
?>
<section class="padding_4 test" id="cowo-lightbox"> 
	<div class="frame">  
    
    <div class="section_title">Lightbox<!--(me)--></div>
    <?php include('components/cowo_lightboxme.php'); ?> 
    
	</div> <!-- /frame -->     
</section>  
    
<?php /*?>
lighbox content, apply card, generically, and make mor epretty, and add modules in there, like link poutisde, and thingees...    
<?php */?>

    
    
    

<?php 
/*
 * RESPONSIVE VIDEO
 */
?>
<section class="padding_4 test" id="cowo-fitvids">  
	<div class="frame">
    
		<div class="section_title">FitVids.js - Responsive Video Plugin</div>   <!-- VIDEO , OJO, ADD ASPECT RATIO & OBJECT FIR THERE TOO IF POSSIBL E!!!!!!!!!!! -->
    
    <div class="card_base">
      <?php include('components/cowo_fitvids.php'); ?>
    </div> <!-- /frame -->   
    
	</div> <!-- /frame -->     
</section>  

    



<?php /*?>
// POPUPS, 
// ALERTS WITH ALERTIFY ETC OR MORE MODERN SOLUTION...

<?php */?>



  
    
<?php 
/*
 * SLICK - SLIDER
 */
?>   
<section class="padding_4 test" id="cowo-slider">   
	<div class="frame"> 
    
	  <div class="section_title">Slick - Slider/Slideshow<?php /*?> - meter e slick slider por ejemplo, para empezar<?php */?></div>
    <?php include('components/molecules/slider.php'); ?> <!--card slider o algo definri el aspect ratio dle slider, no?? o que ? hmm -->
    
	</div> <!-- /frame -->     
</section>  
    
  
  
    
    
<?php 
/*
 * SLICK - CARROUSEL
 */
?>   
<section class="padding_4 test" id="cowo-carrousel">   
	<div class="frame"> 
  
		<div class="section_title">Slick - Carrousel<?php /*?> - idem<?php */?></div>
    <?php include('components/molecules/carrousel.php'); ?>

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