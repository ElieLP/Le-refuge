<style>
      #map {
      height: 400px;
      width: 100%;
      }
</style>

    <script>
      function initMap() {
        var uluru = {lat: -25.363, lng: 131.044};
        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 4,
          center: uluru
        });
        var marker = new google.maps.Marker({
          position: uluru,
          map: map
        });
      }
    </script>
<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>

