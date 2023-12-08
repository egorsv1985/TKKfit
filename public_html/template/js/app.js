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
    // Создаем карту и указываем центр и масштаб
    var myMap = new ymaps.Map("map", {
      center: [55.751574, 37.573856],
      zoom: 4,
    });

    // Создаем макет содержимого для метки
    var MyIconContentLayout = ymaps.templateLayoutFactory.createClass(
      '<div style="color: #FFFFFF; font-weight: bold;">$[properties.iconContent]</div>'
    );

    // Создаем кластеризатор меток
    var clusterer = new ymaps.Clusterer({
      preset: "islands#invertedVioletClusterIcons",
      groupByCoordinates: false,
      clusterDisableClickZoom: true,
      clusterHideIconOnBalloonOpen: false,
      geoObjectHideIconOnBalloonOpen: false,
    });

    // Создаем массив с координатами и свойствами меток
    var placemarks = [
      {
        coordinates: [61.263354, 73.432163],
        properties: {
          hintContent: "Метка 1",
          balloonContent: "Это красивая метка 1",
        },
      },
      {
        coordinates: [64.541724, 40.529264],
        properties: {
          hintContent: "Метка 2",
          balloonContent: "Это красивая метка 2",
        },
      },
      {
        coordinates: [55.382472, 37.53959],
        properties: {
          hintContent: "Метка 3",
          balloonContent: "Это красивая метка 3",
        },
      },
      {
        coordinates: [55.755819, 37.617644],
        properties: {
          hintContent: "Метка 4",
          balloonContent: "Это красивая метка 4",
        },
      },
      {
        coordinates: [55.804162, 37.322934],
        properties: {
          hintContent: "Метка 5",
          balloonContent: "Это красивая метка 5",
        },
      },
      {
        coordinates: [55.820172, 37.312325],
        properties: {
          hintContent: "Метка 6",
          balloonContent: "Это красивая метка 6",
        },
      },
      {
        coordinates: [55.901268, 37.700559],
        properties: {
          hintContent: "Метка 7",
          balloonContent: "Это красивая метка 7",
        },
      },
      {
        coordinates: [55.655493, 37.484667],
        properties: {
          hintContent: "Метка 8",
          balloonContent: "Это красивая метка 8",
        },
      },
      {
        coordinates: [55.824172, 37.503603],
        properties: {
          hintContent: "Метка 9",
          balloonContent: "Это красивая метка 9",
        },
      },
      {
        coordinates: [55.58931, 37.454034],
        properties: {
          hintContent: "Метка 10",
          balloonContent: "Это красивая метка 10",
        },
      },
      {
        coordinates: [45.027355, 39.048732],
        properties: {
          hintContent: "Метка 11",
          balloonContent: "Это красивая метка 11",
        },
      },
      {
        coordinates: [55.783124, 37.678272],
        properties: {
          hintContent: "Метка 12",
          balloonContent: "Это красивая метка 12",
        },
      },
      {
        coordinates: [51.685211, 39.128188],
        properties: {
          hintContent: "Метка 13",
          balloonContent: "Это красивая метка 13",
        },
      },
      {
        coordinates: [55.681432, 37.29806],
        properties: {
          hintContent: "Метка 14",
          balloonContent: "Это красивая метка 14",
        },
      },
      {
        coordinates: [55.732271, 37.412586],
        properties: {
          hintContent: "Метка 15",
          balloonContent: "Это красивая метка 15",
        },
      },
      {
        coordinates: [55.805022, 37.419251],
        properties: {
          hintContent: "Метка 16",
          balloonContent: "Это красивая метка 16",
        },
      },
      {
        coordinates: [55.800428, 37.726807],
        properties: {
          hintContent: "Метка 17",
          balloonContent: "Это красивая метка 17",
        },
      },
      {
        coordinates: [61.248409, 73.424258],
        properties: {
          hintContent: "Метка 18",
          balloonContent: "Это красивая метка 18",
        },
      },
    ];

    // Создаем метки и добавляем их в кластеризатор
    for (var i = 0; i < placemarks.length; i++) {
      var placemark = new ymaps.Placemark(
        placemarks[i].coordinates,
        placemarks[i].properties,
        {
          iconLayout: "default#image",
          iconImageHref: "template/images/marker.png",
          iconImageSize: [30, 42],
          iconImageOffset: [-5, -38],
          iconContentLayout: MyIconContentLayout,
        }
      );
      clusterer.add(placemark);
    }

    // Добавляем кластеризатор на карту
    myMap.geoObjects.add(clusterer);

    // При клике на метку открываем балун
    clusterer.events.add("click", function (e) {
      var target = e.get("target");
      if (target && target.getGeoObjects) {
        myMap.setCenter(target.geometry.getCoordinates(), myMap.getZoom() + 1, {
          duration: 500,
        });
      }
    });
  });
});
