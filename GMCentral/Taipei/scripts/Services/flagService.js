angular.module('myApp')
  .service('flagService', ["$http", function($http){
		var teamInfo = [
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

        this.getTeamInfo = function(){
            return teamInfo;
        }

		this.getLocation = function(){
			return $http.get("../CURD/getLocation.php");
			     
		};

		// this.mark = function(){
		// 	var latLng = new google.maps.LatLng(25.054056, 121.539021);
  //           var mapCanvas = document.getElementById('map-canvas');
  //           var map = new google.maps.Map(mapCanvas, {
  //               zoom: 14,
  //               center: latLng,
  //               mapTypeId: google.maps.MapTypeId.ROADMAP
  //               });
		// 	for(var index in teamInfo)
  //      	 	{
  //               markers[index] = new MarkerWithLabel({
  //               position: new google.maps.LatLng(25.035346, 121.499810),
  //               draggable: true,
  //               raiseOnDrag: true,
  //               map: map,
  //               icon: teamInfo[index]['picture'],
  //               labelContent: teamInfo[index]['team'],
  //               labelAnchor: new google.maps.Point(25, 0),
  //               labelClass: "labels", // the CSS class for the label
  //               labelStyle: {opacity: 0.8}
  //           });
  //       };
	}

	}]);