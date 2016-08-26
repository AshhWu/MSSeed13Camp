angular.module('app')
	.service('picService',function(){
		var Pics = [
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
		this.getPics = function(){
			return Pics;
		};
	});