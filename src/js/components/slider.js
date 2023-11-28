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
    arrows: false,
  });
  // Добавляем обработчики событий для кастомных кнопок
  $(".slider__prev").on("click", function () {
    $(".promo__slider").slick("slickPrev");
  });

  $(".slider__next").on("click", function () {
    $(".promo__slider").slick("slickNext");
  });
  $(".results__slider").slick({
    infinite: true,
    speed: 500,
    fade: true,
    cssEase: "linear",
    autoplay: false,
    autoplaySpeed: 5000,
    swipe: true,
    arrows: false,
    slidesToShow: 3,
    slidesToScroll: 3,
  });
  // Добавляем обработчики событий для кастомных кнопок
  $(".slider__prev").on("click", function () {
    $(".results__slider").slick("slickPrev");
  });

  $(".slider__next").on("click", function () {
    $(".results__slider").slick("slickNext");
  });
});
