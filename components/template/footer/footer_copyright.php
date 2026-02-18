<?php 
/*
 * PHP
 * Footer - Copyright
 */ 
?>
<div class="footer_copyright">
   <span>&copy;</span> <?php echo date("Y"); ?> <?php echo htmlspecialchars((isset($footer_company_legal_name) && $footer_company_legal_name !== '') ? $footer_company_legal_name : $website_name, ENT_QUOTES, 'UTF-8'); ?>
</div> <!-- /footer_copyright -->