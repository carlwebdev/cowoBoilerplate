<!DOCTYPE html>
<html lang="en">
<head>
<?php include('config/head/head_top.php'); ?>
<?php include('config/config.php'); ?>
<?php $pagename = 'StyleGuide';?>
<?php include('config/seo.php'); ?>
<?php include('config/head/head_bottom.php'); ?> 
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

      /* PAGE BASICS - FOR CMS CUSTOMIZATION TOWARDS WP THEME */
      $show_page_banner = '0'; // hacky situation in this case .... or not
      $show_page_banner_map = '0'; // hacky situation in this case .... or not
      $show_breadcrumbs = '0'; 
      $show_page_title = '1'; 
      $show_page_excerpt = '0';

      // ad the content, asin wp_eoimoe ... 


      include('components/includes/page_basics.php'); // PAGE BASICS
    ?> 
    

<?php /*?>  
    USAGE OF THSI DEV PAGE . 
    boileprplate etc - keep page with stylings etc, as a style guide for me & for cllient ie for eigil etc
    
    <?php */?>
    
    
<?php /*?>HERE NEEDS APCE, FOR Z-INDEZ, HEADER NO TENDAR ARPOSISITON DECALARADO, Y AHORA SE L HE PUESTO PAL BANNER SITUATION ...<?php */?>   
    
    

    
    <!--s
    
    S
    in this case, ommove to new page dev-components ..... 
    
    
    
    -->
    
  
    
  <?php /*?>    
    <pre>
    HTML - main, aside, article, section
    </pre>
    
    <?php */?>
    
    
    
   <!-- 
    build html glossary page, as well as for css, as w3schools... 
    -->
  
    
    
    
    
    
 
<?php 
/* 
  * START - ALTERNATING BACKGROUNDS
  */
?> 
<div class="backgrounds">   
    
		



<?php 
/*
 * STYLE GUIDE
 */
?>
<section class="background padding_4___NOT padding_2 test">  
	<div class="frame wide_NOT">
    
		<?php /*?><div class="section_title">Style Guide</div><?php */?>
    
		<?php include('components/cowo_styleguide.php'); ?>
    

    <hr> 
    <hr> 
    <hr> 


	</div> <!-- /frame -->     
</section>  
		
	
    
    






 
<?php 
    /*
     * cowoBoilerplate - Dashboard page
     */
    ?>    

    <section class="background padding">
      <div class="frame wide___NOT">

        <div class="m_htmleditor"> <?php /*?>rename as s_htmleditor !!!!!!!!! <?php */?>
          <?php include('components/atoms/sample_text_htmleditor.php'); ?>  
        </div> <!-- /m_htmleditor --> 

      </div> <!-- /frame -->   
    </section>








    <?php 
    /*
     * HTHML Editor - WYSIWYG Output
     */
    ?>
    <section class="background padding_3_4 accent__NOT">  
      <div class="frame wide_NOT">

        <?php 
          $section_title = 'HTHML Editor - WYSIWYG Output';
          include('components/dynamic/section_title.php'); 
        ?>    

        <?php include('components/cowo_htmleditor.php'); ?>
      </div> <!-- /frame -->     
    </section>  






    
    
    
<?php 
/*
 * TABLES
 */
?>
<section class="background test___KILL padding_2">  
  <div class="frame">        
    <?php 
      $section_title = 'Table(s)';
      include('components/dynamic/section_title.php'); 
    ?>    
    <?php
    // TODO - table through css grid spans todos seguidos trick de css tricks
    include('components/cowo_tables.php'); 
    ?> 
  </div>    
</section> 


     
<?php 
/*
 * FORMS
 */
?>
<section class="background padding_2 test_not"> 
	<div class="frame">        
    <?php 
      $section_title = 'Forms';
      include('components/dynamic/section_title.php'); 
    ?>        
    <?php include('components/cowo_forms.php'); ?> 
	</div> <!-- /frame -->     
</section>    
    
    
    
    
    
    
    

    
    
    
    
<?php /*?>    in page banner, add osicla icons share in the lower right corner nice !!!!!!!!!!!!!!!!! in whiet icons nice soaicl:banner !!!<?php */?>
    
    
    
    
    
<!-- 
REPO COMNETNS IOR STH !!!! 
no need for this one anymore -.... --->
<?php // include('components/sections/section-grid-doginnewyork.php'); ?>

    



    
<?php /*?>    
HAVE THSI AS PAGE IN ON ITSELF.. AS A GENERAL STHIN IN ALL PROJETS, KEEP A ?styleguide" page where to check how everything works <?php */?>


<?php /*?>

y al final poner tb los cowo-things aqui, todo de golpe pim pam, y un index arriba del todo bien puesto...

PERO USANDO EL NEW COWO INDEX CHIPS STYLE MENU, BUT FIR THE COLORS !!!, BLACK ON GREY ETC SEE WAYS. CHGECK MD CHIPS DESGN 
<?php */?>        

		
		
		
		
    
       
<?php 
/*
 * cowoBoilerplate - Dashboard page
 */
?>    
    
<section class="background padding">
  <div class="frame wide___NOT">
  
    <div class="m_htmleditor"> <?php /*?>rename as s_htmleditor !!!!!!!!! <?php */?>
      <?php include('components/atoms/sample_text_tags.php'); ?>  
    </div> <!-- /m_htmleditor --> 
  
	</div> <!-- /frame -->   
</section> 

    
   
    <!--
add summary / detaiul etc etece !!!!!
-->    
   
    
    
    
    
 
<?php 
/*
 * BUTTONS - meterlos dentro - - 
 */
?> 
<?php /*?><?php */?> 
<section class="background test___NOT padding_2S">  
	<div class="frame">
		<div class="section_title">Buttons</div>
		<?php include('components/cowo_buttons.php'); ?> <!--div for button group, or whatver-->
	</div> <!-- /frame -->     
</section>  
	  

  

 		
		
      
    
    

    
<?php /*?><section class="padding">
  <div class="frame wide___NOT">

    
  <!-- -->
    
    add components library, as atoms, molecules, organisms etc partrens, grids etc etecetec
    AND WITH AN INDEX AT THE TOP .... AND STICKY HEADER & SCRLL ETC ETCEETCE

    
   <br>
<br>

    
PAGE, ADD INDEX, Y METER AHI COSAS .... LOGOS .... FONTS, COLORS, ICONS!! SHOW EM ICONS !! AND THEN TEXT STYTLES, FOMRS, ETC ETEC TC& TEN MY UI SCIPTS, AND THEN PLUGINS ETC ETCEETC 
    
    
    
    
    <br>
<br>
<br>
SS
 
    
LOGOS
    
    
    <br>
<br>
<br>
<br>
FONT<br>
<br>
<br>
COLORS<br>
<br>
<br>
<br>
TEXT FORMATS DIVERSOS <br>
<br>
<br>

    UI<br>
<br>
PLUGINS<br>
<br>
EC <br>
<br>
<br>
S
    
    
    
    
processthes stylee gudie thingees ciaus its really the cul.de.sac of ths tempalte, just cleaning uo & organizing teh just of it !!!
    
 <br>
<br>

    
/ /and then also show the componets, whic are bigger thinsg, almso related to the website itself, but just as compenet blosk to use throufghout the site ....
    
    
COOR; PRINT HEX VALUE THROUGH PSEUDO ELEEMNT AFTER, UNDERNEATH, WHITE & BOLD, IF BG IS COLORED .. EKSLE NOT, CALRO .... 
    
    <br>
<br>
<br>
S
    
    
dsocial media icons, copy alfo gde ethe contact page, y cudarlo desde ahi..
    
    social - also add sharere buttonscon links faciles, ya lo tengo n otros sitios .. !!!
    
    
    
ICONS & SPOCIAL MEDIA ICONS, & ACTIN ICONS, AND WHETEBER ELSE, ALL FORM MATERIAL DESIN ICONS (FONTS VS SVG ...)
    IN ANY CASE, CREAT ETEH PHP BVARIABLES TO CALL THE ICONS MDI_SHARE, ETC mdi_share // MATERIUAL DESIGN ICONS // COPY THSI TEXT DOIRECTLY INTO THE CONFIG FILE, SHOULD BE EASY !!!
    
    
    
    // 1 - DO YTHI HERE AT THE TOP, STARTING FOMR THE END OF THE SENTENCE, GROUP AL ICOSN INTO THERE, SEARCH, MENU ETC ... 
    
    AND THGUS ALSO SPRINKE ICONS THROUGHOUT THE WEBSITE, TO MAKE STH NICE LOOKING, 
    EVE INCONS INTO THE SCRIPTS & STUFF, MAKING IT AL COHERENT A& ROBUST & NICE & KISSS

    
	</div> <!-- /frame -->   
</section>

    
    <?php */?>

    
    

    
    
   
    

    
    
    
    
    
  
		
<?php /*?>AKA COMPNETENS !!! LIE THE HEADER, O LO QUE SEA !!!<?php */?>
    

    
    
    
    
    
<?php 
/*
 * SOCIAL ICONS - mnove this bugger to the styleguide page 
 */
?>
<section class="background padding_4 test">  
	<div class="frame">        
    <div class="section_title">Social Media Icons</div>

      <div class="m_social">
      	<?php include('components/atoms/list-social.php'); ?>  
      </div> <!-- / m_social -->
  
	</div> <!-- /frame -->     
</section> 


       
    
    
    
    
    

    
    
    

    


    
    
		

		

<?php 
/* 
  * END - ALTERNATING BACKGROUNDS
  */
?> 
</div> <!-- /backgrounds -->
    
    
    
    
    

    
    
    
    
    
    
    

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