<?php 
/*
 * cowo-Boilerplate
 * HTML / PHP
 * cowo-tabs
 */ 
?>
<div class="cowo-tabs"> <!-- ui_tabs -->

	<?php
  // 1 - THE TABS MENU (obs, can be outside, so have that option)
  ?>
  <div class="cowo-tabs-menu"> <!-- tabs_menu  could even be a menu tag as well... menu.tabs for example.   -->
    <ul>
      <li><a href="#tab-1"><!--Tab 1--></a></li>
      <li><a href="#tab-2"><!--Tab 2--></a></li>
      <li><a href="#tab-3"><!--Tab 3--></a></li>
      <li><a href="#tab-4"><!--Tab 4--></a></li>
    </ul> 
  </div>
  
  <?php 
  // 2 - THE TABS - and this could have awrappoer, why not? <!-- tabs -->
  ?>
  <div class="tab" id="tab-1"> <!-- tab -->       
    <?php include('components/dev/lorem/slipsum-2.php'); ?>	
    <?php include('components/dev/lorem/slipsum-2.php'); ?>	
    <?php include('components/dev/lorem/slipsum-2.php'); ?>	
  </div> <!-- /tab --> 
  <div class="tab" id="tab-2">
    <?php include('components/dev/lorem/slipsum.php'); ?>
  </div> <!-- /tab --> 
  <div class="tab" id="tab-3">
    <?php include('components/dev/lorem/slipsum-2.php'); ?>
  </div> <!-- /tab -->  
  <div class="tab" id="tab-4">
    <?php include('components/dev/lorem/slipsum.php'); ?>
    </div> <!-- /tab -->              
</div> <!-- /cowo-tabs --> 


<?php /*?>OBS - ISSUES WHEN TAB CONTENTS ARE LONS, AND DIFFFERENT AMONGTS EACHOTHER...<?php */?>

