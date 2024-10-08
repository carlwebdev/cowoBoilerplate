<?php 
/*
 * PHP
 * Card - Blog
 */
?>
<?php
// $date = date('m/d/Y h:i:s a', time());
// Prints the day
// echo date("l") . "<br>";
// Prints the day, date, month, year, time, AM or PM
// echo date("l jS \of F Y h:i:s A");                                                                    
?>
<div class="card_blog">	<?php /*?>TODO - RENAM E AS CARD - AND AL BLOG INTO BLOG FOLDER ....<?php */?>
  <?php /*?><div class="image" style="background-image: url('https://picsum.photos/id/237/200/300');"><?php */?>


  <a href="single-blog.php">
    <picture>
      <img src="<?php echo $cb_img_random; ?>" alt="">
    </picture>
  </a>

  <div class="info">	
    <div class="category"><a href="page-blog.php">Category</a></div> <!-- /category --> 

    <div class="title"><a href="single-blog.php"><?php include('components/atoms/texts/text_lorem_excerpt.php'); ?></a></div> <!-- /title --> 

    <?php /*?>DONE , KINDA - TODO - Sadd author & date .... add todasy date through php ....<?php */?>
    <div class="specs">
      <span>Written by <a href="page-blog.php">Author</a></span> <?php /*?>|<?php */?><?php /*?><br><?php */?>
      <span><?php echo date("l jS \of F Y"); ?></span>
    </div> <!-- /specs --> 

    <div class="text"><?php include('components/atoms/texts/text_lorem_excerpt.php'); ?></div> <!-- /text --> 
    <div class="link"><a href="single-blog.php">Read More</a></div> <!-- /link -->  
  </div> <!-- /info -->        
</div> <!-- /card_blog -->