@extends('admin.dashb')
@section('admin')
<div class="page-content">

  <nav class="page-breadcrumb">
    <ol class="breadcrumb">
  
  </nav>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Map - Farmer's View</title>
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css" integrity="sha256-p4NxAoJBhIIN+hmNHrzRCf9tD/miZyoHS5obTRR9BMY=" crossorigin="" />
    <link rel="stylesheet" href="https://unpkg.com/leaflet-control-geocoder/dist/Control.Geocoder.css"/>
    <style>
      *{
    box-sizing: border-box;
}
body{
margin-top: 20px;

padding: 0;
    
}
#map{
    height: 1000px; 
    
}

.search-container {
    position: absolute;
    top: 10px; /* Adjust the top position as needed */
    left: 50px; /* Adjust the left position as needed */
    z-index: 800;
  }
  

    </style>
</head>
<body>
    <div id="map"></div>
    <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js" integrity="sha256-20nQCchB9co0qIjJZRGuk2/Z9VM+kNiyxNV1lvTlZBo=" crossorigin=""></script>
    <script>
    
    window.onload = init;

function init() {
  const mapElement = document.getElementById('map');
  const map = L.map(mapElement).setView([6.9214, 122.0790], 11);

  const base2layer = L.tileLayer('https://server.arcgisonline.com/ArcGIS/rest/services/World_Imagery/MapServer/tile/{z}/{y}/{x}', {}).addTo(map);
  const base1layer = L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {});

  const baseLayers = {
    'World Imagery': base2layer,
    'OpenStreetMap': base1layer
  };

  L.control.layers(baseLayers).addTo(map);

  const drawPolyline = L.polyline([], { color: 'red', weight: 5 }).addTo(map);
  const masterPolyline = L.polyline([], { color: 'blue', weight: 5, fill: 'white' }).addTo(map);
  const masterLineCoordinates = [];

  map.on('click', function(e) {
    const latlng = e.latlng;
    drawPolyline.addLatLng(latlng);
  });

  map.on('dblclick', function(e) {
    const clickedAllCoordinates = drawPolyline.getLatLngs();
    const clickedAllCoordinatesExceptTheLastOne = clickedAllCoordinates.slice(0, clickedAllCoordinates.length - 1);

    masterLineCoordinates.push(clickedAllCoordinatesExceptTheLastOne);
    masterPolyline.setLatLngs(masterLineCoordinates);

    localStorage.setItem('lineCoordinates', JSON.stringify(masterLineCoordinates));

    drawPolyline.setLatLngs([]);
  });

  function clearStoredLineCoordinates() {
    localStorage.removeItem('lineCoordinates');
    masterLineCoordinates.pop();
    masterPolyline.setLatLngs(masterLineCoordinates);
  }

  const clearButton = document.createElement('button');
  clearButton.innerHTML = 'Clear';
  clearButton.addEventListener('click', clearStoredLineCoordinates);
  document.body.appendChild(clearButton);

  // Marker and additional marker data
  const districtsData = [
    {
      name: 'Ayala District',
      masterCoordinates: [[6.9640, 121.9445]],
      additionalCoordinates: [
        [6.962612, 121.957403],
        [6.963518, 121.952942],
        [6.963828, 121.953634],
        [6.960466, 121.953829],
        [6.964878, 121.958875],
        [6.9648, 121.957938],
        [6.965477, 121.960475],
        [6.964825, 121.9599723],
        [6.965538, 121.959663],
        [6.970897, 121.960732],
        [6.960203, 121.962074],
        [6.961795, 121.95877],
        [6.968231, 121.962136],
        [6.971381, 121.96035],
        [6.967591, 121.953692],
        [6.96352, 121.963639],
        [6.978943, 121.936932],
        [6.980922, 121.935174],
        [6.978391, 121.934411],
        [6.975148, 121.9379],
        [6.994362, 121.940397],
        [6.98111, 121.937248],
        [6.976435, 121.942473],
        [6.976875, 121.943403],
        [6.977755, 121.943267],
        [6.976787, 121.941883],
        [7.016884, 121.922146],
        [6.999188, 121.9478],
      ]
    },
    {
      name: 'Manicahan District',
      masterCoordinates: [[7.0245, 122.1935]],
      additionalCoordinates: [
        [7.0277468, 122.1916938],
        [7.0264131, 122.1916883],
        [7.0278417, 122.1969116],
        [7.0270209, 122.1992409],
        [7.0258395, 122.1914175],
        [7.0258467, 122.1919925],
        [7.0281803, 122.1936666],
        [7.0257487, 122.1992006],
        [7.0276412, 122.1907373],
        [7.0276835, 122.1940376],
        [7.0256115, 122.1949751],
        [7.0284182, 122.1927858],
        [7.0272389, 122.1906995],
        [7.0267005, 122.1957214],
        [7.0269416, 122.1898006],
        [7.0275498, 122.1905713],
        [7.0250084, 122.1977179],
        [7.0255155, 122.196101],
        [7.0277927, 122.1918688],
        [7.0283826, 122.1928424],
        [7.0275433, 122.1898976],
        [7.027684, 122.1912042],
        [7.0264706, 122.1958649],
        [7.0264652, 122.1980721],
        [7.0259486, 122.1898619],
        [7.02666, 122.1943318],
        [7.0257078, 122.1906664],
        [7.0273012, 122.195668],
        [7.0262985, 122.1898262],
        [7.0277053, 122.1914797],
        [7.0275722, 122.1900962],
        [7.02566, 122.1897296],
        [7.0259558, 122.1944866],
        [7.0280398, 122.191854],
        [7.0246103, 122.2011931],
        [7.0258267, 122.1991976],
        [7.0279407, 122.1970312],
        [7.0283927, 122.1974594],
        [7.0250946, 122.1979214],
        [7.017962, 122.1849057],
        [7.0201911, 122.1867535],
        [7.0095571, 122.1871316],
        [7.0214148, 122.1853971],
        [7.0222296, 122.1877235],
        [7.0177795, 122.1852886],
        [7.0184864, 122.1843285],
        [7.0106703, 122.1867337],
        [7.0102231, 122.187946],
        [7.0222059, 122.1876731],
        [7.0214731, 122.1859948],
        [7.0214024, 122.1865264],
        [7.0106951, 122.1878787],
        [7.0116362, 122.1848414],
        [7.0140823, 122.1850348],
        [7.0219898, 122.1872227],
        [7.0219855, 122.1872309],
        [7.0177739, 122.1858139],
        [7.0177652, 122.1855441],
        [7.0108466, 122.1873462],
        [7.0187292, 122.1856008],
        [7.0121802, 122.1833145],
        [7.0128348, 122.1877822],
        [7.0125447, 122.1851874],
        [7.0109895, 122.1848042], , [7.0119804, 122.1845108],
        [7.0118518, 122.1834867],
        [7.0210464, 122.1855198],
        [7.02216, 122.187561],
        [7.0125169, 122.1832807],
        [7.012167, 122.1863018],
        [7.0196368, 122.1855175],
        [7.0183262, 122.1846522],
        [7.0220853, 122.1873916],
        [7.0105948, 122.1849108],
        [7.0123345, 122.1846037],
        [7.0113622, 122.1836622],
        [7.100949, 122.2341997],
        [7.1077309, 122.2351404],
        [7.1098989, 122.2365135],
        [7.109586, 122.2353185],
        [7.1044862, 122.2398883],
        [7.1070321, 122.2390386],
        [7.1074868, 122.2374661],
        [7.1036531, 122.2352311],
        [7.1025625, 122.2342348],
        [7.1059604, 122.2391194],
        [7.103175, 122.2339397],
        [7.105837, 122.2358362],
        [7.1069651, 122.2343341],
        [7.1070672, 122.2390094],
        [7.1032504, 122.2356879],
        [7.1003806, 122.2337369],
        [7.1001686, 122.2356908],
        [7.1048151, 122.240071],
        [7.1042209, 122.23504],
        [7.1012815, 122.2339045],
        [7.1061546, 122.2363396],
        [7.1065343, 122.2388585],
        [7.1101943, 122.2377896],
        [7.1018617, 122.2395276],
        [7.1041887, 122.2398028],
        [7.102929, 122.2342736],
        [7.1004878, 122.2388535],
        [7.106141, 122.2383876],
        [7.1025242, 122.2362787],
        [7.1006623, 122.2340824],
        [7.1044091, 122.2340449],
        [7.1088932, 122.2364433],
        [7.1088151, 122.2355603],
        [7.1057364, 122.2372364],
        [7.102656, 122.2362233],
        [7.1049156, 122.2336925],
        [7.1010222, 122.2340321],
        [7.1057678, 122.2396675],
        [7.0997767, 122.2370738],
        [7.1059418, 122.2370712],
      ]
    },
    {
      name: 'Bolong District',
      masterCoordinates: [[7.1044091, 122.2340449]],
      additionalCoordinates: [
        [7.100949, 122.2341997],
        [7.1077309, 122.2351404],
        [7.1098989, 122.2365135],
        [7.109586, 122.2353185],
        [7.1044862, 122.2398883],
        [7.1070321, 122.2390386],
        [7.1074868, 122.2374661],
        [7.1036531, 122.2352311],
        [7.1025625, 122.2342348],
        [7.1059604, 122.2391194],
        [7.103175, 122.2339397],
        [7.105837, 122.2358362],
        [7.1069651, 122.2343341],
        [7.1070672, 122.2390094],
        [7.1032504, 122.2356879],
        [7.1003806, 122.2337369],
        [7.1001686, 122.2356908],
        [7.1048151, 122.240071],
        [7.1042209, 122.23504],
        [7.1012815, 122.2339045],
        [7.1061546, 122.2363396],
        [7.1065343, 122.2388585],
        [7.1101943, 122.2377896],
        [7.1018617, 122.2395276],
        [7.1041887, 122.2398028],
        [7.102929, 122.2342736],
        [7.1004878, 122.2388535],
        [7.106141, 122.2383876],
        [7.1025242, 122.2362787],
        [7.1006623, 122.2340824],
        [7.1044091, 122.2340449],
        [7.1088932, 122.2364433],
        [7.1088151, 122.2355603],
        [7.1057364, 122.2372364],
        [7.102656, 122.2362233],
        [7.1049156, 122.2336925],
        [7.1010222, 122.2340321],
        [7.1057678, 122.2396675],
        [7.0997767, 122.2370738],
        [7.1059418, 122.2370712],
        [7.1071493, 122.2377716],
        [7.1071493, 122.2377716],
        [7.1054327, 122.2352141],
        [7.1046869, 122.2397456],
        [7.1009605, 122.2355407],
        [7.0982609, 122.2383415],
        [7.1092911, 122.2348419],
        [7.1080616, 122.238209],
        [7.1005605, 122.236705],
        [7.1075116, 122.2374829],
        [7.1007099, 122.239046],
        [7.1030188, 122.2256105],
        [7.103009, 122.226563],
        [7.1042811, 122.2245278],
        [7.1040544, 122.2242255],
        [7.0975718, 122.2248403],
        [7.0997567, 122.2259421],
        [7.103619, 122.2274843],
        [7.1011491, 122.2257209],
        [7.0997284, 122.2259229],
        [7.097435, 122.2245713],
        [7.1030074, 122.2287408],
        [7.1013972, 122.2263824],
        [7.1042872, 122.2252567],
        [7.1036824, 122.2271106],
        [7.1012407, 122.2255667],
        [7.1045574, 122.2273059],
        [7.0968293, 122.2234334],
        [7.1007579, 122.226118],
        [7.1037246, 122.2251238],
        [7.1032127, 122.2282243],
        [7.1021394, 122.2267722],
        [7.1036361, 122.2260129],
        [7.1020352, 122.2267773],
        [7.1032449, 122.2282533],
      ]
    }
  ];

  const additionalMarkers = [];

  function createDistrictMarkers(district) {
    const { name, masterCoordinates, additionalCoordinates } = district;

    const masterMarker = L.marker(masterCoordinates[0], {
      title: name,
      opacity: 1.5,
      icon: L.icon({
        iconUrl: '../upload/pin.png',
        iconSize: [50, 60],
        iconheight:[29,45],          
        iconAnchor: [20, 90],
        popupAnchor: [40, 34]
      })
    }).addTo(map);

    masterMarker.on('click', function(e) {
      if (additionalMarkers.length === 0) {
        additionalCoordinates.forEach(coordinate => {
          const marker = L.marker(coordinate, {
            title: '',
            opacity: 1.5
          }).addTo(map);

          additionalMarkers.push(marker);

          marker.on('click', function(e) {
            const popup = L.popup()
              .setLatLng(e.latlng)
              .setContent('Popup Content for additionalCoordinates')
              .openOn(map);
          });
        });
      } else {
        additionalMarkers.forEach(marker => map.removeLayer(marker));
        additionalMarkers.length = 0;
      }
    });
  }

  districtsData.forEach(district => createDistrictMarkers(district));

  map.on('click', function() {
    additionalMarkers.forEach(marker => map.removeLayer(marker));
    additionalMarkers.length = 0;
  });

  const searchControl = L.Control.geocoder({
    defaultMarkGeocode: false
  });

  const searchContainer = L.DomUtil.create('div', 'search-container');
  searchContainer.appendChild(searchControl.onAdd(map));
  mapElement.appendChild(searchContainer);

  searchControl.on('markgeocode', function(e) {
    const { center } = e.geocode;
    map.flyTo(center, 16, {
      animate: true,
      duration: 1.5
    });

    map.once('zoomend', function() {
      L.marker(center).addTo(map);
    });
  });
}

    </script>
</body>
</html>
<!--
<div class="page-content">

  <nav class="page-breadcrumb">
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="#">Forms</a></li>
      <li class="breadcrumb-item active" aria-current="page">Rice Survey Forms</li>
    </ol>
  </nav>-->
  
    
 <!-- <div class="row">
    <div class="col-lg-6 grid-margin stretch-card">
      <div class="card">
        <div class="card-body">
          <h4 class="card-title">Form Validation</h4>
          <p class="text-muted mb-3">Read the <a href="https://jqueryvalidation.org/" target="_blank"> Official jQuery Validation Documentation </a>for a full list of instructions and other options.</p>
          <form id="signupForm">
            <div class="mb-3">
              <label for="name" class="form-label">Name</label>
              <input id="name" class="form-control" name="name" type="text">
            </div>
            <div class="mb-3">
              <label for="email" class="form-label">Email</label>
              <input id="email" class="form-control" name="email" type="email">
            </div>
            <div class="mb-3">
              <label for="ageSelect" class="form-label">Age</label>
              <select class="form-select" name="age_select" id="ageSelect">
                <option selected disabled>Select your age</option>
                <option>12-18</option>
                <option>18-22</option>
                <option>22-30</option>
                <option>30-60</option>
                <option>Above 60</option>
              </select>
            </div>
            <div class="mb-3">
              <label class="form-label">Gender</label>
              <div>
                <div class="form-check form-check-inline">
                  <input type="radio" class="form-check-input" name="gender_radio" id="gender1">
                  <label class="form-check-label" for="gender1">
                    Male
                  </label>
                </div>
                <div class="form-check form-check-inline">
                  <input type="radio" class="form-check-input" name="gender_radio" id="gender2">
                  <label class="form-check-label" for="gender2">
                    Female
                  </label>
                </div>
                <div class="form-check form-check-inline">
                  <input type="radio" class="form-check-input" name="gender_radio" id="gender3">
                  <label class="form-check-label" for="gender3">
                    Other
                  </label>
                </div>
              </div>
            </div>
            <div class="mb-3">
              <label class="form-label">Skills</label>
              <div>
                <div class="form-check form-check-inline">
                  <input type="checkbox" name="skill_check" class="form-check-input" id="checkInline1">
                  <label class="form-check-label" for="checkInline1">
                    Angular
                  </label>
                </div>
                <div class="form-check form-check-inline">
                  <input type="checkbox" name="skill_check" class="form-check-input" id="checkInline2">
                  <label class="form-check-label" for="checkInline2">
                    ReactJs
                  </label>
                </div>
                <div class="form-check form-check-inline">
                  <input type="checkbox" name="skill_check" class="form-check-input" id="checkInline3">
                  <label class="form-check-label" for="checkInline3">
                    VueJs
                  </label>
                </div>
              </div>
            </div>
            <div class="mb-3">
              <label for="password" class="form-label">Password</label>
              <input id="password" class="form-control" name="password" type="password">
            </div>
            <div class="mb-3">
              <label for="confirm_password" class="form-label">Confirm password</label>
              <input id="confirm_password" class="form-control" name="confirm_password" type="password">
            </div>
            <div class="mb-3">
              <div class="form-check">
                <label class="form-check-label" for="termsCheck">
                  Agree to <a href="#"> terms and conditions </a>
                </label>
                <input type="checkbox" class="form-check-input" name="terms_agree" id="termsCheck">
              </div>
            </div>
            <input class="btn btn-primary" type="submit" value="Submit">
          </form>
        </div>
      </div>
    </div>
    <div class="col-lg-6 grid-margin stretch-card">
      <div class="card">
        <div class="card-body">
          <h4 class="card-title">Bootstrap MaxLength</h4>
          <p class="text-muted mb-3">Read the <a href="https://github.com/mimo84/bootstrap-maxlength" target="_blank"> Official Bootstrap MaxLength Documentation </a>for a full list of instructions and other options.</p>
          <div class="row mb-3">
            <div class="col-lg-3">
              <label for="defaultconfig" class="col-form-label">Default usage</label>
            </div>
            <div class="col-lg-8">
              <input class="form-control" maxlength="25" name="defaultconfig" id="defaultconfig" type="text" placeholder="Type Something..">
            </div>
          </div>
          <div class="row mb-3">
            <div class="col-lg-3">
              <label for="defaultconfig-2" class="col-form-label">Few options</label>
            </div>
            <div class="col-lg-8">
              <input class="form-control" maxlength="20" name="defaultconfig-2" id="defaultconfig-2" type="text" placeholder="Type Something..">
            </div>
          </div>
          <div class="row mb-3">
            <div class="col-lg-3">
              <label for="defaultconfig-3" class="col-form-label">All the options</label>
            </div>
            <div class="col-lg-8">
              <input class="form-control" maxlength="10" name="defaultconfig-3" id="defaultconfig-3" type="text" placeholder="Type Something..">
            </div>
          </div>
          <div class="row">
            <div class="col-lg-3">
              <label for="defaultconfig-4" class="col-form-label">Text Area</label>
            </div>
            <div class="col-lg-8">
              <textarea id="maxlength-textarea" class="form-control" id="defaultconfig-4" maxlength="100" rows="8" placeholder="This textarea has a limit of 100 chars."></textarea>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="row">
    <div class="col-md-12 grid-margin">
      <div class="card">
        <div class="card-body">
          <h6 class="card-title"><span>I.</span>Personal Information</h6>

         <p class="text-muted mb-3">Read the <a href="https://github.com/RobinHerbots/Inputmask" target="_blank"> Official Inputmask Documentation </a>for a full list of instructions and other options.</p>
          <form class="forms-sample">
            <div class="row mb-3">
              <div class="col">
                <label for="lastname" class="form-label">LastName:</label>
                <input id="lastname" class="form-control mb-4 mb-md-0" placeholder="Enter your Lastname" type="text">
              </div>
              <div class="col">
                <label class="form-label">MiddlName:</label>
                <input type="text" class="form-control mb-4 mb-md-0" name="middlename" id="middlename" placeholder="Enter Your Middle name">
              </div>
              <div class="col">
                <label class="form-label">FirstName:</label>
                <input type="text" class="form-control mb-4 mb-md-0" name="firstname" id="firstname" placeholder="Enter your Firstname">
              </div>
              <div class="col">
                <label class="form-label">ExtensionName:</label>
                <input type="text" class="form-control mb-2 mb-md-1" name="ExtensionName" id="ExtensionName" placeholder="Enter your ExtensionName">
              </div>
              </div>
  
            <div class="row mb-3">
              <div class="col-md-5">
                <label class="form-label">Home Address:</label>
                <input class="form-control mb-4 mb-md-0" name="ExtensionName" id="ExtensionName" placeholder="Enter your home address" />
              </div>
              <div class="col-md-3">
                <label class="form-label">Sex</label>
                <select class="form-select mb-4 mb-md-0" name="age_select" id="ageSelect">
                <option selected disabled>Select your sex</option>
                <option>Male</option>
                <option>Female</option>
              </select>
              </div>
            
              <div class="col-md-3">
                <label class="form-label">Religion:</label>
                <input class="form-control mb-4 mb-md-0" name="ExtensionName" id="ExtensionName" placeholder="Enter your Religion" />
              </div>
            </div>
            <div class="row mb-3">
              <div class="col">
                <label for="lastname" class="form-label">Date of Birth:</label>
                <input type="date" id="lastname" class="form-control mb-4 mb-md-0" >
              </div>
              <div class="col">
                <label for="lastname" class="form-label">Place of Birth:</label>
                <input id="lastname" class="form-control mb-4 mb-md-0" placeholder="Enter your Place of Birth" type="text">
              </div>
              <div class="col">
                <label class="form-label">Contact Number:</label>
                <input class="form-control mb-4 mb-md-0" placeholder="Enter your contact number" type="text"/>
              </div>
              <div class="col">
              <label class="form-label">Civil Status</label>
                <select class="form-select mb-4 mb-md-0" name="age_select" id="ageSelect">
                <option selected disabled>Select</option>
                <option>Single</option>
                <option>Maried</option>
              </select>
              </div>
            </div>
            <div class="row mb-3">
              <div class="col">
                <label for="lastname" class="form-label">Name Of Legal Spouse:</label>
                <input class="form-control mb-4 mb-md-0" placeholder="Enter your spouse name" type="text"/>
              </div>
              <div class="col">
                <label for="lastname" class="form-label">No.of Children:</label>
                <input id="lastname" class="form-control mb-4 mb-md-0" placeholder="Enter your no. of children" type="text">
              </div>
              <div class="col">
                <label class="form-label">Mother's maiden Name:</label>
                <input class="form-control mb-4 mb-md-0" placeholder="Enter your Mother's maiden Name" type="text"/>
              </div>
              <div class="col">
                <label class="form-label">Highest Formal Education :</label>
                <input class="form-control mb-4 mb-md-0" placeholder="Enter your Education" type="text"/>
              </div>
            </div>
            <div class="row mb-3">
                <div class="col">
                  <label class="form-label">Persin with Disability</label>
                    <select class="form-select mb-4 mb-md-0" name="age_select" id="ageSelect">
                    <option selected disabled>Select</option>
                    <option>Yes</option>
                    <option>No</option>
                  </select>
                  </div>
              <div class="col">
                <label for="lastname" class="form-label">PWD ID No.:</label>
                <input id="lastname" class="form-control mb-4 mb-md-0" placeholder="Enter PWD ID No." type="text">
              </div>
              <div class="col">
                <label class="form-label">Government Issued ID</label>
                  <select class="form-select mb-4 mb-md-0" name="age_select" id="ageSelect">
                  <option selected disabled>Select</option>
                  <option>Yes</option>
                  <option>No</option>
                </select>
                </div>
                <div class="col">
                  <label for="lastname" class="form-label">ID type:</label>
                  <input id="lastname" class="form-control mb-4 mb-md-0" placeholder="Enter ID type" type="text">
                </div>
                <div class="col">
                  <label for="lastname" class="form-label">ID No.:</label>
                  <input id="lastname" class="form-control mb-4 mb-md-0" placeholder="Enter ID no." type="text">
                </div>
            </div>
            <div class="row mb-3">
              <div class="col">
                <label class="form-label">Members of any Farmers Assoc/Org/Coop</label>
                  <select class="form-select mb-4 mb-md-0" name="age_select" id="ageSelect">
                  <option selected disabled>Select</option>
                  <option>Yes</option>
                  <option>No</option>
                </select>
                </div>
            <div class="col">
              <label for="lastname" class="form-label">if yes, please specify:</label>
              <input id="lastname" class="form-control mb-4 mb-md-0" placeholder="Enter specify name." type="text">
            </div>
              <div class="col">
                <label for="lastname" class="form-label">Name of Contac Person:</label>
                <input id="lastname" class="form-control mb-4 mb-md-0" placeholder="Enter name of contact person" type="text">
              </div>
              <div class="col">
                <label for="lastname" class="form-label">Cp/Tel no.:</label>
                <input id="lastname" class="form-control mb-4 mb-md-0" placeholder="Enter cp/tel.no.." type="text">
              </div>
          </div>
            <div class="row mb-3">
              <div class="col-md-6">
                <label class="form-label">Currency:</label>
                <input class="form-control mb-4 mb-md-0" data-inputmask="'alias': 'currency', 'prefix':'$'"/>
              </div>
              <div class="col-md-6">
                <label class="form-label">Serial key:</label>
                <input class="form-control" data-inputmask-alias="****-****-****-****"/>
              </div>
            </div>
            <div class="row mb-3">
              <div class="col-md-6">
                <label class="form-label">Email:</label>
                <input class="form-control mb-4 mb-md-0" data-inputmask="'alias': 'email'"/>
              </div>
              <div class="col-md-6">
                <label class="form-label">Ip address:</label>
                <input class="form-control" data-inputmask="'alias': 'ip'"/>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>

  <div class="row">
    <div class="col-md-6 grid-margin stretch-card">
      <div class="card">
        <div class="card-body">
          <h4 class="card-title">Select 2</h4>
          <p class="text-muted mb-3">Read the <a href="https://select2.org/" target="_blank"> Official Select2 Documentation </a>for a full list of instructions and other options.</p>
          <div class="mb-3">
            <label class="form-label">Single select box using select 2</label>
            <select class="js-example-basic-single form-select" data-width="100%">
              <option value="TX">Texas</option>
              <option value="NY">New York</option>
              <option value="FL">Florida</option>
              <option value="KN">Kansas</option>
              <option value="HW">Hawaii</option>
            </select>
          </div>
          <div class="mb-3">
            <label class="form-label">Multiple select using select 2</label>
            <select class="js-example-basic-multiple form-select" multiple="multiple" data-width="100%">
              <option value="TX">Texas</option>
              <option value="WY">Wyoming</option>
              <option value="NY">New York</option>
              <option value="FL">Florida</option>
              <option value="KN">Kansas</option>
              <option value="HW">Hawaii</option>
            </select>
          </div>
        </div>
      </div>
    </div>
    <div class="col-md-6 grid-margin stretch-card">
      <div class="card">
        <div class="card-body">
          <h4 class="card-title">Typeahead</h4>
          <p class="text-muted mb-3">Read the <a href="https://github.com/twitter/typeahead.js" target="_blank"> Official Typeahead.js Documentation </a>for a full list of instructions and other options.</p>
          <div class="row">
            <div class="col">
              <label class="form-label">Basic</label>
              <div id="the-basics">
                <input class="typeahead" type="text" placeholder="States of USA">
              </div>
            </div>
            <div class="col">
              <label class="form-label">Bloodhound</label>
              <div id="bloodhound">
                <input class="typeahead" type="text" placeholder="States of USA">
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="row">
    <div class="col-md-6 grid-margin stretch-card">
      <div class="card">
        <div class="card-body">
          <h6 class="card-title">Tags input</h6>
          <p class="text-muted mb-3">Read the <a href="https://www.npmjs.com/package/jquery-tags-input" target="_blank"> Official jQuery-tags-input Documentation </a>for a full list of instructions and other options.</p>
          <p class="mb-2">Type something to add a new tag</p>
          <div>
            <input name="tags" id="tags" value="New York,Texas,Florida,New Mexico" />
          </div>
        </div>
      </div>
    </div>
    <div class="col-md-6 grid-margin stretch-card">
      <div class="card">
        <div class="card-body">
          <h6 class="card-title">Color picker</h6>
          <p class="text-muted mb-3">Flat, simple, and responsive Color-Picker library. Read the <a href="https://github.com/Simonwep/pickr" target="_blank"> Official @simonwep/pickr Documentation </a>for a full list of instructions and other options.</p>
          <p class="mb-2">Click the color square to activate the Color Picker</p>
          <div class="d-flex">
            <div class="me-2">
              <div id="pickr_1"></div>
            </div>
            <div class="me-2">
              <div id="pickr_2"></div>
            </div>
            <div class="me-2">
              <div id="pickr_3"></div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="row">
    <div class="col-md-6 grid-margin stretch-card">
      <div class="card">
        <div class="card-body">
          <h6 class="card-title">Date picker</h6>
          <p class="text-muted mb-3">Read the <a href="https://flatpickr.js.org/" target="_blank"> Official Flatpickr Documentation </a>for a full list of instructions and other options.</p>
          <div class="input-group flatpickr" id="flatpickr-date">
            <input type="text" class="form-control" placeholder="Select date" data-input>
            <span class="input-group-text input-group-addon" data-toggle><i data-feather="calendar"></i></span>
          </div>
        </div>
      </div>
    </div>
    <div class="col-md-6 grid-margin stretch-card">
      <div class="card">
        <div class="card-body">
          <h6 class="card-title">Time picker</h6>
          <p class="text-muted mb-3">Read the <a href="https://flatpickr.js.org/" target="_blank"> Official Flatpickr Documentation </a>for a full list of instructions and other options.</p>
          <div class="input-group flatpickr" id="flatpickr-time">
            <input type="text" class="form-control" placeholder="Select time" data-input>
            <span class="input-group-text input-group-addon" data-toggle><i data-feather="clock"></i></span>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="row">
    <div class="col-md-6 stretch-card grid-margin grid-margin-md-0">
      <div class="card">
        <div class="card-body">
          <h6 class="card-title">Dropzone</h6>
          <p class="text-muted mb-3">Read the <a href="https://www.dropzonejs.com/" target="_blank"> Official Dropzone.js Documentation </a>for a full list of instructions and other options.</p>
          <form action="/file-upload" class="dropzone" id="exampleDropzone"></form>
        </div>
      </div>
    </div>
    <div class="col-md-6 stretch-card">
      <div class="card">
        <div class="card-body">
          <h6 class="card-title">Dropify</h6>
          <p class="text-muted mb-3">Read the <a href="https://github.com/JeremyFagis/dropify" target="_blank"> Official Dropify Documentation </a>for a full list of instructions and other options.</p>
          <input type="file" id="myDropify"/>
        </div>
      </div>
    </div>
  </div>

</div>-->@endsection