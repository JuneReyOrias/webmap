 {{-- @extends('admin.dashb')
@section('admin') --}}
@extends('agent.agent_Dashboard')
@section('agent') 
{{-- @extends('layouts.auth') --}}

<div class="page-content">
  <nav class="page-breadcrumb">
    <!-- Your existing code here -->

    {{-- <!-- File input for uploading files -->
    <input type="file" id="fileInput" accept=".kml, .kmz, .geojson"> --}}
    
  @foreach($districts as $location)
  <div class="test" ></div>
    <div data-lat="{{ $location->latitude }}" >{{ $location->latitude }}</div>
    data-lng="{{ $location->longitude }}" 
    data-location="{{ $location->district }}" 
     >data</div>

@endforeach 
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

 <script src="{{ asset('js/map_script.js') }}"></script>



    {{-- <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyASjYAj6KP3LA2oEEicDMbDCOOdw6Gfey4&callback=initMap" async defer></script> --}}

    
   
    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAMstylquYwo8gAuOrkrF5IsN6K8gbgV6I&callback=initMap" ></script>
@endsection