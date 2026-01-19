<!DOCTYPE html>
<html lang="en">
<head>
<?php include('config/head/head_top.php'); ?>
<?php include('config/config.php'); ?>
<?php $pagename = $pagename_404 ?>
<?php include('config/seo.php'); ?>
<?php include('config/head/head_bottom.php'); ?> 
</head>
<body>
<?php 
// PAGE TOP
include ('template_parts/page/page_top.php'); 
// PAGE BASICS 
// // // include('components/includes/page_basics.php'); // PAGE BASICS
// PAGE BACKGROUNDS START
include 'components/template/page/page_backgrounds_start.php';  
?>  

    
    	MESSAGE HAS BEEN SENT!
			<?php include('components/pages/page-contact.php'); ?>



<?php
// PAGE BACKGROUNDS END
include 'components/template/page/page_backgrounds_end.php';  
// PAGE BOTTOM
include ('template_parts/page/page_bottom.php'); 
?> 
</body>
</html>