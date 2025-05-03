<?php 
/*
 * PHP
 * Grid Features - Home (not default)    - - -MOVE TO ORGANISMS ... 
 */ 
?> 


<div class="grid_features"> <!-- rename as grid featres, nicesolution, to use, it, and keep one as a default blank case : grid_features -->
  <?php
    // for ($x = 0; $x <= 2; $x++) {
    // echo "The number is: $x <br>";
    ?>
  
      <div class="item">
        <div class="icon">
          <span class="material-icons">search</span>
        </div> <!-- /category --> 
        <div class="title"><a href="page-products.php">Products</a></div> <!-- /title --> 
        <div class="text"><?php include('components/atoms/texts/text_lorem_sentence.php'); ?></div> <!-- /text --> 
        <div class="link"><a href="page-products.php">Read More</a></div> <!-- /link -->     
      </div> <!-- /item --> 
  
      <div class="item">
        <div class="icon">
          <span class="material-icons">search</span>
        </div> <!-- /category --> 
        <div class="title"><a href="page-services.php">Services</a></div> <!-- /title --> 
        <div class="text"><?php include('components/atoms/texts/text_lorem_sentence.php'); ?></div> <!-- /text --> 
        <div class="link"><a href="page-services.php">Read More</a></div> <!-- /link -->     
      </div> <!-- /item --> 
  
      <div class="item">
        <div class="icon">
          <span class="material-icons">search</span>
        </div> <!-- /category --> 
        <div class="title"><a href="page-news.php">News</a></div> <!-- /title --> 
        <div class="text"><?php include('components/atoms/texts/text_lorem_sentence.php'); ?></div> <!-- /text --> 
        <div class="link"><a href="page-news.php">Read More</a></div> <!-- /link -->     
      </div> <!-- /item --> 
  
   <?php
  // }
  ?>
</div> <!-- /grid_featuress -->  