<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>任務資訊</title>

    <!-- Bootstrap Core CSS -->
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
      
    <?php
      include_once 'taskmodel.php';
    ?>
    <!-- Custom styles for this template -->
    <link href="starter-template.css" rel="stylesheet">
    
  </head>
  <body>
    <?php
      include "nav.php";
    ?>

    <div class="container">

      <div class="starter-template">
        <h1><span class="label label-primary">任務一</span></h1>   <!--任務次序-->
        <div class=".col-md-10 .col-md-offset-1">
            <div class="thumbnail">
                <img class="img-rounded" src="png/microsoftBuilding.jpg" alt="請重新整理頁面">    <!--題目圖片-->
                <div class="caption">
                    <h3>題目標題</h3>             <!--題目標題-->
                    <p>與穿營服的關主拍照上傳</p>  <!--題目內容與提示-->
                    <!--<p>距離關主:</p>            距離關主-->
                    <p><a href="t_missionSend.php" class="btn btn-success" role="button">照片上傳</a></p>
                </div>
            </div>
        </div>
      </div>

    </div><!-- /.container -->
  


    <!-- jQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <!-- My Scripts -->
    <script src="js/nav.js"></script>

  </body>
</html>