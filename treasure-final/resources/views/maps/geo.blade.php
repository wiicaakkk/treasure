<!doctype html>
<html class="no-js" lang="">

<head>
<meta charset="utf-8">
<meta name="description" content="">
<meta name="viewport" content="width=device-width, initial-scale=1">
 <!-- Bootstrap CSS -->
 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  
<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/leaflet/0.7.3/leaflet.css" />
<link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>
<script src="//cdnjs.cloudflare.com/ajax/libs/leaflet/0.7.3/leaflet.js"></script>

<title>Treasure</title>

<link rel="stylesheet" type="text/css" href="css/style.css">

<link href="https://fonts.googleapis.com/css?family=Great+Vibes" rel="stylesheet">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
<link rel="stylesheet" href="http://cdn.bootcss.com/animate.css/3.5.1/animate.min.css">
</head>

<body>
        <div id="mapwrap">
          <div id="toolbar">
            <div class="hamburger">
              <span>Tour&nbsp;Stops</span>
            </div>
            <div id="tourstops">
              <h2>Tour Stops</h2>
              <ul>
              </ul>
            </div>
          </div>
          <div id="leafletmap"></div>
        </div>
        <script src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/67683/ccbuildings.js"></script>

 <!-- Option 1: Bootstrap Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script> 

  <script>

  $('#toolbar .hamburger').on('click', function() {
    $(this).parent().toggleClass('open');
  });

  var mymap = L.map('leafletmap', {
    zoomControl: false
  });
  var mapTiles = L.tileLayer('http://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
    maxZoom: 19,
    attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>'
  });

  mapTiles.addTo(mymap);
  mymap.setView([38.8486555, -104.824], 17);
  new L.Control.Zoom({
    position: 'topright'
  }).addTo(mymap);

  var buildingLayers = L.layerGroup().addTo(mymap);

  L.geoJson(bldgData, {
    onEachFeature: function(feature, layer) {
      var thisLayer = layer;
      // layer.bindPopup(feature.properties.NAME);
      var $listItem = $('<li>').html(feature.properties.NAME).appendTo('#toolbar ul');
      $listItem.on('click', function(){
        buildingLayers.clearLayers(); // remove existing markers
        var thisLat = thisLayer.feature.geometry.coordinates[1];
        var thisLon = thisLayer.feature.geometry.coordinates[0];
        mymap.panTo([thisLat,thisLon]);
        //thisLayer.addTo(mymap);
        buildingLayers.addLayer(thisLayer);
        var notifyIcon = L.divIcon({
          className: 'notify-icon',
          iconSize: [25, 25],
          html: '<span></span>'
        });
        var notifyMarker = L.marker([thisLat,thisLon], {icon: notifyIcon});
        buildingLayers.addLayer(notifyMarker);
        
        if(mymap.getSize().x < 768){
          $('#toolbar').removeClass('open');
        }
        thisLayer.on('click', function(){alert(thisLayer.feature.properties.NAME + " :: " + thisLayer.feature.properties.BODY);});
      });
    }
  });




  /*
  var gjFeatures = {
    "type": "FeatureCollection",
    "features": [
      {
        "type": "Feature",
        "id": "1234",
        "properties": {
          "name": "Sonderman Park",
          "img": "",
          "desc":"An oasis of wilderness within the city limits of Colorado Springs, Sondermann Park provides an outstanding opportunity for wildlife viewing or just a refreshing walk along a small creek located on Colorado Springs’ west side. This park is a great place to look for foothills breeding birds. Trails access good foothills scrub and some riparian growth, with species such as Lazuli Bunting, Black-chinned Hummingbird, Black-headed Grosbeak, and others. Directions: Take I-25 to Fontanero Street (exit 144) and head west. Take your first right, which is Chestnut Street. Then watch for a small sign on the left for the entrance. This should be Caramillo Street.", 
          "markerType": "",
          "weight": ""
        },
        "geometry": {
          "type": "Point",
          "coordinates": [
            -104.840011,
            38.856837
          ]
        }
      },
    {
        "type": "Feature",
        "id": "1234",
        "properties": {
          "name": "Williams Canyon",
          "img": "",
          "desc":"*CURRENTLY CLOSED DUE TO FLOODING* a 3.1 mile trail just north of Manitou Springs, Williams Canyon perfect for hikers looking to briefly escape urban life. The large limestone walls of Williams Canyon provide a shady environment that eventually transitions into the larger Waldo Canyon area. The Williams Canyon limestone formation was formed around 315 million years ago, and is considered a significant geological feature of the area. Park in downtown Manitou Springs, and take Canyon Avenue North to the trailhead.", 
          "markerType": "",
          "weight": ""
        },
        "geometry": {
          "type": "Point",
          "coordinates": [
            -104.917262,
            38.860395
          ]
        }
      }
    
    ]};
  var myStyle2 = {
      "color": "#f00",
      "weight": 4,
      "opacity": 0.85,
      "lineCap": "round"
  };
  */

  </script>

</body>
</html>
