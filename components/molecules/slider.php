<?php 
/*
 * PHP
 * Slider
 */ 
?> 


<div class="card_slider"> <?php /*?>as a card ....<?php */?>

  <div class="w_slick_slider">
    <div class="slickslider slider_single">

      <?php for ($x = 0; $x <= 4; $x++) { ?>

          <div class="placeholder_slide s_bg_color_1">
            <div class="image" style="background-image: url('<?php echo $cb_img_random; ?>');">
              <?php /*?>image<?php */?>
              <a href="single-blog.php"></a>
            </div> <!-- /image -->
  <?php /*?>          <div class="m_center">s
              <div class="mainClaim jq_fittext">Slider</div>      
            </div><?php */?>
          </div> <!-- /placeholder_slides --> 
      <?php } ?>

    </div> <!-- /slickslider -->
  </div> <!-- /w_slick_carrousel -->

 </div> <!-- /card_slider -->   