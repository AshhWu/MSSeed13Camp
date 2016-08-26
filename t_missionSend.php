<?php 
session_start();
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>上傳照片</title>

    
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <script src="jquery-3.1.0.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    
    <!-- Custom styles for this template -->
    <link href="starter-template.css" rel="stylesheet">
    
    <script type="text/javascript">
        function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();
 
                reader.onload = function (e) {
                    $('#blah').attr('src', e.target.result);
                }
 
                reader.readAsDataURL(input.files[0]);
            }
        }
    </script>
    <script>
      function sendReport(){
        if(MPForm.picture.value==""){
          alert("請上傳圖片!");
          window.location.reload();
        }
      }
    </script>
  </head>
  <body>
    <?php
      include_once 'backend/taskmodel.php';
      include_once 't_getitems.php';
      $team = $_SESSION['t_team'];
      $mState = getMissionState($team);
      $mission = getMissionByTeam($team);
    ?>
    <?php
      include "backend/navbar/nav.php";
    ?>

    <div class="container">

      <div class="starter-template">
        <div class=".col-md-10 .col-md-offset-1">
            <div class="thumbnail">
                <form action="t_addMissionReport.php" name="MPForm" method="post" runat="server" enctype="multipart/form-data">
                    <div class="caption">
                    <?php 
                        if($mState==0){
                            echo    '<input type="file" name="picture" onchange="readURL(this);" />
                                    <img id="blah" src="" height="260px" width="260px" alt="預覽區" />
                                    <br>
                                    <p><input class="btn btn-success" type="submit" value="完成任務" onclick="sendReport()">
                                    <a href="t_missionDetail.php" class="btn btn-danger" role="button">取消</a></p>
                                    <p>請勿上傳與任務無關的檔案</p>';
                        }else if($mState==1){
                            echo    '<h1><span class="label label-primary" style="color:#337ab7;background-color:white">審查中...</span></h1>
                                    <img src="data:image/jpeg;base64,'.base64_encode(getMissionReportPic($team)).'" width="250px"/>
                                    <script language="javascript">setTimeout("self.location.reload();",10000);</script>';
                        }else if($mState==2){
                            echo    '<p><h1><span class="label label-primary" style="color:#007500;background-color:white">任務完成</span></h1></p><br>
                                    <p><a href="t_newMission.php?team='.$team.'" class="btn btn-danger" role="button" style="background-color:#007500">獲得新任務</a></p>';
                        }else if($mState==3){
                            echo    '<p><h1><span class="label label-primary" style="color:#CE0000;background-color:white">任務失敗</span></h1></p><br>
                                    <p><a href="TaipeiRun/t_oldMission.php?team='.$team.'" class="btn btn-danger" role="button">返回任務資訊</a></p>';
                        }else{
                            echo    '<p><h1><span class="label label-success">任務已全部完成</span></h1></p>';
                        }
                    ?>
                    </div>
                </form>
            </div>
        </div>
      </div>

    </div><!-- /.container -->
  </body>
</html>
