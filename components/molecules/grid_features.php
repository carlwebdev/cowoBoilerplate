<? 
/*
 * PHP
 * Grid Features (default)
 */ 
?> 
<!--
FEATIURED OR HIGHTLIUGHST OR BLCOK SERVIOCES OR WHATEVER .. BUSINESS BULLSHIT MARKETING BS_MARK ...    
-->


<div class="grid_features"> <!-- rename as grid featres, nicesolution, to use, it, and keep one as a default blank case : grid_features -->
  <?php
  for ($x = 0; $x <= 2; $x++) {
    // echo "The number is: $x <br>";
    ?>
      <div class="item">
        <div class="icon">
          <span class="material-icons">search</span>
        </div> <!-- /category --> 
        <div class="title"><a href="single-blog.php">Products<?php /*?>This is a word<?php */?><?php // include('components/atoms/text_lorem_excerpt.php'); ?></a></div> <!-- /title --> 
        <div class="text"><?php include('components/atoms/texts/text_lorem_sentence.php'); ?></div> <!-- /text --> 
        <div class="link"><a href="single-blog.php">Read More</a></div> <!-- /link -->     
      </div> <!-- /item --> 
   <?php
  }
  ?>
</div> <!-- /grid_featuress -->  