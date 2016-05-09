app.controller('keosu-my-accountController',function ($scope, $http, usSpinnerService, cacheManagerService) {

	$http.defaults.headers.post["Content-Type"] = "application/x-www-form-urlencoded";

	/**************
	 * Routing part
	 **************/
	$scope.routing = function (page) {

		$scope.showAccount = false;
		$scope.passwordUpdate = false;
	
		switch (page) {
			case 'account':
			$scope.showAccount = true;
			break;
		
			case 'password':
			$scope.passwordUpdate = true;
			break;
		}
	}
	
	/**************
	 * Init part
	 **************/
	$scope.init = function(params){
		$scope.param = params;
		$scope.showAccountInit();
	}
	
	/**************
	 * Show account part
	 **************/
	$scope.showAccountInit = function(successMessage) {
		
		$scope.showAccountSuccess = successMessage;
		
		usSpinnerService.spin('spinner');
		$scope.routing('account');
		cacheManagerService.get($scope.param.host + 'service/gadget/myaccount/info', $scope.param.gadgetParam.cache, $scope.param.gadgetParam.timeout).success(function(data) {
			usSpinnerService.stop('spinner');
			if(data.connect) {
				$scope.account = data;
				$scope.logged = true;
				//TODO other account type
			} else {
				$scope.logged = false;
			}
		}).error(function (error) {
			$scope.error = (error);
			usSpinnerService.stop('spinner');
		});
	}
	
	/**************
	 * Logout part
	 **************/
	$scope.logoutAction = function () {
	
		$http.get($scope.param.host + 'service/gadget/authentication/'+$scope.param.gadgetId+'/logout').success(function(data) {
			$scope.logged = false;
			if(data.appPrivate) {
				window.location.replace("index.html");
			}
		})
	}
	
	/**************
	 * Password update part
	 **************/
	$scope.passwordUpdateInit = function() {
		$scope.routing('password');
	}
	
	$scope.passwordUpdateAction = function() {
		$scope.passwordUpdateError = null;
		
		var error = function (message) {
			$scope.passwordUpdateError = message;
			window.scrollTo(0, 0);
		}
		
		var allcompleted = true;
		$("#passwordUpdate input").each(function(){
			if($(this).val()=="") {
				allcompleted = false;
			}
		})
		
		if(!allcompleted){
			error("All fields are required");
		} else if($scope.newPassword != $scope.newPassword2) {
			error("The new password and the confirmation aren't the same");
		} else if($scope.newPassword.length < 5) {
			error("A password must contain at least 6 letter");
		} else {
			usSpinnerService.spin('spinner');
			var data = 'oldPassword='+$scope.oldPassword+'&newPassword='+$scope.newPassword;
			$http.post($scope.param.host + 'service/gadget/myaccount/password',data).success(function(data) {
				usSpinnerService.stop('spinner');
				if(data.connect) {
					$scope.logged = true;
					if(data.success) {
						$scope.showAccountInit("You successfully update your password");
					} else {
						error(data.message);
					}
				} else {
					$scope.logged = false;
				}
			});
		}
	}

});
