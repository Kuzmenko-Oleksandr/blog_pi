@extends('layouts.main')


@section('content')
    <main class="blog">
        <h1 class="edica-page-title" data-aos="fade-up">Карта пунктів незламності</h1>
        <section class="featured-posts-section">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="col-md-12 mb-5 d-flex justify-content-between align-content-center">
                            <div class="form-group mb-0 w-75" >
                                <input type="text" id="search-input" class="form-control"
                                       placeholder="Пошук пункта незламності">
                            </div>
                            <div class="form-group ml-5 mb-0">
                                <button id="search-button" class="btn btn-primary">Знайти</button>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div id="map" style="height: 500px; width: 100%"></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <script>
        if($('#map').length) {
            function initMap() {
                var map = new google.maps.Map(document.getElementById('map'), {
                    center: {lat: 50.450912403673264, lng: 30.524441455461808},
                    zoom: 6
                });

                var markers = @json($markers);

                var currentInfoWindow = null;

                markers.forEach(function (marker) {
                    var position = {lat: parseFloat(marker.lat), lng: parseFloat(marker.lng)};
                    var content = '<h3>' + marker.title + '</h3>' +
                        '<p>' + marker.description + '</p>' +
                        '<a class="btn btn-info" href="/posts/' + marker.post_id + '">Дізнатися більше</a>';
                    var infoWindow = new google.maps.InfoWindow({
                        content: content
                    });

                    var newMarker = new google.maps.Marker({
                        position: position,
                        map: map,
                        title: marker.title
                    });

                    newMarker.addListener('click', function () {
                        // Закрытие текущего информационного окна перед открытием нового окна
                        if (currentInfoWindow) {
                            currentInfoWindow.close();
                        }

                        infoWindow.open(map, newMarker);
                        currentInfoWindow = infoWindow; // Обновление ссылки на текущее информационное окно
                    });
                });

                // Обработчик события клика на кнопку поиска
                $('#search-button').click(function () {
                    var searchTerm = $('#search-input').val().toLowerCase();
                    var newMarker = null; // Variable to hold the found marker

                    markers.forEach(function (marker) {
                        if (marker.title.toLowerCase() === searchTerm) {
                            // Move the map to the marker with the corresponding title
                            var position = {lat: parseFloat(marker.lat), lng: parseFloat(marker.lng)};
                            map.setCenter(position);
                            map.setZoom(15);

                            // Open the info window for the found marker
                            var content = '<h3>' + marker.title + '</h3>' + '<p>' + marker.description + '</p>';
                            var infoWindow = new google.maps.InfoWindow({
                                content: content
                            });

                            infoWindow.open(map, marker); // Use `marker` instead of `newMarker`
                            currentInfoWindow = infoWindow; // Update the reference to the current info window

                            newMarker = marker; // Assign the found marker to the variable
                        }
                    });
                });
            }


            $(function () {

                var markers = @json($markers);

                // Создание массива заголовков для подсказок
                var titles = markers.map(function (marker) {
                    return marker.title;
                });

                // Инициализация автозаполнения
                $('#search-input').autocomplete({
                    source: titles,
                    select: function (event, ui) {
                        var selectedTitle = ui.item.value;
                        $('#search-input').val(selectedTitle);
                        var selectedMarker = markers.find(function (marker) {
                            return marker.title === selectedTitle;
                        });
                    }
                });

            });
        }
    </script>
    <script
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCp2zqcgixe9hlC3dRr5AO6AGMmkSvxom8&callback=initMap&language=uk"
        async defer></script>
    <style>
        .ui-helper-hidden-accessible{
            display: none;
        }
        .ui-autocomplete {
            position: absolute;
            z-index: 1000;
            cursor: default;
            border-radius: 4px;
            padding: 10px;
            background-color: #fff;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.15);
        }

        .ui-autocomplete .ui-menu-item {
            padding: 5px 0;
            list-style-type: none;
            cursor: pointer;
        }

        .ui-autocomplete .ui-menu-item:hover {
            background-color: #f5f5f5;
        }

        .ui-autocomplete .ui-menu-item a {
            display: block;
            padding: 5px;
            color: #333;
            text-decoration: none;
            list-style-type: none; /* Убираем точку */
        }

        .ui-autocomplete .ui-menu-item a:hover {
            color: #000;
            text-decoration: none;
        }

    </style>
@endsection

