<!DOCTYPE html>
<html lang="en"><!-- InstanceBegin template="/Templates/master_en.dwt.php" codeOutsideHTMLIsLocked="false" -->
<head>
<?php include('config/head/head_top.php'); ?>
<?php include('config/config.php'); ?>
<!-- InstanceBeginEditable name="config" -->
<?php $pagename = 'Dev - UI' ?>
<!-- InstanceEndEditable -->
<?php include('config/seo.php'); ?>
<?php include('config/head/head_bottom.php'); ?> 

<!-- InstanceBeginEditable name="head" -->
<link rel="stylesheet" href="js/plugins/SyntaxHighlighter/shCore.css" />
<link rel="stylesheet" href="js/plugins/SyntaxHighlighter/shCoreDefault.css" />
<link rel="stylesheet" href="js/plugins/SyntaxHighlighter/overflow-y-hack.css" />
<!-- InstanceEndEditable -->

</head>
<body>
<?php 
// PAGE START
include ( 'components/template/page/page_start.php'); 
?> 
  <?php 
  // HEADER
  include('components/template/header.php'); 
  ?> 
  <?php 
  // PAGE CONTENT START - Sticky Footer Solved By FlexBox - start
  include ('components/template/page/page_content_start.php'); 
  ?>  
	<!-- InstanceBeginEditable name="content" -->

    
    
<br>
<br>
<br>
 
	  
  <?php include('components/template/page/page_banner.php'); ?>
  <?php include('components/template/page/page_title.php'); ?>
    
    
    
<section class="accent___NOT">
	<div class="frame full___NOT">

	<?php /*?><div id="frontWrapper_headerMega"><?=$pagename?></div><?php */?>

	<div id="frontWrapper_headerMega">SNIPPETS</div> TURN INTO SECTION_TITLE ETC !!!!!!!!! SECTION_HEADER ETC ... 
            		
	build section for php snipptets & for loops, and html snippets etc..		
		
    <div class="frontWrapper_section">
        <div class="title"><h4>List</h4></div>
        <div class="content">

<pre class="brush:javascript">
<ul>
    <li><a href="">Item</a></li>
    <li><a href="">Item</a>
        <ul>
            <li><a href="">Sub-Item</a></li>
            <li><a href="">Sub-Item</a></li>
            <li><a href="">Sub-Item</a></li>
            <li><a href="">Sub-Item</a></li>
        </ul>    
    </li>
    <li><a href="">Item</a></li>
    <li><a href="">Item</a></li>
</ul>  
</pre> 

        </div>
    </div>
    
    
		
    <div class="frontWrapper_section">
        <div class="title"><h4>Table</h4></div>
        <div class="content">

<pre class="brush:javascript">
not yet
</pre> 
        
        </div>
    </div>
    
   
   
   
    <div class="frontWrapper_section">
        <div class="title"><h4>HTML5 template</h4></div>
        <div class="content">

<samp>
<?php /*?><!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>HTML Template</title>
  </head>
  <body>
    <p>Insert content here.</p>
  </body>
</html><?php */?>
</samp> 
        
        </div>
    </div>
    
    
       
    

    <div class="frontWrapper_section">
        <div class="title"><h4>PHP loop</h4></div>
        <div class="content">

<?php /*?><code>
	<?php for ($x = 0; $x <= 2; $x++) { ?>
    <div class="col span_1of3">1of3</div>
  <?php } ?> 
</code> <?php */?>
       

<pre class="brush:javascript">
<?php /*?><code><?php */?>
	<?php for ($x = 0; $x <= 2; $x++) { ?>
    <div class="col span_1of3">1of3</div>
  <?php } ?> 
<?php /*?></code><?php */?>
</pre> 
<?php /*?>
        </div>
    </div><?php */?>
    
    
    
        </div>
    </div>    
    
  
  
<br>
<br>
php - loops and arrays<br>
local php loop with array, is for simple stuff that doesnt need ddbb integration !! SO USE IT !!!<br>
PROTOTYPING - learn today - for loop, with array !!!!
<br>
<br>
<br>

    
    <div class="frontWrapper_section">
        <div class="title"><h4>PHP loop with array(s)</h4></div>
        <div class="content">

<pre class="brush:javascript">
not yet
</pre> 
        
        </div>
    </div> 
    
  
  
  
  
  
<br>
<br>
PHP FUNCTION - URL CLEANUP & TRIM  
<br>
<?php /*?>https://speedysense.com/php-remove-http-https-www-and-slashes-from-url/<?php */?>

          
				<?php
            // Decode the Encoded URL
            $input = "http%3A%2F%2Fway2tutorial.com%2F";
            $input = urldecode($input);
        
            // Output http://way2tutorial.com/
            // echo $input;
        ?>

<?php
    // Short way to do All this one
    // Encoded URL to Decode the URL, Remove the http://, www., and slash(/) from the URL 
    // $input = "http%3A%2F%2Fway2tutorial.com%2F";  
		
		// $input = "https://steinerskoleniarendal.no/"; // WORKS
		
		// $input = the_sub_field( 'skole_hjemmeside' );  
		
		// echo "the echo";
		// echo the_sub_field( 'skole_hjemmeside' );
		
		
		// $input = echo the_sub_field( 'skole_hjemmeside' );


    // Output way2tutorial.com      
    // echo preg_replace( "#^[^:/.]*[:/]+#i", "", preg_replace( "{/$}", "", urldecode( $input ) ) );  
?>




<?php
    // Decode the Encoded URL
    $input = "http%3A%2F%2Fway2tutorial.com%2F";
    $input = urldecode($input);

    // Output http://way2tutorial.com/
    // echo $input;
?>




<br>
<?php
// PHP SCRIPT TO CLEANUP URLS - COPY INTO CB
// https://stackoverflow.com/questions/9364242/how-to-remove-http-www-and-slash-from-url-in-php

// $input = 'www.google.co.uk/';
$input = 'http://www.google.co.uk/';
// $input = the_sub_field( 'skole_hjemmeside' ); 
// $input = get_sub_field( 'skole_hjemmeside' );
// in case scheme relative URI is passed, e.g., //www.google.com/
$input = trim($input, '/');

// If scheme not included, prepend it
if (!preg_match('#^http(s)?://#', $input)) {
    $input = 'http://' . $input;
}
$urlParts = parse_url($input);

// remove www
$domain = preg_replace('/^www\./', '', $urlParts['host']);

// echo $domain;
?>
input:<br>
http://www.google.co.uk/<br>
<br>
result:<br>
<?php echo $domain; ?>
<br>
<br> 
<br>
<br>
<br>
<br>
<br>
<br>
  
  
  
  
  
  
  
  
  
  
  
  
 <div id="frontWrapper_headerMega">SNIPPETS - HTML5</div>
 
 <br>
<br>
html_snippets<br>
<br><br>
HTML5 STUFF<br>
<br>
session and local storage !!!<br>
to stiore things like the drag n drop code
& TO STORE DARK MODE EC !!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!
<br>



<br>


 
<?php /*?> 
<pre class="brush:javascript">



HMTL5 STUFF<br>
header / footer<br>
article / aside ,etc etc <br>
section ...?<br>
<br>
New content-specific elements, like <article>, <footer>, <header>, <nav>, <section>
<br>
<br>

New form controls, like calendar, date, time, email, url, search<br>
<br>
HTML5 New Elements<br>
http://www.w3schools.com/html/html5_new_elements.asp<br>
<br>
section<br>
<br>
main ??? for the main content <br>
Definition and Usage<br>
The <main> tag specifies the main content of a document.<br>
<br>
The content inside the <main> element should be unique to the document. <br>
It should not contain any content that is repeated across documents such as sidebars, navigation links, 
copyright information, site logos, and search forms.<br>
<br>
Note: There must not be more than one <main> element in a document. <br>
The <main> element must NOT be a descendent of an <article>, <aside>, <footer>, <header>, or <nav> element.
 <br>
 <br>
 
 
 
</pre> <?php */?>


 
    
    </div> <!-- /frame -->       
</section> 





            

					<!-- InstanceEndEditable -->
  <?php 
  // PAGE CONTENT END - Sticky Footer Solved By FlexBox - end
  include ('components/template/page/page_content_end.php'); 
  ?> 	
  <?php 
  // FOOTER
  include('components/template/footer.php'); 
  ?>
  <?php 
  // COOKIES POPUP
  include('components/cowo_cookies.php'); 
  ?> 
  <?php // include "components/side_menu.php"; ?>   
<?php 
// PAGE END
include ('components/template/page/page_end.php'); 
?> 
<?php 
// SCRIPTS
include('config/scripts.php'); 
?>
<!-- InstanceBeginEditable name="scripts" -->



<!-- PACK -->
<script src="js/plugins/SyntaxHighlighter/shCore.js"></script>
<script src="js/plugins/SyntaxHighlighter/shBrushJScript.js"></script>
<script>
	SyntaxHighlighter.all()
</script>



<!-- InstanceEndEditable -->
<?php // include('config/credits.php'); ?>  
</body>
<!-- InstanceEnd --></html>