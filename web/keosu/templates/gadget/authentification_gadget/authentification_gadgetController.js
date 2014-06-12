app.controller('authentification_gadgetController',function ($scope, $http, usSpinnerService) {

	$http.defaults.headers.post["Content-Type"] = "application/x-www-form-urlencoded";

	/**************
	 * Routing part
	 **************/
	$scope.routing = function (page) {

		$scope.login = false;
		$scope.register = false;
		$scope.forgotPassword = false;
	
		switch (page) {
			case 'login':
			$scope.login = true;
			break;
		
			case 'register':
			$scope.register = true;
			break;
			
			case 'forgotPassword':
			$scope.forgotPassword = true;
			break;
		}
	}
	
	/**************
	 * Init part
	 **************/
	$scope.init = function(host, param, page, gadget, zone){

		$http.get(host+param + 'service/gadget/authentification/' + gadget + '/json/init').success(function(data) {
			$scope.param = {
				'host' :   host+param,
				'page' :   page,
				'gadget' : gadget,
				'zone' :   zone,
				'pageToGoAfterLogin' : data.pageToGoAfterLogin
			}
		
			$scope.loginInit();
		});
		

	};

	/**************
	 * Login part
	 **************/
	$scope.loginInit = function(message,success) {
	
		usSpinnerService.spin('spinner');
		$scope.routing('login');
		$scope.loginError = message;
		$scope.loginSuccess = success;
		$http.get($scope.param.host + 'service/gadget/authentification/' + $scope.param.gadget + '/json/login').success(function(data) {
			usSpinnerService.stop('spinner');
			$scope.token = data.csrf_token;
			if(data.allReadyLogged) {
				window.location = $scope.param.pageToGoAfterLogin+'.html';
			}
		});
	}
	$scope.loginAction = function() {
	
		usSpinnerService.spin('spinner');
		$scope.loginError = null;
		var data = '_csrf_token='+$scope.token+'&_username='+$scope.username+'&_password='+$scope.password+'&ajax=true';
		if($scope.rememberMe) {
			data+='&_remember_me='+$scope.rememberMe;
		}
		$http.post($scope.param.host + 'login_check',data).success(function(data) {
			usSpinnerService.stop('spinner');
			if(data.success) {
				window.location = $scope.param.pageToGoAfterLogin+'.html';
			} else {
				$scope.loginInit(data.message);
			}
		});
	};
	
	/**************
	 * Register part
	 **************/
	$scope.registerInit = function(message) {
		usSpinnerService.spin('spinner');
		$scope.routing('register');
		$scope.registerError = message;
		$http.get($scope.param.host + 'service/gadget/authentification/' + $scope.param.gadget + '/json/register').success(function(data) {
			usSpinnerService.stop('spinner');
			$scope.token = data.csrf_token;
		});
	}

	$scope.registerAction = function() {
		$scope.registerError = null;
		if($scope.password.length < 5 ) {
			$scope.registerError = "a password must contain at least 5 characters";
		} else if($scope.password != $scope.password2) {
			$scope.registerError = "passwords don't match";
		} else {
			usSpinnerService.spin('spinner');
			var data = 'csrf_token='+$scope.token+'&username='+$scope.username+'&password='+$scope.password+'&password2='+$scope.password2+'&email='+$scope.email;
			$http.post($scope.param.host + 'service/gadget/authentification/' + $scope.param.gadget + '/json/register',data).success(function(data) {
				usSpinnerService.stop('spinner');
				if(data.success) {
					$scope.loginInit(null,"Registration completed you can now log in");
				} else {
					$scope.registerInit(data.message);
				}
			});
		}
	}
	
	/*************
	 * Forgot password part
	 *************/
	$scope.forgotPasswordInit = function(message) {
		usSpinnerService.spin('spinner');
		$scope.routing('forgotPassword');
		$scope.forgotPasswordError = message;
		usSpinnerService.stop('spinner');
	}
	
	$scope.forgotPasswordAction = function () {
		$scope.forgotPasswordError = null;
		if(typeof($scope.username) == "undefined" || $scope.username.length == 0) {
			$scope.forgotPasswordError = "All fields are required";
		} else {
			usSpinnerService.spin('spinner');
			var data = 'username='+$scope.username;
			$http.post($scope.param.host + 'service/gadget/authentification/' + $scope.param.gadget + '/json/forgotPassword',data).success(function(data) {
				usSpinnerService.stop('spinner');
				if(data.success) {
					$scope.loginInit(null,"Please check your email account to recover to password");
				} else {
					$scope.forgotPasswordInit(data.message);
				}
			});
		}
	}
});
