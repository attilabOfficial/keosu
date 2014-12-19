
app.controller('keosu-contact-usController', function ($scope, cacheManagerService) {
	$scope.init = function (params){
		$scope.param = params;
		cacheManagerService.get($scope.param.host+'service/gadget/picture/'+$scope.param.gadgetId).success( function (data) {
				$scope.image = data.path;
		});
	};
});
