// JavaScript Document

// AJAX READY !
$(document).on("click",".jq_dropdown_trigger",function(){

	$(this).toggleClass('is_active');
	
	$(this).parents('.jq_dropdown').find('.jq_dropdown_shown').toggleClass('is_active',0);
			
	// $(this).parents('.jq_dropdown').find('.jq_dropdown_hidden').slideToggle(150);
	
	$(this).parents('.jq_dropdown').find('.jq_dropdown_hidden').show(0);
	
});
