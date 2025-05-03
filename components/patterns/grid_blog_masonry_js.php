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



<div class="dev-masonry-structure">

  <div class="gutter-sizer"></div>
  <div class="grid-sizer"></div>

	<?php for ($x = 0; $x <= 8; $x++) { ?>

<?php /*?>    <div class="col">      
      <div class="item">      
        Hello
      </div> <!-- /item -->       
    </div> <!-- /col --> <?php */?>
  
  
  
    <div class="col">      


      <!--
      TODO - CERATE A SEOPARET INCLUDE CARD FOR THIS, SO I CAN REUSE IT, IF NOT ALREADY OF COURSE, kiss !!!!


      TODO - categiory laye,r mke pil button, but outlined only, or outline/greyed out inisde...


      GOAL - TO SEECb ONLINE, SIS TO COMMIT TIO REPO, AND CONNECT TO A CLOUDFLARE PAGE! THAT WOULD BE A NCIE SYSTEM, FOR PHP SITES...
      
      -->

    
      <div class="card_blog">	<?php /*?>TODO - RENAM E AS CARD - AND AL BLOG INTO BLOG FOLDER ....<?php */?>
        <?php /*?><div class="image" style="background-image: url('https://picsum.photos/id/237/200/300');"><?php */?>
        <div class="image" style="background-image: url('<?php echo $cb_img_random; ?>');">
          <?php /*?>image<?php */?>
          <a href="single-blog.php"></a>
        </div> <!-- /image -->
        <div class="info">	
          <div class="category"><a href="page-blog.php">Category</a></div> <!-- /category --> 

          <div class="title"><a href="single-blog.php"><?php include('components/atoms/texts/text_lorem_title.php'); ?></a></div> <!-- /title --> 

          <?php /*?>DONE , KINDA - TODO - Sadd author & date .... add todasy date through php ....<?php */?>
          <div class="specs">
            Written by <a href="page-blog.php">Author</a> <?php /*?>|<?php */?><br>
            <?php echo date("l jS \of F Y"); ?>
          </div> <!-- /specs --> 

          <div class="text"><?php include('components/atoms/texts/text_lorem_excerpt.php'); ?></div> <!-- /text --> 
          <div class="link"><a href="single-blog.php">Read More</a></div> <!-- /link -->  
        </div> <!-- /info -->        
      </div> <!-- /card_blog -->
      






    </div> <!-- /col --> 
  
  
  


  
  
    <div class="col">      

      <div class="card_blog">	<?php /*?>TODO - RENAM E AS CARD - AND AL BLOG INTO BLOG FOLDER ....<?php */?>
        <?php /*?><div class="image" style="background-image: url('https://picsum.photos/id/237/200/300');"><?php */?>
        <div class="image" style="background-image: url('<?php echo $cb_img_random; ?>');">
          <?php /*?>image<?php */?>
          <a href="single-blog.php"></a>
        </div> <!-- /image -->
        <div class="info">	
          <div class="category"><a href="page-blog.php">Category</a></div> <!-- /category --> 

          <div class="title"><a href="single-blog.php"><?php include('components/atoms/texts/text_lorem_title.php'); ?></a></div> <!-- /title --> 

          <?php /*?>DONE , KINDA - TODO - Sadd author & date .... add todasy date through php ....<?php */?>
          <div class="specs">
            Written by <a href="page-blog.php">Author</a> <?php /*?>|<?php */?><br>
            <?php echo date("l jS \of F Y"); ?>
          </div> <!-- /specs --> 

          <div class="text"><?php include('components/atoms/texts/text_lorem_excerpt.php'); ?></div> <!-- /text --> 
          <div class="link"><a href="single-blog.php">Read More</a></div> <!-- /link -->  
        </div> <!-- /info -->        
      </div> <!-- /card_blog -->  

    </div> <!-- /col --> 
  
  

  
  
  
  
  
    <?php } ?>  
  
</div> <!-- /dev-masonry-structure -->
































<div class="grid_blog" style="display: none;">	 <!-- CDO CASE WHATAVE,R PARA EL LAYOT CHANGE WAPO  -->
  <?php for ($i = 1; $i <= 12; $i++){ ?>

  
  
  <!--
    TETS, AND THEN BUILD CARD BLOG, AND ADD IT IN GRID BLOG, AND CHECK WHAT WAS HAPPENING IN LATEST BLOG POSTS IN THE HOMEPAGE ... AUN NO ESTABA ESO MONTADO, ESTABA MONATDO EN WP_EIMOE ...

AHH ESO ESR AEL INDESX - EN PAGE HOME SI QU EHABIA LATEST BLG POSTS, CHECK AHI SI IBA CON CARD BLOG OR WHATEVER !!!!!!!!!!!!!!
  
  -->
  
  
  
  
    <div class="card_blog">	<?php /*?>TODO - RENAM E AS CARD - AND AL BLOG INTO BLOG FOLDER ....<?php */?>
      <?php /*?><div class="image" style="background-image: url('https://picsum.photos/id/237/200/300');"><?php */?>
      <div class="image" style="background-image: url('<?php echo $cb_img_random; ?>');">
        <?php /*?>image<?php */?>
        <a href="single-blog.php"></a>
      </div> <!-- /image -->
      <div class="info">	
        <div class="category"><a href="page-blog.php">Category</a></div> <!-- /category --> 

        <div class="title"><a href="single-blog.php"><?php include('components/atoms/text_lorem_excerpt.php'); ?></a></div> <!-- /title --> 
        
        <?php /*?>DONE , KINDA - TODO - Sadd author & date .... add todasy date through php ....<?php */?>
        <div class="specs">
          Written by <a href="page-blog.php">Author</a> <?php /*?>|<?php */?><br>
          <?php echo date("l jS \of F Y"); ?>
        </div> <!-- /specs --> 
        
        <div class="text"><?php include('components/atoms/text_lorem_excerpt.php'); ?></div> <!-- /text --> 
        <div class="link"><a href="single-blog.php">Read More</a></div> <!-- /link -->  
      </div> <!-- /info -->        
    </div> <!-- /card_blog -->

  
  
  
  
    <div class="card_blog">	<?php /*?>TODO - RENAM E AS CARD - AND AL BLOG INTO BLOG FOLDER ....<?php */?>
      <?php /*?><div class="image" style="background-image: url('https://picsum.photos/id/237/200/300');"><?php */?>
      <div class="image" style="background-image: url('<?php echo $cb_img_random; ?>');">
        <?php /*?>image<?php */?>
        <a href="single-blog.php"></a>
      </div> <!-- /image -->
      <div class="info">	
        <div class="category"><a href="page-blog.php">Category</a></div> <!-- /category --> 

        <div class="title"><a href="single-blog.php"><?php include('components/atoms/text_lorem_excerpt.php'); ?></a></div> <!-- /title --> 
        <div class="title"><a href="single-blog.php"><?php include('components/atoms/text_lorem_excerpt.php'); ?></a></div> <!-- /title --> 
        
        <?php /*?>DONE , KINDA - TODO - Sadd author & date .... add todasy date through php ....<?php */?>
        <div class="specs">
          Written by <a href="page-blog.php">Author</a> <?php /*?>|<?php */?><br>
          <?php echo date("l jS \of F Y"); ?>
        </div> <!-- /specs --> 
        
        <div class="text"><?php include('components/atoms/text_lorem_excerpt.php'); ?></div> <!-- /text --> 
        <div class="link"><a href="single-blog.php">Read More</a></div> <!-- /link -->  
      </div> <!-- /info -->        
    </div> <!-- /card_blog -->
  
  
  
  
  
  <?php } ?>
</div> <!-- /grid_blog -->     

