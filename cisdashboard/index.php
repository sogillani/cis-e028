<!DOCTYPE html>
<html>
<head>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/styles.css">

    <meta name="viewport" content="initial-scale=1.0">
    <meta charset="utf-8">
    <style>
      /* Always set the map height explicitly to define the size of the div
       * element that contains the map. */
      #map {
        height: 100%;
      }
      /* Optional: Makes the sample page fill the window. */
      html, body {
        height: 100%;
        margin: 0;
        padding: 0;
      }
    </style>
</head>
<body>

    <div id="root" class="container-fluid">
        <!-- <div style={{backgroundColor: "#222", height: "60px"}} className="row"> -->
        <header class="header">
            <h1 class="title">Crowd Surveillance System</h1>
        </header>
        <!-- </div>     -->
        <div class="row">
            <div class="col-lg-2 leftpanel">
            </div>
            <div class="col-lg-10 rightpanel">
                <div id="map"></div>
            </div>
        </div>

        <footer class="footer" >Crowd Surveillance System</footer>
    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
   
    <script>
        
      var map;
      function initMap() {
        var myLatlng = {lat: 21.403357, lng: 39.856838};
        map = new google.maps.Map(document.getElementById('map'), {
          center: {lat: 21.403357, lng: 39.856838},
          zoom: 12
        });

        var marker = new google.maps.Marker({
          position: {lat: 21.403357, lng: 39.856838},
          map: map,
          title: 'Hello World!'
        });
      }
      /*
      function myMap() {
        var mapProp= {
        center:new google.maps.LatLng(51.508742,-0.120850),
        zoom:5,
    };
    var map=new google.maps.Map(document.getElementById("map"),mapProp);
    
    }
    */
    </script>
    <!-- <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAQJq13e28LYxO7CuCQYbuL2tzfKDn0iao&callback=myMap"></script> -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAQJq13e28LYxO7CuCQYbuL2tzfKDn0iao&callback=initMap"
    async defer></script>
</body>
</html>