/**
 * Created by lianglijiao on 14-8-5.
 */

//<keosufacebook-like      />
//<keosufacebook-share         />
//<keosufacebook-connect       />
app.directive('facebookConnect', function () {
	return {
		scope: {
			pageId: '=pageId',
			nextPage: '=nextPage'
		},
		restrict: 'E',
		templateUrl: 'plugins/facebookPlugins/templates/faceBookConnect.html',

		controller: ['$scope', '$http', '$location', function ($scope, $http, $location) {
			$http.defaults.headers.post["Content-Type"] = "application/x-www-form-urlencoded";

			$scope.init = function () {
				if ((typeof cordova == 'undefined') && (typeof Cordova == 'undefined')) alert('Cordova variable does not exist. Check that you have included cordova.js correctly');
        	    if (typeof CDV == 'undefined') alert('CDV variable does not exist. Check that you have included cdv-plugin-fb-connect.js correctly');
            	if (typeof FB == 'undefined') alert('FB variable does not exist. Check that you have included the Facebook JS SDK file.');
				if ($scope.param == null) {
					$http.get('data/globalParam.json').success(function (data) {
						$scope.param = data;

						//AutomaticConnect facebook
						if ($scope.param.facebookConnect) {

							FB.getLoginStatus(function (response) {

								if (response.status == 'connected') {
									alert("Already connected to Facebook");
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
								else 
									alert("Not already connected to Facebook");
							});
						}

				$scope.login = function() {
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
            }

						

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
		}]
	};
});









