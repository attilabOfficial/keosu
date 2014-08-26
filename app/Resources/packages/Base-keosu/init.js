var app = angular.module('keosuApp', ['angular-chrono', 'angularSpinner','angular-carousel','ngSanitize', 'ngTouch', 'ngRoute','angular-inview','LocalStorageModule','CacheManagerModule']);

app.controller('main_Controller', function($http, $scope) {
		$http.get('data/globalParam.json').success( function (data) {
			$scope.appName = data.name;
		}); 
		//alert("Connection :"+navigator.connection.type);
		$scope.offline=false;
		document.addEventListener("offline",
				function(){
					$scope.offline=true;
					alert("Network unreachable. The page will be reload soon as possible.");
					document.addEventListener("online",function(){
						$scope.offline=false;
						document.removeEventListener("online",function(){},false);
						location.reload();
				}, false);
		}, false);
});

