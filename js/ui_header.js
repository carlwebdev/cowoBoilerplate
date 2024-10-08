/* 
 *
 *
 * UI - HEADER
 *
 * 
 */ 

/* - - - COPIED FOMR INFOOOD (LESS COMPLEX THAN WP EIMOE SCENARIO ) - - - - - -- - 
 + HEADER - DROPDOWNS SITUATION - SCRIPT_HEADER_DROPDOWNS
 */
// HEADER - DROPDOWN - NAV   
// // // $(document).ready(function(){	
	// // // $('.jgTrigger_nav').click(function(){  // TODO - MAKE IT A BUTTON !!!!!!!!!!!!!!!!!!!!!!!!!!!!
    
    /* 
    $('body').toggleClass('noscroll'); // TEST 
    
    
    $('.searchicon').removeClass('is-active'); // TEST 
    // $('.navicon').addClass('is-active'); // TEST 
    $('.navicon').toggleClass('is-active'); // TEST 
    
    // $('.jgTarget_search').slideUp(200); // TEST 
    $('.jgTarget_search').slideUp(0); // TEST 
		// $('.jgTarget_nav').slideToggle(200); 
		$('.jgTarget_nav').slideToggle(100); 
    */
    
    // // // $('.jgTarget_nav').slideToggle(100); 
    
	// // // });
// // // });






/* 
 * UI - HEADER OPTIONS
 */
$(document).ready(function(){	
	// $('.button[role=trigger_nav]').click(function(){ // GOAL IS TO MAKE A GENERIC BUTTON - OBS, PONIA .button y no button a secas !! timmy !!!
  // $('button[role=trigger_nav]').click(function(){ // GOAL IS TO MAKE A GENERIC BUTTON - OBS, PONIA .button y no button a secas !! timmy !!!
  $('[role=trigger_nav]').click(function(){ 
    // $('div[role=target_nav]').slideToggle(100); // creo que este era el issue,. el target con role... 
    $('[role=target_nav]').slideToggle(100);
    // $('.header_dropdowns.case-nav').slideToggle(100); / /NOW WORKED AHGAIN
    // $(this).hide(100);
	});
});

/*
$(document).ready(function(){	
	$('header').click(function(){ // GOAL IS TO MAKE A GENERIC BUTTON
    // $('div[role=target_nav]').slideToggle(100); // creo que este era el issue,. el target con role... 
    // $('.header_dropdowns.case-nav').slideToggle(100);
    $(this).hide(100); // WORKS
	});
});
*/



$(document).ready(function(){	
  $('[role=trigger_search]').click(function(){     
    $('[role=target_search]').slideToggle(100);
	});
});
$(document).ready(function(){	
  $('[role=trigger_language]').click(function(){     
    $('[role=target_language]').slideToggle(100);
	});
});
$(document).ready(function(){	
  $('[role=trigger_profile]').click(function(){     
    $('[role=target_profile]').slideToggle(100);
	});
});
$(document).ready(function(){	
  $('[role=trigger_share]').click(function(){     
    $('[role=target_share]').slideToggle(100);
	});
});








$(document).ready(function(){	
  $('[role=trigger_settings]').click(function(){     
    $('[role=target_settings]').slideToggle(100);
	});
});
