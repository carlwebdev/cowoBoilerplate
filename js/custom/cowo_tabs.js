/*
 * cowo-Boilerplate
 * Script - jQuery
 * cowo-tabs
 */
$(document).ready(function(){
	$('.cowo-tabs .tab').hide(); // ALTERNATIVE - DONE WITH CSS, ALSO TO AVOID FOUC
	$('.cowo-tabs .tab:first').show();
	$('.cowo-tabs-menu li:first').addClass('is-active'); // THIS COULD BE DYNAMIC WITH PHP - but also defined through css
	// $('.cowo-tabs-menu li:first a').addClass('is-active'); // THIS COULD BE DYNAMIC WITH PHP - but also defined through css - now chaning to li a, for hover & is-active in one grouping - later woirry about turning anchor to button, really 
	// .cowo-tabs .cowo-tabs-menu --> .cowo-tabs-menu // not really need to place the menu inside the same wrapper
	$('.cowo-tabs-menu li a').click(function(){ 
		$('.cowo-tabs-menu li').removeClass('is-active');
		$(this).parent().addClass('is-active'); 
		var currentTab = $(this).attr('href'); 
		$('.cowo-tabs .tab').hide();
		$(currentTab).show();
		return false; // VIP, TO PREVENT DEFAULT BEHAVIOR OF THE LINK
	});
});