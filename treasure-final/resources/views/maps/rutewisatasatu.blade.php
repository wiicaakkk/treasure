<!DOCTYPE html>
<html lang="en" >

<head>

  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

   <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Rute Wisata</title>
  
  
<link rel='stylesheet' href='https://cdn.knightlab.com/libs/storymapjs/latest/css/storymap.css'>
<link rel='stylesheet' href='https://api.mapbox.com/mapbox.js/plugins/leaflet-fullscreen/v1.0.1/leaflet.fullscreen.css'>
  
<style>
    html {
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    box-sizing: border-box;
    }

    *,
    *:before,
    *:after {
    -webkit-box-sizing: inherit;
    -moz-box-sizing: inherit;
    box-sizing: inherit;
    }

    html,
    body {
    margin: 0;
    padding: 0;
    }

    html,
    body,
    #storyMap {
    height: 100%;
    width: 100%;
    }

    /* story map container */
    #storyMap {
    margin: 0 auto;
    }

    /* story map menu bar */
    .vco-menubar-button,
    .vco-mobile .vco-menubar-button:hover,
    /* map icons */ .vco-map .vco-mapmarker {
    color: #fff;
    }

    .vco-menubar-button,
    .vco-mobile .vco-menubar-button:hover {
    background-color: #0b3c5d;
    }

    .vco-menubar-button {
    -webkit-transition: background-color 0.2s ease-in-out;
    -moz-transition: background-color 0.2s ease-in-out;
    -o-transition: background-color 0.2s ease-in-out;
    transition: background-color 0.2s ease-in-out;
    }

    .vco-menubar-button:hover,
    .vco-menubar-button:focus,
    .vco-layout-landscape
    .vco-storyslider
    .vco-slidenav-next
    .vco-slidenav-icon:hover:before,
    .vco-layout-landscape
    .vco-storyslider
    .vco-slidenav-previous
    .vco-slidenav-icon:hover:before,
    .vco-layout-landscape
    .vco-storyslider
    .vco-slidenav-next
    .vco-slidenav-icon:focus:before,
    .vco-layout-landscape
    .vco-storyslider
    .vco-slidenav-previous
    .vco-slidenav-icon:focus:before,
    .vco-mobile .vco-menubar-button:active {
    background-color: #d9b310;
    }

    .vco-storymap p a {
    color: #00e;
    text-decoration: underline;
    }

    .vco-map .vco-mapmarker-icon:after {
    content: url(https://raw.githubusercontent.com/pmacMaps/storymapsJS-pamagic-board/master/assets/images/pamagic-marker.png);
    }

    /* before and after buttons */
    .vco-layout-landscape
    .vco-storyslider
    .vco-slidenav-next
    .vco-slidenav-icon:before,
    .vco-layout-landscape
    .vco-storyslider
    .vco-slidenav-previous
    .vco-slidenav-icon:before {
    background-color: #0b3c5d;
    -webkit-transition: background-color 0.2s ease-in-out;
    -moz-transition: background-color 0.2s ease-in-out;
    -o-transition: background-color 0.2s ease-in-out;
    transition: background-color 0.2s ease-in-out;
    }

    .vco-mobile .vco-layout-landscape .vco-storyslider .vco-slidenav-next,
    .vco-mobile .vco-layout-landscape .vco-storyslider .vco-slidenav-previous {
    display: none !important;
    }

    /* tour points text */
    div.vco-storymap.vco-mobile.vco-layout-landscape
    > div.vco-storyslider.vco-storyslider {
    z-index: 1500;
    }

    .vco-slide-content {
    padding-top: 15px;
    padding-bottom: 15px;
    border-radius: 5px;
    background-color: #fff;
    }

    .vco-storymap h2.vco-headline-title {
    font-size: 1.5em;
    }

    .vco-headline,
    .vco-storymap h2 {
    font-size: 1.4em;
    }

    .vco-text p {
    color: #333;
    }

    .vco-storymap p {
    line-height: 1.25em;
    }

    /* leaflet elements */
    .vco-map .leaflet-container .leaflet-control-attribution {
    background: rgba(255, 255, 255, 0.8);
    padding: 8px;
    border-radius: 5px;
    }

    .vco-map .leaflet-container .leaflet-control-attribution a {
    color: #00f;
    }

    /* Media Queries */
    @media screen and (orientation: landscape) {
    .vco-slide-content {
        padding-left: 10px !important;
        margin-right: -20px !important;
    }
    }

    /* override zoom control being hidden */
    @media screen and (max-width: 451px) {
    .vco-mobile.vco-skinny .leaflet-control-zoom {
        display: inherit;
    }

    div.leaflet-top.leaflet-left {
        margin-top: 20px;
    }
    }

    @media screen and (max-width: 768px) {
    .vco-media .vco-media-content-container .vco-media-content img {
        max-height: 250px;
    }

    .vco-storymap p {
        margin: 25px 0;
        font-size: 1.05em;
        line-height: 1.5em;
    }

    .vco-storymap p:first-child {
        margin-top: 10px;
    }

    .vco-storymap p:last-child {
        margin-bottom: 10px;
    }
    }
</style>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

<script>
  window.console = window.console || function(t) {};
</script>

  
  
<script>
  if (document.location.search.match(/type=embed/gi)) {
    window.parent.postMessage("resize", "*");
  }
</script>


</head>

<body translate="no" >
  <div id="storyMap"></div>
    <script src="https://cpwebassets.codepen.io/assets/common/stopExecutionOnTimeout-1b93190375e9ccc259df3a57c1abc0e64599724ae30d7ea4c6877eb615f89387.js"></script>

<script src='https://cdn.knightlab.com/libs/storymapjs/latest/js/storymap-min.js'></script>
<script src='https://api.mapbox.com/mapbox.js/plugins/leaflet-fullscreen/v1.0.1/Leaflet.fullscreen.min.js'></script>
<script id="rendered-js" >
    "use strict";

    // JSON file containing data for the Story Map
    const storymap_data =
    "https://raw.githubusercontent.com/wiicaakkk/treasure/main/maps.json";

    // Options for Story Map
    const storymap_options = {
    language: "en",
    map_type: "osm:standard",
    calculate_zoom: false };


    // the Story Map object
    const storymap = new VCO.StoryMap("storyMap", storymap_data, storymap_options);

    // Leaflet Zoom control
    const zoomControl = L.control.zoom({ position: "topleft" });

    // Leaflet Full-Screen control
    const fullscreenControl = new L.Control.Fullscreen({
    position: "topleft" });


    // grouping of controls
    const leafletControlsToAdd = [zoomControl, fullscreenControl];

    // event for when the Story Map is loaded
    storymap.on("loaded", function () {
    // leaflet.js web map object
    const leafletMap = storymap.map;

    // add controls to Leaflet web map
    leafletControlsToAdd.forEach(element => leafletMap.addControl(element));
    });
    //# sourceURL=pen.js
</script>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav">
          <a class="nav-link" aria-current="page" href="/">Beranda</a>
        </div>
      </div>
    </div>
</nav>

</body>
</html>
 
