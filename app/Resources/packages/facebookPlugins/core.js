/**
 * Created by lianglijiao on 14-8-5.
 */

//<keosufacebook-like      />
//<keosufacebook-share         />
//<keosufacebook-connect       />
app.directive('facebookConnect', function () {
	return {
		scope: {
			pageId: '=pageId'
		},
		restrict: 'E',
		templateUrl: 'plugins/facebookPlugins/templates/default.html',

		controller: ['$scope', '$http', function ($scope, $http) {
			$http.defaults.headers.post["Content-Type"] = "application/x-www-form-urlencoded";

			$scope.checkLogin = function () {
				FB.login(null, {scope: "email"});
			};

			$scope.init = function () {

				if ($scope.param == null) {
					$http.get('data/globalParam.json').success(function (data) {
						$scope.param = data;

						//AutomaticConnect facebook
						if ($scope.param.facebookConnect) {

							FB.getLoginStatus(function (response) {

								if (response.status == 'connected') {

									var uid = response.authResponse.userID;
									var accessToken = response.authResponse.accessToken;

									var data = 'facebook_token=' + accessToken;
									$http.post($scope.param.host + 'service/gadget/facebook/app/' + $scope.param.appId + '/login', data).success(function (data) {

										if (data.success) {
											$location.path('/Page/' + $scope.pageId);
										} else {
											alert("please first login the facebook!!!");
										}
									});

									$location.path('/Page' + $scope.pageId);
								}

							});
						}

						FB.Event.subscribe('auth.login', function (response) {
							//window.location.reload();
							if (response.status == 'connected') {

								var data = 'facebook_token=' + response.authResponse.accessToken;
								$http.post($scope.param.host + 'service/gadget/facebook/app/' + $scope.param.appId + '/login', data).success(function (data) {
									if (data.success) {
										$location.path('/Page/' + $scope.pageId);
									} else {
										alert("wrong!!!");
									}
								});
							}
						});

						FB.Event.subscribe('auth.logout', function (response) {
							$http.get($scope.param.host + 'service/gadget/facebook/app/' + $scope.param.appId + '/logout', data).success(function (data) {

								//user is now loggout
								$scope.logged = false;

								console.log(response.status);
								console.log(response);

								window.location.href("index.html");

							})
						});

					})

				}

			};


			$scope.setFaceBookUserName = function () {

				if (typeof ($scope.username) == "undefined" || $scope.username.length == 0) {

					var data = 'username=' + $scope.username;
					$http.post($scope.param.host + 'service/gadget/facebook/app/' + $scope.param.appId + '/login', data).success(function (data) {

						if (data.success) {
							$scope.init();
						} else {

							alert("please type your username in keosu");
						}

					})

				}

			}
		}]
	};
});

            // text
//app.directive('facebookShare',function(){
//
//	return{
//	        restrict:'E',
//			templateUrl: 'plugins/facebookPlugins/templates/default.html',
//
//
//			controller:['$scope','$http',function($scope,$http){
//				$http.defaults.headers.post["Content-Type"] = "application/x-www-form-urlencoded";
//
//
//				$scope.shareStatus = function(responde){
//					FB.ui({
//						method:'share',
//						href:'https://developers.facebook.com/docs/'
//					});
//				};
//
//
//				$scope.checkedStatus = function(){
//
//					if ($scope.param == null) {
//						$http.get('data/globalParam.json').success(function (data) {
//							$scope.param = data;
//
//						if($scope.param.facebookConnect){
//							FB.getLoginStatus(function(response){
//								if(response.status == 'connected'){
//
//
//									console.log('share ok');
//
//
//								}else{
//									facebookconnect.checkLogin();
//
//								}
//
//							});
//
//						}else{
//							facebookconnect.checkLogin();
//						}
//						})
//					}
//
//				};
//	}]
//
//};
//
//});











