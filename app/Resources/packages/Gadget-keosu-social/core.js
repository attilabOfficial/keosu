app.controller('keosu-socialController', function ($scope) {

	$scope.init = function (){
		//alert("init");
	};

	$scope.msg = function (){
		window.plugins.socialsharing.share('Message only');
	}

	$scope.msgSub = function (){
		window.plugins.socialsharing.share('Message and subject', 'The subject');
	}

	$scope.link = function (){
		window.plugins.socialsharing.share(null, null, null, 'http://keosu.com/');
	}

	$scope.msgLink = function (){
		window.plugins.socialsharing.share('Message and link', null, null, 'http://keosu.com/');
	}

	$scope.pic = function (){
		window.plugins.socialsharing.share(null, null, 'https://www.google.nl/images/srpr/logo4w.png', null);
	}

	$scope.msgPic = function (){
		window.plugins.socialsharing.share('Message and image', null, 'http://keosu.com/images/logo.png', null);
	}

	$scope.msgPicLink = function (){
		window.plugins.socialsharing.share('Message, image and link', null, 'http://keosu.com/images/logo.png', 'http://keosu.com/')
	}

	$scope.msgSubPicLink = function (){
		window.plugins.socialsharing.share('Message, subject, image and link', 'The subject', 'http://keosu.com/images/logo.png', 'http://keosu.com/');
	}
});