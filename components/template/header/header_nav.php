<?php 
/*
 * PHP
 * HEADER - NAV MAIN vs nav header OBS, THEN -header must be header.header, ya tu sabes.
 * 
 * 
obs, the menu list, has to be store elsewhere, so that this menu can be vcellae diin desktop version and mobile verison in case the layout has to be renamed etc * 
 * 
 */ 
?>
<nav class="main">
	<ul>
    <?php /*?>
    <li><a href="page-home.php"><?=$pagename_index ?></a></li> 
    <?php */?> <?php /*?>index.php<?php */?>  

    
    <?php /*?>    
		<li><a href="page-products.php"><?=$pagename_products ?></a></li>
		<li><a href="page-pricing.php"><?=$pagename_pricing ?></a></li>
		<li><a href="page-services.php"><?=$pagename_services ?></a>
      <ul>
        <li><a href="page-services.php">Service 1</a></li>
        <li><a href="page-services.php">Service 2</a></li> 
        <li><a href="page-services.php">Service 3</a></li>
      </ul>
    </li> 
    <?php */?>
    
    <?php 
     /*
      * PAGES
      */
    ?>
    <!-- <li><a href="dev-todo.php">TODO<?php /*?> - Default<?php */?></a></li> -->
	  <li><a href="">Pages<?php /*?> - Default<?php */?></a>
		<ul>

      <li><a href="page-blog.php"><?=$pagename_blog ?></a></li>
      
      <li><a href="page-about.php"><?=$pagename_about ?></a>
        <ul>
          <li><a href="page-staff.php"><?=$pagename_staff ?></a></li>
          <li><a href="page-testimonials.php"><?=$pagename_testimonials ?></a></li> 
          <li><a href="page-faq.php"><?=$pagename_faq ?></a></li> 
          <!-- // add offices .... b+b+b !!! etc -->
        </ul>
      </li>
      <li><a href="page-contact.php"><?=$pagename_contact ?>
      
			<!--// CB - PAGE-NAMES LIKE IN WORDPRESS, FOR EASE OF USE... -->
			<?php /*?>keep indesx (throiugh logo) to get to the dashboard pf this thiung the cB system <?php */?>
			<?php 
      /*
       * LEVEL 1 - BASE
       */
      ?>
			<?php /*?><li><a href="page-home.php"><?=$pagename_index ?></a></li><?php */?>  <?php /*?>index.php<?php */?>                              
		  <?php /*?><li><a href="page-about.php"><?=$pagename_about ?></a></li><?php */?> <?php /*?>about.php / about-us.php<?php */?>
		  <?php /*?><li><a href="page-contact.php"><?=$pagename_contact ?><?php */?> <?php /*?>(severakl options!!! with separate html & css files)<?php */?></a></li> <?php /*?>contact.php / contact-us.php<?php */?> 
		  <li><a href="page-legal.php"><?=$pagename_legal ?></a></li> <?php /*?>TODO - legal pages - Legal Notice, Privacy Policy ... <?php */?>
      <?php /*?> ALSO ADD LEGAL NOTICE & PRIVACY POLICY ETC !!!!<?php */?>
      <?php /*?><li><a href="page-news.php"><?=$pagename_news ?></a></li><?php */?>
      <li><a href="page-cookies.php"><?=$pagename_cookies ?></a></li> <?php /*?>cookies.php<?php */?>
		  <li><a href="404.php"><?=$pagename_404 ?></a></li> <?php /*?>404.php // aka Page Not Found<?php */?>
			<?php 
      /*
       * LEVEL 2 - GENERIC CONTENTS
       */
      ?>

      <li><a href="style-blank-page.php">Blank Page<!--(Test Sticky Footer)--></a></li>
      <li><a href="style-sample-page.php"><!--Style - -->Sample Page</a></li> 


		</ul>
	  </li> 



    <?php 
     /*
      * COMPONENTS
      */
    ?>
		<li><a href="page-components.php">Components</a>
      <ul>
        <li><a href="page-products.php"><?=$pagename_products ?></a></li>
        <li><a href="page-pricing.php"><?=$pagename_pricing ?></a></li>
        <li><a href="page-services.php"><?=$pagename_services ?></a>
          <ul>
            <li><a href="page-services.php">Service 1</a></li>
            <li><a href="page-services.php">Service 2</a></li> 
            <li><a href="page-services.php">Service 3</a></li>
          </ul>
        </li>       
      </ul>
    </li>




	  <?php /*?><li><a href="">Modules / grids, eModules / itmsm / etc</a></li>  <?php */?>  
	  <li><a href="">Theme UI</a>
      <ul>
        <li><a href="theme-styleguide.php">StyleGuide</a></li> 
        <li><a href="dev-ui.php">Patterns</a></li>
        <li><a href="dev-components.php">Components</a></li>
        <li><a href="dev-layouts.php">Layouts</a></li>
        <!--      
        <li><a href="dev-templates.php">Templates</a></li>
        <li><a href="dev-snippets.php">Snippets</a></li>
	      <li><a href="">Demo Content</a></li>
        -->
      </ul>
	  </li>
    
    
	<?php /*?>          
	<li><a href="">3 level nav</a>
		<ul>      
		  <li><a href="">Level 2</a></li>
		  <li><a href="">Level 2</a>
			<ul>   
			  <li><a href="">Level 3</a></li>
			  <li><a href="">Level 3</a></li>
			</ul>
		  </li>  
		  <li><a href="">Level 2</a></li>
		</ul>
	  </li>  <?php */?>        

	</ul>
</nav>