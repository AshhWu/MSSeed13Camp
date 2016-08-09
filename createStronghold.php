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

// Assumes database already exists.
$conn = connect();

$sql = "CREATE TABLE stronghold(
			id INT NOT NULL AUTO_INCREMENT, 
			PRIMARY KEY(id),
			point VARCHAR(30),
			name VARCHAR(30),
			generate VARCHAR(30),
			generate_num VARCHAR(30),
			generate_item VARCHAR(30),
			generate_time VARCHAR(30),
			team VARCHAR(30),
			mission VARCHAR(30)
			)";

try{
	$conn->query($sql);
}
catch(Exception $e){
	print_r($e);
}

echo "<h3>Table created.</h3>";
prepareStronghold();

?>