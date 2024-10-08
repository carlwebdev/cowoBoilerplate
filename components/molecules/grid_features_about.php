<? 
/*
 * PHP
 * Grid Features - About
 */ 
?> 
<div class="grid_features">

  <div class="item">
    <div class="icon"><?php echo $mdi_search; ?></div> <!--USE A PICTURE YTAG FOR THIS?? ?WHATEVER -->
    <div class="title"><a href="page-staff.php">Staff</a></div> <?php /*?>AND THIS EITHER P TAG OR SOME HEADER VALUE !!! <?php */?> 
    <div class="text"><?php include('components/atoms/texts/text_lorem_sentence.php'); ?></div> <?php /*?>JUST HAVE THIS BE A PARAGRAPH !!!! <?php */?> 
    <div class="link"><a href="page-staff.php"><?php echo $copy_readmore; ?></a></div> <?php /*?>AND THIS THE ANCHOR WITH A CLASS, WHATEVER ...  <?php */?>     
  </div> <!-- /item --> 

  <div class="item">
    <div class="icon"><?php echo $mdi_search; ?></div>
    <div class="title"><a href="page-testimonials.php">Testimonials</a></div>
    <div class="text"><?php include('components/atoms/texts/text_lorem_sentence.php'); ?></div> 
    <div class="link"><a href="page-testimonials.php"><?php echo $copy_readmore; ?></a></div>      
  </div> <!-- /item --> 
  
  <div class="item">
    <div class="icon"><?php echo $mdi_search; ?></div>
    <div class="title"><a href="page-faq.php">FAQ</a></div> 
    <div class="text"><?php include('components/atoms/texts/text_lorem_sentence.php'); ?></div>
    <div class="link"><a href="page-faq.php"><?php echo $copy_readmore; ?></a></div>   
  </div> <!-- /item --> 
  
</div> <!-- /grid_featuress -->  