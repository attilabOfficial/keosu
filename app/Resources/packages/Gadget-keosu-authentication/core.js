app.controller('keosu-authenticationController',function ($rootScope, $scope, $http, usSpinnerService,$location) {

	$http.defaults.headers.post["Content-Type"] = "application/x-www-form-urlencoded";

	/**
	 * Routing part
	 * @param page
     */
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

	/**
	 * specific action when the 'back' or 'close' button is called
	 */
	$scope.$on('back', function () {
		$scope.loginInit();
	});

	/**
	 * Init part
	 * @param params
     */
	$scope.init = function(params){
		$scope.nextPage = "0";
		if($scope.param == null)
			$http.get(params.host+'service/gadget/authentication/'+params.gadgetId+'/json/init').success(function(data) {
				$scope.param = params;
				$scope.nextPage= $scope.param.gadgetParam.pageToGoAfterLogin;
				$scope.loginInit();
			});
		else
			$scope.loginInit();
	};

	/**
	 * Login part
	 * @param message
	 * @param success
     */
	$scope.loginInit = function(message,success) {
		usSpinnerService.spin('spinner');
		$scope.loginError = message;
		$scope.loginSuccess = success;
		$http.get($scope.param.host + 'service/gadget/authentication/' + $scope.param.gadgetId + '/json/loginInit').success(function(data) {
			usSpinnerService.stop('spinner');
			$scope.token = data.csrf_token;
			if(data.allReadyLogged) {
				$location.path('/Page/'+$scope.param.gadgetParam.pageToGoAfterLogin);
			} else {
				$scope.routing('login');
			}
		});
	};
	$scope.loginAction = function() {
	
		usSpinnerService.spin('spinner');
		$scope.loginError = null;
		var data = '_csrf_token='+$scope.token+'&_username='+$scope.email+'&_password='+$scope.password+'&ajax=true';
		if($scope.rememberMe) {
			data+='&_remember_me='+$scope.rememberMe;
		}
		//If we are on mobile we authenticate else we redirect to pageToGoAfterLogin
		if( /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent) ) {
			$http.post($scope.param.host + 'login_check',data).success(function(data) {
				usSpinnerService.stop('spinner');
				if(data.success) {
					$location.path('/Page/'+$scope.param.gadgetParam.pageToGoAfterLogin);
				} else {
					$scope.loginInit(data.message);
				}
			});
		}else{
			usSpinnerService.stop('spinner');
			$location.path('/Page/'+$scope.param.gadgetParam.pageToGoAfterLogin);
		}

	};

	/**
	 * specific action when the 'open' button is called
	 */
	$scope.$on('open', function (event, init) {
		(init == "register") ? $scope.registerInit() : $scope.forgotPasswordInit();
	});

	/**
	 * Register part
	 * @param message
     */
	$scope.registerInit = function(message) {
		usSpinnerService.spin('spinner');
		$rootScope.closeButton = true;
		$scope.routing('register');
		$scope.registerError = message;
		$http.get($scope.param.host + 'service/gadget/authentication/' + $scope.param.gadgetId + '/json/register').success(function(data) {
			usSpinnerService.stop('spinner');
			$scope.token = data.csrf_token;
		});
	};

	$scope.registerAction = function() {
		$scope.registerError = null;
		
		var checkEmpty = function() {
			var ret = false;
			$('#register input').each(function(){
				if($(this).val() == "") {
					ret = true;
				}
			});
			return ret;
		};
		
		if(checkEmpty()) {
			$scope.registerError = "All field are required";
			window.scrollTo(0, 0);
		} else if($scope.password.length < 5 ) {
			$scope.registerError = "a password must contain at least 6 letters";
			window.scrollTo(0, 0);
		} else if($scope.password != $scope.password2) {
			$scope.registerError = "passwords don't match";
			window.scrollTo(0, 0);
		} else {
			usSpinnerService.spin('spinner');
			var data = 'username='+$scope.username+'&csrf_token='+$scope.token+'&password='+$scope.password+'&email='+$scope.email;
			$http.post($scope.param.host + 'service/gadget/authentication/' + $scope.param.gadgetId + '/json/register',data).success(function(data) {
				usSpinnerService.stop('spinner');
				if(data.success) {
					$scope.loginInit(null,"Registration completed you can now log in");
				} else {
					$scope.registerInit(data.message);
					window.scrollTo(0, 0);
				}
			});
		}
	};

	/**
	 * Forgot password part
	 * @param message
     */
	$scope.forgotPasswordInit = function(message) {
		$rootScope.closeButton = true;
		usSpinnerService.spin('spinner');
		$scope.routing('forgotPassword');
		$scope.forgotPasswordError = message;
		usSpinnerService.stop('spinner');
	};
	$scope.forgotPasswordAction = function () {
		$scope.forgotPasswordError = null;
		if(typeof($scope.username) == "undefined" || $scope.username.length == 0) {
			$scope.forgotPasswordError = "All fields are required";
		} else {
			usSpinnerService.spin('spinner');
			var data = 'username='+$scope.username;
			$http.post($scope.param.host + 'service/gadget/authentification/' + $scope.param.gadgetId + '/json/forgotPassword',data).success(function(data) {
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
