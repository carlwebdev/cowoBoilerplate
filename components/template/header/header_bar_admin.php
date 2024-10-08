<?php 
/*
 * HTML
 * Header Bar Admin
 */
?>
<div class="header_bar_top">
 <div class="frame full">
    <div class="inner">

      
      <div class="header_admin_settings">
        <!-- header_admin_settings -->
        
        <!--
        [CSS DEBUG]
        [MODE]
        -->
        
        <?php /*?>        
        <div class="header_search"><?php echo $mdi_search; ?></div> 
        <div class="header_search"><?php echo $mdi_search; ?></div> 
        <?php */?>
        
        
        
        <!--
        1) BUILD GENERIC CLASS FOR BUTTON, TO BE REAPETD - header_icon ... 
        2) HAVE SPCEIAL TRIGGERS FOR EAHC CASE, TO TRIGGER WHATVER ACTION / SCRIPT TO BE DEIFNED & COEDED...
        -->
        
        <?php /*?>
        <div class="header_icon"><?php echo $mdi_settings; ?></div> 
        <div class="header_icon"><?php echo $mdi_style; ?></div> 
        <div class="header_icon"><?php echo $mdi_css; ?></div> 
        <?php */?>
        <div class="header_icon"><?php echo $mdi_debugging; ?></div> 
        <?php /*?><div class="header_icon"><?php echo $mdi_lightmode; ?></div> <?php */?>
        <div class="header_icon"><?php echo $mdi_darkmode; ?></div> 
        
      </div>
      
      
      
      <?php /*?>
      <div class="social_header">
        <?php include('components/atoms/list-social.php'); ?>
      </div> <!-- / social_header -->
      <?php */?>
      
      
    </div> <!-- /inner -->
  </div> <!-- /frame -->   
</div> <!-- /header_bar_top --> 