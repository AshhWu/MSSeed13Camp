angular.module('myApp', ["chart.js"])
	.service('cubeService', ["$http", function($http){
		var teamInfo = [
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

		this.getTeamInfo = function(){
			return teamInfo;
		};

        this.getCube = function(){
        	return $http.get("scripts/CURD/getCube.php");
        };
    }]);