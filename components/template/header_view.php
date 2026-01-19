<?php 
/*
 * HTML
 * Header - View - Temp // MUST CAL THE GEADER FILE, SO THISI HERE S THE HEADER_SELCTOR FILE ... BECAUSE THEY CANT HAVE THE SAME NAME
 */
?>
<header id="header" class="<?php echo $header_config; ?>">
  <?php 
  // Header - Bar - Admin
  // include('components/template/header/header_bar_admin.php'); // if show_header_bar_top = 1 , etc 
  // Header - Bar - Top
  // include('components/template/header/header_bar_top.php'); // if show_header_bar_top = 1 , etc 
  // Header - Bar - Main
  include('components/template/header/header_bar_main.php'); 
  // Header - Bar - Bottom 
  // include('components/template/header/header_bar_bottom.php'); 
  ?> 
  <?php
  // HEADER DROPDOWNS - this shoudl be outsid ethe headre, so we can do the fullpage calculation !!!
  include "components/template/header/header_dropdowns.php"; 
  ?>
</header>

<!-- OBS DROPDOWNS HAVE TO BE OUTSID EHEADER, SO THAT HEADER HEIGHT CALC CAN BE DONE, FOR FULLPAGE DROPDOWN SCENARIO ... -->

<?php
// NAV - LATERAL  - move thsi outside of header, and back into page_top situation ... TODO
include "components/template/page/nav_lateral.php"; 
?>