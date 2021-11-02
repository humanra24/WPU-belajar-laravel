@extends('layouts.main')

@section('container')
{{-- style mapbox --}}
<link href='https://api.mapbox.com/mapbox-gl-js/v2.3.1/mapbox-gl.css' rel='stylesheet' />
<style>
    .mapboxgl-popup {
        font: 9px/9px 'Helvetica Neue', Arial, Helvetica, sans-serif;
    }

</style>
<div class="row">
    <div class="col-sm-8">
        <div id='map' style='width: 100%; height: 400px;'></div>
    </div>
    <div class="col-sm">
        <select name="change" onchange="change()" id="change" class="form-control">
            <option value="">Select</option>
            <option value="Pemalang">Pemalang</option>
            <option value="Cilacap">Cilacap</option>
        </select>
    </div>
</div>

{{-- script mapbox --}}
<script src='https://api.mapbox.com/mapbox-gl-js/v2.3.1/mapbox-gl.js'></script>

<script>
    mapboxgl.accessToken = 'ACCESS TOKKEN';

    function change() {
        const map = new mapboxgl.Map({
            container: 'map',
            style: 'mapbox://styles/mapbox/streets-v11',
            center: [109.366425, -6.929645],
            zoom: 10,
        });

        new mapboxgl.Popup({
                // offset: 30,
                closeButton: false,
                closeOnClick: false
            })
            .setHTML('<center>Ampelgading <br><br> 100</center>')
            .setLngLat([109.491356, -6.949877])
            .addTo(map);

        new mapboxgl.Popup({
                // offset: 30,
                closeButton: false,
                closeOnClick: false
            })
            .setHTML('<center>Bantarbolang  <br><br> 100</center>')
            .setLngLat([109.402115, -7.040512])
            .addTo(map);
    }


    const map = new mapboxgl.Map({
        container: 'map',
        style: 'mapbox://styles/mapbox/streets-v11',
        center: [110.712247, -7.614529],
        zoom: 6,
    });

    new mapboxgl.Popup({
            // offset: 30,
            closeButton: false,
            closeOnClick: false
        })
        .setHTML('<center>PEMALANG <br><br> 200</center>')
        .setLngLat([109.366425, -6.929645])
        .addTo(map);

    new mapboxgl.Popup({
            // offset: 30,
            closeButton: false,
            closeOnClick: false
        })
        .setHTML('<center>CILACAP <br><br> 100</center>')
        .setLngLat([109.005913, -7.727989])
        .addTo(map);

    // create the marker
    // const marker = new mapboxgl.Marker()
    //     .setLngLat([109.366425, -6.929645])
    //     .addTo(map);

</script>

@endsection
