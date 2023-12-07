<section class="map position-relative" id="map-section">
	<div id="map" style="width: 100%; height: 780px;"></div>
</section>
<!-- <script src="//api-maps.yandex.ru/2.0/?load=package.full&lang=ru-RU&apikey=bcdc8e2e-fa4a-44c1-833f-6fb67f82b03d"></script>
<script>
	ymaps.ready(init);

	function init() {

		myMap = new ymaps.Map("Ymap", {
			center: [53.859718, 27.681716],
			zoom: 16,
			behaviors: ["default"]
		});
		myMap.controls.add("zoomControl");


		var myPlacemark = new ymaps.Placemark([53.859971, 27.685673], {}, {
			hideIconOnBalloonOpen: false,
			iconLayout: 'default#image',
			iconImageHref: '/local/templates/atib/images/marker.png',
			iconImageSize: [30, 76],
			iconImageOffset: [-15, -76]
		});
		myMap.geoObjects.add(myPlacemark);
		/*
		    var myGeoObject = new ymaps.GeoObject({
		            // Описываем геометрию геообъекта.
		            geometry: {
		                // Тип геометрии - "Ломаная линия".
		                type: "LineString",
		                // Указываем координаты вершин ломаной.
		                coordinates: [
		                		[53.862100, 27.675140],
		                		[53.861897, 27.675841],
		                		[53.861911, 27.676113],
		                		[53.861552, 27.677427],
		                		[53.861499, 27.677734],
		                		[53.861332, 27.677880],
		                		[53.861049, 27.678439],
		                		[53.861020, 27.678587],
		                		[53.861056, 27.678941],
		                		[53.860763, 27.679755],
		                		[53.860763, 27.679755],
		                		[53.860662, 27.680283],
		                    [53.860100, 27.681748],
		                    [53.859554, 27.682958],
		                    [53.859491, 27.683280],
		                    [53.859662, 27.684296],
		                    [53.859692, 27.684569],
		                    [53.859710, 27.685135],
		                    [53.859687, 27.685485],
		                    [53.859971, 27.685673]
		                ]
		            },
		            // Описываем свойства геообъекта.
		            properties:{
		                // Содержимое хинта.
		                hintContent: "Маршрут от метро",
		                // Содержимое балуна.
		                //balloonContent: "Маршрут от метро"
		            }
		        }, {
		            // Задаем опции геообъекта.
		            // Включаем возможность перетаскивания ломаной.
		            draggable: false,
		            // Цвет линии.
		            strokeColor: "#C6151B",
		            // Ширина линии.
		            strokeWidth: 2
		        });
						myMap.geoObjects
		        .add(myGeoObject); 
		*/

	}
</script> -->