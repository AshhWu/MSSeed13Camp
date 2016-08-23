<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>任務提示</title>

    <!-- Bootstrap Core CSS -->
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    
      
    <?php
      include_once 'backend/taskmodel.php';
    ?>
    <!-- Custom styles for this template -->
    <link href="starter-template.css" rel="stylesheet">
    
  </head>
  <body>
    <?php
      include "backend/navbar/nav.php";
    ?>

    <div class="container">

      <div class="starter-template">
        <h1><span class="label label-primary">任務提示</span></h1>
            <div class="thumbnail">
                <table cellspacing="20" align="center">
                    <tr>
                        <td><img class="img-rounded" width="130px" height="130px" src="png/microsoftBuilding.jpg" alt="請重新整理頁面"></td>
                        <td><img class="img-rounded" width="130px" height="130px" src="png/landscape1.jpg" alt="請重新整理頁面"></td>
                    </tr>
                    <tr>
                        <td><img class="img-rounded" width="130px" height="130px" src="png/landscape2.jpg" alt="請重新整理頁面"></td>
                        <td><img class="img-rounded" width="130px" height="130px" src="png/landscape3.jpg" alt="請重新整理頁面"></td>
                    </tr>
                    <tr>    
                        <td><img class="img-rounded" width="130px" height="130px" src="png/landscape4.jpg" alt="請重新整理頁面"></td>
                        <td><img class="img-rounded" width="130px" height="130px" src="png/landscape5.jpg" alt="請重新整理頁面"></td>
                    </tr>
                    <tr>
                        <td><img class="img-rounded" width="130px" height="130px" src="png/landscape6.jpg" alt="請重新整理頁面"></td>
                    </tr>
                </table>
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
