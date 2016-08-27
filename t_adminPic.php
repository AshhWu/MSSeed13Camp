<?php 
session_start();
?>
<html>
    <head>
    <!-- Title -->
    <title>台北行-圖片管理員</title>

    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Bootstrap Core CSS -->
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

    <!-- CSS Style -->
        <style type="text/css">
        body { background-color: #fff; border-top: solid 10px #000;
            color: #333; font-size: .85em; margin: 20px; padding: 20px;
            font-family: "Segoe UI", Verdana, Helvetica, Sans-Serif;
        }
        h1, h2, h3 { color: #000; margin-bottom: 0; padding-bottom: 0; }
        h1 { font-size: 2em; }
        h2 { font-size: 1.75em; }
        h3 { font-size: 1.2em; }
        table { margin-top: 0.75em;}
        th { font-size: 1.2em; text-align: center; border: none 0px; padding-right: 15px;
            background-color: #4CAF50;
            color: white; }
        td { padding: 0.25em 2em 0.25em 0em; border: 0 none; }
        tr:nth-child(even){background-color: #f2f2f2}
        </style>
    </head>
    <body>
    <?php
        include "backend/navbar/nav.php";
    ?>

<h1>missionReports</h1>
    <?php
        header('Cache-Control: no-cache');
        header('Pragma: no-cache');
        require_once "t_getitems.php";
        echo "<table border='1'>
                    <tr>
                        <th>id</th>
                        <th>team</th>
                        <th>mission</th>
                        <th>picture</th>
                    </tr>";
        $items = getMissionReport();
        if(!empty($items))
        {
            foreach($items as $item)
            {
                echo 	"<tr>
                            <td>".$item[0]."</td>
                            <td>".$item[1]."</td>
                            <td>".$item[2]."</td>";
                if(!empty($item[3])&&$item[0]>277){
                    echo    "<td><img height='200px' src='data:image/jpeg;base64,".base64_encode($item[3])."' /></td>";
                }else{
                    echo    "<td>無圖片</td>";
                }
                /*if($item[4]==0){
                    echo    "<td><a href='t_missionComplete.php?id=".$item[0]."&team=".$item[1]."'>OK</a> or 
                                 <a href='t_missionFail.php?id=".$item[0]."&team=".$item[1]."'>NOT</a></td>";
                }else if($item[4]==1){
                    echo    "<td>Complete</td>";
                }else{
                    echo    "<td>Fail</td>";
                }*/
                echo    "</tr>";
            }
            echo "</table>";
        }
    ?>

<hr/>


    </body>
</html>
