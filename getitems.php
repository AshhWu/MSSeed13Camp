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

function getItems()
{
  $items = getAllItems();
  return $items;
}

function getResources()
{
  $items = getAllResources();
  return $items;
}

function getGroupResources($team)
{
  $items = getGroupAllResources($team);
  return $items;
}

function getMessages()
{
  $items = getAllMessages();
  return $items;
}

function getStrongholds()
{
  $items = getAllStrongholds();
  return $items;
}

function getOccupyTeam()
{
  // Get occupying team
  $team = getAllOccupyTeam();
  if (!empty($team))
  { 
    // Return Chinese team name
    for ($i = 0; $i < 16; $i++) 
    {
      if ($team[$i][0] == 'A') { $team[$i][0] = "美洲"; }
      else if ($team[$i][0] == 'B') { $team[$i][0] = "歐洲"; }
      else if ($team[$i][0] == 'C') { $team[$i][0] = "亞洲"; }
      else if ($team[$i][0] == 'D') { $team[$i][0] = "非洲"; }
      else { $team[$i][0] = "無"; }
    }
  }
  return $team;
}

function getMissions()
{
  $items = getAllMissions();
  return $items;
}

function getTimes()
{
  $items = getAllTimes();
  return $items;
}

function getDay()
{
  $items = getAllDay();
  return $items;
}

function prepareResource()
{
  prepareResources();
}

function prepareStronghold()
{
  prepareStrongholds();
}


?>