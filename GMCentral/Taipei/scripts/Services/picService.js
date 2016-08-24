angular.module('myApp')
	.service('picService',function(){
		var Pics = [
					{
                        team: "台灣",
                        picture: "img/TeamPicture/1.jpg"
                    },
                    {
                        team: "加拿大",
                        picture: "img/background_blur.jpg"
                    },
                    {
                        team: "南非",
                        picture: "img/TeamPicture/2.jpg"
                    },
                    {
                        team: "埃及",
                        picture: "img/TeamPicture/3.jpg"
                    },
                    {
                        team: "巴西",
                        picture: "img/TeamPicture/1.jpg"
                    },
                    {
                        team: "德國",
                        picture: "img/TeamPicture/1.jpg"
                    },
                    {
                        team: "日本",
                        picture: "img/TeamPicture/1.jpg"
                    },
                    {
                        team: "泰國",
                        picture: "img/TeamPicture/1.jpg"
                    },
                    {
                        team: "美國",
                        picture: "img/TeamPicture/1.jpg"
                    },
                    {
                        team: "義大利",
                        picture: "img/TeamPicture/1.jpg"
                    },
                    {
                        team: "英國",
                        picture: "img/TeamPicture/1.jpg"
                    },
                    {
                        team: "馬達加斯加",
                        picture: "img/TeamPicture/1.jpg"
                    }
		];
		this.getPics = function(){
			return Pics;
		};
	});