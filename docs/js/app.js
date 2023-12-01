
$(document).ready(function () {
  $(".burger").click(function () {
    $("html").toggleClass("open");
    return false;
  });
});

$(document).ready(function () {
  var e = document.querySelectorAll('input[type="tel"]');
  jQuery(e).inputmask({
    mask: ["+7 (999) 999 99 99", "8 (999) 999 99 99"],
    greedy: !1,
    placeholder: "_",
  });
});

$(document).ready(function () {
  $(window).scroll(function (event) {
    body = $("body").scrollTop();
    if (body == 0) {
      body = $("html").scrollTop();
    }
    if (body > 0) {
      $("header").addClass("fixed");
    } else {
      $("header").removeClass("fixed");
    }
  });
});

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
    centerMode: true,
    centerPadding: "60px",
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
