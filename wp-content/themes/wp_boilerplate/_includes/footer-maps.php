<script>
	//Mapa Google
	// Aquí agregar el código de Google Maps
	// Initialize and add the map
	function initMap() {
	  // The location
	  var plaza = { lat: -33.4529894, lng: -70.57163220000001 };
	  // The map, centered
	  var map = new google.maps.Map(document.getElementById('map'), {zoom: 4, center: plaza});
	  // The marker, positioned
	  var marker = new google.maps.Marker( {position: plaza, map: map} );
	}
</script>