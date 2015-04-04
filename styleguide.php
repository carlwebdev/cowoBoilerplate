<!DOCTYPE html>
<html lang="en"><!-- InstanceBegin template="/Templates/master_en.dwt.php" codeOutsideHTMLIsLocked="false" -->
<head>
<? include('app/config/fonts.php'); ?>
<? /* <meta charset="utf-8"> */?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<? /* Always force latest IE rendering engine (even in intranet) & Chrome Frame */?>
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<? include('app/config/config.php'); ?>
<!-- InstanceBeginEditable name="config" -->
<? /* <? $pagename = $pagename_404 ?> */ ?>
<!-- InstanceEndEditable -->
<? include('app/config/copy/seo.php'); ?>
<link rel="shortcut icon" href="assets/favicon.ico">
<? include('app/config/css.php'); ?>
<? include('app/config/head.php'); ?>

<!-- InstanceBeginEditable name="head" -->



<style type="text/css">


#demo_wrapper {
background-color:#ccc;
font-family: 'Cantora One', sans-serif;
}

.font_wrapper_1 {
background-color:#ccc;
font-family: 'Anton', sans-serif;
}
.font_wrapper_2 {
background-color:#ccc;
font-family: '', sans-serif;
}
.font_wrapper_3 {
background-color:#ccc;
font-family: 'Open Sans', sans-serif;
}

#colors_wrapper { overflow:hidden;
font-family: 'Cantora One', sans-serif;
}
	#colors_item {float:left; width:23.5%; margin-right:2%; height:200px;}
		#colors_item:nth-of-type(4) {margin-right:0%;}	

			#colors_item:nth-of-type(1) {background-color:#0d80a1;}	
			#colors_item:nth-of-type(2) {background-color:#0d80a1;}	
			#colors_item:nth-of-type(3) {background-color:#0d80a1;}	
			#colors_item:nth-of-type(4) {background-color:#0d80a1;}	
		/* TRUCO A) sass, vs truco b) ....... find tool to do this...   vs c) rbga(0,0,0,0.3)  */

#colors_wrapper_2 { overflow:hidden;
font-family: 'Cantora One', sans-serif;
}
	#colors_item_2 {float:left; width:23.5%; margin-right:2%; height:200px;}
		#colors_item_2:nth-of-type(4) {margin-right:0%;}	

			#colors_item_2:nth-of-type(1) {background-color:rgba(13,128,161,1);}			
			#colors_item_2:nth-of-type(2) {background-color:rgba(13,128,161,0.50);}	
			#colors_item_2:nth-of-type(3) {background-color:rgba(13,128,161,0.25);}	
			#colors_item_2:nth-of-type(4) {background-color:rgba(13,128,161,0.10);}	
		/* TRUCO A) sass, vs truco b) ....... find tool to do this...   vs c) rbga(0,0,0,0.3)  */
				









$colorprofestival:#0d80a1;
.profestival_color_1 {background-color:$colorprofestival;}
.profestival_color_2 {background-color: lighten($colorprofestival, 50%); }
.profestival_color_3 {background-color: lighten($colorprofestival, 75%); }
.profestival_color_4 {background-color: lighten($colorprofestival, 10%); }



		
</style>




<!-- InstanceEndEditable -->

</head>
<body>
<div id="container">
	<? include('app/components/dev/dev_ruler.php'); ?>
	<? include('app/components/header.php'); ?>
  <div class="container_section_2">
      <div class="container_content">
      
          <div id="content">
          <!-- InstanceBeginEditable name="content" -->

						<div id="frontWrapper_headerMega">Styleguide</div>






	<div id="demo_wrapper">




	<div class="font_wrapper_1">Antonio Regular (aún no)</div>
    <div class="font_wrapper_2">ANTONIO BOLD (aún no)</div>
	<div class="font_wrapper_3">Open Sans</div> 
    
    
<br />
<br />
COLORS (hexadecimal):
	<div id="colors_wrapper">
        <div id="colors_item"></div> 
        <div id="colors_item"></div> 
        <div id="colors_item"></div> 
        <div id="colors_item"></div>       
	</div> 

<br />
<br />
COLORS (rgba (opacity! - el fons ha de ser "blanc")):    
	<div id="colors_wrapper_2">
        <div id="colors_item_2"></div> 
        <div id="colors_item_2"></div> 
        <div id="colors_item_2"></div> 
        <div id="colors_item_2"></div>       
	</div>    
<br />
<br />
COLORS - cal fer prova amb hexadecimals pero converits en percentatges, emprant eina externa o lighten&darken de SASS :-)<br />
<br />
<br />

    

	</div> <!-- /demo_wrapper --> 



					<!-- InstanceEndEditable -->
          </div> <!-- /content -->
  
      </div> <!-- /container_content -->
  </div> <!-- /container_section -->
	<? include('app/components/footer.php'); ?>
</div> <!-- /container -->
<? include('app/config/scripts.php'); ?>
<!-- InstanceBeginEditable name="scripts" -->
<!-- InstanceEndEditable -->  
</body>
<!-- InstanceEnd --></html>