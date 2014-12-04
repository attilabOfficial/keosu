var app = angular.module('keosuApp', ['angular-chrono', 'angularSpinner','angular-carousel','ngSanitize', 'ngTouch', 'ngRoute','angular-inview','LocalStorageModule','CacheManagerModule']);

app.controller('main_Controller', function($http, $rootScope) {
		$http.get('data/globalParam.json').success( function (data) {
			$rootScope.appName = data.name;
			 // $rootScope;previousButton : used to display a return button in the header
			 // to show the button you should set the value true to the boolean
			 // when you click on the button, the method $rootScope.prev is called 
			$rootScope.previousButton = false;
		});
		//alert("Connection :"+navigator.connection.type);
        $rootScope.offline=false;
		document.addEventListener("offline",
				function(){
                    $rootScope.offline=true;
					alert("Network unreachable. The page will be reload soon as possible.");
					document.addEventListener("online",function(){
                        $rootScope.offline=false;
						alert("Reconnection !");
						document.removeEventListener("online",function(){},false);
						location.reload();
				}, false);
		}, false);
});

