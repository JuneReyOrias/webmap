let map; // Declare the map variable to make it accessible globally

function initMap() {
    // Create LatLng objects for different locations
    let map; // Global map variable
    let markers = []; // Global array to track markers


    // ... (your existing initMap code)

    // Get the file input element
    const fileInput = document.getElementById('fileInput');

    // Listen for changes in the file input
    fileInput.addEventListener('change', handleFileUpload);


    function handleFileUpload() {
        const fileInput = document.getElementById('fileInput');
        const file = fileInput.files[0];

        if (file) {
            const reader = new FileReader();

            reader.onload = function(e) {
                const fileContent = e.target.result;

                // Check if the file is KML or KMZ
                if (file.name.toLowerCase().endsWith('.kml')) {
                    displayKML(fileContent);
                } else if (file.name.toLowerCase().endsWith('.kmz')) {
                    displayKMZ(fileContent);
                } else {
                    console.error('Unsupported file format');
                }
            };

            reader.readAsText(file);
        }
    }

    // Function to display KML data on the map
    function displayKML(kmlData) {
        // ... (your existing displayKML code)
    }

    // Function to display KMZ data on the map
    function displayKMZ(kmzData) {
        // ... (your existing displayKMZ code)
    }
    class farmprofiles {
        constructor(gps_latitude, gps_longitude) {

            this.gps_latitude = gps_latitude;
            this.gps_longitude = gps_longitude;
        }
    }

    const listOfprofiles = []

    class farmdistricts {
        constructor(latitude, longitude, district, gps_latitude, gps_longitude) {
            this.latitude = latitude;
            this.longitude = longitude;
            this.location_name = district;
            this.gps_latitude = gps_latitude;
            this.gps_longitude = gps_longitude;
        }
    }

    const listOfFarm = []

    const dataLocation = document.querySelectorAll(".test")
    dataLocation.forEach((location, index) => {
            let lat = location.getAttribute("data-lat")
            let long = location.getAttribute("data-lng")
            let loc = location.getAttribute("data-location")
            let farm_lat = location.getAttribute("data-farms_lat")
            let farm_long = location.getAttribute("data-farms_lng")
            listOfFarm.push(new farmdistricts(parseFloat(lat), parseFloat(long), loc, parseFloat(farm_lat), parseFloat(farm_long), ));
        })
        //polygons
    class districtPolygon {
        constructor(verone_latitude, verone_longitude, vertwo_latitude, vertwo_longitude, verthree_latitude, verthree_longitude, vertfour_latitude, vertfour_longitude, verfive_latitude, verfive_longitude, versix_latitude, versix_longitude, verseven_latitude, verseven_longitude, vereight_latitude, verteight_longitude, strokecolor) {
            this.verone_latitude = verone_latitude;
            this.verone_longitude = verone_longitude;
            this.vertwo_latitude = vertwo_latitude;
            this.vertwo_longitude = vertwo_longitude;
            this.verthree_latitude = verthree_latitude;
            this.verthree_longitude = verthree_longitude;
            this.vertfour_latitude = vertfour_latitude;
            this.vertfour_longitude = vertfour_longitude;
            this.verfive_latitude = verfive_latitude;
            this.verfive_longitude = verfive_longitude;
            this.versix_latitude = versix_latitude;
            this.versix_longitude = versix_longitude;
            this.verseven_latitude = verseven_latitude;
            this.verseven_longitude = verseven_longitude;
            this.vereight_latitude = vereight_latitude;
            this.verteight_longitude = verteight_longitude;
            this.strokecolor = strokecolor;
        }
    }

    const listOfPolygon = []

    const dataBoundary = document.querySelectorAll(".test")
    dataBoundary.forEach((location, index) => {
        let verone_lat = location.getAttribute("data-verone_lat")
        let verone_long = location.getAttribute("data-verone_lng")
        let vertwo_lat = location.getAttribute("data-vertwo_lat")
        let vertwo_long = location.getAttribute("data-vertwo_lng")
        let verthree_lat = location.getAttribute("data-verthree_lat")
        let verthree_long = location.getAttribute("data-verthree_lng")
        let vertfour_lat = location.getAttribute("data-vertfour_lat")
        let vertfour_long = location.getAttribute("data-vertfour_lng")
        let verfive_lat = location.getAttribute("data-verfive_lat")
        let verfive_long = location.getAttribute("data-verfive_lng")
        let versix_lat = location.getAttribute("data-versix_lat")
        let versix_long = location.getAttribute("data-versix_lng")
        let verseven_lat = location.getAttribute("data-verseven_lat")
        let verseven_long = location.getAttribute("data-verseven_lng")
        let vereight_lat = location.getAttribute("data-vereight_lat")
        let verteight_long = location.getAttribute("data-verteight_lng")
        let color = location.getAttribute("data-color")
        listOfPolygon.push(new districtPolygon(parseFloat(verone_lat), parseFloat(verone_long),
            parseFloat(vertwo_lat), parseFloat(vertwo_long), parseFloat(verthree_lat), parseFloat(verthree_long),
            parseFloat(vertfour_lat), parseFloat(vertfour_long), parseFloat(verfive_lat), parseFloat(verfive_long),
            parseFloat(versix_lat), parseFloat(versix_long), parseFloat(verseven_lat), parseFloat(verseven_long),
            parseFloat(vereight_lat), parseFloat(verteight_long), color,
        ));
    })

    const locationZC = { lat: 6.9214, lng: 122.0790 }; // New York City, USA
    // const locationManicahan = { lat: 7.0245, lng: 122.1935 }; // Manicahan, Philippines
    // const locationTumaga = { lat: 6.9434, lng: 122.0795 }; // Tumaga, Philippines
    // const locationAyala = { lat: 6.9692, lng: 121.9471 }; // Tumaga, Philippines
    // const locationCulianan = { lat: 6.977367, lng: 122.168928 }; // Tumaga, Philippines
    // const locationCuruan = { lat: 7.2004, lng: 122.1803 }; // Tumaga, Philippines
    // const locationVitali = { lat: 7.3586, lng: 122.3483 }; // Tumaga, Philippines
    // // Tumaga farmers
    // const locationTumManzano = { lat: 6.924013, lng: 122.096047 }; // Tumaga, Philippines
    // const locationTumFALCASANTOS = { lat: 6.9250247, lng: 122.0981137 }; // Tumaga, Philippines 

    // const locationTumPARAGOSO = { lat: 6.9277897, lng: 122.09070217 }; // Tumaga, Philippines
    // const locationTumPARAGOSOS = { lat: 6.9276535, lng: 122.0969297 }; // Tumaga, Philippines
    // const locationTumMANOY = { lat: 6.9271337, lng: 122.0976297 }; // Tumaga, Philippines
    // const locationTumBOROMEO = { lat: 6.9223527, lng: 122.0969971 }; // Tumaga, Philippines 
    // const locationTumGALVEZ = { lat: 6.9271378, lng: 122.0976345 }; // Tumaga, Philippines
    // const locationTumANGELES = { lat: 6.923881, lng: 122.0964671 }; // Tumaga, Philippines 
    // const locationTumRICO = { lat: 6.9216691, lng: 122.1002043 }; // Tumaga, Philippines
    // const locationTumNATIVIDAD = { lat: 6.9241163, lng: 122.1000559 }; // Tumaga, Philippines 
    // const locationTumMADRAZO = { lat: 6.9252693, lng: 122.097675 }; // Tumaga, Philippines
    // const locationTumRICOS = { lat: 6.9256862, lng: 122.0966491 }; // Tumaga, Philippines 

    // const locationTumgALVEZ = { lat: 6.9257358, lng: 122.1008294 }; // Tumaga, Philippines
    // const locationTumCLIMACO = { lat: 6.9251268, lng: 122.0983621 }; // Tumaga, Philippines 
    // const locationTumMALICAY = { lat: 6.9213221, lng: 122.0994685 }; // Tumaga, Philippines
    // const locationTumYEE = { lat: 6.9291991, lng: 122.0998732 }; // Tumaga, Philippines 
    // const locationNATIVIDAD = { lat: 6.92666751, lng: 122.097755 }; // Tumaga, Philippines
    // const locationTumEJE = { lat: 6.9236119, lng: 122.0968145 }; // Tumaga, Philippines 
    // const locationTumNATIVIDADes = { lat: 6.9296202, lng: 122.0962877 }; // Tumaga, Philippines
    // const locationTumNATIVIDADrod = { lat: 6.9264808, lng: 122.0996788 }; // Tumaga, Philippines 
    // const permDistrictCoordinates = [
    //     { lat: 6.9674981, lng: 122.0467514 }, // Vertex 1
    //     { lat: 6.9142233, lng: 122.0425935 }, // Vertex 2
    //     { lat: 6.9391805, lng: 121.9914933 }, // Vertex 3
    //     { lat: 6.9544422, lng: 121.9726062 }, // Vertex 4
    //     { lat: 6.9546074, lng: 121.9496387 }, // Vertex 1
    //     { lat: 6.9846874, lng: 121.9253666 }, // Vertex 2
    //     { lat: 7.0155378, lng: 121.9181573 }, // Vertex 3
    //     { lat: 7.0424026, lng: 121.9650361 }, // Vertex 4
    // ];
    // Create a LatLng array for the Perm District polygon



    // Options for the map
    const mapOptions = {
        center: locationZC,
        zoom: 11
    };

    // Create the map instance
    map = new google.maps.Map(document.getElementById('map'), mapOptions);

    // // Place a marker on the map for each location
    const image =
        "https://developers.google.com/maps/documentation/javascript/examples/full/images/beachflag.png";
    const bounds = new google.maps.LatLngBounds();
    listOfFarm.forEach(farm => {
        console.log(farm.location_name)
        console.log(farm.latitude)
        console.log(farm.longitude)
        console.log(farm.gps_latitude)
        console.log(farm.gps_longitude)
        const positions = {
            lat: farm.gps_latitude ? farm.gps_latitude : farm.latitude,
            lng: farm.gps_longitude ? farm.gps_longitude : farm.longitude,
        };


        new google.maps.Marker({
            position: positions,
            // position: { lat: farm.gps_latitude, lng: farm.gps_longitude },
            // position: { lat: farm.latitude, lng: farm.longitude },
            map: map,
            // map1: map,
            title: farm.location_name,
            icon: image
                // title1: farm.location_name,
                // icon: `http://maps.google.com/mapfiles/ms/icons/${pinColor}-dot.png`,
        });
        bounds.extend(positions);
    })
    map.fitBounds(bounds);
    // listOfFarm.forEach(farm => {
    //     console.log(farm.location_name);
    //     console.log(farm.latitude);
    //     console.log(farm.longitude);
    //     console.log(farm.gps_latitude);
    //     console.log(farm.gps_longitude);

    //     const position = {
    //         lat: farm.gps_latitude ? farm.gps_latitude : farm.latitude,
    //         lng: farm.gps_longitude ? farm.gps_longitude : farm.longitude,
    //     };

    //     new google.maps.Marker({
    //         position: position,
    //         map: map,
    //         title: farm.location_name,
    //         icon: image,
    //     });
    // });
    const strokeColors = ['#EE9322', '#3366cc', '#ff0000', '#00ff00'];

    listOfPolygon.forEach(polygon => {
        console.log(polygon.verone_latitude)
        console.log(polygon.verone_longitude)
        console.log(polygon.vertwo_latitude)
        console.log(polygon.vertwo_longitude)
        console.log(polygon.verthree_latitude)
        console.log(polygon.verthree_longitude)
        console.log(polygon.vertfour_latitude)
        console.log(polygon.vertfour_longitude)
        console.log(polygon.verfive_latitude)
        console.log(polygon.verfive_longitude)
        console.log(polygon.versix_latitude)
        console.log(polygon.versix_longitude)
        console.log(polygon.verseven_latitude)
        console.log(polygon.verseven_longitude)
        console.log(polygon.vereight_latitude)
        console.log(polygon.verteight_longitude)
        console.log(polygon.strokecolor)



        const permDistrictCoordinates = [
            { lat: polygon.verone_latitude, lng: polygon.verone_longitude }, // Vertex 1
            { lat: polygon.vertwo_latitude, lng: polygon.vertwo_longitude }, // Vertex 2
            { lat: polygon.verthree_latitude, lng: polygon.verthree_longitude }, // Vertex 3
            { lat: polygon.vertfour_latitude, lng: polygon.vertfour_longitude }, // Vertex 4
            { lat: polygon.verfive_latitude, lng: polygon.verfive_longitude }, // Vertex 1
            { lat: polygon.versix_latitude, lng: polygon.versix_longitude }, // Vertex 2
            { lat: polygon.verseven_latitude, lng: polygon.verseven_longitude }, // Vertex 3
            { lat: polygon.vereight_latitude, lng: polygon.verteight_longitude }, // Vertex 4

        ];

        const permDistrictPolygon = new google.maps.Polygon({
            paths: permDistrictCoordinates,
            strokeColor: polygon.strokecolor,
            strokeOpacity: 0.8,
            strokeWeight: 2,
            fillColor: 'transparent', // Set fillColor to transparent
            fillOpacity: 0 // Set fillOpacity to 0 for transparency
        });
        permDistrictPolygon.setMap(map);
    })



    // // Create the Perm District polygon
    // const permDistrictPolygon = new google.maps.Polygon({
    //     paths: permDistrictCoordinates,
    //     strokeColor: '#fff',
    //     strokeOpacity: 0.8,
    //     strokeWeight: 2,
    //     fillColor: '#FF0000',
    //     fillOpacity: 0.35
    // });
    // permDistrictPolygon.setMap(map);
    // const infoWindow = new google.maps.InfoWindow({
    //     content: `<div><strong>${farm.location_name}</strong></div>`,
    // });
    // permDistrictPolygon.setMap(map);
    // Add a click event listener to open the info window when the marker is clicked
    marker.addListener('click', function() {
        infoWindow.open(map, marker);
    });
    // Create the map instance
    map = new google.maps.Map(document.getElementById('map'), mapOptions);

    // Initialize the drawing manager
    drawingManager = new google.maps.drawing.DrawingManager({
        drawingMode: null,
        drawingControl: true,
        drawingControlOptions: {
            position: google.maps.ControlPosition.TOP_LEFT,
            drawingModes: ['polygon', 'polyline'],
        },
        polygonOptions: {
            strokeColor: '#00FF00',
            strokeOpacity: 0.8,
            strokeWeight: 2,
            fillColor: '#00FF00',
            fillOpacity: 0.35,
        },
        polylineOptions: {
            strokeColor: '#0000FF',
            strokeOpacity: 0.8,
            strokeWeight: 2,
        },
    });

    // Set the drawing manager on the map
    drawingManager.setMap(map);

    // Add an event listener for when an overlay is complete
    google.maps.event.addListener(drawingManager, 'overlaycomplete', function(event) {
        // Get the overlay (polygon or polyline) that was drawn
        const overlay = event.overlay;

        // Add the overlay to the map
        overlay.setMap(map);

        // Add the overlay to the global array (if you want to keep track of them)
        markers.push(overlay);

        // Add an event listener for click on the overlay
        google.maps.event.addListener(overlay, 'click', function() {
            // Handle the click event for the overlay (e.g., show information)
            console.log('Overlay clicked');
        });

        // Reset the drawing mode to null (disables drawing)
        drawingManager.setDrawingMode(null);
    });

    // listOfFarm.forEach(farm => {
    //     const marker = new google.maps.Marker({
    //         position: { lat: farm.latitude, lng: farm.longitude },
    //         map: map,
    //         title: farm.location_name,
    //         icon: 'path/to/custom-marker.png', // Replace with the path to your custom marker image
    //     });

    // Create an info window for each marker
    // const infoWindowContent = `<div><strong>${farm.location_name}</strong></div>`;
    // const infoWindow = new google.maps.InfoWindow({
    //     content: infoWindowContent,
    // });

    // Add a click event listener to open the info window when the marker is clicked
    //     marker.addListener('click', function() {
    //         infoWindow.open(map, marker);
    //     });

    //     markers.push(marker); // Add the marker to the global array
    // });

    // Use MarkerClusterer to cluster the markers
    const markerCluster = new MarkerClusterer(map, markers, {
        imagePath: 'https://developers.google.com/maps/documentation/javascript/examples/markerclusterer/m',
    });





    // Set the polygon on the map
    permDistrictPolygon.setMap(map);

    // Get the file input element
    // const fileInput = document.getElementById('fileInput');

    // Listen for changes in the file input
    fileInput.addEventListener('change', handleFileUpload);

    // Function to handle file upload
    function handleFileUpload(event) {
        const fileInput = event.target;
        const selectedFile = fileInput.files[0];

        if (selectedFile) {
            const reader = new FileReader();

            reader.onload = function(event) {
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
    // Create the map instance
    map = new google.maps.Map(document.getElementById('map'), mapOptions);

    // Initialize the drawing manager
    drawingManager = new google.maps.drawing.DrawingManager({
        drawingMode: null,
        drawingControl: true,
        drawingControlOptions: {
            position: google.maps.ControlPosition.TOP_LEFT,
            drawingModes: ['polygon', 'polyline'],
        },
        polygonOptions: {
            strokeColor: '#00FF00',
            strokeOpacity: 0.8,
            strokeWeight: 2,
            fillColor: '#00FF00',
            fillOpacity: 0.35,
        },
        polylineOptions: {
            strokeColor: '#0000FF',
            strokeOpacity: 0.8,
            strokeWeight: 2,
        },
    });

    // Set the drawing manager on the map
    drawingManager.setMap(map);

    // Add an event listener for when an overlay is complete
    google.maps.event.addListener(drawingManager, 'overlaycomplete', function(event) {
        // Get the overlay (polygon or polyline) that was drawn
        const overlay = event.overlay;

        // Add the overlay to the map
        overlay.setMap(map);

        // Add the overlay to the global array (if you want to keep track of them)
        markers.push(overlay);

        // Add an event listener for click on the overlay
        google.maps.event.addListener(overlay, 'click', function() {
            // Handle the click event for the overlay (e.g., show information)
            console.log('Overlay clicked');
        });

        // Reset the drawing mode to null (disables drawing)
        drawingManager.setDrawingMode(null);
    });

}