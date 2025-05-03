<?php 
/*
 * PHP
 * Slider
 * 
 * //   !! // aspect ratio de slider & de acrousel !!!!!!!!!!!!!!! must define it !!! 
 * 
 */ 
?> 
<div class="card_slider">

  <div class="w_slick_carrousel">
    <div class="slickslider carrousel_simple">
      
      <?php for ($x = 0; $x <= 6; $x++) { ?>

          <div class="placeholder_slide l_fullPage___NOT s_bg_color_1___NOT">
            <div class="image" style="background-image: url('<?php echo $cb_img_random; ?>');">
              <?php /*?>image<?php */?>
              <a href="single-blog.php"></a>
            </div> <!-- /image -->
            <?php /*?>          
            <div class="m_center">
              <div class="mainClaim jq_fittext">Slider</div>      
            </div>
            <?php */?>
          </div> <!-- /placeholder_slides --> 
          
      <?php } ?>
  
    </div> <!-- /slickslider -->
  </div> <!-- /w_slick_carrousel -->
     
 </div> <!-- /card_slider -->   