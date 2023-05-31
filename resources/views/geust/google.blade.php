<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
   
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
        </form>
      
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