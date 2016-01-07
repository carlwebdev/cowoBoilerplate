<!DOCTYPE html>
<html lang="en"><!-- InstanceBegin template="/Templates/master_en.dwt.php" codeOutsideHTMLIsLocked="false" -->
<head>
<? include('config/head_top.php'); ?>
<? include('config/config.php'); ?>
<!-- InstanceBeginEditable name="config" -->
<? $pagename = $pagename_cookies ?>
<!-- InstanceEndEditable -->
<? include('config/seo.php'); ?>
<? include('config/head_bottom.php'); ?> 

<!-- InstanceBeginEditable name="head" -->
<!-- InstanceEndEditable -->

</head>
<body>
<div id="page">
  <div id="w_headroom" class="headroom">
	<? include('components/dev/github.php'); ?> 
  <? include('components/cookies.php'); ?> 
	<? include('components/dev/dev_ruler.php'); ?>
	<? include('components/header.php'); ?> 
  </div> <!-- /w_headroom -->  
  <div id="content">
    <div class="frame">
    <!-- InstanceBeginEditable name="content" -->
			<? include('components/pages/cookies_view.php'); ?>
			<!-- InstanceEndEditable -->
    </div> <!-- /frame --> 
  </div> <!-- /content -->            
	<? include('components/footer.php'); ?>
  
<? include "components/side_menu.php"; ?>    
</div> <!-- /page -->
<? include('config/scripts.php'); ?>
<!-- InstanceBeginEditable name="scripts" -->
<script src="js/nav/nav_4.js"></script>
<!-- InstanceEndEditable -->
<? include('config/credits.php'); ?>  
</body>
<!-- InstanceEnd --></html>