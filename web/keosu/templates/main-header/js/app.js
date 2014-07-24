var app = angular.module('keosuApp', ['angular-chrono', 'angularSpinner', 'ngSanitize', 'ngTouch', 'ngRoute','angular-inview','LocalStorageModule']);

app.controller('main_Controller', function($http, $scope) {
		$http.get('data/appName.json').success( function (data) {
			$scope.appName = data.name;
		}); 
});

//Offline Mode

document.addEventListener("offline",
        function(){
            alert("Perte du r&eacute;seau. La page sera recharg&eacute;e; d&eacute;s que possible");
		    document.addEventListener("online",
		        function(){
					alert("Reconnection !");
					document.removeEventListener("online",function(){},false);
					location.reload();
		            //window.location="index.html";
		    }, false);
		}, false);





