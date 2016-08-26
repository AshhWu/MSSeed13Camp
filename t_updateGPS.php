<?php
include_once 'backend/taskmodel.php';
?>
<script>
    if (navigator.geolocation) {
        var geo=navigator.geolocation;
        var option={
              enableAcuracy:false,
              maximumAge:0,
              timeout:10000
              };
        geo.getCurrentPosition(successCallback,
                               errorCallback,
                               option
                               );
        }
    else {alert("此瀏覽器不支援地理定位功能!");}
    
    function successCallback(position) {
        <?php
        $lat = parseFloat(position.coords.latitude);
        $lon = parseFloat(position.coords.longitude);

        $team = $_SESSION['t_team'];
        $conn = connect();
        $sql = "UPDATE taipeiRun SET gpsX=".$lat." where team=".$team;
        $stmt = $conn->prepare($sql);
        $stmt->execute();
        ?>
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