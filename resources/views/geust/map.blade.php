<!DOCTYPE html>
<html>
<head>
    <title>Add Location</title>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDg1evvc68xACuU2RsbBiV5uoF0vwVNM8Y"></script>
    <style>
        #map {
            height: 400px;
            width: 100%;
        }
    </style>
</head>
<body>
    <h1>Add Location</h1>
    <div id="map"></div>

    <script>
        function initMap() {
            var map = new google.maps.Map(document.getElementById('map'), {
                center: {lat: 35.0902, lng: 8.7129},
                zoom: 4
            });

            var marker;

            // Add click event listener to the map
            map.addListener('click', function(event) {
                // Clear previous marker, if any
                if (marker) {
                    marker.setMap(null);
                }

                // Create a new marker at the clicked location
                marker = new google.maps.Marker({
                    position: event.latLng,
                    map: map
                });

                // Update the input field with the latitude and longitude
                document.getElementById('latitude').value = event.latLng.lat();
                document.getElementById('longitude').value = event.latLng.lng();
            });
        }
    </script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDg1evvc68xACuU2RsbBiV5uoF0vwVNM8Y&callback=initMap" async defer></script>
</body>
</html>
