app.controller('authentification_gadgetController',function ($scope, $http, usSpinnerService) {

	$http.defaults.headers.post["Content-Type"] = "application/x-www-form-urlencoded";

	$scope.init = function(host, param, page, gadget, zone){

		usSpinnerService.spin('spinner'); // While loading, there will be a spinner
		$http.get(host + param + 'service/gadget/authentification/' + gadget + '/json/login').success(function(data) {
			usSpinnerService.stop('spinner');
			$scope.token = data.csrf_token;
		});
		
		$scope.param = {
			'host' :   host+param,
			'page' :   page,
			'gadget' : gadget,
			'zone' :   zone
		}
	};
	
	$scope.loginAction = function() {
	
		$scope.loginError=null;
		usSpinnerService.spin('spinner'); // While loading, there will be a spinner
		var data = '_csrf_token='+$scope.token+'&_username='+$scope.username+'&_password='+$scope.password+'&ajax=true';
		$http.post($scope.param.host + 'login_check',data).success(function(data) {
			usSpinnerService.stop('spinner');
			if(!data.success) {
				$scope.loginError = data.message;
			}
		});
	};
	
	
});
