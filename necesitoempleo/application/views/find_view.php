<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&signed_in=true"></script>
<div class="container">
	
	<div class="col-lg-12">
    		<h3>Busqueda de empleos.</h3>
    		<hr>

    		<form class="form-inline">

      			<div class="form-group">
      			    <div class="dropdown">
      				    <button class="btn btn-default dropdown-toggle" type="button" id="menu1" data-toggle="dropdown">Seleccona un Estado
      				    <span class="caret"></span></button>
      				    <ul class="dropdown-menu" role="menu" aria-labelledby="menu1">
      				      <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Tamaulipas</a></li>
      				      <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Nuevo Leon</a></li>
      				      <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Guadalajara</a></li>
      				    </ul>
      				 </div>
      			 </div>

      			 <div class="form-group">
      			    <div class="dropdown">
      				    <button class="btn btn-default dropdown-toggle" type="button" id="menu1" data-toggle="dropdown">Seleccona un Estado
      				    <span class="caret"></span></button>
      				    <ul class="dropdown-menu" role="menu" aria-labelledby="menu1">
      				      <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Tamaulipas</a></li>
      				      <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Nuevo Leon</a></li>
      				      <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Guadalajara</a></li>
      				    </ul>
      				 </div>
      			 </div>

      			 <div class="form-group">
      			    <input type="text" class="form-control" placeholder="palabra clave">
      				<button type="button" class="btn btn-default"><span class="glyphicon glyphicon-briefcase" aria-hidden="true"></span> Buscar</button>
      			 </div>

    		</form>
	</div>



	<div class="col-lg-12">

    		<div class="col-lg-6">

        			<div class="bs-callout bs-callout-info">
        				Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
        				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
        				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
        			</div>


        			<div class="bs-callout bs-callout-info">
        				Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
        				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
        				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
        			</div>

              <div class="bs-callout bs-callout-danger">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
              </div>

              <div class="bs-callout bs-callout-info">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
              </div>
    	
    		</div>

    		<div class="col-lg-6">

    			  <div id="panel">
                <input onclick="deleteMarkers();" type=button value="Borrar Marcadores">
            </div>
            
            <div id="map-canvas"></div>
            <p>Click on the map to add markers.</p>
    	
    		</div>
	
	</div>


</div>


<script>

  var map;
  var markers = [];

  function initialize() {
    var haightAshbury = new google.maps.LatLng(25.713793, -100.374301);
    var mapOptions = {
      zoom: 12,
      center: haightAshbury,
      mapTypeId: google.maps.MapTypeId.satellite 
    };
    map = new google.maps.Map(document.getElementById('map-canvas'),
        mapOptions);

    // This event listener will call addMarker() when the map is clicked.
    google.maps.event.addListener(map, 'click', function(event) {
      addMarker(event.latLng);
    });

    // Adds a marker at the center of the map.
    addMarker(haightAshbury);
  }

  // Add a marker to the map and push to the array.
  function addMarker(location) {
    var marker = new google.maps.Marker({
      position: location,
      map: map
    });
    markers.push(marker);
  }

  // Sets the map on all markers in the array.
  function setAllMap(map) {
    for (var i = 0; i < markers.length; i++) {
      markers[i].setMap(map);
    }
  }

  // Removes the markers from the map, but keeps them in the array.
  function clearMarkers() {
    setAllMap(null);
  }

  // Shows any markers currently in the array.
  function showMarkers() {
    setAllMap(map);
  }

  // Deletes all markers in the array by removing references to them.
  function deleteMarkers() {
    clearMarkers();
    markers = [];
  }

  google.maps.event.addDomListener(window, 'load', initialize);

</script>