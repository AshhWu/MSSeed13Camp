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
      $items = getTaipeiRun();
      $mission = $_GET['mission'];
    ?>
    <script>
      setTimeout("self.location.reload();",5000);
    </script>
    <div class="container">

      <div class="starter-template">
        <div class=".col-md-10 .col-md-offset-1">
          <?echo getMissionName($mission);?>
            <h4><table cellspacing="30">
                <tr>
                    <td>國家</td>
                    <td>審核</td>
                </tr>
                <?php
                if(!empty($items))
                {
                    foreach($items as $item)
                    {
                      echo "<tr><td>".$item[11]."</td><td>";
                            if(getMissionByTeam($item[0])!=$mission){
                              echo "無申請";
                            }else{
                              if($item[10]!=1){
                                echo "無申請";
                              }else{
                                echo "<a href='TaipeiRun/t_missionComplete.php?team=".$item[0]."&mission=".$mission."'>OK</a> or 
                                       <a href='TaipeiRun/t_missionFail.php?team=".$item[0]."&mission=".$mission."'>NOT</a>";
                              }
                            }
                      echo "</td></tr>";
                    }
                }
                ?>
            </table></h4>
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
