$(document).ready(function () {
  $(".promo__slider").slick({
    dots: true,
    infinite: true,
    speed: 500,
    fade: true,
    cssEase: "linear",
    autoplay: false,
    autoplaySpeed: 5000,
    swipe: true,
    arrows: true,
    appendDots: $(".slider__controls-dots"),
    appendArrows: $(".slider__controls-btns"),
  });

  $(".results__slider").slick({
    infinite: true,
    speed: 500,

    autoplay: false,
    autoplaySpeed: 5000,
    swipe: true,
    arrows: true,
    cssEase: "linear",
    slidesToShow: 3,
    slidesToScroll: 3,
    responsive: [
      {
        breakpoint: 992,
        settings: {
          slidesToShow: 2,
          slidesToScroll: 2,
        },
      },
      {
        breakpoint: 768,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1,
        },
      },
    ],
  });
});
