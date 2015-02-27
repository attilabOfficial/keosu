app.controller('keosu-vibrateController', function ($scope) {

	$scope.init = function (){
	};

	$scope.vibrate = function (){
		navigator.vibrate(1000);//vibration duration in ms
	};
});