<!DOCTYPE html>
<html lang="en"><!-- InstanceBegin template="/Templates/master_en.dwt.php" codeOutsideHTMLIsLocked="false" -->
<head>
<?php include('config/head/head_top.php'); ?>
<?php include('config/config.php'); ?>
<!-- InstanceBeginEditable name="config" -->
<?php $pagename = 'Dev - Components' ?>
<!-- InstanceEndEditable -->
<?php include('config/seo.php'); ?>
<?php include('config/head/head_bottom.php'); ?> 

<!-- InstanceBeginEditable name="head" -->
<!-- InstanceEndEditable -->

</head>
<body>
<?php 
// PAGE TOP
include ('template_parts/page/page_top.php'); 
?>  

    <?php 
      /* 
       *
       * PAGE BASICS 
       *
       */
      $show_dev_columns = '0'; // THIS SHOULD BE A GENRAL FILE, NOT PER PAGE .... HMMM OK
      // PLUS ADD THE CSS DEBUGGING THSINGS, ALT IMAGE % ETC , EASY  
      /* PAGE BASICS - FOR CMS CUSTOMIZATION TOWARDS WP THEME */
      $show_page_banner = '0'; // hacky situation in this case .... or not
      $show_page_banner_map = '0'; // hacky situation in this case .... or not - / TODO - ADD - SOPTION FOR FULLPAGE .................................... 
      $show_breadcrumbs = '0'; // ADD OPTIN FOR BREADCRUMBS INSIDE THE BANNER ........ AND ALSO THE TITLE, CHOOSE... OPTIONS AS COMBOS... 
      $show_page_title = '1'; 
      $show_page_excerpt = '0';
      // ad the content, asin wp_eoimoe ... 
      include('components/includes/page_basics.php'); // PAGE BASICS
    ?> 
    


    
    <?php 
    /* 
     * START - LAYOUT SYSTEM - BACKGROUNDS (AND EVEN CSS GRID WHATEVER ... )
     */
    ?>    
    <!-- <div class="backgrounds"> -->
      

  <?php
// PAGE BACKGROUNDS START
include 'components/template/page/page_backgrounds_start.php';  
?>  


<?php 
/*
 * INDEX
 */
?> 
<section class="background padding_2 pb4___NOT test___NOT accent___NOT"> 
	<div class="frame">       
    
    <?php 
      $section_title = 'Index';
      include('components/dynamic/section_title.php'); // FIOLDER NAMING QUE IMPLIQUE QUE SON VARIABLES ANBLE S.. DYNAMIC 
    ?> 
    <?php /*?> - build it as flex wrap, could be cool<?php */?>

    
    

<!--
    <pre>
TODO
Distinguish between funcitnlity irtems, and media items a secas etc

site goals - turn this into a usabel boilerplate, that the concpet !! for spaghetti pho suiets!! 

</pre>
-->


<?php /*?>
- AND MAKE THSI WHOLE PAGE WITH PAGEPILE OR THE OTHER VERSIONS, SO THAT EACH DEMO IS CENTERD IN EACH FULLPAGE..
- i can now do this with scrol behaviour, and do it smooth, and thereshold, and qwithh altenating bg colro sustem as well !!!
<?php */?>



  <div class="cowo-index">   <!-- pattern_index.... -->
    <ul>

        <li><a href="dev-components.php#social-icons">Social Media<!--  - Icons --></a></li>
        <!-- <li><a href="dev-components.php#social-share">Social Media - Share</a></li> -->
        <li><a href="dev-components.php#video">Video</a></li>
        <li><a href="dev-components.php#audio">Audio</a></li>

        <!-- <li><a href="dev-components.php#cowo-carrousel">Slick - Carrousel</a></li> -->

        <li><a href="dev-components.php#grid-featured">Grid Featured <!-- (must rename this concept) --></a></li>
      
        <li><a href="dev-components.php#contact_map">Contact Map</a></li>
        
    </ul> 
  </div>
   

	</div> <!-- /frame -->     
</section>    
  
  

    
    
<section id="social-icons" class="background padding_4 test">  
	<div class="frame narrow">  
    
    <div class="section_title">Social Media Icons</div>

      <div class="m_social">
      	<?php 
        // SOCIAL ICONS 
        // - mnove this bugger to the styleguide page 
        include('components/atoms/list-social.php'); 
        ?>  
      </div> <!-- / m_social -->
  
	</div> <!-- /frame -->     
</section> 





<!-- THESE ARE JUST HTML TAGS, SO THEY SHOULD GO TO HTM GLOSAY PAGE ETC ..... -->    

<section id="video" class="background fullscreen vcenter__NOT_ENOUGH padding_2 test">  
	<div class="frame narrow">

		<div class="section_title">video</div>
    <div class="card_base">
      <?php 
      // HTML5 - VIDEO
      include('components/cowo_video.php'); 
      ?>
    </div> <!-- /card_base -->  
    
	</div> <!-- /frame -->     
</section>  


<section id="audio" class="background fullscreen vcenter__NOT_ENOUGH padding_2 test">
	<div class="frame narrow">

		<div class="section_title">audio</div>
    <div class="card_base">
      <?php 
      // HTML5 - AUDIO
      include('components/cowo_audio.php'); 
      ?>
    </div> <!-- /card_base --> 
    
	</div> <!-- /frame -->     
</section>  





<?php 
// GRID FEATURES
?> 
<section id="grid-featured" class="padding_4 test___NOTS">  
	<div class="frame wide_NOT">
		<div class="section_title">Grid Features</div>
		<?php include('components/molecules/grid_features.php'); ?>
	</div>     
</section> 









<?php /*?> 
<section>
	<div class="frame">

just have sections that pont to pages that contina types of content <br>
<br>
		NOW ALSO THINKING FOR TH ESITEMAP .... EACH BOX CAN CONTAIN LIST OF THINGS IT EBNCOMPASSES.. 
<br>	  

		
		
    <?php // include('components/cowo_heromenu.php'); ?>

	</div> <!-- /frame --> 
</section>
<?php */?>







  <section id="contact_map" class="fullscreen light padding_4">
      <div class="frame">

        <?php 
        // SECTION CONTACT - MAP
        include('components/sections/contact/section_contact_map.php'); 
        ?> 

      </div> <!-- /frame --> 
    </section> 









 

    <?php 
    //  GRID FEATURES
    ?>   
    <section class="background padding_2 test___NOTS">  
      <div class="frame wide_NOT">
        
        <?php 
          $section_title = 'Grid Features';
          include('components/dynamic/section_title.php'); // FIOLDER NAMING QUE IMPLIQUE QUE SON VARIABLES ANBLE S.. DYNAMIC 
        ?> 
        
        <?php include('components/molecules/grid_features.php'); ?>
        
      </div> <!-- /frame -->     
    </section>   





      <?php 
      /* 
       * SECTION - GRID PRICING (ALL)
       */
      // include('components/sections/pricing/section_pricing.php'); ?>

    
    
    



      <section class="background fullscreen padding_3_4">
        <div class="frame wide___NOT">
          <?php 
          // SECTION - GRID PRICING (ALL)
          include('components/sections/pricing/section_pricing.php'); 
          ?>
          <!--
          move to folder section pricing , and path, & card, & etc 

          also the sass parial, in section folders ...
          -->
        </div>
      </section>  




    <?php 
    // SECTION - GRID PRICING (ALL)
    include('components/sections/pricing/section_pricing.php'); 
    ?>
    
    




    
    
    
    
    


    <section class="background padding test___NOT">   
      <div class="frame"> 

        <?php 
          $section_title = '"Latest Products Catorze!"';
          include('components/dynamic/section_title.php'); // FIOLDER NAMING QUE IMPLIQUE QUE SON VARIABLES ANBLE S.. DYNAMIC 
        ?> 
        
        <?php include('components/molecules/carrousel.php'); ?>

      </div> <!-- /frame -->     
    </section>  


    
    
  
  
    

    
    
    
    
    
    
    
    

    <section class="background padding">
      <div class="frame wide___NOT">


        <?php 
          $section_title = '"Products Grid"';
          include('components/dynamic/section_title.php'); // FIOLDER NAMING QUE IMPLIQUE QUE SON VARIABLES ANBLE S.. DYNAMIC 
        ?> 
        
        <?php // include('components/patterns/grid_products.php'); ?> <!-- just need to have a price tag on it, for it to really be a comeple module - and blockify it into shop or products or single-prioducts etc -->
        <?php 
        include('components/sections/products/grid_products.php'); 
        ?>

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