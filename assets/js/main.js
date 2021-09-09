$('.testimonialSlider').owlCarousel({
    loop:true,
    margin:10,
    responsiveClass:true,
    responsive:{
        0:{
            items:1,
        },
        600:{
            items:1,
        },
        1000:{
            items:1,
        }
    }
});

$(window).scroll(function() {    
    var scroll = $(window).scrollTop();
    if (scroll >= 200) {
        //clearHeader, not clearheader - caps H
        $(".header-menu").addClass("activeheadermenu");
    }
    else {
        $(".header-menu").removeClass("activeheadermenu");
    }
});

$(function() { // Onload
    $(".menuOpen").click(function() {
      $(".menuClosed").show();
      $(".menuOpen").hide();
      $("#mobilemenu").fadeIn();
    });
  
    $(".menuClosed").click(function() {
      $(".menuClosed").hide();
      $(".menuOpen").show();
      $("#mobilemenu").fadeOut();
    });
  
  });