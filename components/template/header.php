<?php 
/*
 * HTML
 * Header
 */
?>
<?php // include('components/dev/github.php'); ?>
<?php // include('components/dev/dev_ruler.php'); ?>

<?php /*?>
builsd selectro choices system for inside the header and inside the footer, as a nic econfig syste, which later wil be coming frem the cms iutself, as theme option s.. 
<?php */?>

<?php
  /*
   * HEADER SELECTOR - 1 trhing is header positioning, and the othewr one is shwo bars or not ... fdomf the insied e... 
   */
  /*
    1  baSe AKA DEFAULT
    2 fixed (sticky issues glithc no bueno.. )
    3 - fixed & smaller !!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!
    4- headroom, 
  5 - headroom & smaller
  */

  // ANOTHER OPTION, HEADER FIXED, BUT OVERLAPPING OR NOT THE IMAGE BELOW !!!!!!!!!!! AND THE IMAGE CAN BE FULLLPAGE OR NOT, MANY SCENARIOS ...
  
  // $header_sticky = '0'; // TODO
  // // // $header_headroom = '1'; // includes headroom + "resize header on scroll" // DONE (IN OMG) STODO - COMBINE HEADROOM WITH SMALLER, SO THERE WILL BE SEVRERAL SCENARIOS ... AS DEFAULT PACKAGE..

  /*
  $header_position = ''; // 0, 1, 2, 3, 
  // NEW SYSTEM, 1 VARIABLE, WITH DIFFERENT VALUES
  $header_position == '0'; // DEFAULT
  $header_position == '1'; // FIXED
  $header_position == '2'; // STICKY
  $header_position == '3'; // HEADROOM
  // ETC
  */

  // $header_position = '0'; // 0, 1, 2, 3, 
  // $header_position = '1'; // 0, 1, 2, 3, 
  $header_position = '3'; // 0, 1, 2, 3, / SHOUDL BE HEADER LAYUT ??  
  include('components/template/header_selector.php'); 
?> 