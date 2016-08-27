<?php 
session_start();
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>任務完結</title>

    <!-- Bootstrap Core CSS -->
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
      
    <!-- Custom styles for this template -->
    <link href="starter-template.css" rel="stylesheet">
    
  </head>
  <body>
    <?php
      include "backend/navbar/nav.php";
      include 't_getitems.php';
      $team = $_SESSION['t_team'];
      $mission = getMissionByTeam($team);
    ?>
    <div class="container">

      <div class="starter-template">
        <h1><span class="label label-primary" style="color:#337ab7;background-color:white">任務完結</span></h1>
        <div class=".col-md-10 .col-md-offset-1" style="margin-top: 20px;" >
            <div class="thumbnail" style="box-shadow: 1px 1px 4px rgba(0,0,0,.3)">
              台北行告一段落囉,請大家盡速返回微軟!!!<br>
              大家辛苦了
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
