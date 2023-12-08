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

    var placemarks = [
      {
        coordinates: [61.263354, 73.432163],
        properties: {
          hintContent: "oasisfit",
          name: "oasisfit",
          address: "Сургут",
          link: "https://oasisfit.ru/",
        },
      },
      {
        coordinates: [64.541724, 40.529264],
        properties: {
          hintContent: "palestrafitness",
          name: "palestrafitness",
          address: "Архангельск",
          link: "https://palestrafitness.ru/",
        },
      },
      {
        coordinates: [55.382472, 37.53959],
        properties: {
          hintContent: "zaruba",
          name: "zaruba",
          address: "Подольск",
          link: "pd.zaruba-fitness.ru",
        },
      },
      {
        coordinates: [55.755819, 37.617644],
        properties: {
          hintContent: "lesfitness",
          name: "lesfitness",
          address: "Москва",
          link: "yoga.lesfitness.ru/",
        },
      },
      {
        coordinates: [55.804162, 37.322934],
        properties: {
          hintContent: "vsesvoifit",
          name: "vsesvoifit",
          address: "Красногорск",
          link: "https://vsesvoifit.ru/",
        },
      },
      {
        coordinates: [55.820172, 37.312325],
        properties: {
          hintContent: "alex-fit",
          name: "alex-fit",
          address: "Красногорск",
          link: "alex-fit.ru",
        },
      },
      {
        coordinates: [55.901268, 37.700559],
        properties: {
          hintContent: "worldclass-myt",
          name: "worldclass-myt",
          address: "Мытищи",
          link: "worldclass-myt.ru",
        },
      },
      {
        coordinates: [55.655493, 37.484667],
        properties: {
          hintContent: "zaruba",
          name: "zaruba",
          address: "Москва",
          link: "https://uz.zaruba-fitness.ru/",
        },
      },
      {
        coordinates: [55.824172, 37.503603],
        properties: {
          hintContent: "fitnessnova",
          name: "fitnessnova",
          address: "Москва",
          link: "fitnessnova.ru",
        },
      },
      {
        coordinates: [55.58931, 37.454034],
        properties: {
          hintContent: "50gymmoscow",
          name: "50gymmoscow",
          address: "Адрес метки 1",
          link: "50gymmoscow.ru",
        },
      },
      {
        coordinates: [45.027355, 39.048732],
        properties: {
          hintContent: "50gym-offer",
          name: "50gym-offer",
          address: "Краснодар",
          link: "50gym-offer.ru",
        },
      },
      {
        coordinates: [55.783124, 37.678272],
        properties: {
          hintContent: "limestone",
          name: "limestone",
          address: "Сургут",
          link: "https://limestone.su",
        },
      },
      {
        coordinates: [51.685211, 39.128188],
        properties: {
          hintContent: "castavrn",
          name: "castavrn",
          address: "Воронеж",
          link: "castavrn.ru",
        },
      },
      {
        coordinates: [55.681432, 37.29806],
        properties: {
          hintContent: "o.n-fit",
          name: "o.n-fit",
          address: "Адрес метки 1",
          link: "https://www.o.n-fit.ru/",
        },
      },
      {
        coordinates: [55.732271, 37.412586],
        properties: {
          hintContent: "neo-stream",
          name: "neo-stream",
          address: "Москва",
          link: "https://neo-stream.ru/",
        },
      },
      {
        coordinates: [55.805022, 37.419251],
        properties: {
          hintContent: "s.n-fit",
          name: "s.n-fit",
          address: "Москва",
          link: "https://s.n-fit.ru/",
        },
      },
      {
        coordinates: [55.800428, 37.726807],
        properties: {
          hintContent: "selform",
          name: "selform",
          address: "Москва",
          link: "https://selform.fitness/",
        },
      },
      {
        coordinates: [61.248409, 73.424258],
        properties: {
          hintContent: "vifit",
          name: "vifit",
          address: "Сургут",
          link: "https://vifit.su/",
        },
      },
    ];

    // Создаем метки и добавляем их в кластеризатор
    for (var i = 0; i < placemarks.length; i++) {
      var placemark = new ymaps.Placemark(
        placemarks[i].coordinates,
        {
          hintContent: placemarks[i].properties.hintContent,
          balloonContent:
            '<div class="balloonHead"><strong><a target="_blank" href="' +
            placemarks[i].properties.link +
            '">' +
            placemarks[i].properties.name +
            "</a></strong></div><p>" +
            placemarks[i].properties.address +
            "</p>",
        },
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
