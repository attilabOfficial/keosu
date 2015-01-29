//<facebook-share title="title" text="body" picture="path" link="link"></facebook-share>
app.directive('facebookShare', function () {
	return {
		scope: {
			title: '=title',
			picture: '=picture',
			text: '=text',
			link: '=link'
		},
		restrict: 'E',
		templateUrl: 'plugins/facebookPlugins/templates/faceBookShare.html',
		controller: ['$scope', '$http', '$location', function ($scope, $http, $location) {
			$http.defaults.headers.post["Content-Type"] = "application/x-www-form-urlencoded";
			$scope.post = function () {
				var params = {
				    method: 'feed',
				    name: $scope.title,
				    link: $scope.link,
				    picture: $scope.picture,
				    caption: 'Reference Documentation',
				    description: $scope.text
				  };
				console.log(params);
			    FB.ui(params, function(obj) { console.log(obj);});
			}
		}]
	}
});

//<facebook-connect page-id="pageId" next-page="nextPage"> </facebook-connect>
app.directive('facebookConnect', function () {
	return {
		scope: {
			pageId: '=pageId',
			nextPage: '=nextPage'
		},
		restrict: 'E',
		templateUrl: 'plugins/facebookPlugins/templates/faceBookConnect.html',
		controller: ['$scope', '$http', '$location', 'usSpinnerService', function ($scope, $http, $location, usSpinnerService) {
			$http.defaults.headers.post["Content-Type"] = "application/x-www-form-urlencoded";

			$scope.init = function () {
				usSpinnerService.stop('spinner');
				if ((typeof cordova == 'undefined') && (typeof Cordova == 'undefined')) alert('Cordova variable does not exist. Check that you have included cordova.js correctly');
        	    if (typeof CDV == 'undefined') alert('CDV variable does not exist. Check that you have included cdv-plugin-fb-connect.js correctly');
            	if (typeof FB == 'undefined') alert('FB variable does not exist. Check that you have included the Facebook JS SDK file.');
				if ($scope.param == null) {
					$http.get('data/globalParam.json').success(function (data) {
						$scope.param = data;
						if ($scope.param.facebookConnect) {
							FB.getLoginStatus(function (response) {
								if (response.status == 'connected') {
									alert("Already connected to Facebook");
									var uid = response.authResponse.userID;
									var accessToken = response.authResponse.accessToken;
									var data = 'facebook_token=' + accessToken;
									$http.post($scope.param.host + 'service/gadget/facebook/app/' + $scope.param.appId + '/login', data).success(function (data) {
										if (data.success)
											$location.path('/Page/' + $scope.pageId);
										else
											alert("please first login the facebook!!!");
									});
									$location.path('/Page' + $scope.pageId);
								}
								else 
									alert("Not already connected to Facebook");
							});
						}

			$scope.login = function() {
				usSpinnerService.spin('spinner');
				FB.login(function(response) {
					$scope.isConnected();
    	        }, { scope: "email" });
            }

			$scope.isConnected = function() {
               	FB.getLoginStatus(function (response) {
					if (response.status == 'connected'){
						var FbToken = 'facebook_token=' + response.authResponse.accessToken;
						$http.post($scope.param.host + 'service/gadget/facebook/app/' + $scope.param.appId + '/login', FbToken).success(function (data) {
							if (data.success)
								$location.path('/Page/' + $scope.nextPage);
							else
								alert("Can not get the facebook token");
						});
					}
					else
						alert("Not connected");
				});
				usSpinnerService.stop('spinner');
            }
        })

				}
			};
		}]
	};
});

//<facebook-logout></facebook-logout>
app.directive('facebookLogout', function () {
	return {
		scope: {
		},
		restrict: 'E',
		templateUrl: 'plugins/facebookPlugins/templates/faceBookLogout.html',
		controller: ['$scope', '$http', '$location', function ($scope, $http, $location) {
			$http.defaults.headers.post["Content-Type"] = "application/x-www-form-urlencoded";

			$scope.init = function () {
				$http.get('data/globalParam.json').success(function (data) {
					$scope.param = data;
					$location.path('/Page/' + $scope.nextPage);
				})
			}

			$scope.logout = function () {
				FB.logout(function(response) {
					$scope.logged = false;
					$location.path('/Page/13');
				})
            }
		}]
	}
});