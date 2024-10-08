// JavaScript Document
// SCRIPT - jQuery Accordion

$(document).ready(function(){	
	
	/* 1 -  HIDE all "accordion_bottom" - CAN BE DONE THROUGH CSS DIRECTLY ! DUGH... */
	$('.accordion-target').hide();
	
	/* 2 -  SHOW the 1st "accordion_bottom" - OPTIONAL!!!  */
	// $('#accordion_wrapper .accordion_bottom:first').show(); // not correct synthax 
	// $('#accordion_wrapper .accordion_item:first .accordion_bottom').show(); // OK, ALSO WORKS
	$('.cowo-accordion .accordion-pair:first-of-type .accordion-target').show(); // OPTIONAL UI - and could also be shown through CSS INSTEAD, IT DOESNT DEPEND ON CLICK NOR INTERACTIONS...


	$('.cowo-accordion .accordion-pair:first-of-type .accordion-trigger').addClass('is-active');

	/* 3 - select a top */
	$('.accordion-trigger').click(function(){ 
	
		// removeClass active from all tops
		$(this).find('.accordion_top').removeClass('is-active'); // AIN'T DOING NOTHING !!!!
		// $(this).removeClass('is-active');
		// addClass active to the selected top
		// $(this).addClass('is-active'); 
		$(this).toggleClass('is-active'); 
		
			
		// 4 - HIDE all open accordion_bottom
		$('.accordion-target').hide(0); 
		// $('.accordion_bottom').toggle(0);
		
		// 5 - SHOW the selected accordion_bottom
		// $(this).parent('.accordion_item').find('.accordion_bottom').toggle(0);
		$(this).parent('.accordion-pair').find('.accordion-target').show(0);

		// OBVIOUSLY, there's nothing to close the bottom if it is already opene....
		// when clicking top, add active to its bottom. if click top agaion, and bottom is active, then remove class active
		// it is the class active taht must denote visibility. display, noth the hide / show of the jquery ...
			
	});
	







	$('.accordion_top').click(function(){ 
		
		if ( $(".accordion_top").hasClass("is-active") ) 
			  {
			  $(".accordion_top").removeClass()
			  };
    		
	});
	




/*
	$('.accordion_top.active').click(function(){ 
 
		$(this).removeClass('active'); 
		$(this).parent('.accordion_item').find('.accordion_bottom').hide(0);
	});	
*/
	
});