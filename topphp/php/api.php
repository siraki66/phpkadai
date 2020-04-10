<!DOCTYPE html "-//W3C//DTD XHTML 1.0 Strict//EN" 
  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
  <head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8"/>
    <title>Google Maps JavaScript API</title>
    <script type="text/javascript"
      src="http://maps.google.com/maps/api/js?sensor=false"></script>
    <script src="./js/code1_1.js" type="text/javascript"></script>

  </head>
  <body onload="initialize()">
    <p>おすすめスマホショップのイオシス アキバ路地裏店です。</p>

    <div id="map_canvas" style=" height:400px"></div>

  </body>
</html>
	
  <script src="//maps.googleapis.com/maps/api/js?key=AIzaSyDA1SCcdf_bxes1UVIwNF7eJX9Yuz7IiUA&callback=initMap" async></script>

<script>
  function initialize() {
  var latlng = new google.maps.LatLng(35.698878,139.770640);
  var opts = {
    zoom: 11,
    center: latlng,
    mapTypeId: google.maps.MapTypeId.ROADMAP
  };
  var map = new google.maps.Map(document.getElementById("map_canvas"), opts);

  var infowindow = new google.maps.InfoWindow({
    content: 'イオシス アキバ路地裏店',
    position: latlng
  });
  infowindow.open(map);
}

  </script>
  </body>
</html>


