var app = angular.module('keosuApp', ['angularSpinner','angular-carousel','ngSanitize', 'ngTouch', 'ngRoute','angular-inview','LocalStorageModule','CacheManagerModule','ui.bootstrap']);

app.config(function( $compileProvider ) {
	$compileProvider.aHrefSanitizationWhitelist(/^\s*(https?|ftp|mailto|file|ghttps?|ms-appx|x-wmapp0):/);

	$compileProvider.imgSrcSanitizationWhitelist(/^\s*(https?|ftp|file|ms-appx|x-wmapp0):|data:image\//);
});

$(document).ready(function(){
	reloadContract();

});

function reloadContract(){
	lastInit = localStorage.getItem("last");
	for(i=0; i<lastInit; i++){
		$('#items').append('<div> num: '+i+" "+localStorage.getItem("cont"+i)+'</div>');
	}
	calculateAvg();
}

function calculateAvg(){
	lastInit = localStorage.getItem("last");
	countLastAvg =0;
	countAvg =0;
	var now = new Date();
	var nowInMillis = now.getTime();
	for(i=0; i<lastInit; i++){
		val = localStorage.getItem("cont"+i);
		valDate = new Date(val).getTime();

		if((nowInMillis - valDate)< 3600000){
			countLastAvg++;
		}
		if((nowInMillis - valDate)>3600000 && (nowInMillis - valDate)< 3600000*2){
			countAvg++;
		}

	}
	$('#avgLast').html(countLastAvg);
	$('#avg').html(countAvg);
	console.log(countLastAvg);
}
function addContract(){
	last = localStorage.getItem("last");
	if(last == null){
		last =0;
	}else{
		last++;
	}
	localStorage.setItem("last",last);

	var d = new Date();
	localStorage.setItem("cont"+last, d);
	console.log("contact" +d + " "+localStorage.getItem("last"));
	$('#items').append('<div> num: '+last+" "+d+'</div>');
	calculateAvg();
}
function supprContract(){
	last = localStorage.getItem("last");

	localStorage.setItem("cont"+last, null);
	localStorage.setItem("last", last-1);
	location.reload();
}
app.controller('main_Controller', function($http, $rootScope, $scope) {

	/**
	 * Init Buttons
	 */
    $rootScope.initButton = function() {
        // $rootScope;previousButton : used to display a return button in the header
        // to show the button you should set the value true to the boolean
        // when you click on the button, the method $rootScope.prev is called
        $rootScope.previousButton = true;
        $rootScope.closeButton = false;
    };

	/**
	 * Manage buttons when calling previous page
	 */
	$rootScope.back = function() {
        $rootScope.previousButton = true;
        if ($rootScope.closeButton) {
            $rootScope.closeButton = false;
        }
        else {
            window.history.back();
        }
        $scope.$broadcast('back',null);
    };

	/**
	 * Manage buttons when opening an list element
	 * @param arg
	 */
	$rootScope.open = function (arg) {
        $rootScope.previousButton = false;
        $rootScope.closeButton = true;

        $scope.$broadcast('open', arg);
    };

    $http.get('data/globalParam.json').success(function(data) {
		$rootScope.appName = data.name;
	});
	$rootScope.initButton();
	$rootScope.offline = false;
	document.addEventListener("offline", function() {
		$rootScope.offline = true;
		alert("Network unreachable. The page will be reload soon as possible.");
		document.addEventListener("online", function() {
			$rootScope.offline = false;
			alert("Reconnection !");
			document.removeEventListener("online", function(){}, false);
			location.reload();
		}, false);
	}, false);

	$scope.alert = function(title, message) {
		if (typeof navigator.notification === 'undefined') {
			alert(message);
		} else {
			navigator.notification.alert(
				message,
				function(){},
				title,
				'OK'
			);
		}
	};
});

