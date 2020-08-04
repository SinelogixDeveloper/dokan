$(document).ready(function() {
    $('.owl-carousel.banner').owlCarousel({
      loop: true,
      autoplay:true,     
      smartSpeed:750,
      nav:false,
      dots:true,
      center:true,
      responsiveClass: true,
      responsive: {
        0: {
          items: 1
        },
        600: {
          items: 1
        },
        1000: {
          items: 1
        }
      }
    })
  })




$(document).ready(function() {
    $('.owl-carousel.seller').owlCarousel({
      loop: true,
      autoplay:true,     
      smartSpeed:750,
      nav:false,
      dots:true,
      center:true,
      responsiveClass: true,
      responsive: {
        0: {
          items: 1
        },
        600: {
          items: 1
        },
        1000: {
          items: 1
        }
      }
    })
  })

 
  $(document).ready(function() {
    $('.owl-carousel.cat_slider').owlCarousel({
      loop: true,
      autoplay:true,
      smartSpeed:300,   
      dots:false, 
      nav:true,
      navText:["<div class='nav-btn prev-slide'></div>","<div class='nav-btn next-slide'></div>"],
      autoplayHoverPause:true,
      margin: 30,
      responsiveClass: true,
      responsive: {
        0: {
          items: 1,
        },
        350: {
          items: 2,
          margin: 10,
        },
        600: {
          items: 3,
          margin: 20,
        },
        1000: {
          items: 4,
          margin: 25,
        },
        1200: {
          items: 5,
          margin: 25,
        },
        1400: {
          items: 6,
          
        }
      }
    })
  })


  $(document).ready(function() {
    $('.owl-carousel.best_off').owlCarousel({
      loop: true,
      autoplay:true,
      smartSpeed:300,   
      dots:false, 
      nav:true,
      navText:["<div class='nav-btn prev-slide'></div>","<div class='nav-btn next-slide'></div>"],
      autoplayHoverPause:true,
      margin: 30,
      responsiveClass: true,
      responsive: {
        0: {
          items: 1,
          margin: 15,
        },
        350: {
          items: 2,
          margin: 10,
        },
        600: {
          items: 3,
          margin: 15,
        },
        1000: {
          items: 4,
          margin: 25,
        },
        1200: {
          items: 5,
          margin: 25,
        },
        1400: {
          items: 6,
          
        }
      }
    })
  })

  $(document).ready(function() {
    $('.owl-carousel.best_sellers').owlCarousel({
      loop: true,
      autoplay:true,
      smartSpeed:300,   
      dots:false, 
      nav:true,
      navText:["<div class='nav-btn prev-slide'></div>","<div class='nav-btn next-slide'></div>"],
      autoplayHoverPause:true,
      margin: 30,
      responsiveClass: true,
      responsive: {
        0: {
          items: 1,
          margin: 15,
        },
        350: {
          items: 2,
          margin: 10,
        },
        600: {
          items: 3,
          margin: 15,
        },
        1000: {
          items: 4,
          margin: 25,
        },
        1200: {
          items: 5,
          margin: 25,
        },
        1400: {
          items: 6,
          
        }
      }
    })
  })

  $(document).ready(function() {
    $('.owl-carousel.new_arrivals').owlCarousel({
      loop: true,
      autoplay:true,
      smartSpeed:300,   
      dots:false, 
      nav:true,
      navText:["<div class='nav-btn prev-slide'></div>","<div class='nav-btn next-slide'></div>"],
      autoplayHoverPause:true,
      margin: 30,
      responsiveClass: true,
      responsive: {
        0: {
          items: 1,
          margin: 15,
        },
        350: {
          items: 2,
          margin: 10,
        },
        600: {
          items: 3,
          margin: 15,
        },
        1000: {
          items: 4,
          margin: 25,
        },
        1200: {
          items: 5,
          margin: 25,
        },
        1400: {
          items: 6,
          
        }
      }
    })
  })

  $(document).ready(function() {
    $('.owl-carousel.mosting_rating').owlCarousel({
      loop: true,
      autoplay:true,
      smartSpeed:300,   
      dots:false, 
      nav:true,
      navText:["<div class='nav-btn prev-slide'></div>","<div class='nav-btn next-slide'></div>"],
      autoplayHoverPause:true,
      margin: 30,
      responsiveClass: true,
      responsive: {
        0: {
          items: 1,
          margin: 15,
        },
        350: {
          items: 2,
          margin: 10,
        },
        600: {
          items: 3,
          margin: 15,
        },
        1000: {
          items: 4,
          margin: 25,
        },
        1200: {
          items: 5,
          margin: 25,
        },
        1400: {
          items: 6,
          
        }
      }
    })
  })

  $(document).ready(function() {
    $('.owl-carousel.best_off').owlCarousel({
      loop: true,
      autoplay:true,
      smartSpeed:300,   
      dots:false, 
      nav:true,
      navText:["<div class='nav-btn prev-slide'></div>","<div class='nav-btn next-slide'></div>"],
      autoplayHoverPause:true,
      margin: 30,
      responsiveClass: true,
      responsive: {
        0: {
          items: 1,
          margin: 15,
        },
        350: {
          items: 2,
          margin: 10,
        },
        600: {
          items: 3,
          margin: 15,
        },
        1000: {
          items: 4,
          margin: 25,
        },
        1200: {
          items: 5,
          margin: 25,
        },
        1400: {
          items: 6,
          
        }
      }
    })
  })

  // burger menu


  if ($(window).width() < 900)
{
function openNav() {
  document.getElementById("nav_main").style.width = "100%";
  document.getElementById("nav_main").style.left = "0";
  document.getElementById("nav_main").style.overflow = "scroll";
  document.getElementById("nav_main").style.opacity = "1";
}

function closeNav() {
  document.getElementById("nav_main").style.width = "320px";
  document.getElementById("nav_main").style.left = "-380px";
  document.getElementById("nav_main").style.overflow = "hidden";
  document.getElementById("nav_main").style.opacity = "0";
}
 function openFilter() {

     document.getElementById("psb").style.left ="0";
 }


function closeFilter() {

   document.getElementById("psb").style.left ="-450px";
  
}

function bgOn(){

    document.getElementById("sideLI").style.opacity = "0";

}


$( ".msecond" ).prepend( $( ".secondary-menu" ) );
}



window.onscroll = function() {myFunction()};

var header = document.getElementById("header");
var banner = document.getElementById("main_banner");
var sticky = header.offsetTop;

function myFunction() {
  if (window.pageYOffset > sticky) {
    header.classList.add("sticky");
    banner.classList.add("banr_stik");
  } else {
    header.classList.remove("sticky");
    banner.classList.remove("banr_stik");
  }
}



$(document).ready(function(){
	$('.menu-drop').hide();
	if ($(window).width() > 900) {
		$(".mega_menu").hover(function() {
			$(this).children(".menu-drop").show();
		}, function() {
			$(this).children(".menu-drop").hide();
		});
	
	}

});


if ($(window).width() < 901) {
  $('.mega_menu').click(function(){	 	
     $(this).closest('.mega_menu').find(".menu-drop").slideToggle();	 	
  });

}


if ($(window).width() < 768) {
  $( ".msecond" ).prepend( $( ".top-language-wrap" ) );
  $( ".msecond" ).prepend( $( ".hd_login" ) );
}


$(document).ready(function(){
  if ($(window).width() > 900) {
  $(".search-box").focusin(function(){
    $(this).addClass("serch_f");
  });
  $(".search-box").focusout(function(){
    $(this).removeClass("serch_f");
  });
}
});


$('.placeholder').click(function() {
  $(this).siblings('input').focus();
});
$('.form-control').focus(function() {
  $(this).siblings('.placeholder').hide();
});
$('.form-control').blur(function() {
  var $this = $(this);
  if ($this.val().length == 0)
    $(this).siblings('.placeholder').show();
});
$('.form-control').blur();


$('.modal').on('show.bs.modal', function () {
  $("body").css('height', '100vh');
}).on("hidden", function () {
        $("body").css('height', 'auto');
});