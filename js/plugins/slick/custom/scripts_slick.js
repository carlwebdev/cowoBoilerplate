$(document).ready(function() {
	
    /*
     *  jquery carousel SLICK para home pasos y home voces
     */
 
    // hay que poner el nombre de la clase a la cual se aplica el slick carousel
    $('.slider_single').slick({	
	// centerMode: true, // interesante para la navegacion desplegable dentro de un 360 .. !!!	
        dots: true,
				// dots: false,
        infinite: false,
        // speed: 300,
				speed: 800,
	// slidesToShow: 1, // PARA EL CASO DE HOME ARRIBA PARA 360'S 
        // slidesToShow: 3,
				// slidesToShow: 2, // WOWOWOWOWOWOW !!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!
				slidesToShow: 1,
        // slidesToScroll: 3,
        // slidesToScroll: 2,
        slidesToScroll: 1, // solo 1 mientras tengan pocos articulos a mostrar
	// arrows: false,
	
				
        responsive: [{
            breakpoint: 1024,
            settings: {
                // slidesToShow: 3,
                // slidesToScroll: 3,
                // infinite: true,
								// infinite: false,
                // dots: true,
								// centerMode: true
								dots: true
            }
        }, {
            breakpoint: 599,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 1,
								// centerMode: true,
								// infinite: false,
								arrows: false,
								dots: true
            }
        }]
				
				
				
				
    });

	

});