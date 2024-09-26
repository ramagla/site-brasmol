$(function(){

  $(".watch-sld").slick({
      infinite: true,
      slidesToShow: 3,
      slidesToScroll: 1,
      autoplay: true,
      autoplaySpeed: 2000,
      centerMode: true,
      prevArrow: false,
      nextArrow: false,
      responsive: [
          {
            breakpoint: 640,
            settings: {
              slidesToShow: 2,
             
            }
          }
        ]
  });
  
  })
