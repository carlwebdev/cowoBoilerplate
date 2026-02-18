<?php 
/*
 * PHP
 * Footer - Contact
 */ 
?>
<div class="footer_contact" aria-label="Contact details">
  <?php /*?>
  <!-- 1 - cB - html snippet anchor tel - STYLE IT THROUGH A HREF CONTAINE TELK, AS IN SOCIAL LINKS DE PPIXAPP NEW WEBSITE      -->	
  <!-- 2 - if href is tel, then add icon de tel, if its mailto, then add icon de mail, iif skype, then add icon to skype, etc -->			
  <!-- DONE - 3 - now using mailgo plugin -->
  <?php */?>
  <?php /*?>cta_tel = call us & cta_email = send us an email!<?php */?>
  <?php $telephoneHref = preg_replace('/[^0-9\+]/', '', $website_telephone); ?>
  <a href="tel:<?php echo htmlspecialchars($telephoneHref, ENT_QUOTES, 'UTF-8'); ?>" title="Call us"><?php echo htmlspecialchars($website_telephone, ENT_QUOTES, 'UTF-8'); ?></a>
  <br>
  <a href="mailto:<?php echo htmlspecialchars($website_email, ENT_QUOTES, 'UTF-8'); ?>" title="Send us an email"><?php echo htmlspecialchars($website_email, ENT_QUOTES, 'UTF-8'); ?></a>
</div> <!-- /footer_contact -->