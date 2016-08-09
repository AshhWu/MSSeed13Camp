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

	$items=searchMission($_POST['code']);

	if(!empty($items))
	{
		echo "<table border='1'>
				<tr>
					<th>Nnumber:  </th>
					<th>Name:  </th>
					<th>產生:</th>
					<th>產生量:     </th>
					<th>產生物:  </th>
					<th>產生時間:    </th>
					<th>佔領隊伍:</th>
					<th>Mission Code:    </th>
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