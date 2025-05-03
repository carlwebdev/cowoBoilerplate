<?php 
/* 
 * GRID PRICING & CARD PRICE / PRICING .... DUNNO       (singular...)
 
 
 EXAMPLES:
 https://www.browserstack.com/accounts/subscriptions
 
 BETS VALUE, ALL INCLUDED ....  CASE...
 
 start checklist, and then plus siymbol form proiduct to prioduct ...
 s
 
 */
?>
<div class="grid_pricing">	 <!-- CDO CASE WHATAVE,R PARA EL LAYOT CHANGE WAPO  -->
  <?php for ($i = 1; $i <= 4; $i++){ ?>

<!--
CREATE A N INCUDE FOR CARD, SO THAT I CAN HAVE DIFRENT CARDS 
-->

    <?php 
     /*
      * Card Pricing
      */
    ?>
    <div class="card_pricing">
        

      <?php 
      /*
        * Image
        */
      ?>    
      <?php /*?><div class="image" style="background-image: url('https://picsum.photos/id/237/200/300');"><?php */?>
      <?php /*?><div class="dev_hide___NOT image" style="background-image: url('<?php echo $cb_img_random; ?>');"><?php */?>
      <?php /*?><div class="image"><?php */?> <?php /*?><!-- DONE - TODO - REMOVE THE BG IMAGE CSS FORM CSS --><?php */?>

        <picture class="thumbnail">
          <img src="<?php echo $cb_img_random; ?>" alt="">
          <?php /*?><img src="<?php echo $cb_img_random; ?>"><?php */?>
        </picture>
        
        <?php /*?></div> <!-- /image --><?php */?>
      

      <?php 
       /*
        * Info
        */
      ?> 
      <div class="info">	        
        <div class="title">cowoProduct</div>
        <div class="price">899€</div>
        <div class="link"><a href="">Choose</a></div> 
        
        <?php /*?><div class="category"><a href="page-blog.php">Category</a></div> <!-- /category --><?php */?>
        <?php /*?><div class="title"><a href="single-blog.php"><?php include('components/atoms/texts/text_lorem_title.php'); ?></a></div> <!-- /title --> <?php */?>
        
        <div class="text">Includes: <?php // include('components/atoms/texts/text_lorem_excerpt.php'); ?></div> <!-- /text --> 
        <div class="list">
          <ul>
            <li>Wordpress engine</li>
            <li>Multilingual</li>
            <li>SEO</li>
            <li>SMO</li>
          </ul>
        </div> <!-- /list --> 
        
        <!--
        ADD THE LIST OF FEATURES. WITH MD ICONS ... CHECKLIST ICON , SIMPLE ... 
        -->
        
        <?php /*?><div class="link"><a href="single-blog.php">Buy</a></div> <?php */?>
      </div> <!-- /info -->        
    </div> <!-- /card_blog -->


  <?php }  ?>
</div> <!-- /grid_pricing -->     