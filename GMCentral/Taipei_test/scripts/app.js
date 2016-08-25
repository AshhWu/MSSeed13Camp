var app = angular.module('app', []);

app.controller('BarCtrl', ['$scope', function ($scope) {
  		$scope.labels = ['2006', '2007', '2008', '2009', '2010', '2011', '2012'];
  		$scope.series = ['Series A', 'Series B'];

  		$scope.data = [
  		  [65, 59, 80, 81, 56, 55, 40],
  		  [28, 48, 40, 19, 86, 27, 90]
  		];
	}])

	.controller('cubeController', ['$scope', '$interval', function($scope, $interval){
      $scope.teamInfo = [
            {
                          team: "NULL"
                      },
            {
                        team: "美國"
                      },
                      {
                        team: "加拿大"
                      },
                      {
                        team: "巴西"
                      },
                      {
                        team: "義大利"
                      },
                      {
                        team: "德國"
                      },
                      {
                        team: "英國"
                      },
                      {
                        team: "台灣"
                      },
                      {
                        team: "日本"
                      },
                      {
                        team: "泰國"
                      },
                      {
                        team: "南非"
                      },
                      {
                        team: "馬達加斯加"
                      },
                      {
                        team: "埃及"
                      }
                  ];
		function getCube() {
			$http.get("scripts/CURD/getCube.php")
            .then(function(data){
                console.log("cube get");
                $scope.cubes = data;
            } ,function(error){
                console.log("cube error: " + error.message);
            });
        }

        $interval(getCube, 2000);
}])
	.controller('locationController', ['$scope', '$interval', function($scope, $interval){
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
      $interval(getLoc, 5000);

      function getLoc(){
        $http.get("scripts/CURD/getLocation.php")
        .then(function(data){
            for(var index in data)
            {
              var team = data[index];
              console.log(team);
              console.log($scope.markers[team.Team]);
  
              if(team.location != 'null')
              {
                if($scope.markers[team.Team] === undefined)
                {
                    console.log('Create new marker');
                    $scope.markers[team.Team] = new MarkerWithLabel({
                        position: new google.maps.LatLng(team.gpsX, team.gpsY),
                        draggable: true,
                        raiseOnDrag: true,
                        map: map,
                        icon: $scope.teamInfo[team.Team].picture,
                        labelContent: $scope.teamInfo[team.Team].team,
                        labelAnchor: new google.maps.Point(22, 0),
                        labelClass: "labels", // the CSS class for the label
                        labelStyle: {opacity: 0.8}
                    });
                }
                else
                {
                    console.log('Move');
                    $scope.markers[team.Team].setPosition(new google.maps.LatLng(team.gpsX, team.gpsY));
                }
              }
            }
          } ,function(error)
          { 
              console.log("error: " + error.message);
          });
      }

	}])
	.controller('picController', ['$scope', 'picService', '$interval', function($scope, picService, $interval){
     	$scope.pics = Pics = [
          {
                      team: "NULL",
                      picture: "img/TeamPicture/1.jpg"
                    },
                                {
                      team: "美國",
                      picture: "img/TeamPicture/1.jpg"
                    },
                    {
                      team: "加拿大",
                      picture: "img/TeamPicture/2.jpg"
                    },
                    {
                      team: "巴西",
                      picture: "img/TeamPicture/3.jpg"
                    },
                    {
                      team: "義大利",
                      picture: "img/TeamPicture/4.jpg"
                    },
                    {
                      team: "德國",
                      picture: "img/TeamPicture/5.jpg"
                    },
                    {
                      team: "英國",
                      picture: "img/TeamPicture/6.jpg"
                    },
                    {
                      team: "台灣",
                      picture: "img/TeamPicture/7.jpg"
                    },
                    {
                      team: "日本",
                      picture: "img/TeamPicture/8.jpg"
                    },
                    {
                      team: "泰國",
                      picture: "img/TeamPicture/9.jpg"
                    },
                    {
                      team: "南非",
                      picture: "img/TeamPicture/10.jpg"
                    },
                    {
                      team: "馬達加斯加",
                      picture: "img/TeamPicture/11.jpg"  
                    },
                    {
                      team: "埃及",
                      picture: "img/TeamPicture/12.jpg"
                    }
    ];

     	function updatePics(){
     		for(var i = 1; i <= $scope.pics.length; i++){
                $scope.pics[i].picture = "img/TeamPicture/" + i + ".jpg" + '?' + new Date().getTime();
                console.log($scope.pics[i].picture);
            }
     	}

     	$interval(updatePics, 2000);

	}]);