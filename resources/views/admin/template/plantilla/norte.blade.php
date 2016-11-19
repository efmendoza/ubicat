<html>
    <head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

         <link rel="stylesheet" type="text/css" href="{{asset('plantilla/bootstrap/css/bootstrap.css')}}">
         <script src="{{asset('plantilla/jquery/jquery-3.1.0.js')}}"></script>   
         <script src="{{asset('plantilla/bootstrap/js/bootstrap.js')}}"></script>
          <script href="http://maps.google.com/maps/api/js?sensor=false"></script>
          <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
          <link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>

    <title>@yield('title', 'Default')</title>
<script href=""></script>
  
</head>
    <body>

 <div id="map" style="width: 350px; height: 400px;"></div>



 <script>


$(function () {

    function initMap() {


        var location = new google.maps.LatLng(50.0875726, 14.4189987);

        var mapCanvas = document.getElementById('map');
        var mapOptions = {
            center: location,
            zoom: 16,
            panControl: false,
            mapTypeId: google.maps.MapTypeId.ROADMAP
        }
        var map = new google.maps.Map(mapCanvas, mapOptions);

        var markerImage = 'marker.png';

        var marker = new google.maps.Marker({
            position: location,
            map: map,
            icon: markerImage
        });

     

        var infowindow = new google.maps.InfoWindow({
            content: contentString,
            maxWidth: 400
        });

        marker.addListener('click', function () {
            infowindow.open(map, marker);
        });


    }

    google.maps.event.addDomListener(window, 'load', initMap);

   

map.set('styles', styles);
});

 </script>


  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBu5nZKbeK-WHQ70oqOWo-_4VmwOwKP9YQ"></script>

 </body>
</html>