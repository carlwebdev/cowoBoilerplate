<?php 
/*
 * Footer - Bar - Main
 */
?> 
<div class="footer_bar_main">

  <div class="footerContent">
    <?php include('components/template/footer/logo_footer.php'); ?>
    <?php include('components/template/footer/footer_copyright.php'); ?>
    <?php include('components/template/footer/footer_contact.php'); ?>
  </div> <!-- /footerContent -->	

  <?php include('components/template/footer/footer_social.php'); ?>

  <?php 
  /*
   * Footer - Grid Footer - "FOR LOOP"
   */
  ?> 
  <div class="grid_footer">
    <?php for ($x = 1; $x <= 5; $x++) { ?>
      <div class="item">            
        <?php /*?><div class="title">Column title</div> <!-- h5 or h6 ???? -->  <?php */?>          
        <h5>Column title</h5> <!-- h5 or h6 ???? -->            
        <?php /*?><h6>Column title</h6> <!-- h5 or h6 ???? --> <?php */?>           
        <div class="text">							
          <?php /*?>  HMM MUST LEARN PHP FOR LOOP INSIDE ANOTEHR FOR LOOP...
          <?php for ($x = 1; $x <= 5; $x++) { ?>
            text<br> 
          <?php } ?> 
          <?php */?>                
          <?php /*?>can be text or links<?php */?>
          <ul>
            <li><a href="http://www.cowowo.cat">Link to something</a></li>
            <li><a href="http://www.cowowo.cat">Link to something</a></li>
            <li><a href="http://www.cowowo.cat">Link to something</a></li>
            <li><a href="http://www.cowowo.cat">Link to something</a></li>
          </ul>                             
        </div> <!-- /text" -->           
      </div> <!-- /item" -->  
    <?php } ?> 
  </div> <!-- /grid_footer -->

</div> <!-- /footer_bar_main -->    