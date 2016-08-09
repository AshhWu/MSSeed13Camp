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

	if(!empty($items))
	{
		echo "<table border='1'>
				<tr>
					<th>Code:	</th>
					<th>主題:	</th>
					<th>內容:									</th>
					<th>任務人數:	</th>
					<th>Day1條件:	</th>
					<th>Day2條件:	</th>
					<th>Day3條件:	</th>
					<th>Day4條件:	</th>
				</tr>";
		foreach($items as $item)
		{
			echo 	"<tr>
						<td>".$item[1 ]."</td>
						<td>".$item[2 ]."</td>
						<td>".$item[3 ]."</td>
						<td>".$item[4 ]."</td>
						<td>".$item[5 ]."</td>
						<td>".$item[6 ]."</td>
						<td>".$item[7 ]."</td>
						<td>".$item[8 ]."</td>";
			echo "</tr>";
		}
		
		echo "</table>";
	} 
	else 
	{
		echo "Wrong code!!!";
	}

?>