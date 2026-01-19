<?php 
/*
 * PHP
 * PAGE BASICS - COMBO SYSTEM !!!
 */


/* 
 *
 * PAGE BASICS
 *
 */
// header positioning options
// header layout options
// SHOW BARS ETC 
// show popups etc etcetce




?>
<?php
/*
 * PAGE CONTENT:
 *
 * BREADCRUMB - PAGE NAV vs WHOLE LAUT SCEARIO THINGEEE.. TETS IT OUT 
 *
 */
?>

<?php /*?>    
    header, combine headroom with shrink header on scroll<?php */?>



<?php 
  /* 
   * PAGE BASICS - make the incude for this !!! . and check dbug messges ec !!!
   */
/*
  if($show_page_banner == '1') { 
    // echo 'again';
    // include('components/atoms/page_banner_map.php');
    include get_template_directory() . '/components/molecules/page_banner.php'; // PAGE BANNER
  }   
  if($show_page_banner_video == '1') { 
    include get_template_directory() . '/components/molecules/page_banner_video.php'; // PAGE BANNER - VIDEO
  } 
  if($show_page_banner_map == '1') { 
    include get_template_directory() . '/components/molecules/page_banner_map.php'; // PAGE BANNER - MAP
  } 
  if($show_breadcrumbs == '1') { 
    include get_template_directory() . '/components/atoms/breadcrumbs.php';  // BREADCRUMBS
  }
  if($show_page_title == '1') { 
    include get_template_directory() . '/components/atoms/page_title.php'; // PAGE TITLE 
  }   
  if($show_page_excerpt == '1') { 
    include get_template_directory() . '/components/atoms/page_excerpt.php'; // PAGE EXCERPT     !!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!! CON EL IF HAS EXCERPT, THE EXCERPT !!! YEAH !!!!! FINALLY PONERLO BIEN PUESTO EN SU SITIO  - COPY DE EPIC I GUESS 
  }  
  if($show_page_content == '1') { 
    include get_template_directory() . '/components/atoms/page_content.php'; // PAGE CONTENT
  }
  
*/  
?>

<?php // include('components/molecules/nav_about.php'); ?> 




<?php
/*
 *
 *
 * PAGE BASICS
 *
 *
 todo - build page nav suste m in frame inside the banner - as an option... with the vredcrumbs beneath, as a small littl edetail etc ....s
 */ 
?>    

<?php 
/* 
 * PAGE BASICS 
 */


// header positioning options
// header layout options

// show popups etc etcetce




if($show_dev_columns == '1') { 
  include('components/dev/dev-grid-columns.php'); // QA - DEV - GRID COLUMNS 
}  
    // DONE - Add this to config system... 
    // TODO - AND MAKE APACKAGE, FOR ALL DEV THINSG AT ONECE, LIKE THIS, AND LIKE LO DELÑ OUOTLINES... Y BG OPACITIES, ETC ... S - ESTO YA LO TIEN EL INSPECTOR !!!!! duuh !!!
    // TODO - MAKE THIS CONFIGURABLE, WITH FRAMNE CLSS MODIFIER, AS WELL AS .. NUMBER OF COLUMNS .... 

// PAGE BANNER - WITH OPTIONS,,,,,,, 
if($show_page_banner == '1') { 
  include('components/template/page/page_banner.php'); // PAGE BANNER
}   
if($show_page_banner_map == '1') { 
  include('components/template/page/page_banner_map.php'); // PAGE BANNER - MAP (VS VIDEO, IN WP_EIMOE)
} 

// BREADCRUMBS
if($show_breadcrumbs == '1') { 
  include('components/template/page/breadcrumbs.php'); 
}
// PAGE TITLE
if($show_page_title == '1') { 
  include('components/template/page/page_title.php'); 
}   
// PAGE EXCERPT
if($show_page_excerpt == '1') { 
  include('components/template/page/page_excerpt.php');
}    


if (isset($show_page_content)) { // PRECAUTION
  
  // PAGE CONTENT
  if($show_page_content == '1') { 
    include('components/template/page/page_content.php');
  }  
  
}





?>
    