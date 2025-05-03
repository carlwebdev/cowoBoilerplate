<?php 
/*
 * cowo-Boilerplate
 * HTML / PHP
 * cowo-accordion-vallenato (dynamic system)
 */ 
?>

<!--
THIS SYSTEM IS:
SCALABLE
CLOSES TOO
INCLUDES THE 2 ICON SCENARIOS
...PERFECT

CONVERT THIS INTO THE NEW cowo_accordion component

AND js script CONTAINS A NICE IF/ELSE CLAUSE IN JAVACSRIPT
-->

<div class="accordion-container"> 
	<?php /*?>PHP FOR LOOP - with CSS counter<?php */?>
  <?php for ($i = 1; $i <= 4; $i++){ ?>
    <div class="accordion-header"><!--Section 1A--></div> 
    <div class="accordion-content"> 
      <?php include('components/dev/lorem/slipsum-2.php'); ?>
    </div>  
    <div class="accordion-header"><!--Section 1B--></div> 
    <div class="accordion-content"> 
      <?php include('components/dev/lorem/slipsum.php'); ?>
    </div>        
  <?php }  ?>
</div>


<?php /*?>TEST - FORCE EQUAL HEIGHTS, TO MAKE THE THING NOT MOVE ... AH NO, ESTO ERA PARA LOS TABS !!!!!!

O MAYBE ALSO HERE PARA PREVENT VERTICAL GLTITCH Y BEHAVIOR..

<?php */?>

<?php /*?>
<script src="http://code.jquery.com/jquery-latest.js" type="text/javascript"></script>
<script src="js/custom/vallenato.js" type="text/javascript"></script>


<script src="js/custom/cowo_accordion_vallenato.js"></script>


<?php */?>