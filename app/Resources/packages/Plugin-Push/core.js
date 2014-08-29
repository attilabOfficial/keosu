// Don't forget to take a look at exportListener.php before edit this file
app.directive('keosuPush', function(){
	return {
		restrict : 'E',
		templateUrl : 'plugins/keosu-push/templates/default.html',
		controller : ['$scope','$http', function ($scope, $http) {

			$http.defaults.headers.post["Content-Type"] = "application/x-www-form-urlencoded";

			$scope.init = function() {
				console.log('function init');
				document.addEventListener('deviceready', function() {
					console.log('i\'m ready');
					// if push notification is enabled
					pushNotification = window.plugins.pushNotification;
					if(typeof(device) != 'undefined' && typeof(pushNotificationData) != 'undefined') {
						$http.get('data/globalParam.json').success(function(data) {
							$scope.host = data.host;
							if(device.platform == 'android' || device.platform == 'Android' || device.platform == "amazon-fireos") {
								$scope.androidPush();
							} else {
								$scope.applePush();
							}
						});
					}
				},false);
			};

			////////////////////////
			// Android part
			////////////////////////
			$scope.androidPush = function() {
				appAndroid = {
					successHandler: function(result) {
						console.log("Push success : "+result);
					},
					errorHandler: function(error) {
						console.log("Push error : "+error);
					},
					onNotification: function(e) {
						switch( e.event ) {
							case 'registered':
							if ( e.regid.length > 0 ) {
								$http.post($scope.host+'service/push/plugin/addDevice/2','token='+e.regid);
							}
							break;

							case 'message':
							// this is the actual push notification. its format depends on the data model from the push server
							console.log('message = '+e.message+' msgcnt = '+e.msgcnt);
							break;

							case 'error':
							console.log('GCM error = '+e.msg);
							break;

							default:
							console.log('An unknown GCM event has occurred');
							break;
						}
					}
				};

				pushNotification.register(
					appAndroid.successHandler,
					appAndroid.errorHandler,
					{'senderID':pushNotificationData.senderID+"",'ecb': "appAndroid.onNotification" }
				);
			};
		
			/////////////////////
			// Apple part
			/////////////////////
			$scope.applePush = function() {
				console.log('I\'m an Iphone...');
				appPushNotification = {
					tokenHandler: function(result) {
						console.log('iphone id');
						console.log(result);
						if( result.length > 0 ) {
							$http.post($scope.host+'service/push/plugin/addDevice/1','token='+result);
						}
					},
					errorHandler: function(error){console.log('the eoor is '+error)},
					onNotificationAPN: function(event) {
						if( event.alert )
							navigator.notification.alert(event.alert);
						if( event.sound ) {
							var snd = new Media(event.sound);
							snd.play();
						}
						if( event.badge )
							pushNotification.setApplicationIconBadgeNumber(successHandler, errorHandler, event.badge);
					}
				};

				pushNotification.register(
					appPushNotification.tokenHandler,
					appPushNotification.errorHandler,
					{
						'badge' : 'true',
						'sound' : 'true',
						'alert' : 'true',
						'ecb'   : 'appPushNotification.onNotificationAPN'
					}
				);
			};

		}]
	};
});

