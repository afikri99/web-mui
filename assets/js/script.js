  $(window).on("load",function() {
    $(window).scroll(function() {
      var windowBottom = $(this).scrollTop() + $(this).innerHeight();
      $(".kanan").each(function() {
        /* Check the location of each desired element */
        var objectBottom = $(this).offset().top + $(this).outerHeight();
        
          /* If the element is completely within bounds of the window, fade it in */
        if (objectBottom < windowBottom) { //object comes into view (scrolling down)
          if ($(this).css("opacity")==0) {$(this).animate({
            paddingLeft:'0px',
            paddingRight:'200px',
            opacity:'1'
          },500);}
        } else { //object goes out of view (scrolling up)
          if ($(this).css("opacity")==1) {$(this).animate({
            paddingLeft:'200px',
            paddingRight:'0px',
            opacity:'0'
          });}
        }
      });
    }).scroll(); //invoke scroll-handler on page-load
  });


  $(document).ready(function(){
    $('.owl-carousel').owlCarousel({
        // items:3,
        loop:true,
        margin:10,
        responsiveClass:true,
        responsive:{
            0:{
                items:1,
                nav:false
            },
            600:{
                items:1,
                nav:false
            },
            1000:{
                items:1,
                nav:false,
                loop:false
            }
        }
    });
  });
  