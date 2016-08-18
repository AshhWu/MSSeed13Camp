<html>
<!--
/** * Copyright 2013 Microsoft Corporation 
	*  
	* Licensed under the Apache License, Version 2.0 (the "License"); 
	* you may not use this file except in compliance with the License. 
	* You may obtain a copy of the License at 
	* http://www.apache.org/licenses/LICENSE-2.0 
	*  
	* Unless required by applicable law or agreed to in writing, software 
	* distributed under the License is distributed on an "AS IS" BASIS, 
	* WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied. 
	* See the License for the specific language governing permissions and 
	* limitations under the License. 
	*/
-->
<head>
<!-- Title -->
<title>任務</title>

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
	<h1>Mission</h1>

<?php
/** * Copyright 2013 Microsoft Corporation 
	*  
	* Licensed under the Apache License, Version 2.0 (the "License"); 
	* you may not use this file except in compliance with the License. 
	* You may obtain a copy of the License at 
	* http://www.apache.org/licenses/LICENSE-2.0 
	*  
	* Unless required by applicable law or agreed to in writing, software 
	* distributed under the License is distributed on an "AS IS" BASIS, 
	* WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied. 
	* See the License for the specific language governing permissions and 
	* limitations under the License. 
	*/
	
include_once 'taskmodel.php';

	$code = $_POST['code'];
	$items = searchMission($code);

	header('Cache-Control: no-cache');
	header('Pragma: no-cache');
	require_once "getitems.php";
	$time = getDay();
	if(!empty($time))
	{
		echo "Day: ".$time[0][0];
	}

	if(!empty($items))
	{
		echo "<br>Code: ".$items[0][1]."<br>主題: ".$items[0][2]."<br>內容: ".$items[0][3]."<br>任務人數: ".$items[0][4];
		switch($time[0][0])
		{
			case "1": echo "<br>Day1條件: ".$items[0][5]; break;
			case "2": echo "<br>Day2條件: ".$items[0][6]; break;
			case "3": echo "<br>Day3條件: ".$items[0][7]; break;
			case "4": echo "<br>Day4條件: ".$items[0][8]; break;
			default: echo "Error";
		}
	} 
	else 
	{
		echo "Wrong code!!!";
	}

?>


	<!-- jQuery -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

	<!-- Bootstrap Core JavaScript -->
	<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</body>
</html>