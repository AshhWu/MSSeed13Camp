Skip to content
This repository
Search
Pull requests
Issues
Gist
 @mnbvy
 Watch 5
  Star 0
  Fork 1 AshhWu/MSSeed13Camp
 Code  Issues 0  Pull requests 0  Wiki  Pulse  Graphs
Branch: master Find file Copy pathMSSeed13Camp/TaipeiRun/t_gpsTest2.php
c403b9a  just now
@mnbvy mnbvy Update t_gpsTest2.php
1 contributor
RawBlameHistory     55 lines (54 sloc)  1.63 KB
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
      $lat1=parseFloat(position.coords.latitude).toString();
      $lon1=parseFloat(position.coords.longitude).toString();
      $lat = $lat1.replace(/[.]/, "_");
      $lon = $lon1.replace(/[.]/, "_");
      if(!($_GET['gps'])){
       document.location.href="t_updateGPS.php?lat="+$lat+"&lon="+$lon;
      }
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
Contact GitHub API Training Shop Blog About
© 2016 GitHub, Inc. Terms Privacy Security Status Help
