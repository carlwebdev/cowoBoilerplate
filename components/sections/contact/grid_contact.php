<?php 
/* 
 * GRID CONTACT 
 */
?>   

<?php 
  // $section_title = 'Stay in touch!'; // Contact form, Contact Us!
  // include('components/dynamic/section_title.php'); // FIOLDER NAMING QUE IMPLIQUE QUE SON VARIABLES ANBLE S.. DYNAMIC 
?> 

<div class="grid_contact">	
  <div class="col">	
    
    <?php 
      $section_title = 'Stay in touch!'; // Contact form, Contact Us!
      include('components/dynamic/section_title.php'); // FIOLDER NAMING QUE IMPLIQUE QUE SON VARIABLES ANBLE S.. DYNAMIC 
    ?> 
    
    <?php 
      // $section_title = 'Stay in touch!'; // Contact form, Contact Us!
      // include('components/dynamic/section_title.php'); // FIOLDER NAMING QUE IMPLIQUE QUE SON VARIABLES ANBLE S.. DYNAMIC 
    ?> 
  
    
    <!--
    TODO - ADD CLASS FOR TEXT, COLOR, ESE GRAY COMO EN GRID FEATURE(D) QUE SE TIENE QU EMOVER A ORGANISMS..,,,
    -->
    <div class="text">
      <?php // include('components/atoms/text_lorem_excerpt.php'); ?>
      <?php include('components/atoms/texts/text_lorem_sentence.php'); ?>
    </div>
    
    
    <hr>
    
    <?php /*?>    
      <div class="m_htmleditor">	
        <hr>
      </div> <!-- /m_htmleditor -->   
    <?php */?>
    
    
    <?php /*?><hr><?php */?>
    
    
    <!-- ABOUT SECTION,  ADD HIOSTOIRY, TIMELINE PLUGIN, FAQS ETC ... (ASIDE FOMR STAFF - AND ADD TESTIMONIALS , ETCE ETECE -->
    <div class="contact_details">	 <!-- also add address.... and icon, and offices & factories icons too ... -->
      <ul>
        <li><?php echo $mdi_email; ?> <span><a href="mailto:<?php echo $website_email; ?>"><?php echo $website_email; ?></a></span></li>
        <li><?php echo $mdi_tel; ?> <span><a href="tel:<?php echo $website_telephone; ?>"><?php echo $website_telephone; ?></a></span></li>
        <?php /*?><li><?php echo $mdi_tel; ?> <span><a href="skype:<?php echo $website_skype; ?>"><?php echo $website_skype; ?></a></span></li> <?php */?>
      </ul>
    </div> <!-- /contact_details -->  
    

    
    
    <div class="social_contact"> <?php /*?>rename th one to social_contact ... por ahora .. en el mis partialmpor si luego los vuelvo a unifiacar o algo ....<?php */?>
      <?php include('components/atoms/list-social.php'); ?>  
    </div> <!-- / social_contact -->

    
    
    
    
    
  </div> <!-- /col -->    
  <div class="col">	
 
    
    
    
    <!---
    / /tener el include de fomr_:contact aqui para usarlo com ejemplo
    fomr_contact
    form_newsletter
    form_search
    form_login
    -->
    
    
    
    
    
    
    
    
    
    <?php /*?>TODO - INCLUDE FOMR_CONTACT  POR EJEMPLO, VS FOMR:LOGIN_FORM_NEWLSTTER, ETC <?php */?>
    <div class="s_form_contact">	
      <!--
      inlcude del form dentro, por coencpt, peor aun asi indeoendiuente de style wrapper que se le ponga, good. jst fo it..
      / folder en incñdues patra componenets / fomrs ... form ebn si suin su wrapper ...
      -->
      <?php include('components/forms/form_contact.php'); ?>
    </div> <!-- /s_form_contact -->  
  
    
    
    
    
    
    
    
    
    
    
    
  
  </div> <!-- /col -->  
</div> <!-- /grid_contact -->   