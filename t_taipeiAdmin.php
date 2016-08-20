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
        include "nav.php";
    ?>
    <script>
        setTimeout("self.location.reload();",10000);
    </script>

<h1>taipeiRun</h1>
    <?php
        header('Cache-Control: no-cache');
        header('Pragma: no-cache');
        require_once "t_getitems.php";
            echo "<table border='1'>
                    <tr>
                        <th>Team</th>
                        <th>position</th>
                        <th>gpsX</th>
                        <th>gpsY</th>
                        <th>cube1</th>
                        <th>cube2</th>
                        <th>cube3</th>
                        <th>cube4</th>
                        <th>cube5</th>
                        <th>mission</th>
                        <th>mState</th>
                    </tr>";
        $items = getTaipeiRun();
        if(!empty($items))
        {
            foreach($items as $item)
            {
                echo 	"<tr>
                            <td>".$item[0]."</td>
                            <td>".$item[1]."</td>
                            <td>".$item[2]."</td>
                            <td>".$item[3]."</td>
                            <td>".$item[4]."</td>
                            <td>".$item[5]."</td>
                            <td>".$item[6]."</td>
                            <td>".$item[7]."</td>
                            <td>".$item[8]."</td>
                            <td>".$item[9]."</td>
                            <td>".$item[10]."</td>
                            </tr>";
            }

            echo "</table>";
        }
    ?>

        <form action="t_addTaipei.php" method="post">
            <table border="1">
                <tr>
                    <td>Team: </td>
                    <td><input name="team" type="number"/></td>
                </tr>
                <tr>
                    <td>Position: </td>
                    <td><input name="position" type="number"/></td>
                </tr>
                <tr>
                    <td>Cube1: </td>
                    <td><input name="cube1" type="number"/></td>
                </tr>
                <tr>
                    <td>Cube2: </td>
                    <td><input name="cube2" type="number"/></td>
                </tr>
                <tr>
                    <td>Cube3: </td>
                    <td><input name="cube3" type="number"/></td>
                </tr>
                <tr>
                    <td>Cube4: </td>
                    <td><input name="cube4" type="number"/></td>
                </tr>
                <tr>
                    <td>Cube5: </td>
                    <td><input name="cube5" type="number"/></td>
                </tr>
                <tr>
                    <td>Mission: </td>
                    <td><input name="mission" type="number"/></td>
                </tr>
            </table>
            <input type="submit" value="Add taipei"/>
        </form>

        <hr/>
    

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
                        <th>state</th>
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
                if(!empty($item[3])){
                    echo    "<td><img src='data:image/jpeg;base64,".base64_encode($item[3])."' /></td>";
                }else{
                    echo    "<td>無圖片</td>";
                }
                if($item[4]==0){
                    echo    "<td><a href='t_missionComplete.php?id=".$item[0]."&team=".$item[1]."'>OK</a> or 
                                 <a href='t_missionFail.php?id=".$item[0]."&team=".$item[1]."'>NOT</a></td>";
                }else if($item[4]==1){
                    echo    "<td>Complete</td>";
                }else{
                    echo    "<td>Fail</td>";
                }
                echo    "</tr>";
            }

            echo "</table>";
        }
    ?>

        <form action="t_addMissionReport.php" method="post" enctype="multipart/form-data">
            <table border="1">
                <tr>
                    <td>Team: </td>
                    <td><input name="team" type="number"/></td>
                </tr>
                <tr>
                    <td>Mission: </td>
                    <td><input name="mission" type="number"/></td>
                </tr>
                <tr>
                    <td>Picture: </td>
                    <td><input name="picture" type="file"/></td>
                </tr>
            </table>
            <input type="submit" value="Add Mission Report"/>
        </form>

        <hr/>
        
        
<h1>missionInfo</h1>
    <?php
        header('Cache-Control: no-cache');
        header('Pragma: no-cache');
        require_once "t_getitems.php";
        echo "<table border='1'>
                    <tr>
                        <th>id</th>
                        <th>position</th>
                        <th>title</th>
                        <th>content</th>
                        <th>picture</th>
                    </tr>";
        $items = getMissionInfo();
        if(!empty($items))
        {
            foreach($items as $item)
            {
                echo 	"<tr>
                            <td>".$item[0]."</td>
                            <td>".$item[4]."</td>
                            <td>".$item[1]."</td>
                            <td>".$item[2]."</td>";
                if(!empty($item[3])){
                    echo    "<td><img src='data:image/jpeg;base64,".base64_encode($item[3])."' /></td>";
                }else{
                    echo    "<td>無圖片</td>";
                }
                echo    "</tr>";
            }
                
            echo "</table>";
        }
    ?>

        <form action="t_addMissionInfo.php" method="post" enctype="multipart/form-data">
            <table border="1">
                <tr>
                    <td>Id: </td>
                    <td><input name="id" type="number"/></td>
                </tr>
                <tr>
                    <td>Position: </td>
                    <td><input name="position" type="text"/></td>
                </tr>
                <tr>
                    <td>Title: </td>
                    <td><input name="title" type="text"/></td>
                </tr>
                <tr>
                    <td>Content: </td>
                    <td><input name="content" type="text"/></td>
                </tr>
                <tr>
                    <td>Picture: </td>
                    <td><input name="picture" type="file"/></td>
                </tr>
            </table>
            <input type="submit" value="Add Mission Info"/>
        </form>
    <hr/>
        
<h1>tradeRequest</h1>
    <?php
        header('Cache-Control: no-cache');
        header('Pragma: no-cache');
        require_once "t_getitems.php";
        echo "<table border='1'>
                    <tr>
                        <th>id</th>
                        <th>sender</th>
                        <th>receiver</th>
                        <th>c1</th>
                        <th>c2</th>
                        <th>c3</th>
                        <th>c4</th>
                        <th>c5</th>
                        <th>fc1</th>
                        <th>fc2</th>
                        <th>fc3</th>
                        <th>fc4</th>
                        <th>fc5</th>
                        <th>state</th>
                        <th>deal</th>
                    </tr>";
        $items = getTradeRequest();
        if(!empty($items))
        {
            foreach($items as $item)
            {
                echo 	"<tr>
                            <td>".$item[0]."</td>
                            <td>".$item[1]."</td>
                            <td>".$item[2]."</td>
                            <td>".$item[3]."</td>
                            <td>".$item[4]."</td>
                            <td>".$item[5]."</td>
                            <td>".$item[6]."</td>
                            <td>".$item[7]."</td>
                            <td>".$item[8]."</td>
                            <td>".$item[9]."</td>
                            <td>".$item[10]."</td>
                            <td>".$item[11]."</td>
                            <td>".$item[12]."</td>
                            <td>".$item[13]."</td>
                            <td></td></tr>";
            }
                
            echo "</table>";
        }
    ?>

        <form action="t_addTradeRequest.php" method="post" enctype="multipart/form-data">
            <table border="1">
                <tr>
                    <td>Sender: </td>
                    <td><input name="sender" type="number"/></td>
                </tr>
                <tr>
                    <td>Receiver: </td>
                    <td><input name="receiver" type="number"/></td>
                </tr>
                <tr>
                    <td>c1: </td>
                    <td><input name="c1" type="number"/></td>
                </tr>
                <tr>
                    <td>c2: </td>
                    <td><input name="c2" type="number"/></td>
                </tr>
                <tr>
                    <td>c3: </td>
                    <td><input name="c3" type="number"/></td>
                </tr>
                <tr>
                    <td>c4: </td>
                    <td><input name="c4" type="number"/></td>
                </tr>
                <tr>
                    <td>c5: </td>
                    <td><input name="c5" type="number"/></td>
                </tr>
                <tr>
                    <td>fc1: </td>
                    <td><input name="fc1" type="number"/></td>
                </tr>
                <tr>
                    <td>fc2: </td>
                    <td><input name="fc2" type="number"/></td>
                </tr>
                <tr>
                    <td>fc3: </td>
                    <td><input name="fc3" type="number"/></td>
                </tr>
                <tr>
                    <td>fc4: </td>
                    <td><input name="fc4" type="number"/></td>
                </tr>
                <tr>
                    <td>fc5: </td>
                    <td><input name="fc5" type="number"/></td>
                </tr>
            </table>
            <input type="submit" value="Add Trade Request"/>
        </form>
        <hr/>
        
<h1>missionOrder</h1>
    <?php
        header('Cache-Control: no-cache');
        header('Pragma: no-cache');
        require_once "t_getitems.php";
        echo "<table border='1'>
                    <tr>
                        <th>team</th>
                        <th>m1</th>
                        <th>m2</th>
                        <th>m3</th>
                        <th>m4</th>
                        <th>m5</th>
                        <th>m6</th>
                        <th>m7</th>
                    </tr>";
        $items = getMissionOrder();
        if(!empty($items))
        {
            foreach($items as $item)
            {
                echo 	"<tr>
                            <td>".$item[0]."</td>
                            <td>".$item[1]."</td>
                            <td>".$item[2]."</td>
                            <td>".$item[3]."</td>
                            <td>".$item[4]."</td>
                            <td>".$item[5]."</td>
                            <td>".$item[6]."</td>
                            <td>".$item[7]."</td></tr>";
            }
                
            echo "</table>";
        }
    ?>
    </body>
</html>
