<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <style>
            .text-center {
                text-align: center;
            }
            #map {
                width: "100%";
                height: 400px;
            }
        </style>
    </head>
    <body>

<div class="row"> 
    <div class="col-md-12"> 
  
            
                <a href="{{url('')}}" class="btn btn-primary btn-sm texte white float-end" > back</a>
            
                </div>
                <div class="card-body">
                    <form action= "{{url('')}}"  method="" enctype="multipart/form-data"   >
                        @csrf
                        
                       
                     
                    
                        
                       
                        <div class="mb-3">
                            <label> الموقع بالضبط</label>
                            <input type="description" name="description" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label> صورة</label>
                            <input type="file" name="photo" class="form-control">
                        </div>
                       
                        
                    
                        
                        <div class="col-md-12  mb-3">
                            <button type="submit" > تبليغ</button>
                        </div>   


                    </form>
        </div>


        </div>
    </div>
    

</div>


        <h1 class="text-center">Laravel Google Maps</h1>
        <div id="map"></div>

        <script  src="https://maps.googleapis.com/maps/api/js?AIzaSyCAUHCVmbhSgLZcPYX9x2xEjWrc84tj1lgs
        &callback=initMap" async></script>
        <script >
            let map, activeInfoWindow, markers = [];

/* ----------------------------- Initialize Map ----------------------------- */
function initMap() {
    const myLatLng = { lat: 35.414249, lng: 8.101092 };
    map = new google.maps.Map(document.getElementById("map"), {
        center: {
            lat: 35.414249,
            lng: 8.101092,
        },
        zoom: 15
    });
    new google.maps.Marker({
            position: myLatLng,
            map,
            title: "مرحبا رسكلي!",
          });

    map.addListener("click", function(event) {
        mapClicked(event);
    });

    initMarkers();
}

/* --------------------------- Initialize Markers --------------------------- */
function initMarkers() {
    const initialMarkers = <?php echo json_encode($initialMarkers); ?>;

    for (let index = 0; index < initialMarkers.length; index++) {

        const markerData = initialMarkers[index];
        const marker = new google.maps.Marker({
            position: markerData.position,
            label: markerData.label,
            draggable: markerData.draggable,
            map
        });
        markers.push(marker);

        const infowindow = new google.maps.InfoWindow({
            content: `<b>${markerData.position.lat}, ${markerData.position.lng}</b>`,
        });
        marker.addListener("click", (event) => {
            if(activeInfoWindow) {
                activeInfoWindow.close();
            }
            infowindow.open({
                anchor: marker,
                shouldFocus: false,
                map
            });
            activeInfoWindow = infowindow;
            markerClicked(marker, index);
        });

        marker.addListener("dragend", (event) => {
            markerDragEnd(event, index);
        });
    }
}

/* ------------------------- Handle Map Click Event ------------------------- */
function mapClicked(event) {
    console.log(map);
    console.log(event.latLng.lat(), event.latLng.lng());
}

/* ------------------------ Handle Marker Click Event ----------------------- */
function markerClicked(marker, index) {
    console.log(map);
    console.log(marker.position.lat());
    console.log(marker.position.lng());
}

/* ----------------------- Handle Marker DragEnd Event ---------------------- */
function markerDragEnd(event, index) {
    console.log(map);
    console.log(event.latLng.lat());
    console.log(event.latLng.lng());
}
</script>
<div class="col-md-12  mb-3">
                            <button type="submit" class="btn" > تبليغ</button>
                        </div>   
    </body>
</html>