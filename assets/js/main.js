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



/* $('.accord-mobile').click(function() {

    if($(this).css('textAlign')=='left'){

    

    if($(this).siblings().hasClass('d-none')){

        $(this).siblings().removeClass('d-none');
        $(this).siblings().addClass('d-block');
    }else{

        $(this).siblings().addClass('d-none');
    }
}

}); */

$('.accord-mobile').click(function() {

    /* if($(this).css('textAlign')=='left'){ */
    if($(window).width('768px')){

       

    if($(this).siblings().hasClass('accord-mobile-data')){

        $(this).children('span').text('-');
        $(this).siblings().removeClass('accord-mobile-data');
        
    }else{
        $(this).children('span').text('+');
        $(this).siblings().addClass('accord-mobile-data');
    }
}

});

$(window).scroll(function(){

    $scroll=$(window).scrollTop();

    if($scroll>=500){
        $('.float-btn').removeClass('d-none');
    }else{
        $('.float-btn').addClass('d-none');
        
    }

});


$('.feature-items').owlCarousel({
    loop:false,
    margin:20,
    responsiveClass:true,
    responsive:{
        0:{
            items:1,
        },
        400:{
            
            dot:true,
            items:2,
        },
        768:{
            
            dot:true,
            items:3,
        },
        1000:{
            items:4,
        },
        1200:{
            items:5,
        }
    }
});


