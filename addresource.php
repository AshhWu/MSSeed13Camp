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

$team = $_POST['team'];
$magic_powder = (int)$_POST['magic_powder'];
$cloth = (int)$_POST['cloth'];
$ruby = (int)$_POST['ruby'];
$shaft = (int)$_POST['shaft'];
$fire = (int)$_POST['fire'];
$seed = (int)$_POST['seed'];
$water = (int)$_POST['water'];
$light = (int)$_POST['light'];
$flax = (int)$_POST['flax'];
$screw = (int)$_POST['screw'];
$plastic = (int)$_POST['plastic'];
$electron = (int)$_POST['electron'];
$ergonomic = (int)$_POST['ergonomic'];
$imagine = (int)$_POST['imagine'];
$metal = (int)$_POST['metal'];
$air = (int)$_POST['air'];
$magic_stone = (int)$_POST['magic_stone'];
$control_panel = (int)$_POST['control_panel'];
$seat = (int)$_POST['seat'];
$wheel = (int)$_POST['wheel'];
$rope = (int)$_POST['rope'];
$cypress = (int)$_POST['cypress'];
$propeller = (int)$_POST['propeller'];
$door = (int)$_POST['door'];
$jet = (int)$_POST['jet'];
$gun = (int)$_POST['gun'];
$elk = (int)$_POST['elk'];
$sound = (int)$_POST['sound'];
$sd_card = (int)$_POST['sd_card'];
$missile = (int)$_POST['missile'];
$miss_air = (int)$_POST['miss_air'];
$led_light = (int)$_POST['led_light'];

addResource($team, $magic_powder, $cloth, $ruby, $shaft, $fire, $seed, $water, $light, $flax, $screw, $plastic, $electron, $ergonomic, $imagine, $metal, $air, $magic_stone, $control_panel, $seat, $wheel, $rope, $cypress, $propeller, $door, $jet, $gun, $elk, $sound, $sd_card, $missile, $miss_air, $led_light);

header('Location: superAdmin.php');
?>