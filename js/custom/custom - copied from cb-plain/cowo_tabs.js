// SCRIPT - jQuery CSS Tabs
// all tabs have class .tab
// menu must have class .jq_tabsMenu
$(document).ready(function(){
	$('#tabs .tab').hide(); 
	
	$('#tabs .tab:first').show();
	$('#tabs .jq_tabsMenu li:first').addClass('active');
	$('#tabs .jq_tabsMenu li a').click(function(){ 
		$('#tabs .jq_tabsMenu li').removeClass('active');
		$(this).parent().addClass('active'); 
		var currentTab = $(this).attr('href'); 
		$('#tabs .tab').hide();
		$(currentTab).show();
		return false;
	});
});