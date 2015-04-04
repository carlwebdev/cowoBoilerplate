<? 
/*
Project: cowo-Boilerplate
Copyright: COWOWO, S.L.
*
COPY - pages & their seo
*/
?>

<? $pagename = $pagename_index ?> 

<? 
if ($pagename==$pagename_index) // INDEX
    {
    ?>
<title><?=$website_name ?></title>
<meta name="description" content="DESCRIPTION"> 
<meta name="keywords" content="KEYWORDS"> 
    <?
    }
elseif ($pagename==$pagename_404) // 404
    {
    ?>
    <title><?=$pagename_404 ?> - <?=$website_name ?></title>
    <meta name="description" content="DESCRIPTION"> 
    <meta name="keywords" content="KEYWORDS">  
    <?
    }												
else // ...
    {
    ?>  	
    
    <?
    }											
?> 
 
 
 
