$(document).ready(function () {
  $(".burger").click(function () {
    $("html").toggleClass("open");
    return false;
  });

  var e = document.querySelectorAll('input[type="tel"]');
  jQuery(e).inputmask({
    mask: ["+7 (999) 999 99 99", "8 (999) 999 99 99"],
    greedy: !1,
    placeholder: "_",
  });

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
  ymaps.ready(function () {
    var myMap = new ymaps.Map(
        "map",
        {
          center: [55.751574, 37.573856],
          zoom: 9,
        },
        {
          searchControlProvider: "yandex#search",
        }
      ),
      // Создаём макет содержимого.
      MyIconContentLayout = ymaps.templateLayoutFactory.createClass(
        '<div style="color: #FFFFFF; font-weight: bold;">$[properties.iconContent]</div>'
      ),
      myPlacemark = new ymaps.Placemark(
        myMap.getCenter(),
        {
          hintContent: "Собственный значок метки",
          balloonContent: "Это красивая метка",
        },
        {
          // Опции.
          // Необходимо указать данный тип макета.
          iconLayout: "default#image",
          // Своё изображение иконки метки.
          iconImageHref: "template/images/marker.png",
          // Размеры метки.
          iconImageSize: [30, 42],
          // Смещение левого верхнего угла иконки относительно
          // её "ножки" (точки привязки).
          iconImageOffset: [-5, -38],
        }
      ),
      myPlacemarkWithContent = new ymaps.Placemark(
        [55.661574, 37.573856],
        {
          hintContent: "Собственный значок метки с контентом",
          balloonContent: "А эта — новогодняя",
          iconContent: "12",
        },
        {
          // Опции.
          // Необходимо указать данный тип макета.
          iconLayout: "default#imageWithContent",
          // Своё изображение иконки метки.
          iconImageHref: "template/images/marker.png",
          // Размеры метки.
          iconImageSize: [48, 48],
          // Смещение левого верхнего угла иконки относительно
          // её "ножки" (точки привязки).
          iconImageOffset: [-24, -24],
          // Смещение слоя с содержимым относительно слоя с картинкой.
          iconContentOffset: [15, 15],
          // Макет содержимого.
          iconContentLayout: MyIconContentLayout,
        }
      );

    myMap.geoObjects.add(myPlacemark).add(myPlacemarkWithContent);
  });
});
// ymaps.ready(initMap);

// function initMap() {
//   var myMap = new ymaps.Map("map", {
//     center: [55.76, 37.64],
//     zoom: 6,
//   });

//   var myPlacemark = new ymaps.Placemark([55.76, 37.64], {
//     hideIconOnBalloonOpen: false,
//     iconLayout: "default#image",
//     iconImageHref: "template/images/marker.png",
//     iconImageSize: [60, 85],
//     iconImageOffset: [-30, -85],
//   });

//   myMap.geoObjects.add(myPlacemark);
// }
