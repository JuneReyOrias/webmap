 {{-- @extends('admin.dashb')
@section('admin') --}}
@extends('admin.dashb')
@section('admin') 
@extends('layouts.auth')

<div class="page-content">
  <nav class="page-breadcrumb">
    <!-- Your existing code here -->

    {{-- <!-- File input for uploading files -->
    <input type="file" id="fileInput" accept=".kml, .kmz, .geojson"> --}}
    <input type="file" id="fileInput" accept=".kml,.kmz">
  </nav>

  <style>
    /* Set the height of the map container */
    #map {
      height: 550px;
    }
  </style>

  <div id="map"></div>
  {{-- <input type="checkbox" id="satelliteToggle"> Satellite View --}}
</div>
<script src="https://unpkg.com/@googlemaps/markerclusterer/dist/index.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js">
</script>

 {{-- <script src="{{ asset('js/map_script.js') }}"></script> --}}
 <script src="{{ asset('js/old.js') }}"></script>
 {{-- <script src="{{ asset('js/fetchdat.js') }}"></script> --}}
 {{-- <script src="{{ asset('js/new.js') }}"></script> --}}

    {{-- <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyASjYAj6KP3LA2oEEicDMbDCOOdw6Gfey4&callback=initMap" async defer></script> --}}

    <script crossorigin="anonymous" integrity="sha256-cCueBR6CsyA4/9szpPfrX3s49M9vUU5BgtiJj06wt/s=" src="https://code.jquery.com/jquery-3.1.0.min.js">
    </script>
   
    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAMstylquYwo8gAuOrkrF5IsN6K8gbgV6I&callback=initMap" ></script>
@endsection