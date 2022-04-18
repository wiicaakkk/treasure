@extends('layouts.app')

@section('styles')
<link rel="stylesheet" href="{{ asset('assets/leaflet/leaflet.css') }}">
<script src="{{ asset('assets/leaflet/leaflet.js') }}"></script>
<style>
    #map {
        height: 500px
    }

</style>
@endsection

@section('content')
    <div class="container">
        <div id="map">
            
        </div>
    </div>
@endsection

@push('javascript')   
    <script>
        //  var map = L.map('map').setView([{{ config('leafletsetup.map_center_latitude') }},
        // {{ config('leafletsetup.map_center_longitude') }}],
        // {{ config('leafletsetup.zoom_level') }});

        // L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
        //     attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
        // }).addTo(map);

        // var map = L.map('map').setView([51.505, -0.09], 13);

        // var tiles = L.tileLayer(
        //     'https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token=pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw', {
        //         maxZoom: 18,
        //         attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors, ' +
        //             'Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
        //         id: 'mapbox/streets-v11',
        //         tileSize: 512,
        //         zoomOffset: -1
        //     }).addTo(map);

        // var marker = L.marker([51.5, -0.09]).addTo(map)
        //     .bindPopup('<b>Hello world!</b><br />I am a popup.').openPopup();

        // var circle = L.circle([51.508, -0.11], {
        //     color: 'red',
        //     fillColor: '#f03',
        //     fillOpacity: 0.5,
        //     radius: 500
        // }).addTo(map).bindPopup('I am a circle.');

        // var polygon = L.polygon([
        //     [51.509, -0.08],
        //     [51.503, -0.06],
        //     [51.51, -0.047]
        // ]).addTo(map).bindPopup('I am a polygon.');


        // var popup = L.popup()
        //     .setLatLng([51.513, -0.09])
        //     .setContent('I am a standalone popup.')
        //     .openOn(map);

        // function onMapClick(e) {
        //     popup
        //         .setLatLng(e.latlng)
        //         .setContent('You clicked the map at ' + e.latlng.toString())
        //         .openOn(map);
        // }

        // map.on('click', onMapClick);

        var map = L.map('map').setView([{{ config('leafletsetup.map_center_latitude') }},
        {{ config('leafletsetup.map_center_longitude') }}],
        {{ config('leafletsetup.zoom_level') }});

        L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
            attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
        }).addTo(map);

        axios.get('{{ route('api.places.index') }}')
        .then(function (response) {
            console.log(response.data);
            L.geoJSON(response.data,{
                pointToLayer: function(geoJsonPoint,latlng) {
                    return L.marker(latlng);
                }
            })
            .bindPopup(function(layer) {
                //return layer.feature.properties.map_popup_content;
                return ('<div class="my-2"><strong>Place Name</strong> :<br>'+layer.feature.properties.place_name+'</div> <div class="my-2"><strong>Description</strong>:<br>'+layer.feature.properties.description+'</div><div class="my-2"><strong>Address</strong>:<br>'+layer.feature.properties.address+'</div>');
            }).addTo(map);
            console.log(response.data);
        })
        .catch(function (error) {
            console.log(error);
        });

    //SIMPLE SEARCH LOCATION

    </script>
@endpush
