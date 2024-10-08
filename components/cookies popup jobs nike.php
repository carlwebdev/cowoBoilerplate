<?php /*
 * cowo-Boilerplate
 * Built by cowowo.cat
 * Project: 
 * Component: Cookies (section)
 * Filename: cookies.php
 */
?>
<?php if(!isset($_COOKIE["nikespeedfest"])) {	?>
<div id="txtHint_cookie">
  <div class="modal_leydecookies">
    <div class="frame">
      <div class="leydecookies_content">
        <div class="text">
            <?php /*?>Aquesta web utilitza 'cookies' propies i de tercers per oferir-te una millor experiència i servei. 
            Al navegar o utilitzar els nostres serveis, acceptes l'ús que fem d'elles.<?php */?>
            <?php if($_SESSION["lang"]=='de'){echo "Diese Website verwendet Cookies";}
            elseif($_SESSION["lang"]=='es'){echo "Este sitio web utiliza cookies";}
            elseif($_SESSION["lang"]=='fr'){echo "Ce site web utilise des cookies";}
            elseif($_SESSION["lang"]=='en'){echo "This website uses cookies";} ?>                 
        </div>  
        <div class="options">
          <ul>
            <li><a onclick="ajaxcookie(1)">OK</a></li>
            <li><a href="cookies.php">Info</a></li>
          </ul>                
        </div>         
      </div> <!-- /leydecookies_content --> 
    </div> <!-- /frame -->   
  </div> <!-- /modal_leydecookies -->
</div> <!-- /txtHint_cookie -->
<?php } ?>