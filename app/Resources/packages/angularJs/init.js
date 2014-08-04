var app = angular.module('keosuApp', ['angular-chrono', 'angularSpinner', 'ngSanitize', 'ngTouch', 'ngRoute','angular-inview','LocalStorageModule','CacheManagerModule']);

app.controller('main_Controller', function($http, $scope) {
		$http.get('data/appName.json').success( function (data) {
			$scope.appName = data.name;
		}); 

		document.addEventListener("offline",
		        function(){
					$scope.offline=true;
		            alert("Perte du r&eacute;seau. La page sera recharg&eacute;e; d&eacute;s que possible");
				    document.addEventListener("online",function(){
				    	$scope.offline=false;
						alert("Reconnection !");
						document.removeEventListener("online",function(){},false);
						location.reload();
				}, false);
		}, false);
});
