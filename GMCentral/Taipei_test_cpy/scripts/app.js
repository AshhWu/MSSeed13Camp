var app = angular.module('app', ["chart.js"]);

app.controller('cubeController', ['$scope','$http', '$interval', function($scope, $http, $interval){
      $scope.labels = ['美國', '加拿大', '巴西', '義大利', '德國', '英國', '台灣', '日本', '泰國', '南非', '馬達加斯加', '埃及'];
      $scope.totalCube = [];

    $scope.colorCube = [
                      {
                        title: "Red Cube",
                        data : []
                      },
                      {
                        title: "Green Cube",
                        data : []
                      },
                      {
                        title: "Yellow Cube",
                        data : []
                      },
                      {
                        title: "Blue Cube",
                        data : []
                      }
                  ];

      $scope.missions = [
                      {
                        id: "1",
                        position: "龍山寺",
                        title: "動物園",
                        content: "猜一景點",
                        picture: "../../TaipeiRun/pic/missionInfo/missionInfo1.png",
                        hint: "../../TaipeiRun/pic/missionHint/missionHint1.jpg"
                      },
                      {
                        id: "2",
                        position: "松山_慈祐宮",
                        title: "不可能的任務",
                        content: "猜一附近景點",
                        picture: "../../TaipeiRun/pic/missionInfo/missionInfo2.png",
                        hint: "../../TaipeiRun/pic/missionHint/missionHint2.jpg"
                      },
                      {
                        id: "3",
                        position: "忠孝新生_光華",
                        title: "Oh my God",
                        content: "猜一地點",
                        picture: "../../TaipeiRun/pic/missionInfo/missionInfo3.png",
                        hint: "../../TaipeiRun/pic/missionHint/missionHint3.jpg"
                      },
                      {
                        id: "4",
                        position: "國父紀念館",
                        title: "不准動",
                        content: "猜一站名",
                        picture: "../../TaipeiRun/pic/missionInfo/missionInfo4.png",
                        hint: "../../TaipeiRun/pic/missionHint/missionHint4.jpg"
                      },
                      {
                        id: "5",
                        position: "圓山_花博",
                        title: "蹦!蹦!蹦!",
                        content: "猜一站名",
                        picture: "../../TaipeiRun/pic/missionInfo/missionInfo5.png",
                        hint: "../../TaipeiRun/pic/missionHint/missionHint5.jpg"
                      },
                      {
                        id: "6",
                        position: "市政府_微軟",
                        title: "醉後大丈夫",
                        content: "猜一地點",
                        picture: "../../TaipeiRun/pic/missionInfo/missionInfo6.png",
                        hint: "../../TaipeiRun/pic/missionHint/missionHint6.jpg"
                      }
                  ];
		function getCube() {
			// $http.get("scripts/CURD/getCube.php")
   //          .then(function(response){
                //console.log(response);
                console.log("cube get");
                //$scope.cubes = response.data;
                $scope.cubes = [{"team":"1","cube2":"44","cube3":"10","cube4":"9","cube5":"8","mission":"3"},{"team":"2","cube2":"8","cube3":"11","cube4":"16","cube5":"9","mission":"5"},{"team":"3","cube2":"21","cube3":"29","cube4":"20","cube5":"10","mission":"3"},{"team":"4","cube2":"20","cube3":"10","cube4":"20","cube5":"30","mission":"4"},{"team":"5","cube2":"8","cube3":"8","cube4":"8","cube5":"8","mission":"1"},{"team":"6","cube2":"50","cube3":"50","cube4":"50","cube5":"50","mission":"1"},{"team":"7","cube2":"50","cube3":"50","cube4":"50","cube5":"50","mission":"1"},{"team":"8","cube2":"50","cube3":"50","cube4":"50","cube5":"50","mission":"1"},{"team":"9","cube2":"50","cube3":"50","cube4":"50","cube5":"50","mission":"1"},{"team":"10","cube2":"50","cube3":"50","cube4":"50","cube5":"50","mission":"1"},{"team":"11","cube2":"50","cube3":"50","cube4":"50","cube5":"50","mission":"1"},{"team":"12","cube2":"9","cube3":"5","cube4":"6","cube5":"0","mission":"2"}];
                
                for(var index in $scope.cubes)
                {
                  console.log(index);
                  $scope.colorCube[0].data[index] = $scope.cubes[index].cube2;
                  $scope.colorCube[1].data[index] = $scope.cubes[index].cube3;
                  $scope.colorCube[2].data[index] = $scope.cubes[index].cube4;
                  $scope.colorCube[3].data[index] = $scope.cubes[index].cube5;

                  $scope.totalCube[index] = ($scope.cubes[index].cube2 + $scope.cubes[index].cube3 + $scope.cubes[index].cube4 + $scope.cubes[index].cube5);
                  console.log($scope.totalCube[index]);
                  $scope.cubes[index].teamName = $scope.labels[index];
                  console.log($scope.cubes[index].teamName);
                }
            // } ,function(error){
                // console.log("cube error: " + error.message);
            // });
        }
        getCube();
        $interval(getCube, 2000);
}])
// 	.controller('locationController', ['$scope','$http', '$interval', function($scope, $http, $interval){
//       $scope.markers = [];
      
//       var latLng = new google.maps.LatLng(25.054056, 121.539021);
//       var mapCanvas = document.getElementById('map-canvas');
//       var map = new google.maps.Map(mapCanvas, {
//           zoom: 14,
//           center: latLng,
//           mapTypeId: google.maps.MapTypeId.ROADMAP
//           });
      
//       $scope.teamInfo = [
//                     {
//                       team: "NULL",
//                       picture: "img/flag/台灣.png"
//                     },
//                     {
//                       team: "美國",
//                       picture: "img/flag/美國.png"
//                     },
//                     {
//                       team: "加拿大",
//                       picture: "img/flag/加拿大.png"
//                     },
//                     {
//                       team: "巴西",
//                       picture: "img/flag/巴西.png"
//                     },
//                     {
//                       team: "義大利",
//                       picture: "img/flag/義大利.png"
//                     },
//                     {
//                       team: "德國",
//                       picture: "img/flag/德國.png"
//                     },
//                     {
//                       team: "英國",
//                       picture: "img/flag/英國.png"
//                     },
//                     {
//                       team: "台灣",
//                       picture: "img/flag/台灣.png"
//                     },
//                     {
//                       team: "日本",
//                       picture: "img/flag/日本.png"
//                     },
//                     {
//                       team: "泰國",
//                       picture: "img/flag/泰國.png"
//                     },
//                     {
//                       team: "南非",
//                       picture: "img/flag/南非.png"
//                     },
//                     {
//                       team: "馬達加斯加",
//                       picture: "img/flag/馬達加斯加.png"  
//                     },
//                     {
//                       team: "埃及",
//                       picture: "img/flag/埃及.png"
//                     }
//     ];
//       $interval(getLoc, 5000);

//       function getLoc(){
//         $http.get("scripts/CURD/getLocation.php")
//         .then(function(data){
//             for(var index in data)
//             {
//               var team = data[index];
//               console.log(team);
//               console.log($scope.markers[team.Team]);
  
//               if(team.location != 'null')
//               {
//                 if($scope.markers[team.Team] === undefined)
//                 {
//                     console.log('Create new marker');
//                     $scope.markers[team.Team] = new MarkerWithLabel({
//                         position: new google.maps.LatLng(team.gpsX, team.gpsY),
//                         draggable: true,
//                         raiseOnDrag: true,
//                         map: map,
//                         icon: $scope.teamInfo[team.Team].picture,
//                         labelContent: $scope.teamInfo[team.Team].team,
//                         labelAnchor: new google.maps.Point(22, 0),
//                         labelClass: "labels", // the CSS class for the label
//                         labelStyle: {opacity: 0.8}
//                     });
//                 }
//                 else
//                 {
//                     console.log('Move');
//                     $scope.markers[team.Team].setPosition(new google.maps.LatLng(team.gpsX, team.gpsY));
//                 }
//               }
//             }
//           } ,function(error)
//           { 
//               console.log("error: " + error.message);
//           });
//       }

// 	}])
	.controller('picController', ['$scope', '$interval', '$http', function($scope, $interval, $http){
     	$scope.pics =  [
                    {
                      team: "美國",
                      picture: "../../TaipeiRun/pic/missionReport/missionReport1.jpg"
                    },
                    {
                      team: "加拿大",
                      picture: "../../TaipeiRun/pic/missionReport/missionReport2.jpg"
                    },
                    {
                      team: "巴西",
                      picture: "../../TaipeiRun/pic/missionReport/missionReport3.jpg"
                    },
                    {
                      team: "義大利",
                      picture: "../../TaipeiRun/pic/missionReport/missionReport4.jpg"
                    },
                    {
                      team: "德國",
                      picture: "../../TaipeiRun/pic/missionReport/missionReport5.jpg"
                    },
                    {
                      team: "英國",
                      picture: "../../TaipeiRun/pic/missionReport/missionReport6.jpg"
                    },
                    {
                      team: "台灣",
                      picture: "../../TaipeiRun/pic/missionReport/missionReport7.jpg"
                    },
                    {
                      team: "日本",
                      picture: "../../TaipeiRun/pic/missionReport/missionReport8.jpg"
                    },
                    {
                      team: "泰國",
                      picture: "../../TaipeiRun/pic/missionReport/missionReport9.jpg"
                    },
                    {
                      team: "南非",
                      picture: "../../TaipeiRun/pic/missionReport/missionReport10.jpg"
                    },
                    {
                      team: "馬達加斯加",
                      picture: "../../TaipeiRun/pic/missionReport/missionReport11.jpg"  
                    },
                    {
                      team: "埃及",
                      picture: "../../TaipeiRun/pic/missionReport/missionReport12.jpg"
                    }
    ];

     	function updatePics(){
     		for(var i = 1; i <= $scope.pics.length; i++){
                $scope.pics[i-1].picture = "../../TaipeiRun/pic/missionReport/missionReport" + i + ".jpg" + '?' + new Date().getTime();
                console.log($scope.pics[i-1].picture);
            }
     	}

     	$interval(updatePics, 5000);

	}])



  .controller('locationController', ['$scope', '$interval', '$http', function($scope, $interval, $http){
      $scope.markers = [];
      
      var latLng = new google.maps.LatLng(25.054056, 121.539021);
      var mapCanvas = document.getElementById('map-canvas');
      var map = new google.maps.Map(mapCanvas, {
          zoom: 14,
          center: latLng,
          mapTypeId: google.maps.MapTypeId.ROADMAP
          });
      
      $scope.teamInfo = [
                    {
                      team: "NULL",
                      picture: "img/flag/台灣.png"
                    },
                    {
                      team: "美國",
                      picture: "img/flag/美國.png"
                    },
                    {
                      team: "加拿大",
                      picture: "img/flag/加拿大.png"
                    },
                    {
                      team: "巴西",
                      picture: "img/flag/巴西.png"
                    },
                    {
                      team: "義大利",
                      picture: "img/flag/義大利.png"
                    },
                    {
                      team: "德國",
                      picture: "img/flag/德國.png"
                    },
                    {
                      team: "英國",
                      picture: "img/flag/英國.png"
                    },
                    {
                      team: "台灣",
                      picture: "img/flag/台灣.png"
                    },
                    {
                      team: "日本",
                      picture: "img/flag/日本.png"
                    },
                    {
                      team: "泰國",
                      picture: "img/flag/泰國.png"
                    },
                    {
                      team: "南非",
                      picture: "img/flag/南非.png"
                    },
                    {
                      team: "馬達加斯加",
                      picture: "img/flag/馬達加斯加.png"  
                    },
                    {
                      team: "埃及",
                      picture: "img/flag/埃及.png"
                    }
    ];
      $interval(getLoc, 1000);
      // var data = [{"team":"1","gpsX":"0","gpsY":"0"},{"team":"2","gpsX":"0","gpsY":"0"},{"team":"3","gpsX":"0","gpsY":"0"},{"team":"4","gpsX":"0","gpsY":"0"},{"team":"5","gpsX":"0","gpsY":"0"},{"team":"6","gpsX":"0","gpsY":"0"},{"team":"7","gpsX":"0","gpsY":"0"},{"team":"8","gpsX":"0","gpsY":"0"},{"team":"9","gpsX":"0","gpsY":"0"},{"team":"10","gpsX":"0","gpsY":"0"},{"team":"11","gpsX":"0","gpsY":"0"},{"team":"12","gpsX":"0","gpsY":"0"}];
      function getLoc(){
        $http.get("scripts/CURD/getLocation.php")
         .then(function(response){
          $scope.teams = response.data;
            for(var index in $scope.teams)
            {
              var perTeam = $scope.teams[index];
              console.log($scope.teams[index]);

              console.log("perTeam=" + perTeam);
              console.log(perTeam['team']);
              console.log($scope.teamInfo[perTeam['team']]);
              if(perTeam['position'] != 'null')
              {
                if($scope.markers[perTeam['team']] == undefined)
                {
                    console.log('Create new marker ');
                    $scope.markers[perTeam['team']] = new MarkerWithLabel({
                        position: new google.maps.LatLng(perTeam.gpsX, perTeam.gpsY),
                        draggable: true,
                        raiseOnDrag: true,
                        map: map,
                        icon: $scope.teamInfo[perTeam['team']].picture,
                        labelContent: $scope.teamInfo[perTeam['team']].team,
                        labelAnchor: new google.maps.Point(22, 0),
                        labelClass: "labels", // the CSS class for the label
                        labelStyle: {opacity: 0.8}
                    });
                }
                else
                {
                    console.log('Move');
                    $scope.markers[perTeam['team']].setPosition(new google.maps.LatLng(perTeam.gpsX, perTeam.gpsY));
                }
              }
            }
          },function(error)
          { 
              console.log("error: " + error.message);
          });
        };
    }]);