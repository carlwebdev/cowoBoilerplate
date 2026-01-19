<!DOCTYPE html>
<html lang="en"><!-- InstanceBegin template="/Templates/master_en.dwt.php" codeOutsideHTMLIsLocked="false" -->
<head>
<?php include('config/head/head_top.php'); ?>
<?php include('config/config.php'); ?>
<!-- InstanceBeginEditable name="config" -->
<?php $pagename = 'Dev - UI' ?>
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

<!--    
NICE ADD A VIDEO AS ANOTHER RE.SUABVEL EEEMTN TO ADD TO PLACES, NOT JUST DEMO IMAGE AND DEMO SLIDER , ETC 
-->
    
       

    
<?php /*?> 
<pre>
banner options
- image
- slider slick_banner_silider.... slider_banner for example.... make it, build it, so I have it .....
- video  - and also this
2  -iframe.. map  for the ocntact page - START WITH THIS ONE, REALLY ........

1 - OJO, CARD CLASS, BASIC, AFECTA AL MEGATRON, PORQU EAHI TB SE USA CARD CLASS, ERGO FUERA DE AHIREAMEBCARD BASIC AS CARD_BASE, OR CARD _UI ALGO ASI SIMPE ....


cB - [PATTERN LIBRARY]

1 - - - - add al this to cB somehow, as concpet de pattern libray aka compmnenet libarry - to be coied form cB into any other project<br>

res�ponsive-pattern-tabs-to-accorion - MUS
(aka) FROM COLUMNS TO ROWS   
From Tabs to Accordion - copy from MUS and store  

FULLPAGE MAGE WITH CENTED TEXT ADAPTING WITH FITTEXT, POR EJEMPLO - or now clamp - NOW TRIVIAL WITH FLEX & CLAMP    
</pre>
<?php */?>  
    
    
  
<?php /*?>
AND MAKE THSI WHOLE PAGE WITH PAGEPILE OR THE OTHER VERSIONS, SO THAT EACH DEMO IS CENTERD IN EACH FULLPAGE..
<?php */?>
    

    
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
      $show_page_banner_map = '0';
      $show_breadcrumbs = '1'; // ADD OPTIN FOR BREADCRUMBS INSIDE THE BANNER ........ AND ALSO THE TITLE, CHOOSE... OPTIONS AS COMBOS... 
      $show_page_title = '1'; 
      $show_page_excerpt = '0';
      // ad the content, asin wp_eoimoe ... 
      include('components/includes/page_basics.php'); // PAGE BASICS
    ?> 
    
    
    

<!--
dev ui patterns, vs other tingees etc :::
pattern_index
pattern_tabs
pattern_accordion // etc etceetce
-->
    


<!--

<pre>
TODO:
- rename "cowo-'s " as "pattern_tabs_jquery"
- rename "cowo-'s " as "pattern_tabs_js"
- rename "cowo-'s " as "pattern_tabs_html_details & summary summary or whatver"

create lihghtbox a la dialog
pattern_lightbox aka patern_diallog (amodal)

dialog, prolly need to add open atribute (as I did with details summary pen as well, so taht it activates, and ten do the css ceneter lightbox etc or modak on the side or bototm or wqhatver )   

</pre> 
-->





<?php /*?>    
<dialog open>This is an open dialog window</dialog>    
<?php */?>
    
    
<?php /*?>    
<style style="display:block;" contenteditable="true">
  dialog {
    position: fixed;
    top: 50%;
  }
</style>
<?php */?>  
    
    

<?php 
/* 
 * START - LAYOUT SYSTEM - BACKGROUNDS (AND EVEN CSS GRID WHATEVER ... )
 */
?>    
<div class="backgrounds">


    
    
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


      <li><a href="dev-ui.php#cowo-lightbox">Lightbox<?php /*?>(lightboxme)<?php */?></a></li>
      <li><a href="dev-ui.php#cowo-fitvids">Fitvids (old school - obsolete, as we have aspect ratio & object fit)</a></li>
      <li><a href="dev-ui.php#cowo-slider">Slick - Slider</a></li>
      <li><a href="dev-ui.php#cowo-carrousel">Slick - Carrousel</a></li>
        
        
      <li><a href="dev-ui.php#cowo-tabs">Tabs</a></li> <?php /*?>local page link needed, due to my base url i guess...<?php */?>
      <?php /*?><li><a href="#cowo-tabs">Tabs</a></li><?php */?>
      <li><a href="dev-ui.php#cowo-dropdown">Dropdown</a></li>
      <li><a href="dev-ui.php#tab-3">Accordion - in process (just 1 type, ... the best)</a></li>
      <li><a href="dev-ui.php#tab-4">etc etc etc</a></li>
      <li><a href="dev-ui.php#cowo-gridlist">Grid VS List (etc...)</a></li>
      
      <li><a href="dev-ui.php#cowo-lightbox">Lightbox (lightboxme)</a></li>
      
      <?php /*?>move script into cowo-folders !!!!<?php */?>
      <?php /*?>and also the callin of the llink, make it general<?php */?>
      
      <?php /*?>websiste -scriposts js fiel, rename to scripst fiel ...<?php */?>
      
<?php /*?>TODO - 1 - y todas las demas cosas de la laist ade l libreta de l anoche del jueves en el bar.<br>
PASAR ESTAS OTEMS AQUI PARA TENERLO YA CENTRALIZADO<br><?php */?>

      <li><a href="">Responsive Pattern: Tabs To Accordion</a></li>
      
    </ul> 
  </div>
   
  
   
<?php /*?>   also fix the counters !!!!
   and check fullish page behavior cross-broeswer...<?php */?>
  
	</div> <!-- /frame -->     
</section>    
  
  

    
    
    
    
    
    
    
<?php /*?>    <div class="frontWrapper_section">
        <div class="frontWrapper_sectionTitle">frontWrapper_sectionTitle</div>
        <div class="frontWrapper_sectionContent">frontWrapper_sectionContent</div>
    </div><?php */?>
    
    
    
    
    
    
    
    
    












    
    
    
<?php 
/*
 * Responsive jQuery Plugins
 */
?>
    

<section id="cowo-lightbox" class="background test___NOT padding_4"> 
	<div class="frame">  
    
    <div class="section_title">Lightbox<!--(me)--></div>
    <?php 
    // LIGHTBOX - RWD - LIGHTBOXME
    // lighbox content, apply card, generically, and make mor epretty, and add modules in there, like link poutisde, and thingees...    
    include('components/cowo_lightboxme.php'); 
    ?> 
    
	</div> <!-- /frame -->     
</section>  


    
    
<?php 
/*
 * new - tags html glossary 
 */
?>
<section id="cowo-tags" class="background fullscreen padding_2 test">   
	<div class="frame"> 
    
    <?php 
      $section_title = 'Dialog Tag : {dialog}'; // build aside a dropdown native, html, with details & syummary 
      include('components/dynamic/section_title.php'); 
    ?> 

	


<article>
    <h3>Dialog Example (modal...) lightbox.. </h3>
    <button id="openDialog">Open Dialog</button>
    
    <dialog id="exampleDialog">
      <h4>Dialog Title</h4>
      <p>This is a dialog box. It can be used to display information or prompt the user for input.</p>
      <button id="closeDialog">Close</button>
    </dialog>
    
    <script>
      // BY DEAFULT, ONLY CLSES IF CLCIK ON THE CLOSE BUTTON 
      /*
      document.getElementById('openDialog').addEventListener('click', function() {
        document.getElementById('exampleDialog').showModal();
      });
    
      document.getElementById('closeDialog').addEventListener('click', function() {
        document.getElementById('exampleDialog').close();
      });
      */
    </script>
    


    <script>

      // By default, the <dialog> element cannot be closed by clicking outside the box. However, you can add JavaScript to achieve this functionality. Here's how you can modify the existing example to close the dialog when clicking outside of it:
      const dialog = document.getElementById('exampleDialog');
      const openDialogButton = document.getElementById('openDialog');
      const closeDialogButton = document.getElementById('closeDialog');
    
      openDialogButton.addEventListener('click', function() {
        dialog.showModal();
      });
    
      closeDialogButton.addEventListener('click', function() {
        dialog.close();
      });
    
      // Close dialog when clicking outside of it
      dialog.addEventListener('click', function(event) {
        const rect = dialog.getBoundingClientRect();
        const isInDialog = (
          event.clientX >= rect.left &&
          event.clientX <= rect.right &&
          event.clientY >= rect.top &&
          event.clientY <= rect.bottom
        );
        if (!isInDialog) {
          dialog.close();
        }
      });
    </script>
    
    
    </article>


	</div> <!-- /frame -->     
</section>  






<?php 
/*
 * RESPONSIVE VIDEO
 */
?>
<section id="cowo-fitvids" class="background padding_4 test">  
	<div class="frame narrow">
    
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
<section class="background padding_4 test" id="cowo-slider">   
	<div class="frame narrow"> 
    
	  <div class="section_title">Slick - Slider/Slideshow<?php /*?> - meter e slick slider por ejemplo, para empezar<?php */?></div>
    <?php include('components/molecules/slider.php'); ?> <!--card slider o algo definri el aspect ratio dle slider, no?? o que ? hmm -->
    
	</div> <!-- /frame -->     
</section>  
    
  
  
    
    
<?php 
/*
 * SLICK - CARROUSEL
 */
?>   
<section class="background padding_4 test" id="cowo-carrousel">   
	<div class="frame narrow"> 
  
		<div class="section_title">Slick - Carrousel<?php /*?> - idem<?php */?></div>
    <?php include('components/molecules/carrousel.php'); ?>

	</div> <!-- /frame -->     
</section> 





<section class="background padding_4 pb4___NOT">
      <div class="frame wide___NOT narrow___NOT">
        <?php 
          $section_title = 'Slider'; // Slick - Slider/Slideshow
          include('components/dynamic/section_title.php'); 
        ?> 
        <?php include('components/molecules/slider.php'); ?>

      </div> <!-- /frame --> 
    </section>



    <section class="background padding_4 pb4___NOT test___NOT">   
      <div class="frame"> 
        <?php 
          $section_title = 'Carrousel'; // Slick - Carrousel
          include('components/dynamic/section_title.php'); 
        ?>
        <?php include('components/molecules/carrousel.php'); ?>

      </div> <!-- /frame -->     
    </section>  












    <?php 
    /*
    * UI - FLIPCARD
    */
    ?> 
    <section class="background padding_4 test ___NOT"> 
      <div class="frame"> 



        <?php 
          $section_title = 'FlipCards';
          include('components/dynamic/section_title.php'); 
        ?> 
        <?php include('components/ui/ui_flipcard.php'); ?>



      </div> <!-- /frame -->  
    </section> 


    

  


    <section class="background padding___NOT padding_4 pb4___NOT test___NOT">   
      <div class="frame"> 
        <?php 
          $section_title = 'Table';
          include('components/dynamic/section_title.php'); 
        ?>
        <?php // include('components/molecules/carrousel.php'); ?>
        <?php include('components/cowo_tables.php'); ?> 
        
        
        
      </div> <!-- /frame -->     
    </section>  
    
    



    
    
    
    
<?php 
/*
 * jQuery - TABS
 */
?> 
<section id="cowo-tabs" class="background fullscreen vcenter___NOT padding_2 test">  
	<div class="frame">      
    
    <?php 
      $section_title = 'Tabs';
      include('components/dynamic/section_title.php'); 
    ?> 
    
		<?php include('components/cowo_tabs.php'); // HAVE THE USABELVERSION, BUT ALDO HAVE A DEMO VERSION, YES DEMO IS THE WORD, NT DEV - AS IN DEMO, JUST AN EXAMPLE, TO SHWO THE FUNCTIONALITY ... ?>
    
    
	</div> <!-- /frame -->     
</section>  

    
    
    
    
<?php 
/*
 * DROPDOWN
 */
?>
<section id="cowo-dropdown" class="background fullscreen padding_2 test">   
	<div class="frame"> 
    
    <?php 
      $section_title = 'Dropdown'; // build aside a dropdown native, html, with details & syummary 
      include('components/dynamic/section_title.php'); 
    ?> 

		<?php include('components/cowo_dropdown.php'); ?>
	</div> <!-- /frame -->     
</section>  







<?php 
/*
 * new - tags html glossary 
 */
?>
<section id="cowo-tags" class="background fullscreen padding_2 test">   
	<div class="frame"> 
    



  <article>

<h3>Details and Summary</h3>
<details>
  <summary>More Information</summary>
  <p>This is additional information that is hidden by default and can be revealed by clicking on the summary.</p>
</details>

<details>
  <summary>More Information</summary>
  <p>This is additional information that is hidden by default and can be revealed by clicking on the summary.</p>
</details>

</article>




<article>
  <h3>Details and Summary</h3>
  <details>
    <summary>More Information</summary>
    <p>This is additional information that is hidden by default and can be revealed by clicking on the summary.</p>
    <ul>
      <li>Item 1: Detailed description of item 1.</li>
      <li>Item 2: Detailed description of item 2.</li>
      <li>Item 3: Detailed description of item 3.</li>
      <li>Item 4: Detailed description of item 4.</li>
    </ul>
  </details>    
</article>


<article>
  <h3>Details and Summary (nested)</h3>
  <details>
    <summary>More Information 2</summary>
    <p>This is additional information that is hidden by default and can be revealed by clicking on the summary.</p>
    
    <details>
      <summary>Subsection 1</summary>
      <p>Details for subsection 1.</p>
    </details>
    
    <details>
      <summary>Subsection 2</summary>
      <p>Details for subsection 2.</p>
    </details>
    
    <details>
      <summary>Subsection 3</summary>
      <p>Details for subsection 3.</p>
    </details>
  </details>
</article>













		<?php // // // // // include('components/template/tags.php'); ?>







	</div> <!-- /frame -->     
</section>  





    
<?php 
/*
 * new - tags html glossary 
 */
?>
<section id="cowo-tags" class="background fullscreen padding_2 test">   
	<div class="frame"> 
    
    <?php 
      $section_title = 'HTML Tgas'; // build aside a dropdown native, html, with details & syummary 
      include('components/dynamic/section_title.php'); 
    ?> 

		<?php include('components/template/tags.php'); ?>
	</div> <!-- /frame -->     
</section>  





<?php 
// jQuery script ... duuh  - ACCORDION
?>
<section class="background fullscreen padding___NOT padding_2 test">  
	<div class="frame">  
    
    <?php 
      $section_title = 'Accordion';
      include('components/dynamic/section_title.php'); 
    ?> 
    
		<?php include('components/cowo_accordion.php'); ?>
	</div> <!-- /frame -->     
</section>  

    
    
<?php 
// jQuery - ACCORDION
?>
<section class="background fullscreen padding_2 padding___NOT test">  
	<div class="frame">  
    
    <?php 
      $section_title = 'Accordion - Vallenato'; // just rip it off, oj con los iconso or text de plus minus..
      include('components/dynamic/section_title.php'); 
    ?> 
    
    
		<?php include('components/cowo_accordion_vallenato.php'); ?>
	</div> <!-- /frame -->     
</section>  




<?php 
// jQuery - ACCORDION
?>
<section class="background fullscreen padding test">  
	<div class="frame">  
		<div class="section_title">BUILD - Tabs to Accordion - cowo-tabs-to-accordion</div>  
		

    
	</div> <!-- /frame -->     
</section> 




<?php 
// GRID LIST
?>
<section id="cowo-gridlist" class="background fullscreen padding_2 test">  
	<div class="frame">
		<div class="section_title">Grid vs List <!--  make this with material icons, and all to the right...--></div>
		<?php include('components/cowo_gridlist.php'); ?>
	</div> <!-- /frame -->     
</section>  



    
    



<?php 
/*
 * Responsive jQuery Plugins
 */
?>


<?php /*?>build page grid with many videos (ya lo hice ....)  - fitvids & vs html5 etc <?php */?>

    
<!--    
    // /uincud evideo & include card_video ....
-->
    
    
  
<!-- and this si an old example for plugins - so have aplugins integrations page too -->    
    

<!--
20260104 - 
KILLED - bakcstretch js - now use css background cover etc etc

s&d: 
- frontWrapper_header
- frontWrapper_section
- frontWrapper_sectionTitle
- frontWrapper_sectionContent

-->

    
    
    
  
    
<?php /*?>    
<section class="padding_4 test"> 
	<div class="frame"> 
		<?php include('components/cowo_megatron.php'); ?>
  </div> <!-- /frame -->  
</section> 
<?php */?>
  
    
    
    
    
    
  <?php 
/* 
 * END - LAYOUT SYSTEM - BACKGROUNDS
 */
?>  
</div> <!-- /backgrounds -->
    
    



    
    
<?php /*?>   

    <p>Insert content here.</p>
        
    HTML5 document<br>
    http://dev.w3.org/html5/html-author/<br>
    http://dev.w3.org/html5/html-author/#basic-templates<br>
    <br />
    This is Simple: HTML: The most basic template recommended for most authors.<br>

    <img src="images/image.jpg" alt="" height="100px"> 

<br>
<br>
<br>
<br>
<br>


<canvas id="myCanvas" width="200" height="100" style="border:1px solid #d3d3d3;">
Your browser does not support the HTML5 canvas tag.</canvas>

<script>

var c=document.getElementById("myCanvas");
var ctx=c.getContext("2d");
var img=document.getElementById("scream");
ctx.drawImage(img,10,10);

</script>


<br>
<br>

<svg xmlns="http://www.w3.org/2000/svg" version="1.1" height="190">
  <polygon points="100,10 40,180 190,60 10,60 160,180"
  style="fill:lime;stroke:purple;stroke-width:5;fill-rule:evenodd;">
</svg>



<!-- HTML5 Drag n' Drop !!! -->
<!-- make element draggable with : draggable="true" -->
<script>
function allowDrop(ev)
{
ev.preventDefault();
}

function drag(ev)
{
ev.dataTransfer.setData("Text",ev.target.id);
}

function drop(ev)
{
ev.preventDefault();
var data=ev.dataTransfer.getData("Text");
ev.target.appendChild(document.getElementById(data));
}
</script>

<p>Drag the W3Schools image into the rectangle:</p>

<div id="div1" ondrop="drop(event)" ondragover="allowDrop(event)"></div>
<br>
<img id="drag1" src="img_logo.gif" draggable="true" ondragstart="drag(event)" width="336" height="69">

<br>
<br>
<br>
<br>
<br>


GEOLOCALIZATION DEMO

<!-- HTML5 Geolocalization !!! -->
<p id="demo">Click the button to get your position:</p>
<button onclick="getLocation()">Try It</button>
<div id="mapholder"></div>
<script>
var x=document.getElementById("demo");
function getLocation()
  {
  if (navigator.geolocation)
    {
    navigator.geolocation.getCurrentPosition(showPosition,showError);
    }
  else{x.innerHTML="Geolocation is not supported by this browser.";}
  }

function showPosition(position)
  {
  var latlon=position.coords.latitude+","+position.coords.longitude;

  var img_url="http://maps.googleapis.com/maps/api/staticmap?center="
  +latlon+"&zoom=14&size=400x300&sensor=false";
  document.getElementById("mapholder").innerHTML="<img src='"+img_url+"'>";
  }

function showError(error)
  {
  switch(error.code) 
    {
    case error.PERMISSION_DENIED:
      x.innerHTML="User denied the request for Geolocation."
      break;
    case error.POSITION_UNAVAILABLE:
      x.innerHTML="Location information is unavailable."
      break;
    case error.TIMEOUT:
      x.innerHTML="The request to get user location timed out."
      break;
    case error.UNKNOWN_ERROR:
      x.innerHTML="An unknown error occurred."
      break;
    }
  }
</script>


   <?php */?>   
 




 <?php // $pagename = 'Dev - Media' ?>    
    


 <section class="padding">
      <div class="frame wide___NOT">
        <?php 
          $section_title = 'Slider';
          include('components/dynamic/section_title.php'); 
        ?> 
        <?php include('components/molecules/slider.php'); ?>

      </div> <!-- /frame --> 
    </section>



    <section class="padding test___NOT">   
      <div class="frame"> 
        <?php 
          $section_title = 'Carrousel';
          include('components/dynamic/section_title.php'); 
        ?>
        <?php include('components/molecules/carrousel.php'); ?>

      </div> <!-- /frame -->     
    </section>  
    
    







<?php 
// RESPONSIVE VIDEO - this is also legacy now !!!!!!!!!!!!!
?>
<section class="background fullscreen___NOT vcenter___NOT padding_2 test___NOT" id="">  
	<div class="frame medium___NOTS narrow">
    
    <?php 
      $section_title = 'Video'; // (embedded, not html5 ..) // Look at this video, it's shiny
      include('components/dynamic/section_title.php'); // FIOLDER NAMING QUE IMPLIQUE QUE SON VARIABLES ANBLE S.. DYNAMIC 
    ?> 
    
    <div class="card_base">
		  <?php include('components/cowo_fitvids.php'); ?> <?php /*?>BUID A GRID THAT JUST USES THIS CO PNENE TIN A PHP FOR LOOP .... USING GRID_BASE Y PISAT<?php */?> 
    </div>
    
	</div> <!-- /frame -->    
</section>  
    
    
    
    
    
    

<!--    
USE GRID BASE, INCONJYNCITON TO ANY INCLUDE CARD THINGEES  MEERL EN LAYOUT _PAGE ...
-->    
    
  
    
    
    
<section class="background fullscreen___NOT vcenter___not center_v___HWATEVER padding_2 test___NOT test___NOT">  
	<div class="frame">
  

    <?php 
      $section_title = 'Grid Videos (plus)'; //  (as in  (ltest videos (im realy building my dream site, so just o ahead, its a game play in taht sense .))... // darle un mini esoacio debajo, padding.s
      include('components/dynamic/section_title.php');
    ?> 

    <div class="grid_base case_2">
      <?php for ($x = 0; $x <= 1; $x++) { ?>
        <div class="card_base">
          <?php include('components/cowo_fitvids.php'); ?> <?php /*?>BUID A GRID THAT JUST USES THIS CO PNENE TIN A PHP FOR LOOP .... USING GRID_BASE Y PISAT <?php */?>  
        </div> 
      <?php } ?>
    </div> <!-- /frame -->     
    
	</div> <!-- /frame -->     
</section> 
    
    
    
    
    <!--
    ADD VIDEO S/ SLIDERS INSIDE THE GRID OF MEDIAS ...
    -->
    
    
    
    
    
   
<section class="background padding_2 test___NOT">  
	<div class="frame">
  
    <?php 
      $section_title = 'Grid Videos'; //  - MAKE 1ST IDEO OCUPY 2X2 SQUARES !!! EPIC padding.s - darle un mini esoacio debajo, padding
      include('components/dynamic/section_title.php');
    ?>
    
    <div class="grid_base">
      <?php for ($x = 0; $x <= 11; $x++) { ?>
        <div class="card_base">
          <?php include('components/cowo_fitvids.php'); ?> <?php /*?>BUID A GRID THAT JUST USES THIS CO PNENE TIN A PHP FOR LOOP .... USING GRID_BASE Y PISAT <?php */?>  
        </div>
      <?php } ?>
    </div> <!-- /frame -->     

	</div> <!-- /frame -->     
</section> 



    

<!-- InstanceEndEditable -->
  <?php 
  // PAGE CONTENT END - Sticky Footer Solved By FlexBox - end
  include ('components/template/page/page_content_end.php'); 
  // FOOTER
  include('components/template/footer.php'); 
  // COOKIES POPUP
  include('components/cowo_cookies.php'); 
  
  // include "components/side_menu.php";  
// PAGE END
include ('components/template/page/page_end.php'); 
// SCRIPTS
include('config/scripts.php'); 
?>
<!-- InstanceBeginEditable name="scripts" -->


<?php /*?><!-- jQuery UI - Accordion -->
<script src="http://code.jquery.com/ui/1.10.1/jquery-ui.js"></script>
<link rel="stylesheet" href="/resources/demos/style.css" />
<script>
$(function() {
	$( "#accordionxx" ).accordion();
});
</script>  <?php */?> 


<!-- InstanceEndEditable -->
<?php // include('config/credits.php'); ?>  
</body>
<!-- InstanceEnd --></html>