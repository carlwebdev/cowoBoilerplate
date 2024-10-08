<?php
/*
 * HEADER SELECTOR - DYNAMIC SYSTEM
 * 
 * Goal - SYSTEM TO EASILY CHOOSE THE SYSTEM DESIRED, TOWARDS WP CUSTOM TEMAPLET CMS OPTINS
 */
/*
the padding top script has to be called when necesazry only !!!!!!!!!!
maybe add code a tte botom too ...
*/
// IF HEADROOM - STIL PENDING TO BUILD THE DUMMY HEADER SOLUTION
// header_layout? not, it's more liek header_position ... 

if($header_position == '0') { 
  $header_config = ''; // PLACEHOLDER, UNNECSSARY
  // include get_template_directory() . '/components/organisms/header.php'; // HEADER BASIC - OJO REMOVE SMALLER EN ESTE CASO.... COULD BE AS AN EXTRA... 
  include('components/template/header_view.php');
}   
elseif($header_position == '1') { 
?>
  <?php 
  $header_config = 'case-is-fixed'; // == VS = !!!
  // include get_template_directory() . '/components/organisms/header.php'; // HEADER FIXED
  include('components/template/header_view.php');
} 
elseif($header_position == '3') { 
  // $header_config == 'placeholder'; // .... HERE ITS NEEDED, NOT EN EIMOE ..
  // $header_config = 'placeholder'; // .... HERE ITS NEEDED, NOT EN EIMOE ..
  $header_config = ''; // .... HERE ITS NEEDED, NOT EN EIMOE ..
?> 
  <div id="w_headroom" class="headroom">
  <?php /*?><div class="headroom"> <?php */?><?php /*?>Using same class for css & plugin<?php */?>      
    <?php include('components/template/header_view.php'); ?>
  </div> <!-- /w_headroom --> 
<?php } ?>