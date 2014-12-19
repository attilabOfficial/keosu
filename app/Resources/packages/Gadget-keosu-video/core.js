app.controller('keosu-videoController', function ($scope, $sce) {

	$scope.init = function (params){
		$scope.url = params.gadgetParam.url;
	};

	$scope.getUrl = function(){
		return ($sce.trustAsResourceUrl($scope.url));		
	}
});
