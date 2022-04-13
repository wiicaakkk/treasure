<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8' />
    <title></title>
    <meta name='viewport' content='initial-scale=1,maximum-scale=1,user-scalable=no' />
    <script src='https://api.tiles.mapbox.com/mapbox-gl-js/v0.39.1/mapbox-gl.js'></script>
    <link href='https://api.tiles.mapbox.com/mapbox-gl-js/v0.39.1/mapbox-gl.css' rel='stylesheet' />
    <style>
        body { margin:0; padding:0; }
        #map { position:absolute; top:0; bottom:0; width:100%; }
    </style>
</head>
<body>

<div id='map'></div>
<script>
mapboxgl.accessToken = '<PUT YOUR MAPBOX KEY HERE>';
var map = new mapboxgl.Map({
    container: 'map',
    style: 'mapbox://styles/mapbox/light-v9',
    center: [7.828,44.836],
    zoom: 9
});

map.addControl(new mapboxgl.NavigationControl());

        map.on('load', function () {
                map.addSource("route", {
                        "type": "geojson",
                        "data": "public/image/map.geojson"
                });

        map.addLayer({
                "id": "route",
                "type": "circle",
                "source": "route",
                "paint": {
                        "circle-radius": 5,
                        "circle-color": "#ff0000"
                }
        });
});

</script>

</body>
</html>