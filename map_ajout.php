    <style>
      #map {
        height: 400px;
        width: 100%;
       }
    </style>
    <div id="map"></div>
    <script>
    function initMap() {
	var i=0;
	var Amiens = {lat:49.869194, lng:2.2595558};
	var map = new google.maps.Map(document.getElementById('map'), {
		center : Amiens,
		zoom: 15
	});	
	
	//tableau contenant tous les marqueurs que nous créerons
	var tabMarqueurs = new Array();
	
	//notez la présence de l'argument "event" entre les parenthèses de "function()"
	google.maps.event.addListener(map, 'click', function(event) {
		
		//Affiche la marqueur
		tabMarqueurs[i] = new google.maps.Marker({
			position: event.latLng,//coordonnée de la position du clic sur la carte
			map: map//la carte sur laquelle le marqueur doit être affiché
		});
		
		console.log(tabMarqueurs[i].getPosition().lat());
		console.log(tabMarqueurs[i].getPosition().lng());
	
		if(tabMarqueurs.length > 1){
			tabMarqueurs[(i-1)].setMap(null);
			i++;
		}else
		{	
			i++;
		}		
		
	});
			
	/********************************************/
	
}
    </script>
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBNYzzCd3Fz7giD-2Tmb6ZdQFywnPjErn0&callback=initMap">
    </script>