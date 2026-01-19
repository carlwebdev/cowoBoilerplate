<?php 
/*
 * HEADER BAR MAIN
 */
?>
<div class="header_bar_main">
 <div class="frame full">
    <div class="inner">
      
      <?php /* 
      <div class="logo_header_text">
      logo_header_text
      </div>
      */ ?>

      <?php 
      // HEADER LOGO   - VOVER A METERLO EN UN INCLUDE, PATRA PODER HACER VARISO LAYUT OPTIOSN DE HEADER, Y PODER CAMBIAR EL LOGO, ETC...   
      ?>
      <div class="header_logo">
        <a href="index.php" class="TODO-TEST-HEADER-LOG-HERE-INSTEAD">
          <!-- <img src="<?php echo $website_logo ?>" alt="<?php echo $website_name ?>"> -->
          cowo<span>Boilerplate</span>
        </a>
      </div>

      <?php /*?>
      <!-- COPIED FORM CB_PLAIN , THE CSS STILL EXISTED HERE, SO DO A ACLEANUP... POSITION IT RIGH UNDER THE LOGO . , ADN KILL THE H1 & H2 IBVISOUSLY!! ITS SNOT SEMANTIC CONTENT -->
      <div id="slogan"><h2><span>a simple Front-End Boilerplate</span> <span>by <a href="https://twitter.com/carlwebdev" target="_blank">@carlwebdev</a></span></h2>
      <?php */?>
      <!-- dude, sloga under the logo is soo 2004... --->


      <div class="header_nav_desktop">
          <?php 
          // HEADER NAV
          include('components/template/header/header_nav.php');




          // // // include('components/template/header/header_social.php'); // HEADER SOCIAL - MOVED TO OPTIONS INSTEAD - ???





          ?>
      </div> <!-- /header_nav_desktop -->


      <div class="header_options_temp">

          <?php 
          // HEADER - BUTTONS - USE AS INCLUDE FOR NOW !!!!!!!!!!!!!! and rename as header_options perhaps
          ?> 
          <?php   
          // HEADER options
          include('components/template/header/header_options.php'); // OBS, MAYEB THE SETTNIKGH BUTTON SHOUDL BE TO THE RIGHT OF THE DOICAL MEDIAICONS, AS STH TYOATTLY SEPARATEED
          ?>

          <?php /*?>
          <!-- CREATE  AHEADER ICON FOR SHARE - obs but its not share, its links to sapocia media, so wrking icon really , AND THEN A DROPDOWN FOR SOCAL MEDI ALINKS, AND WHATOT, EMAIL TOO, TO UATO SEND EMAI LETC  -->
          <?php */?>     







          <div class="social_header">
            <?php include('components/atoms/list-social.php'); // THESE CLEAN LISTS SHULD COME FORM DYNAMC, OR DB OR SETTINSG FOLDER INSTAD... ?>
          </div> <!-- / social_header -->







      </div> <!-- /header_options_temp -->


    </div> <!-- /inner -->
  </div> <!-- /frame -->   
</div> <!-- /header_bar_main -->  