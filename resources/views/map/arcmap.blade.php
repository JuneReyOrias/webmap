 {{-- @extends('admin.dashb')
@section('admin') --}}
@extends('admin.dashb')
@section('admin') 
@extends('layouts.auth')
<link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">

<div class="page-content">
  <nav class="page-breadcrumb">
    <!-- Your existing code here -->
   
    {{-- <!-- File input for uploading files -->
    <input type="file" id="fileInput" accept=".kml, .kmz, .geojson"> --}}
    <input type="file" id="fileInput" accept=".kml,.kmz">
 
    @foreach($farmLocation as $location)
    <div class="test" 
      data-lat="{{ $location->latitude }}" 
      data-lng="{{ $location->longitude }}" 
      data-location="{{ $location->district }}" 
      data-verone_lat="{{ $location->verone_latitude }}" 
      data-verone_lng="{{ $location->verone_longitude }}" 
      data-vertwo_lat="{{ $location->vertwo_latitude }}" 
      data-vertwo_lng="{{ $location->vertwo_longitude }}" 
      data-verthree_lat="{{ $location->verthree_latitude }}" 
      data-verthree_lng="{{ $location->verthree_longitude }}" 
      data-vertfour_lat="{{ $location->vertfour_latitude }}" 
      data-vertfour_lng="{{ $location->vertfour_longitude }}" 
      data-verfive_lat="{{ $location->verfive_latitude }}" 
      data-verfive_lng="{{ $location->verfive_longitude }}" 
      data-versix_lat="{{ $location->versix_latitude }}" 
      data-versix_lng="{{ $location->versix_longitude }}" 
      data-verseven_lat="{{ $location->verseven_latitude }}" 
      data-verseven_lng="{{ $location->verseven_longitude }}" 
      data-vereight_lat="{{ $location->vereight_latitude }}" 
      data-verteight_lng="{{ $location->verteight_longitude }}"
      data-color="{{ $location->strokecolor }}"
      data-farms_lat="{{ $location->gps_latitude }}" 
      data-farms_lng="{{ $location->gps_longitude }}" 
    
       ></div>
      
     
    
       {{-- <div  data-verone_lat="{{ $location->verone_latitude }}">{{ $location->verone_latitude }}</div> --}}
{{-- <div      data-location="{{ $location->district }}" >{{ $location->district }}</div> --}}
  @endforeach
    {{-- @foreach($polygons as $boundary)
    <div class="poly" 
      data-verone_lat="{{ $boundary->verone_latitude }}" 
      data-verone_lng="{{ $boundary->verone_longitude }}" 
      data-vertwo_lat="{{ $boundary->vertwo_latitude }}" 
      data-vertwo_lng="{{ $boundary->vertwo_longitude }}" 
      data-verthree_lat="{{ $boundary->verthree_latitude }}" 
      data-verthree_lng="{{ $boundary->verthree_longitude }}" 
      data-vertfour_lat="{{ $boundary->vertfour_latitude }}" 
      data-vertfour_lng="{{ $boundary->vertfour_longitude }}" ></div>

  @endforeach  --}}
{{-- 
  @foreach($districts as $location)
  <div class="test" 
    data-verone_lat="{{ $location->verone_latitude }}" 
    data-verone_lng="{{ $location->verone_longitude }}" 
    data-vertwo_lat="{{ $location->vertwo_latitude }}" 
    data-vertwo_lng="{{ $location->vertwo_longitude }}" 
    data-verthree_lat="{{ $location->verthree_latitude }}" 
    data-verthree_lng="{{ $location->verthree_longitude }}" 
    data-vertfour_lat="{{ $location->vertfour_latitude }}" 
    data-vertfour_lng="{{ $location->vertfour_longitude }}" ></div>

@endforeach  --}}

  </nav>

  <style>
    /* Set the height of the map container */
    #map {
      height: 550px;
    }
  </style>

  <div id="map"></div>
  <button onclick="savePolyline()">Save Polyline</button>
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