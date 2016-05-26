/************************************************************************
 Keosu is an open source CMS for mobile app
 Copyright (C) 2013  Vincent Le Borgne

 This program is free software: you can redistribute it and/or modify
 it under the terms of the GNU Affero General Public License as
 published by the Free Software Foundation, either version 3 of the
 License, or (at your option) any later version.

 This program is distributed in the hope that it will be useful,
 but WITHOUT ANY WARRANTY; without even the implied warranty of
 MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 GNU Affero General Public License for more details.

 You should have received a copy of the GNU Affero General Public License
 along with this program.  If not, see <http://www.gnu.org/licenses/>.
 ************************************************************************/
// Don't forget to take a look at exportListener.php before edit this file

app.directive('keosuPush', function () {
    return {
        restrict: 'E',
        templateUrl: 'plugins/keosu-push/templates/default.html',
        controller: ['$scope', '$http', function ($scope, $http) {

            $http.defaults.headers.post["Content-Type"] = "application/x-www-form-urlencoded";

            console.log('function init');
            $scope.init = function () {
                document.addEventListener('deviceready', function () {
                    console.log('i\'m ready');

                    $http.get('data/globalParam.json').success(function (data) {
                        console.log(data);
                    });

                    if (typeof(device) != 'undefined' && typeof(PushNotification) != 'undefined') {
                        $http.get('data/globalParam.json').success(function (data) {
                            $scope.host = data.host;
                            var push = PushNotification.init({
                                android: {
                                    senderID: pushNotificationData.senderID + "", 'ecb': "appAndroid.onNotification"
                                },
                                ios: {
                                    alert: "true",
                                    badge: "true",
                                    sound: "true"
                                },
                                windows: {}
                            });

                            push.on('registration', function (data) {
                                var deviceId = (device.platform == 'android' || device.platform == 'Android' || device.platform == "amazon-fireos") ? 2 : 1;
                                $http.post($scope.host + 'service/push/plugin/addDevice/' + deviceId, 'token=' + data.registrationId);
                            });

                            push.on('notification', function (data) {
                                function onConfirm(buttonIndex) {
                                }

                                navigator.notification.confirm(
                                    data.message,   // message
                                    onConfirm,      // callback to invoke with index of button pressed
                                    'Notification', // title
                                    ['OK']          // buttonLabels
                                );
                            });

                            push.on('error', function (e) {
                            });
                        });
                    }

                });
            };
        }]
    };
});

