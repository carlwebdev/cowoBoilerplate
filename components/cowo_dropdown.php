<? 
/*
 * cowo-Boilerplate
 * Built by cowowo.cat
 * Project: 
 * Component: Cookies (section)
 * Filename: cookies.php
 */
 
 // multiple dropdownns is basically an accoridon without interrconcectivity acknowlsedggement
?>
<div class="cowo-dropdown">  
  <?php for ($i = 1; $i <= 4; $i++){ ?>
  
    <div class="dropdown-pair jq_dropdown">   
      <div class="dropdown-header jq_dropdown_shown">
      	<?php /*?>diferenciar entre trigger, y header... <?php */?>
        <!--CONTENT-->
        <div class="dropdown-trigger jq_dropdown_trigger">Show More / Show Less + icons</div>       
      </div> <!-- /genericDropdownItem_top -->
      <div class="dropdown-target jq_dropdown_hidden">  
          <?php include('components/dev/lorem/slipsum.php'); ?>
          <?php include('components/dev/lorem/slipsum.php'); ?>
          <?php include('components/dev/lorem/slipsum.php'); ?>
      </div> <!-- /genericDropdownItem_bottom -->                  
    </div> <!-- /dropdown-pair -->
    
    
    
    
    
  
<?php /*?>    <div class="dropdown-pair jq_dropdown">   
    
      <div class="genericDropdownItem_top jq_dropdown_shown">
      
      
          CONTENT
          <div class="genericDropdownItem_top_trigger jq_dropdown_trigger">OPEN</div>  
          
             
      </div> <!-- /genericDropdownItem_top -->
      <div class="dropdown-target jq_dropdown_hidden">  
          <? include('components/dev/lorem/slipsum.php'); ?>
      </div> <!-- /genericDropdownItem_bottom -->
                       
    </div> <!-- /dropdown-pair --> <?php */?>
    
    
        
  <? }  ?>
</div> <!-- /cowo-dropdown --> 