<?php 
/*
 * HTML
 * Header - View - Temp // MUST CAL THE GEADER FILE, SO THISI HERE S THE HEADER_SELCTOR FILE ... BECAUSE THEY CANT HAVE THE SAME NAME
 */
?>
<header id="header" class="<?php echo $header_config; ?>">
  <?php 
  /*
   * Header - Bar - Admin
   */
  // include('components/template/header/header_bar_admin.php'); // if show_header_bar_top = 1 , etc 
  ?>
  <?php 
  /*
   * Header - Bar - Top
   */
  // include('components/template/header/header_bar_top.php'); // if show_header_bar_top = 1 , etc 
  ?>
  <?php 
  /*
   * Header - Bar - Main
   */
  include('components/template/header/header_bar_main.php'); 
  ?>
  <?php 
  /*
   * Header - Bar - Bottom 
   */
  // include('components/template/header/header_bar_bottom.php'); 
  ?> 
  
  
  
  
  <?php 
  /*
   * Header - DROPDOWNS !!! NO EXISET NADA AUN AQUI ... 
   */
  ?>

  <?php
  /*
   * HEADER DROPDOWNS
   */ 
  include "components/template/header/header_dropdowns.php"; 
  ?>

  
  
</header>







<!-- OBS DROPDOWNS HAVE TO BE OUTSID EHEADER, SO THAT HEADER HEIGHT CALC CAN BE DONE, FOR FULLPAGE DROPDOWN SCENARIO ... -->









<?php
  /*
   * NAV - LATERAL
   */ 
  // include get_template_directory() . '/components/template/page/nav_lateral.php';
  include "components/template/page/nav_lateral.php"; 
  ?>





