<?php 
/* 
 * GRID BLOG 
 */
?>



<?php
// $date = date('m/d/Y h:i:s a', time());
// Prints the day
// echo date("l") . "<br>";
// Prints the day, date, month, year, time, AM or PM
// echo date("l jS \of F Y h:i:s A");                                                                    
?>



<?php /*?><div class="grid_blog">	 <!-- CDO CASE WHATAVE,R PARA EL LAYOT CHANGE WAPO  -->
  <?php for ($i = 1; $i <= 12; $i++){ ?><?php */?>

    <div class="single_blog">	<?php /*?>TODO - RENAM E AS CARD - AND AL BLOG INTO BLOG FOLDER ....<?php */?>
      <?php /*?><div class="image" style="background-image: url('https://picsum.photos/id/237/200/300');"><?php */?>
      <div class="image" style="background-image: url('<?php echo $cb_img_random; ?>');">
        <?php /*?>image<?php */?>
        <a href="single-blog.php">
          <span><?php include('components/atoms/texts/text_lorem_title.php'); ?></span> <!-- TODO  -   KEEPO THSI AS A IMAGE WITH CAPTION MODULE m_image_caption -->
        </a>
      </div> <!-- /image -->
      <div class="info">
        <div class="category"><a href="page-blog.php">Category</a></div> <!-- /category --> 

        <div class="title"><?php include('components/atoms/texts/text_lorem_title.php'); ?></div> <!-- /title --> 
        
        <?php /*?>DONE , KINDA - TODO - Sadd autsshor & date .... add todasy date through php ....<?php */?>
        <div class="specs">
          Written by <a href="page-blog.php">Author</a> <?php /*?>|<?php */?><br>
          <?php echo date("l jS \of F Y"); ?>
        </div> <!-- /specs --> 
        
        <div class="text"><?php include('components/atoms/texts/text_lorem_excerpt.php'); ?></div> <!-- /text --> 
        
        
        <?php /*?><div class="link"><a href="single-blog.php">Read More</a></div> <!-- /link -->  <?php */?>

        
      </div> <!-- /info -->    
      

      
      
      
    </div> <!-- /blog_feature -->

<?php /*?>  <?php }  ?>
</div> <!-- /grid_blog -->   <?php */?>  

