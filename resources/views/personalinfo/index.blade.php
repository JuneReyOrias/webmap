@extends('admin.dashb')
@section('admin')

<div class="page-content">

  <nav class="page-breadcrumb">
 


 
        <style>
          /* Set the height of the map container */
          #map {
              height: 600px;
          }
        </style>
    
    
        <div id="map"></div>
        <input type="checkbox" id="satelliteToggle"> Satellite View
    
        <script>
          let map; // Declare the map variable to make it accessible globally
    
          // Function to initialize and display the map
          function initMap() {
            // Create LatLng objects for different locations
            const locationNYC = { lat:6.9214, lng: 122.0790 }; // New York City, USA
            const locationManicahan = { lat:7.0245, lng:122.1935 }; // Manicahan, Philippines
            const locationTumaga = { lat:6.9434, lng:122.0795 }; // Tumaga, Philippines
            const locationAyala = { lat:6.9692, lng:121.9471 }; // Tumaga, Philippines
            const locationCulianan = { lat:6.977367, lng:122.168928 }; // Tumaga, Philippines
            const locationCuruan = { lat:7.2004, lng:122.1803 }; // Tumaga, Philippines
            const locationVitali = { lat:7.3586, lng:122.3483 }; // Tumaga, Philippines      
    
            // Create a LatLng array for the Perm District polygon
            const permDistrictCoordinates = [
              { lat: 7.0124959, lng: 122.1256655 }, // Vertex 1
              { lat: 7.109593, lng: 122.1973943}, // Vertex 2
              { lat: 7.1101943, lng: 122.2377896 }, // Vertex 3
              { lat:7.0135169, lng: 122.2035705 }, // Vertex 4
            //   { lat: 7.0982609, lng: 122.2383415 },  // Vertex 5
            //   { lat:7.0123622, lng: 122.1936622 }, // Vertex 6
              //   { lat: 7.0281803, lng: 122.1936666 },  // Vertex 7
              //   { lat: 7.0257487, lng: 122.1992006 },  // Vertex 6
              //   { lat: 7.0276412, lng: 122.1907373 },  // Vertex 7
              //   { lat: 7.0276686, lng: 122.1910217 },  // Vertex 6
              //   { lat: 7.0276412, lng: 122.1907373 },  // Vertex 7
              //   { lat: 7.0276835, lng: 122.1940376 },  // Vertex 6
              //   { lat: 7.0256115, lng: 122.1949751 },  // Vertex 7
            ];
    
            // Options for the map
            const mapOptions = {
              center: locationManicahan,
              zoom: 15
            };
    
            // Create the map instance
            map = new google.maps.Map(document.getElementById('map'), mapOptions);
    
            // Place a marker on the map for each location
            new google.maps.Marker({
              position: locationNYC,
              map: map,
              title: 'Zamboanga City'
            });
            new google.maps.Marker({
              position: locationManicahan,
              map: map,
              title: 'Manicahan District'
            });
            new google.maps.Marker({
              position: locationTumaga,
              map: map,
              title: 'Tumaga District'
            });
            new google.maps.Marker({
              position: locationAyala,
              map: map,
              title: 'Ayala District'
            });
            new google.maps.Marker({
              position: locationCulianan,
              map: map,
              title: 'Culianan District'
            });
            new google.maps.Marker({
              position: locationCuruan,
              map: map,
              title: 'Curuan District'
            });
            new google.maps.Marker({
              position: locationVitali,
              map: map,
              title: 'Vitali District'
            });
    
            // Create the Perm District polygon
            const permDistrictPolygon = new google.maps.Polygon({
              paths: permDistrictCoordinates,
              strokeColor: '#fff',
              strokeOpacity: 0.8,
              strokeWeight: 2,
              fillColor: '#FF0000',
              fillOpacity: 0.35
            });
            permDistrictPolygon.setMap(map);
    
            // Function to handle the toggle of satellite view
            function toggleSatelliteView() {
              const isChecked = document.getElementById('satelliteToggle').checked;
              if (isChecked) {
                map.setMapTypeId(google.maps.MapTypeId.SATELLITE);
              } else {
                map.setMapTypeId(google.maps.MapTypeId.ROADMAP);
              }
            }
    
            // Add event listener to the checkbox for handling the toggle
            document.getElementById('satelliteToggle').addEventListener('change', toggleSatelliteView);
          }
        </script>
    
    
      
    

      {{-- <style>
          /* Set the height of the map container */
          #map {
              height: 400px;
          }
      </style>
 
    
      <div id="map"></div>
  
      <script>
        // Function to initialize and display the map
        function initMap() {
            // Create LatLng objects for different locations
            const locationNYC = { lat:6.9214, lng: 122.0790 }; // New York City, USA
            const locationManicahan = { lat:7.0245, lng:122.1935 }; // Manicahan, Philippines
            const locationTumaga = { lat:6.9434, lng:122.0795 }; // Tumaga, Philippines
            const locationAyala = { lat:6.9692, lng:121.9471 }; // Tumaga, Philippines
            const locationCulianan = { lat:6.977367, lng:122.168928 }; // Tumaga, Philippines
            const locationCuruan = { lat:7.2004, lng:122.1803 }; // Tumaga, Philippines
            const locationVitali = { lat:7.3586, lng:122.3483 }; // Tumaga, Philippines
  
            // Create a LatLng array for the Perm District polygon
            const permDistrictCoordinates = [
              { lat: 7.0111755, lng: 122.1866678 }, // Vertex 1
              { lat: 7.109593, lng: 122.1973943}, // Vertex 2
              { lat: 7.1101943, lng: 122.2377896 }, // Vertex 3
              { lat:7.0135169, lng: 122.2035705 }, // Vertex 4
              { lat: 7.0982609, lng: 122.2383415 },  // Vertex 5
              { lat:7.0123622, lng: 122.1936622 }, // Vertex 6
            //   { lat: 7.0281803, lng: 122.1936666 },  // Vertex 7
            //   { lat: 7.0257487, lng: 122.1992006 },  // Vertex 6
            //   { lat: 7.0276412, lng: 122.1907373 },  // Vertex 7
            //   { lat: 7.0276686, lng: 122.1910217 },  // Vertex 6
            //   { lat: 7.0276412, lng: 122.1907373 },  // Vertex 7
            //   { lat: 7.0276835, lng: 122.1940376 },  // Vertex 6
            //   { lat: 7.0256115, lng: 122.1949751 },  // Vertex 7
              


            ];
        
  
            // Options for the map
            const mapOptions = {
                center: locationManicahan,
                zoom: 15
            };
  
            // Create the map instance
            const map = new google.maps.Map(document.getElementById('map'), mapOptions);
  
            // Place a marker on the map for each location
            new google.maps.Marker({
                position: locationNYC,
                map: map,
                title: 'Zamboanga City'
            });
            new google.maps.Marker({
                position: locationManicahan,
                map: map,
                title: 'Manicahan District'
            });
            new google.maps.Marker({
                position: locationTumaga,
                map: map,
                title: 'Tumaga District'
            });
            new google.maps.Marker({
                position: locationAyala,
                map: map,
                title: 'Ayala District'
            });
            new google.maps.Marker({
                position: locationCulianan,
                map: map,
                title: 'Culianan District'
            });
            new google.maps.Marker({
                position: locationCuruan,
                map: map,
                title: 'Curuan District'
            });
            new google.maps.Marker({
                position: locationVitali,
                map: map,
                title: 'Vitali District'
            });
  
            // Create the Perm District polygon
            const permDistrictPolygon = new google.maps.Polygon({
              paths: permDistrictCoordinates,
              strokeColor: '#fff',
              strokeOpacity: 0.8,
              strokeWeight: 2,
              fillColor: '#FF0000',
              fillOpacity: 0.35
            });
            permDistrictPolygon.setMap(map);
          }</script>
       --}}
  
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyASjYAj6KP3LA2oEEicDMbDCOOdw6Gfey4&callback=initMap" async defer></script>

@endsection