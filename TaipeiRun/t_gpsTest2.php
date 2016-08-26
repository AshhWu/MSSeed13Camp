<!DOCTYPE html>
<meta charset=utf-8>
<head>
  <title>HTML5 Test</title>
  <script>
    function $i(id) {return document.getElementById(id);}
    function $n(id) {return document.getElementsByName(name);}
    function $c(id) {return document.getElementsByClass(className);}
    function $t(id) {return document.getElementsByClass(tagName);}
  </script>
</head>
<body>
  <table style='border:solid 1px blue;'>
    <thead>
      <tr><th>屬性</th><th>值</th>
    </thead>
    <tbody>
      <tr>
        <td>position.coords.latitude (經度 degree)</td>
        <td id="latitude"></td>
      </tr>
      <tr>
        <td>position.coords.longitude (緯度 degree)</td>
        <td id="longitude"></td>
      </tr>
      <tr>
        <td>position.coords.altitude (高度 m)</td>
        <td id="altitude"></td>
      </tr>
      <tr>
        <td>position.coords.accuracy (精確度 m)</td>
        <td id="accuracy"></td>
      </tr>
      <tr>
        <td>position.coords.altitudeAccuracy (高度精確度 m)</td>
        <td id="altitudeAccuracy"></td>
      </tr>
      <tr>
        <td>position.coords.heading (移動方向 degree/s)</td>
        <td id="heading"></td>
      </tr>
      <tr>
        <td>position.coords.speed (移動速度 m/s)</td>
        <td id="speed"></td>
      </tr>
      <tr>
        <td>position.timestamp (時間戳記 ms)</td>
        <td id="timestamp"></td>
      </tr>
    </tbody>
  </table>
  <script>
    if (navigator.geolocation) {
        var geo=navigator.geolocation;
        var option={
              enableAcuracy:false,
              maximumAge:0,
              timeout:600000
              };
        geo.getCurrentPosition(successCallback,
                               errorCallback,
                               option
                               );
        }
    else {alert("此瀏覽器不支援地理定位功能!");}
    function successCallback(position) {
      $lat=parseFloat(position.coords.latitude);
      $lon=parseFloat(position.coords.longitude);
      }
    function errorCallback(error) {
      var errorTypes={
            0:"不明原因錯誤",
            1:"使用者拒絕提供位置資訊",
            2:"無法取得位置資訊",
            3:"位置查詢逾時"
            };
      alert(errorTypes[error.code]);
      alert("code=" + error.code + " " + error.message); //開發測試時用
      }
  </script>
</body>