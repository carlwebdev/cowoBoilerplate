<!DOCTYPE html>
<html lang="en">
<head>
<?php include('config/head/head_top.php'); ?>
<?php include('config/config.php'); ?>
<?php $pagename = $pagename_cookies ?>
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
    
    
    <?php // include('components/pages/cookies_view.php'); ?>
    
    

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
      $show_breadcrumbs = '0'; // ADD OPTIN FOR BREADCRUMBS INSIDE THE BANNER ........ AND ALSO THE TITLE, CHOOSE... OPTIONS AS COMBOS... 
      $show_page_title = '1'; 
      $show_page_excerpt = '0';

      // ad the content, asin wp_eoimoe ... 

      include('components/includes/page_basics.php'); // PAGE BASICS
    ?> 
    
    <section class="padding_4">
      <div class="frame wide___NOT">

        <div class="m_htmleditor">	<!-- TODO - CERATE  CAS FOR LEGAL... SMALLER ETC -->
          <?php include('components/atoms/sample_text_cookies.php'); ?> 
        </div> <!-- /m_htmleditor -->

      </div> <!-- /frame --> 
    </section>    

    
    
    
    
    
    <?php /*?>
    <pre>
    
    
    LEGAL BS ETC  - Ley de cookies - info
    
      info - LEY DE COOKIES
      
        http://www.infoautonomos.com/blog/como-adaptar-tu-web-la-nueva-ley-de-cookies/
        http://www.bonillaware.com/cumplir-ley-de-cookies-y-analytics
    
      
      mas cookie info
      
        http://www.cecarm.com/servlet/s.Sl?METHOD=DETALLENOTICIA&sit=c,731,m,2628&id=34206

        //////

        joan

        SPORT.ES

        Esta web utiliza 'cookies' propias y de terceros para ofrecerte una mejor experiencia y servicio. 
        Al navegar o utilizar nuestros servicios, aceptas el uso que hacemos de ellas. Puedes cambiar la configuraci�n de 'cookies' en cualquier momento.

        http://www.sport.es/es/politica-cookies.shtml      
    
    
    
      PATI etc - LEY DE COOKIES - copia
      
        http://www.infoautonomos.com/blog/como-adaptar-tu-web-la-nueva-ley-de-cookies/
        http://www.bonillaware.com/cumplir-ley-de-cookies-y-analytics
      
      
    </pre>
    <?php */?>
    

    
    
    
    
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