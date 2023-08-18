<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDg1evvc68xACuU2RsbBiV5uoF0vwVNM8Y"></script>

   
    <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
    <style type="text/css">
        #map {
          height: 350px;
          width:350px;
          margin: 20px auto;
   
        
        }
        body {
  font-family: Arial, sans-serif;
  background-color: #f1f1f1;
}

form {
  border: 3px solid #f1f1f1;
  background-color: #ffffff;
  padding: 20px;
  margin: 20px auto;
  max-width: 600px;
}

h1 {
  text-align: center;
  color: #333333;
}

input[type=text], input[type=tel], input[type=file], textarea {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  box-sizing: border-box;
  border: 2px solid #ccc;
  border-radius: 4px;
  resize: vertical;
}

input[type=submit] {
  background-color: #333333;
  color: #ffffff;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #555555;
}

@media screen and (max-width: 600px) {
  input[type=submit] {
    width: 100%;
  }
}

    </style>
</head>
    
<body>
    <div class="container mt-5">
      <div id="map"></div>
       
        
        <h1>بلاغ عن موقع يحتوي على نفايات</h1>
        <form action= "{{url('gen')}}"  method="POST" enctype="multipart/form-data">
          @csrf
          <label for="location">المكان:</label><br>
          <input type="text" id="location" name="location"><br>
    
          <label for="image">صورة المكان:</label><br>
          <input type="file" id="photo" name="photo"><br>
    
          <label for="address">العنوان الكامل:</label><br>
          <textarea id="address" name="address"></textarea><br>
    
          <label for="phone">رقم الهاتف:</label><br>
          <input type="tel" id="phone" name="phone"><br><br>
    
          <input type="submit" value="إرسال"    >
          <h1>الابلاغ عن موقع </h1>
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
        </form>
      
    </div>
  
 
  
    

  
</body>
</html>