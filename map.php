    <style>
      #map {
        height: 400px;
        width: 100%;
       }
    </style>
    <div id="map"></div>
    <script>
      function initMap() {
		//var latLng = new google.maps.LatLng(latitude.toFixed(4), longitude.toFixed(4));
        var Amiens = {lat:49.869194 , lng:2.2595558 };
        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 15,
          center: Amiens
        });
        var marker = new google.maps.Marker({
          position: Amiens,
          map: map
        });
      }
    </script>
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBNYzzCd3Fz7giD-2Tmb6ZdQFywnPjErn0&callback=initMap">
    </script>