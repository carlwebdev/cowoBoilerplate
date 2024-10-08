<?php /*
 * cowo-Boilerplate
 * Built by cowowo.cat
 * Project: 
 * Component: Cookies (section)
 * Filename: cookies.php
 */
?>




    

  
  







<?php 
/*
 * GRID FEATURES
 */
?> 
<section class="padding_4 test___NOTS">  
	<div class="frame wide_NOT">
		<div class="section_title">Grid Features</div>
		<?php include('components/molecules/grid_features.php'); ?>
	</div>     
</section> 












<section class="padding_4">
	<div class="frame wide___NOT">
   
  <?php /*?>BUILD BLOG PAGE, AND BLOG ARTICLE, AND ASLOC CATEGORY PAGE !!!! <?php */?>     
  <?php 
  /* 
   * GRID ABC - BUILD EXTERANLLY AS STANDALONE COMPONENT 
   */
  ?>
  <div class="grid_base">	
    <?php for ($i = 1; $i <= 12; $i++){ ?>

      <div class="m_item_base_01">	<?php /*?>TODO - RENAM E AS CARD - AND AL BLOG INTO BLOG FOLDER ....<?php */?>
        <?php /*?><div class="image" style="background-image: url('https://picsum.photos/id/237/200/300');"><?php */?>
        <div class="image" style="background-image: url('<? echo $cb_img_random; ?>');">
          <?php /*?>image<?php */?>
        </div> <!-- /image -->
        <div class="info">	
          <div class="title">title</div> <!-- /title --> 
          <div class="text">text</div> <!-- /text --> 
          <div class="link">link</div> <!-- /link -->  
        </div> <!-- /info -->        
      </div> <!-- /m_item_base_01 -->

    <? }  ?>
  </div> <!-- /grid_base -->      
      

  </div> <!-- /frame --> 
</section>   





<section>
	<div class="frame">

just have sections that pont to pages that contina types of content <br>
<br>
		NOW ALSO THINKING FOR TH ESITEMAP .... EACH BOX CAN CONTAIN LIST OF THINGS IT EBNCOMPASSES.. 
<br>	  

		
		
    <?php include('components/cowo_heromenu.php'); ?>



	</div> <!-- /frame --> 
</section>


