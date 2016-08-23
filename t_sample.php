<html>
    <head>
    <!-- Title -->
    <title>台北行-超級管理員</title>

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

    <h1>taipeiRun</h1>

    <?php
        header('Cache-Control: no-cache');
        header('Pragma: no-cache');
        require_once "t_getitems.php";
        $ttt = getCubeNum(1, 1);
        echo "Test Content: ".$ttt;
    ?>
        <br>
        <br>
        <a href="t_updateCubeNum.php?team=1&color=2&num=77">Update sample</a>  
        
    </body>
</html>