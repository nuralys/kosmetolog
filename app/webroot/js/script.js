$(document).ready(function() {
	$('.slider').slick({  
	  slidesToShow: 1,
	  slidesToScroll: 1,
	  arrows:false,
	  dots:true
	});
	$('.gal-slider').slick({  
	  slidesToShow: 4,
	  slidesToScroll: 1,
	  arrows:true,
	    responsive: [
    {
      breakpoint: 924,
      settings: {
        slidesToShow: 3,
        slidesToScroll: 1
      }
    },
    {
      breakpoint: 700,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 1
      }
    },
    {
      breakpoint: 400,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1
      }
    }      
    ]
	});
	$('.diplom-slider').slick({
	  slidesToShow: 4,
	  slidesToScroll: 1,
	  arrows:true,  
	  responsive: [
    {
      breakpoint: 924,
      settings: {
        slidesToShow: 3,
        slidesToScroll: 1
      }
    },
    {
      breakpoint: 700,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 1
      }
    },
    {
      breakpoint: 400,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1
      }
    }      
    ] 	
	})	
	$('.quest__heading').on('click', function () {
		if($(this).parent('.quest').hasClass('quest--active')){
			$(this).parent('.quest').removeClass('quest--active');			
		}
		else{
			$('.quest').removeClass('quest--active');
			$(this).parent('.quest').addClass('quest--active');
		}
	});
	$('.mob-menu').on('click', function () {
		if($(this).hasClass('mob-menu--active')){
			$(this).removeClass('mob-menu--active');
			$('.bot-header').removeClass('bot-header--active');			
		}
		else{
			$(this).addClass('mob-menu--active');
			$('.bot-header').addClass('bot-header--active');	
		}
	});
});	