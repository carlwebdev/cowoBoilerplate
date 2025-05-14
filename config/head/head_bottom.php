<?php
/*
 * CONFIG - Head bottom
 */ 
?>
<?php /*?><meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0"><?php */?>
<!-- <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, user-scalable=yes" /> -->
<!-- --> <meta name="viewport" content="width=device-width, initial-scale=1" /> 
<!-- <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=yes" /> -->




<?php
// Random versioning for cache busting
$randomVersion = '?v=' . mt_rand(10000, 99999);
// Alternative: using timestamp
// $randomVersion = '?v=' . time();
?>

<!-- <link rel="stylesheet" href="assets/style/css/global.css" > --> 
 <!-- 
<link rel="stylesheet" href="https://cowoboilerplate.carlwebdev.com/assets/style/scss/global.css<?php echo $randomVersion; ?>" >  
-->
 <!-- <link rel="stylesheet" href="/assets/style/scss/global.css<?php echo $randomVersion; ?>" >   -->
 <link rel="stylesheet" href="assets/style/scss/global.css<?php echo $randomVersion; ?>" >  

<!-- LIVE SASS COMpILER - VSCODE EXTENSION "watch sass" - https://marketplace.visualstudio.com/items?itemName=ritwickdey.live-sass -->

<?php /*?>IF DEVELOPMENT STATUS = DEVELIPMENT (VS PRODUCTION, etc)<?php */?>  
<?php /*?><link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/assets/style/css/dev.css" media="all" /><?php */?>






<?php 
/*
 * CSS DEBUGGING TOOL(S)

<link rel="stylesheet" href="assets/style/css/dev.css" media="all" />

 */
?>






<?php
/*  
 * CSS
 */
?>  
<?php /*?><link rel="shortcut icon" href="assets/favicon/favicon.ico"><?php */?>
<link rel="shortcut icon" href="assets/favicon/Factory-Favicon-blue.jpg">
<?php
/*
 * ICON FONT - 3 OPTIONS
 */ 
?>
<link rel="stylesheet" href="assets/fonts/icon-font/styles.css"> <?php /*?>WTF ????<?php */?>
<?php /*?>DEV - FONTAWESOME - MY PEERONAL ACCOUNT, ALSO UNSSED IN CJNET ETC MAYBE STIL IN COWOW ETC <?php */?>
<script src="https://kit.fontawesome.com/ea3e68ac9e.js" crossorigin="anonymous"></script>  
<?php /*?>OK, USING MD ICONS NOW...<?php */?>
<?php /*?> http://google.github.io/material-design-icons/ - HAS INSTRUCTIONS FOR WHEN SELF HOSTING THE FONT 	<?php */?>
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">




<!-- CIOSN COPIED FOMR LINKS DASHVBARD, WERE THE OUTLINED VERISON WETAVER.. -->

<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />




<script src="js/dark-mode-check-head.js"></script> 