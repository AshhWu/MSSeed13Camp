<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Bootstrap 101 Template</title>

    
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <script src="jquery-3.1.0.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    
    <?php
      include_once 'taskmodel.php';
    ?>
    <!-- Custom styles for this template -->
    <link href="starter-template.css" rel="stylesheet">
    
      
    <!-- My js -->
    <script>
        function sendPic(){
            alert("圖片上傳囉");
            <!-- 跳回任務頁 -->
        }
        
        function uploadPic(){
            alert()
        }
    </script>
  </head>
  <body>
    <?php
      include "nav.php";
    ?>

    <div class="container">

      <div class="starter-template">
        <div class=".col-md-10 .col-md-offset-1">
            <div class="thumbnail">
                <img id="picPreview" class="img-thumbnail" src="png/clickToLoad.jpg" alt="點此上傳圖片" onClick="uploadPic()">    <!--上傳圖片預覽-->
                <br>
                <div class="caption">
                    <p><a class="btn btn-success" role="button" onClick="sendPic()">完成任務</a>
                    <a href="t_missionDetail.php" class="btn btn-danger" role="button">取消</a></p>
                </div>
            </div>
        </div>
      </div>

    </div><!-- /.container -->
  </body>
</html>