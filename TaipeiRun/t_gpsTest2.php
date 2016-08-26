<!DOCTYPE html>
<meta charset=utf-8>
<head>
  <title>HTML5 Test</title>
</head>
<body>
<script>
    if (navigator.geolocation) {
        var geo=navigator.geolocation;
        var option={
              enableAcuracy:false,
              maximumAge:0,
              timeout:60000
              };
        geo.getCurrentPosition(successCallback,
                               errorCallback,
                               option
                               );
        }
    else {alert("此瀏覽器不支援地理定位功能!");}
    function successCallback(position) {
      $lat=0;
      $lon=0;
      document.location.href="t_updateGPS.php?lat=0&lon=0";
    }
    function errorCallback(error) {
      var errorTypes={
            0:"不明原因錯誤",
            1:"使用者拒絕提供位置資訊",
            2:"無法取得位置資訊",
            3:"位置查詢逾時"
            };
        alert("無法使用定位功能,請開啟其他隊員手機以便定位小組位置");
      //alert(errorTypes[error.code]);
      //alert("code=" + error.code + " " + error.message); //開發測試時用
      }
</script>
  <table style='border:solid 1px blue;'>
    <thead>
      <tr><th>屬性</th><th>值</th>
    </thead>
    <tbody>
      <tr>
        <td>position.coords.latitude (經度 degree)</td>
        <td></td>
      </tr>
      <tr>
        <td>position.coords.longitude (緯度 degree)</td>
        <td></td>
      </tr>
    </tbody>
  </table>
</body>
