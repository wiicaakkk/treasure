<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.0.3/dist/leaflet.css" />
    <script src="https://unpkg.com/leaflet@1.0.3/dist/leaflet.js"></script>

    <style type="text/css">
        html, body {
            height: 100%;
            width: 100%;
        }

        #map {
            height: 100%;
            width: 100%;
            left: 0;
            position: relative;
            top: 0;
        }
        }
    </style>

    <title>Treasure</title>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">Treasure</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
              <a class="nav-link" aria-current="page" href="/">Beranda</a>
              <a class="nav-link" href="#">Filter</a>
            </div>
          </div>
        </div>
    </nav>

    <div id='map'></div>


    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script type="text/javascript">
        var locations = [
        ["(Regol Park) This riverside park is shaded by trees & features open plazas, paths, a children's pool & more.", -6.944356447830685, 107.62098318706343],
        ["LOCATION_2", -6.919572077645014, 107.61006294798489],
        ["LOCATION_3", -6.912701484458853, 107.60957631836382],
        ["LOCATION_4", -6.910393372016699, 107.58889456209566],
        ["LOCATION_5", -6.92045773266305, 107.57491747987605]
        ];

        var map = L.map('map').setView([-6.918921583227953, 107.61824513955852], 13);
        mapLink =
        '<a href="http://openstreetmap.org">OpenStreetMap</a>';
        L.tileLayer(
        'http://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
            attribution: '&copy; ' + mapLink + ' Contributors',
            maxZoom: 18,
        }).addTo(map);

        for (var i = 0; i < locations.length; i++) {
        marker = new L.marker([locations[i][1], locations[i][2]])
            .bindPopup(locations[i][0])
            .addTo(map);
        }
    </script>
   
  </body>
</html>