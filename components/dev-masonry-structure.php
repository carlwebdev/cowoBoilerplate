<?php 
/* 
 * PHP
* dev-masonry-structure
*/
?>
<div class="dev-masonry-structure">

  <div class="gutter-sizer"></div>
  <div class="grid-sizer"></div>

	<?php for ($x = 0; $x <= 8; $x++) { ?>

    <div class="col">      
      <div class="item">      
        <img src="https://picsum.photos/1920/1080" alt=""> <!-- here it works, causing no iussue ... so what do i have her in cB that i havent copied elsewher eto the demos .. ?? s-->
      </div> <!-- /item -->       
    </div> <!-- /col --> 
    <div class="col">      
      <div class="item">      
        <img src="https://picsum.photos/1920/1920" alt="">
      </div> <!-- /item -->       
    </div> <!-- /col --> 
    <div class="col">      
      <div class="item">      
        <img src="https://picsum.photos/1080/1920" alt="">
      </div> <!-- /item -->       
    </div> <!-- /col --> 

    <div class="col">      
      <div class="item">      
        <img src="https://picsum.photos/1920/1080" alt=""> 
      </div> <!-- /item -->       
    </div> <!-- /col --> 
    
    
    <?php } ?>  
  
</div> <!-- /dev-masonry-structure -->