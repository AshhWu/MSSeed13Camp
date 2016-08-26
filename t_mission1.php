<?php 
session_start();
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>任務-龍山寺</title>

    <!-- Bootstrap Core CSS -->
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
      
    <!-- Custom styles for this template -->
    <link href="starter-template.css" rel="stylesheet">
    
  </head>
  <body>
    <?php
      include "backend/navbar/nav.php";
      include 't_getitems.php';
      $mission = 1;
    ?>
    <div class="container">

      <div class="starter-template">
        <div class=".col-md-10 .col-md-offset-1">
            <table>
                <tr>
                    <td>國家</td>
                    <td>審核</td>
                </tr>
                <tr>
                    <td>America</td>
                    <td></td>
                </tr>
                <tr>
                    <td>Canada</td>
                    <td>審核</td>
                </tr>
                <tr>
                    <td>Brazil</td>
                    <td>審核</td>
                </tr>
                <tr>
                    <td>Italy</td>
                    <td>審核</td>
                </tr>
                <tr>
                    <td>Germany</td>
                    <td>審核</td>
                </tr>
                <tr>
                    <td>England</td>
                    <td>審核</td>
                </tr>
                <tr>
                    <td>Taiwan</td>
                    <td>審核</td>
                </tr>
                <tr>
                    <td>Japan</td>
                    <td>審核</td>
                </tr>
                <tr>
                    <td>Thailand</td>
                    <td>審核</td>
                </tr>
                <tr>
                    <td>SouthAfrica</td>
                    <td>審核</td>
                </tr>
                <tr>
                    <td>Madagascar</td>
                    <td>審核</td>
                </tr>
                <tr>
                    <td>Egypt</td>
                    <td>審核</td>
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
