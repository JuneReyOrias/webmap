@extends('admin.dashb')
@section('admin')
<div class="page-content">
  <nav class="page-breadcrumb">
    <!-- Your existing code here -->

    {{-- <!-- File input for uploading files -->
    <input type="file" id="fileInput" accept=".kml, .kmz, .geojson"> --}}
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
<script>
  let map; // Declare the map variable to make it accessible globally
//   async function initMap() {
//   // Request needed libraries.
//   const { Map, InfoWindow } = await google.maps.importLibrary("maps");
//   const { AdvancedMarkerElement, PinElement } = await google.maps.importLibrary(
//     "marker",
//   );
//   const map = new google.maps.Map(document.getElementById("map"), {
//     zoom: 3,
//     center: { lat: -28.024, lng: 140.887 },
//     mapId: "DEMO_MAP_ID",
//   });
//   const infoWindow = new google.maps.InfoWindow({
//     content: "",
//     disableAutoPan: true,
//   });
//   // Create an array of alphabetical characters used to label the markers.
//   const labels = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
//   // Add some markers to the map.
//   const markers = locations.map((position, i) => {
//     const label = labels[i % labels.length];
//     const pinGlyph = new google.maps.marker.PinElement({
//       glyph: label,
//       glyphColor: "white",
//     });
//     const marker = new google.maps.marker.AdvancedMarkerElement({
//       position,
//       content: pinGlyph.element,
//     });

//     // markers can only be keyboard focusable when they have click listeners
//     // open info window when marker is clicked
//     marker.addListener("click", () => {
//       infoWindow.setContent(position.lat + ", " + position.lng);
//       infoWindow.open(map, marker);
//     });
//     return marker;
//   });

//   // Add a marker clusterer to manage the markers.
//   new MarkerClusterer({ markers, map });
// }

// const locations = [
//   { lat: -31.56391, lng: 147.154312 },
//   { lat: -33.718234, lng: 150.363181 },
//   { lat: -33.727111, lng: 150.371124 },
//   { lat: -33.848588, lng: 151.209834 },
//   { lat: -33.851702, lng: 151.216968 },
//   { lat: -34.671264, lng: 150.863657 },
//   { lat: -35.304724, lng: 148.662905 },
//   { lat: -36.817685, lng: 175.699196 },
//   { lat: -36.828611, lng: 175.790222 },
//   { lat: -37.75, lng: 145.116667 },
//   { lat: -37.759859, lng: 145.128708 },
//   { lat: -37.765015, lng: 145.133858 },
//   { lat: -37.770104, lng: 145.143299 },
//   { lat: -37.7737, lng: 145.145187 },
//   { lat: -37.774785, lng: 145.137978 },
//   { lat: -37.819616, lng: 144.968119 },
//   { lat: -38.330766, lng: 144.695692 },
//   { lat: -39.927193, lng: 175.053218 },
//   { lat: -41.330162, lng: 174.865694 },
//   { lat: -42.734358, lng: 147.439506 },
//   { lat: -42.734358, lng: 147.501315 },
//   { lat: -42.735258, lng: 147.438 },
//   { lat: -43.999792, lng: 170.463352 },
// ];

// initMap();

  // Function to initialize and display the map
 function initMap() {
    // Create LatLng objects for different locations

    const locationZC = { lat:6.9214, lng: 122.0790 }; // New York City, USA
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
    ];

    // Options for the map
    const mapOptions = {
      center: locationZC,
      zoom: 11
    };

    // Create the map instance
    map = new google.maps.Map(document.getElementById('map'), mapOptions);

    // Place a marker on the map for each location
    new google.maps.Marker({
      position: locationZC,
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

    // Add event listener to the file input for direct file upload
    document.getElementById('fileInput').addEventListener('change', handleFileUpload);
  }

  // Function to handle file upload
  function handleFileUpload(event) {
    const fileInput = event.target;
    const selectedFile = fileInput.files[0];

    if (selectedFile) {
      const reader = new FileReader();

      reader.onload = function (event) {
        const fileContent = event.target.result;
        const fileExtension = selectedFile.name.split('.').pop().toLowerCase();

        // Handle different file types (KML, KMZ, GeoJSON)
        if (fileExtension === 'kml') {
          displayKML(fileContent);
        } else if (fileExtension === 'kmz') {
          displayKMZ(fileContent);
        } else if (fileExtension === 'geojson') {
          displayGeoJSON(fileContent);
        } else {
          alert('Unsupported file format. Please upload a KML, KMZ, or GeoJSON file.');
        }
      };

      reader.readAsText(selectedFile);
    }
  }

  // Function to display KML data on the map
  function displayKML(kmlData) {
    // Parse and display the KML data on the map using Google Maps JavaScript API
    const kmlLayer = new google.maps.KmlLayer({
      url: 'data:text/xml;charset=UTF-8,' + encodeURIComponent(kmlData),
      map: map
    });
  }

  // Function to display KMZ data on the map
  function displayKMZ(kmzData) {
    // Parse and display the KMZ data on the map using Google Maps JavaScript API
    const kmzLayer = new google.maps.KmlLayer({
      url: 'data:application/vnd.google-earth.kmz+xml;charset=UTF-8,' + encodeURIComponent(kmzData),
      map: map
    });
  }

  // Function to display GeoJSON data on the map
  function displayGeoJSON(geojsonData) {
    // Parse and display the GeoJSON data on the map using Google Maps JavaScript API
    const geojsonLayer = new google.maps.Data();
    geojsonLayer.addGeoJson(JSON.parse(geojsonData));
    geojsonLayer.setMap(map);
  }

  // Load the map when the page is ready
  google.maps.event.addDomListener(window, 'load', initMap);
</script>


    {{-- <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyASjYAj6KP3LA2oEEicDMbDCOOdw6Gfey4&callback=initMap" async defer></script> --}}
    <script>
    //   (g=>{var h,a,k,p="The Google Maps JavaScript API",c="google",l="importLibrary",q="__ib__",m=document,b=window;b=b[c]||(b[c]={});var d=b.maps||(b.maps={}),r=new Set,e=new URLSearchParams,u=()=>h||(h=new Promise(async(f,n)=>{await (a=m.createElement("script"));e.set("libraries",[...r]+"");for(k in g)e.set(k.replace(/[A-Z]/g,t=>"_"+t[0].toLowerCase()),g[k]);e.set("callback",c+".maps."+q);a.src=`https://maps.${c}apis.com/maps/api/js?`+e;d[q]=f;a.onerror=()=>h=n(Error(p+" could not load."));a.nonce=m.querySelector("script[nonce]")?.nonce||"";m.head.append(a)}));d[l]?console.warn(p+" only loads once. Ignoring:",g):d[l]=(f,...n)=>r.add(f)&&u().then(()=>d[l](f,...n))})({
    //     key: "AIzaSyAMstylquYwo8gAuOrkrF5IsN6K8gbgV6I",
    //     v: "weekly",
    //     // Use the 'v' parameter to indicate the version to use (weekly, beta, alpha, etc.).
    //     // Add other bootstrap parameters as needed, using camel case.
    //   });
    // </script>
    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAMstylquYwo8gAuOrkrF5IsN6K8gbgV6I&callback=initMap" ></script>
@endsection