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

    </head>
    <body>
    <?php
        include "nav.php";
    ?>

    <h1>taipeiRun</h1>

    <?php
        header('Cache-Control: no-cache');
        header('Pragma: no-cache');
        require_once "t_getitems.php";
        $items = getTaipeiRun();
        if(!empty($items))
        {
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
                        <th>Pass</th>
                    </tr>";
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
                            <td><a href='t_missionComplete.php?team=".$item[0]."'>Complete</a></td>
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
        
    </body>
</html>
