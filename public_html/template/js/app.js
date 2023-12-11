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
          hintContent: "oasis",
          name: "oasis",
          address: "Сургут, ул. Профсоюзов, 53/2",
          link: "https://oasisfit.ru/",
        },
      },
      {
        coordinates: [64.541724, 40.529264],
        properties: {
          hintContent: "palestra",
          name: "palestra",
          address: "Архангельск",
          link: "https://palestrafitness.ru/",
        },
      },
      {
        coordinates: [55.382472, 37.53959],
        properties: {
          hintContent: "zaruba",
          name: "zaruba",
          address: "Московская область, Подольск, мкр. Климовск, Заводская 24А",
          link: "pd.zaruba-fitness.ru",
        },
      },
      {
        coordinates: [55.755819, 37.617644],
        properties: {
          hintContent: "Шамбала",
          name: "Шамбала",
          address: "Москва, Щелковское шоссе, д. 100 к. 10",
          link: "yoga.lesfitness.ru/",
        },
      },
      {
        coordinates: [55.804162, 37.322934],
        properties: {
          hintContent: "ВСЕ СВОИ",
          name: "ВСЕ СВОИ",
          address:
            "Московская область, г.Красногорск, Ильинское шоссе, дом 14, корпус 1",
          link: "https://vsesvoifit.ru/",
        },
      },
      {
        coordinates: [55.820172, 37.312325],
        properties: {
          hintContent: "alex-fit",
          name: "alex-fit",
          address: "Московская область, г.Красногорск, ул. Дачная 11А",
          link: "alex-fit.ru",
        },
      },
      {
        coordinates: [55.901268, 37.700559],
        properties: {
          hintContent: "worldclass",
          name: "worldclass",
          address: "Мытищи, ул. Благовещенская, с13",
          link: "worldclass-myt.ru",
        },
      },
      {
        coordinates: [55.655493, 37.484667],
        properties: {
          hintContent: "zaruba",
          name: "zaruba",
          address: "Москва, ул. 26-ти Бакинских Комиссаров, д. 7, к. 6",
          link: "https://uz.zaruba-fitness.ru/",
        },
      },
      {
        coordinates: [55.824172, 37.503603],
        properties: {
          hintContent: "fitnessnova",
          name: "fitnessnova",
          address: "Г. МОСКВА, МЕТРО ВОЙКОВСКАЯ СТАРОПЕТРОВСКИЙ ПР-Д, 11К1",
          link: "fitnessnova.ru",
        },
      },
      {
        coordinates: [45.027355, 39.048732],
        properties: {
          hintContent: "50gym",
          name: "50gym",
          address: "г.Краснодар, Стасова 178/1",
          link: "50gym-offer.ru",
        },
      },
      {
        coordinates: [55.783124, 37.678272],
        properties: {
          hintContent: "limestone",
          name: "limestone",
          address: "Москва, Леснорядский переулок, дом 18 строение 6",
          link: "https://limestone.su",
        },
      },
      {
        coordinates: [51.685211, 39.128188],
        properties: {
          hintContent: "CASTA",
          name: "CASTA",
          address: "г. Воронеж, ул. 9 Января, 288А",
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
          address: "г. Москва, Партизанская, 10",
          link: "https://neo-stream.ru/",
        },
      },
      {
        coordinates: [55.805022, 37.419251],
        properties: {
          hintContent: "s.n-fit",
          name: "s.n-fit",
          address: "г. Москва, Исаковского, 33",
          link: "https://s.n-fit.ru/",
        },
      },
      {
        coordinates: [55.800428, 37.726807],
        properties: {
          hintContent: "selform",
          name: "selform",
          address:
            "Москва, Ул. Халтуринская 9 стр. 1, м. Преображенская площадь",
          link: "https://selform.fitness/",
        },
      },
      {
        coordinates: [61.248409, 73.424258],
        properties: {
          hintContent: "vifit",
          name: "vifit",
          address: "Сургут, Университетская улица, 15,",
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
  $(".ajax-form form").live("submit", function (e) {
    var form = $(this);
    var url = $(form).attr("action");
    var id = $(form).parents(".ajax-form").attr("id");
    $(form).css("opacity", "0.5");

    var fio = form.find('input[name="name"]').val();
    var phone = form.find('input[name="phone"]').val();
    var mail = form.find('input[name="email"]').val();

    dataLayer.push({
      event: "formSubmit",
      formid: $(form).find("[name=formid]").val(),
      name: fio,
      phone: phone,
      mail: mail,
    });

    $.ajax({
      type: "POST",
      url: url,
      data: $(form).serialize(),
      cache: false,
      success: function (msg) {
        /* send calltouch */
        try {
          var ct_site_id = "27107";
          var sub = "Заявка";
          var ct_data = {
            fio: fio,
            phoneNumber: phone,
            email: mail,
            subject: sub,
            sessionId: window.call_value,
          };
          if (!!phone || !!mail) {
            jQuery.ajax({
              url:
                "https://api-node8.calltouch.ru/calls-service/RestAPI/requests/" +
                ct_site_id +
                "/register/",
              dataType: "json",
              type: "POST",
              data: ct_data,
              async: false,
            });
          }
        } catch (e) {}
        /* send calltouch */

        msg = $("#" + id, msg).html();
        $("#" + id).html(msg);
        //$(form).parents('.ajax-form').parent().html(msg);
        $(form).css("opacity", "1");
      },
    });
    return false;
  });
  var e = document.querySelectorAll('input[type="tel"]');
  jQuery(e).inputmask({
    mask: ["+7 (999) 999 99 99", "8 (999) 999 99 99"],
    greedy: !1,
    placeholder: "_",
  });
});
