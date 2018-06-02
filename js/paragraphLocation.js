(function ($) {
  const md = window.matchMedia("(max-width: 768px)");

  Drupal.behaviors.paragraphLocationSection = {
    attach: function (context, settings) {
      var latitude = Drupal.settings.paragraphLocationSection.lat;
      var longitude = Drupal.settings.paragraphLocationSection.longitude;
      var markerImage = Drupal.settings.paragraphLocationSection.marker_image;
      if (md.matches) {
        var infoWindowData = Drupal.settings.paragraphLocationSection.data_md;
      }
      else {
        var infoWindowData = Drupal.settings.paragraphLocationSection.data_lg;
      }

      function myMap() {
        var mapCanvas = document.getElementById("map");
        var mapOptions = {
          center: new google.maps.LatLng(parseFloat(latitude), parseFloat(longitude)),
          zoom: 16,
          mapTypeControl: false,
          zoomControl: true,
          zoomControlOptions: {
            position: google.maps.ControlPosition.LEFT_CENTER
          },
          streetViewControl: false,
          fullscreenControl: false,
        };
        var map = new google.maps.Map(mapCanvas, mapOptions);

        // Setting custom marker.
        var marker = new google.maps.Marker({
          position: {lat: parseFloat(latitude), lng: parseFloat(longitude)},
          map: map,
          icon: markerImage,
        });

        // Adjusting the map styles to be in GrayScale.
        var stylez = [
          {
            featureType: "all",
            elementType: "all",
            stylers: [
              {saturation: -100}
            ]
          }
        ];

        var mapType = new google.maps.StyledMapType(stylez, {name: "Gray Scale"});
        map.mapTypes.set('grayscale', mapType);
        map.setMapTypeId('grayscale');

        var infowindow = new google.maps.InfoWindow({
          content: infoWindowData,
          pixelOffset: new google.maps.Size(20, 20)
        });
        google.maps.event.addListener(marker, 'click', function () {
          infowindow.open(map, marker);
        });
      }

      // Loading the map.
      google.maps.event.addDomListener(window, 'load', myMap);
    }
  }
}(jQuery));