<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>How to Add Google Map in Laravel? - ItSolutionStuff.com</title>
    <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
    <style type="text/css">
        #map {
          height: 400px;
        
        }
    </style>
</head>
    
<body>
    <div class="container mt-5">
        <h2>How to Add Google Map in Laravel? - ItSolutionStuff.com</h2>
        <div id="map"></div>
    </div>
  
    <script type="text/javascript">
        function initMap() {
          const myLatLng = { lat: 35.414249, lng: 8.101092 };
          const map = new google.maps.Map(document.getElementById("map"), {
            zoom: 5,
            center: myLatLng,
          });
  
          new google.maps.Marker({
            position: myLatLng,
            map,
            title: "مرحبا رسكلي!",
          });
        }
  
        window.initMap = initMap; 
    </script>
  
    
  <script type="text/javascript"
  src="https://maps.google.com/maps/api/js?key=AIzaSyDg1evvc68xACuU2RsbBiV5uoF0vwVNM8Y&callback=initMap" ></script>
  
</body>
</html>