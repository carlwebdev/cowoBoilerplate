<!DOCTYPE html>
<html lang="en"><!-- InstanceBegin template="/Templates/master_en.dwt.php" codeOutsideHTMLIsLocked="false" -->
<head>
<link href='http://fonts.googleapis.com/css?family=Roboto:400,300,500,700' rel='stylesheet' type='text/css'>
<? /* <meta charset="utf-8"> */?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<? /* Always force latest IE rendering engine (even in intranet) & Chrome Frame */?>
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<? include('app/config/config.php'); ?>
<!-- InstanceBeginEditable name="config" -->
<? $pagename = $pagename_cookies ?>
<!-- InstanceEndEditable -->
<? include('app/config/copy/seo.php'); ?>
<link rel="shortcut icon" href="assets/favicon/favicon.ico">
<? include('app/config/css.php'); ?>
<link rel="stylesheet" href="assets/fonts/icon-font/styles.css">
<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, user-scalable=yes" />

<!-- InstanceBeginEditable name="head" -->
<!-- InstanceEndEditable -->

</head>
<body>
<div id="page">
	<? include('app/components/dev/github.php'); ?>
  <? include('app/components/cookies.php'); ?>
	<? include('app/components/dev/dev_ruler.php'); ?>
	<? include('app/components/header.php'); ?>  
  <div id="content">
    <div class="frame">
    <!-- InstanceBeginEditable name="content" -->

						<div id="frontWrapper_headerMega"><?=$pagename?></div>

					<!-- InstanceEndEditable -->
    </div> <!-- /frame --> 
  </div> <!-- /content -->            
	<? include('app/components/footer.php'); ?>
<? include "app/components/side_menu.php"; ?>    
</div> <!-- /page -->
<? include('app/config/scripts.php'); ?>
<!-- InstanceBeginEditable name="scripts" -->
<!-- InstanceEndEditable -->  
</body>
<!-- InstanceEnd --></html>