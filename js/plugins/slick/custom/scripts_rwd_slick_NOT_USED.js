/*
 *  jquery carousel SLICK para ...
 */
$(document).ready(function() {
	
    // hay que poner el nombre de la clase a la cual se aplica el slick carousel
    $('.slider_home_multiple').slick({	
				// centerMode: true, // interesante para la navegacion desplegable dentro de un 360 .. !!!	
        // dots: true,
				dots: false,
        infinite: false,
        speed: 300,
        slidesToShow: 4,
        slidesToScroll: 1, // solo 1 mientras tengan pocos articulos a mostrar
				// arrows: false,
        responsive: [{
            breakpoint: 1024,
            settings: {
                slidesToShow: 3,
								slidesToScroll: 1,
                // infinite: true,
								infinite: false,
                // dots: true,
								// centerMode: true
            }
        }, {
            breakpoint: 800,
            settings: {
                slidesToShow: 2,
								slidesToScroll: 1,
								// centerMode: true,	
								infinite: false
            }
        }, {
            breakpoint: 599,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 1,
								// centerMode: true,
								infinite: false
            }
        }]
    });

});