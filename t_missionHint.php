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
      include 't_getitems.php';
      $team = $_SESSION['t_team'];
      $mission = getMissionByTeam($team);
      $position = getPosition($team);
    ?>
    <?php
      $isOK=0;
      if($mission==1 && $position!=513){
          echo '<script>alert("請到正確地點再開啟提示!")</script>';
      }else if($mission==2 && $position!=300){
          echo '<script>alert("請到正確地點再開啟提示!")</script>';
      }else if($mission==3 && $position!=406 && $position!=509){
          echo '<script>alert("請到正確地點再開啟提示!")</script>';
      }else if($mission==4 && $position!=506){
          echo '<script>alert("請到正確地點再開啟提示!")</script>';
      }else if($mission==5 && $position!=212){
          echo '<script>alert("請到正確地點再開啟提示!")</script>';
      }else if($mission==6 && $position!=505){
          echo '<script>alert("請到正確地點再開啟提示!")</script>';
      }else{
          $isOK=1;
      };
    ?>

    <div class="container">
      <div class="starter-template">
        <h1><span class="label label-primary">任務提示</span></h1>
            <div class="thumbnail">
                <div class=".col-md-10 .col-md-offset-1">
                    <?php
                        if($isOK==1){
                            echo '<img class="img-rounded" width="250px" src="'.getMissionHint($mission).'" alt="請重新整理頁面">';
                        }else{
                            echo "請到正確地點再開啟提示";
                        }
                    ?>
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
