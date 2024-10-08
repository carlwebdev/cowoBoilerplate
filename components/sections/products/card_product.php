<?php 
/*
 * PHP
 * Card - Products
 */
?>
<div class="card_product">	<?php /*?>TODO - RENAM E AS CARD - AND AL BLOG INTO BLOG FOLDER ....<?php */?>
  <?php /*?><div class="image" style="background-image: url('https://picsum.photos/id/237/200/300');"><?php */?>
  <div class="image" style="background-image: url('<? echo $cb_img_random; ?>');">
    <?php /*?>image<?php */?>
  </div> <!-- /image -->
  <div class="info">	

    <?php /*?>1 add categoruyy, in blog page first, add categpry, author, date , etc ....<?php */?>
    <div class="category"><a href="page-blog.php">Category</a></div> <!-- /category -->

    <div class="title"><a href="single-blog.php"><?php include('components/atoms/texts/text_lorem_title.php'); ?></a></div> <!-- /title --> 
    <div class="text"><?php include('components/atoms/texts/text_lorem_excerpt.php'); ?></div> <!-- /text --> 
    <div class="link"><a href="single-blog.php">Buy</a></div> 
  </div> <!-- /info -->        
</div> <!-- /card_blog -->

<div class="card_product">	<?php /*?>TODO - RENAM E AS CARD - AND AL BLOG INTO BLOG FOLDER ....<?php */?>
  <?php /*?><div class="image" style="background-image: url('https://picsum.photos/id/237/200/300');"><?php */?>
  <div class="image" style="background-image: url('<?php echo $cb_img_random; ?>');">
    <?php /*?>image<?php */?>
  </div> <!-- /image -->

  <?php // include('components/molecules/slider.php'); ?>

  <!--
  / slider & grid do not wok well together, now i know it, so i must update my slide situyatin ...
  -->

  <div class="info">	

    <?php /*?>1 add categoruyy, in blog page first, add categpry, author, date , etc ....<?php */?>
    <div class="category"><a href="page-blog.php">Category</a></div> <!-- /category -->

    <div class="title"><a href="single-blog.php"><?php include('components/atoms/texts/text_lorem_title.php'); ?></a></div> <!-- /title --> 
    <div class="text"><?php include('components/atoms/texts/text_lorem_excerpt.php'); ?></div> <!-- /text --> 
    <div class="link"><a href="single-blog.php">Buy</a></div> 
  </div> <!-- /info -->        
</div> <!-- /card_blog -->