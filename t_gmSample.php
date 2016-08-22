<html>
<head>
    <title>Taipei Sample</title>
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<body>
<!--隊伍資訊-->
Team<br>
    <?php
        require_once "t_getitems.php";
        echo "<table border='1'>
            <tr>
                <th>Team</th>
                <th>RedCube</th>
                <th>GreenCube</th>
                <th>YellowCube</th>
                <th>BlueCube</th>
                <th>Mission</th>
            </tr>";
        $items = getTaipeiRun();
        if(!empty($items))
        {
            foreach($items as $item)
            {
                echo 	"<tr>
                            <td>".$item[0]."</td>
                            <td>".$item[5]."</td>
                            <td>".$item[6]."</td>
                            <td>".$item[7]."</td>
                            <td>".$item[8]."</td>
                            <td>".$item[9]."</td>
                            </tr>";
            }
            echo "</table>";
        }
    ?>
<br>

<!--任務回報-->
Mission Report<br>
    <?php
        require_once "t_getitems.php";
        echo "<table border='1'>
                    <tr>
                        <th>Team</th>
                        <th>Mission</th>
                        <th>Picture</th>
                    </tr>";
        $items = getLatestReport(12);            //取前幾筆
        if(!empty($items))
        {
            foreach($items as $item)
            {
                echo 	"<tr>
                            <td>".$item[1]."</td>
                            <td>".$item[2]."</td>";
                if(!empty($item[3])){
                    echo    "<td><img height='200px' src='data:image/jpeg;base64,".base64_encode($item[3])."' /></td>";
                }else{
                    echo    "<td>無圖片</td>";
                }
                echo    "</tr>";
            }
            echo "</table>";
        }
    ?>
    
</body>
</html>