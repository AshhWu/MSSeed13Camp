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
  </head>
  <body>
    <?php
      include "nav.php";
    ?>

    <div class="container">

      <div class="starter-template">
        <div class=".col-md-10 .col-md-offset-1">
            <div class="thumbnail">
                <form id="form1" runat="server">
                    <input type='file' onchange="readURL(this);" />
                    <img id="blah" src="png/clickToLoad.jpg" height="260px" width="260px" alt="your image" />
                </form>
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
