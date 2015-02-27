app.controller('keosu-flashController', function ($scope) {

	$scope.init = function (){
		window.plugins.flashlight.available(function(isAvailable) {
			if (!isAvailable)
  				alert("Flashlight not available on this device");
			});
	};

	$scope.on = function (){
		window.plugins.flashlight.switchOn(); // success/error callbacks may be passed
	}

	$scope.off = function (){
		window.plugins.flashlight.switchOff(); // success/error callbacks may be passed
	}
});