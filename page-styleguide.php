<!DOCTYPE html>
<html lang="en">
<head>
<?php include('config/head/head_top.php'); ?>
<?php include('config/config.php'); ?>
<?php $pagename = 'StyleGuide';?>
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
?> 
<?php include('config/seo.php'); ?>
<?php include('config/head/head_bottom.php'); ?> 
</head>
<body>
<?php 
// PAGE TOP
include ('template_parts/page/page_top.php'); 
//  PAGE BASICS
include('components/includes/page_basics.php'); // PAGE BASICS
?> 

<?php /*?>  
    USAGE OF THSI DEV PAGE . 
    boileprplate etc - keep page with stylings etc, as a style guide for me & for cllient ie for eigil etc
    
    <?php */?>
    
    
<?php /*?>HERE NEEDS APCE, FOR Z-INDEZ, HEADER NO TENDAR ARPOSISITON DECALARADO, Y AHORA SE L HE PUESTO PAL BANNER SITUATION ...<?php */?>   
    
  
    <!--
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
 * INDEX
 */
?> 
<section class="background padding_2 pb4___NOT test___NOT accent___NOT"> 
	<div class="frame narrow">       
    
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
        <li><a href="theme-styleguide.php#theme-typography">Typography</a></li>
        <li><a href="theme-styleguide.php#theme-colors">Colors</a></li>
        <li><a href="theme-styleguide.php#theme-icons">Icons</a></li>    
        <li><a href="theme-styleguide.php#theme-social-icons">Social Icons</a></li>


        <!-- add butotns as well .. -->
        <li><a href="theme-styleguide.php#theme-buttons">Buttons</a></li>

        <li><a href="theme-styleguide.php#theme-text">Text</a></li>


        <!-- also add tebale s& fomr s... -->
    </ul> 
  </div>
   

	</div> <!-- /frame -->     
</section>   




    
 
<?php 
/* 
  * START - ALTERNATING BACKGROUNDS
  */
?> 
<div class="backgrounds">   
    
		
<!-- Style - Guide--> 
 <!--  - PAGE, ADD INDEX, Y METER AHI COSAS .... LOGOS .... FONTS, COLORS, ICONS!! SHOW EM ICONS !! AND THEN TEXT STYTLES, FOMRS, ETC ETEC TC& 
   TEN MY UI SCIPTS, 
   AND THEN PLUGINS ETC ETCEETC 
   -->


<section class="padding_4 test" id="theme-typography"> 
	<div class="frame narrow aka_fw_m">  
    
    <?php 
      $section_title = 'Typography'; // Fonts ...
      include('components/dynamic/section_title.php'); 
    ?> 
    
    <?php 
    // LIGHTBOX - RWD - LIGHTBOXME
    // lighbox content, apply card, generically, and make mor epretty, and add modules in there, like link poutisde, and thingees...    
    // include('components/cowo_lightboxme.php'); 
    ?> 
    
    <?php /*?>  <div class="frontWrapper_section">
      <div class="frontWrapper_sectionContent"><?php */?>
    <div id="demo_wrapper">
       
      <div class="styleguide_fonts"> 
        <div class="item">Roboto</div> 
        <div class="item">Roboto Italic</div> 
        <div class="item">Roboto Light</div> 
        <div class="item">Roboto Light Italic</div>  
        <div class="item">Roboto Bold</div> 
      </div> <!-- /styleguide_fontss -->
          
    </div> <!-- /demo_wrapper -->


    </div> <!-- /frame -->     
  </section>  


    
<?php /*?>  ADD BLOCKQUOTE,, AND ANY OTHER SECONDARY TAGS TAT CAN BE USED AT TIMES...<?php */?>
  

<?php 
/*  
 * SECTION
 * COLORS
 */
?>

<section class="padding_4 test" id="theme-colors"> 
	<div class="frame narrow">  

  <?php 
  $section_title = 'Colors'; // Color Scheme
  include('components/dynamic/section_title.php'); 
  ?> 

  <div id="demo_wrapper">

    <div class="styleguide_colors">
      <div class="item"></div> 
      <div class="item"></div> 
      <div class="item"></div> 
      <div class="item"></div>  
      <div class="item"></div> 
      <div class="item"></div> 
      <div class="item"></div> 
      <div class="item"></div>                
    </div> <!-- /styleguide_colors -->


  </div> <!-- /demo_wrapper -->





  </div> <!-- /frame -->     
  </section>  





<?php 
/*  
 * SECTION
 * ICONS
 */
?>

<section class="padding_4 test" id="theme-icons"> 
	<div class="frame narrow___NOT">  

    <?php 
    $section_title = 'Icons';

    // p = Material design icons

    include('components/dynamic/section_title.php'); 
    ?> 



<div class="m_htmleditor">	

  <h2>Icons</h2>
  <h3>Material design icons ...</h3>
  
  <?php echo $mdi_menu; ?>
  <?php echo $mdi_search; ?> 
  <?php echo $mdi_email; ?> 
  <?php echo $mdi_tel; ?> 
  <?php echo $mdi_aspect_ratio; ?>

</div> <!-- /m_htmleditor -->



    </div> <!-- /frame -->     
  </section>  






<section id="theme-social-icons" class="background padding_4 test">  
	<div class="frame narrow___NOT">  
    
    <?php 
    $section_title = 'Social Media Icons';
    include('components/dynamic/section_title.php'); 
    ?> 
    

      <div class="m_social">
      	<?php 
        // SOCIAL ICONS 
        // - mnove this bugger to the styleguide page 
        include('components/atoms/list-social.php'); 
        ?>  
      </div> <!-- / m_social -->
  
	</div> <!-- /frame -->     
</section> 





<section id="theme-buttons" class="background padding_4 test">  
	<div class="frame narrow___NOT">  
    
    <?php 
    $section_title = 'Buttons';
    include('components/dynamic/section_title.php'); 
    ?> 
    
    
		<!--
		<button>Click me (reset the button behavior firts .. </button>

	<br>
	<br>
		-->
	<button class="text-button">Text Button</button>
	<button class="outlined-button">Outlined button</button>
	<button class="contained-button-with-icon">
		<span class="material-icons">add</span>
		Button
	</button>
	<button class="contained-button">Button</button>






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


        <?php /*?><div class="m_htmleditor">	
          <h1>Typography</h1>
        </div> <!-- /m_htmleditor -->
        <?php */?>




      </div> <!-- /frame -->   
    </section>



    <section class="background padding_3_4 accent__NOT">  
      <div class="frame wide_NOT">

        <?php 
          $section_title = 'HTHML Editor - WYSIWYG Output';
          include('components/dynamic/section_title.php'); 
        ?>    
        <?php 
        // HTHML Editor - WYSIWYG Output
        include('components/cowo_htmleditor.php'); 
        ?>

      </div> <!-- /frame -->     
    </section>  




















    
    

<section class="background test___KILL padding_2" id="theme-tables">  
  <div class="frame"> 

    <?php 
      $section_title = 'Table(s)';
      include('components/dynamic/section_title.php'); 
    ?>    
    <?php
    // TABLES
    // TODO - table through css grid spans todos seguidos trick de css tricks
    include('components/cowo_tables.php'); 
    ?> 

  </div>    
</section> 


     

<section class="background padding_2 test_not" id="theme-forms"> 
	<div class="frame">  

    <?php 
      $section_title = 'Forms';
      include('components/dynamic/section_title.php'); 
    ?>  
    <?php 
    // FORMS
    include('components/cowo_forms.php'); 
    ?> 

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
   
    
    
    
    
 
<section class="background test___NOT padding_2S">  
	<div class="frame">

		<div class="section_title">Buttons</div>

		<?php 
    // BUTTONS 
    // - meterlos dentro - - 
    // div for button group, or whatver
    include('components/cowo_buttons.php'); 
    ?> 

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
    
FONT

COLORS

TEXT FORMATS DIVERSOS

UI

PLUGINS
EC 

S
              
processthes stylee gudie thingees ciaus its really the cul.de.sac of ths tempalte, just cleaning uo & organizing teh just of it !!!
      
/ /and then also show the componets, whic are bigger thinsg, almso related to the website itself, but just as compenet blosk to use throufghout the site ....
     
COOR; PRINT HEX VALUE THROUGH PSEUDO ELEEMNT AFTER, UNDERNEATH, WHITE & BOLD, IF BG IS COLORED .. EKSLE NOT, CALRO .... 
    
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
// PAGE BACKGROUNDS END
include 'components/template/page/page_backgrounds_end.php';  
// PAGE BOTTOM
include ('template_parts/page/page_bottom.php'); 
?>  
</body>
</html>