<?php 
/*
 * HTML
 * Form - Contact
 */
?> 


<?php /*?>todo - build masonry grid sowmeher eon thsi thing eee !!!!!!!<?php */?>


<?php /*?>TODO - BUTTON GROUP LNE, WITH MAIN AND ASIDE ....<?php */?>


<form>

  <div class="formLine">  
    <label for="name">Name</label>
    <input type="text" placeholder="Name" id="name">
  </div> 				
  <div class="formLine">  
    <label for="email">Email</label>
    <input type="email" placeholder="Email" id="email"> <!-- IT AUTOVALIDATES !!! -->
  </div> 
  <div class="formLine">                      
    <label for="message">Message</label>
    <textarea name="message" placeholder="Message" id="message"></textarea>
  </div> 
  <div class="formLine"> 
    <input type="submit" value="Send">
    <!--
    MUST FIX TAB FOCUS STATE OF THIS BUTTON !!! GET SOME OUTLIINE !! OR STH !!! REVERT TO DEFAULT IF NOT BETER
    -->
  </div>
  
</form>