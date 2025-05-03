

<?php 
  /*  
  * HEADER - BUTTONS - USE AS INCLUDE FOR NOW !!!!!!!!!!!!!! and rename as header_options perhaps
  */
?> 
<div class="header_buttons">
<!-- AL THSES IN AN INCLUDE PERHAPS, AND MAKE IT SISTEMATHIC ... WITH BUTTONS, AND UI WITH BUTOTN ROLE ... -->

    <!--
    button.navicon,
    button.langicon,
    button.searchicon,
    button.modeicon 
    -->
    <!--
    MOVE MATERIAL ICONS VARIABLE TYO INTS OWN LITTLE FIEL, FOR COPY & PASET PURPOSES... 
    settings , 
    profile
    debug
    grid
    offload csss
    -->

    <?php /*
    <div class="navicon jgTrigger_nav">
    <?php echo $icon_menu; ?>
    </div> <!-- / navicon -->
    */ ?>


    <?php 
  // add these into a header_buttons for example... as header_options + settings for the wrench...
  ?>

  <?php /*?>
  <div class="navicon trigger_nav_FOR_EXAMPLE jgTrigger_nav">
    <!-- <a class="navicon" href="#menu"><?php echo $mdi_menu; ?></a> -->
  </div> 
  <?php */?>

    <!--
    1) BUILD GENERIC CLASS FOR BUTTON, TO BE REAPETD - header_icon ... VS headericon !!!
    2) HAVE SPCEIAL TRIGGERS FOR EAHC CASE, TO TRIGGER WHATVER ACTION / SCRIPT TO BE DEIFNED & COEDED...
    -->

    <button class="headericon" role="trigger_nav"><?php echo $GLOBALS['icon_menu']; ?><?php // echo $mdi_menu; ?></button>
    <button class="headericon" role="trigger_search"><?php echo $GLOBALS['icon_search']; ?><?php // echo $mdi_search; ?></button>
    <button class="headericon" role="trigger_language"><?php echo $GLOBALS['icon_language']; ?></button>
    <button class="headericon" role="trigger_cart"><?php echo $GLOBALS['icon_cart']; ?><?php // echo $mdi_debugging___NOT; ?></button> <!-- to add CART  --> 
    <button class="headericon" role="trigger_profile"><?php echo $GLOBALS['icon_profile']; ?><?php // echo $mdi_profile; ?></button>
    <button class="headericon" role="trigger_share"><?php echo $GLOBALS['icon_share']; ?><?php // echo $mdi_debugging___NOT; ?></button> <!-- trigger_share_aka_social // to add social medaia dropdown  --> 



    <button class="headericon" role="trigger_settings"><?php echo $GLOBALS['icon_settings']; ?><?php // echo $mdi_settings; ?></button>


    
</div> <!-- /header_buttons -->