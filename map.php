<div id="map"></div>
<script src="http://cdn.leafletjs.com/leaflet-0.7.3/leaflet.js"></script>
<script>
  

  var myAttr = 'Map data <a href="http://openstreetmap.org">OpenStreetMap</a> contributors';

  var street = L.tileLayer('http://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {attribution: myAttr, maxZoom: 18}),
  satellite = L.tileLayer('http://otile1.mqcdn.com/tiles/1.0.0/sat/{z}/{x}/{y}.jpg', {attribution: myAttr, maxZoom: 18}),
  terrain = L.tileLayer('http://{s}.tiles.mapbox.com/v3/treetrunk.k4pf1848/{z}/{x}/{y}.png', {attribution: myAttr, maxZoom: 18});

  var map = L.map('map', {
    center: [40.269722, -76.875556],
    zoom: 7,
    layers: [street]
  });


  var baseMaps = {
    "Street" : street,
    "Terrain" : terrain,
    "Satellite" : satellite
  };
    
  L.control.layers(baseMaps).addTo(map);

/*
  var popup = L.popup();

  function onMapClick(e) {
    popup
    .setLatLng(e.latlng)
    .setContent("You clicked the map at " + e.latlng.toString())
    .openOn(map);
  }

  map.on('click', onMapClick);
 */


</script>
