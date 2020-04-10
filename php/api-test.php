
<!DOCTYPE html>
<html lang="ja">
  <head>
    <style>
      #maps{ height: 400px; }
    </style>
  </head>
  <body>
  <div id="maps"></div>
  <div id="maps">東京駅</div>
  <div class="maps">東京駅</div>
  <script src="//maps.googleapis.com/maps/api/js?key=AIzaSyDA1SCcdf_bxes1UVIwNF7eJX9Yuz7IiUA&callback=initMap" async></script>
  <script>

    function initMap() {
      var mapPosition = {lat: 35.698878, lng: 139.770640};
      var mapArea = document.getElementById('maps');
      var mapOptions = {
        center: mapPosition,
        zoom: 16,
      };

      var map = new google.maps.Map(mapArea, mapOptions);
      var markerOptions = {
        map: map,
        position: mapPosition,
      };


      var marker = new google.maps.Marker(markerOptions);

  //     infoWindow = new google.maps.InfoWindow({ // 吹き出しの追加
  //       content: '<div class="maps">東京駅</div>' // 吹き出しに表示する内容
  // });
  // marker.addListener('click', function() { // マーカーをクリックしたとき
  //    infoWindow.open(mapOptions, markerOptions,maker,map,mapArea); // mapみmakerをの吹き出しの表示します
  //   });
  } 
 


  </script>
  </body>
</html>
