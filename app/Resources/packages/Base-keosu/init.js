var app = angular.module('keosuApp', ['angularSpinner', 'angular-carousel', 'ngSanitize', 'ngTouch', 'ngRoute', 'angular-inview', 'LocalStorageModule', 'CacheManagerModule', 'ui.bootstrap']);

app.controller('main_Controller', function ($http, $rootScope, $scope) {

    /**
     * Init buttons
     */
    $rootScope.initButton = function() {
        $rootScope.previousButton = true;
        $rootScope.closeButton = false;
    }

    /**
     * Manage buttons when opening an list element
     * @param arg
     */
    $rootScope.open = function (arg) {
        $rootScope.closeButton = true;
        $rootScope.previousButton = false;
        $scope.$broadcast('open', arg);
    }

    /**
     * Manage buttons when calling previous page
     */
    $rootScope.back = function () {
        $rootScope.previousButton = true;
        if ($rootScope.closeButton) {
            $rootScope.closeButton = false;
            $scope.$broadcast('back', null);
        }
        else {
            window.history.back();
        }
    };

    $http.get('data/globalParam.json').success(function (data) {

        $rootScope.appName = data.name;

        // $rootScope;previousButton : used to display a return button in the header
        // to show the button you should set the value true to the boolean
        // when you click on the button, the method $rootScope.prev is called
    });
    //alert("Connection :"+navigator.connection.type);
    $rootScope.initButton();
    $rootScope.offline = false;
    document.addEventListener("offline", function () {
        $rootScope.offline = true;
        alert("Network unreachable. The page will be reload soon as possible.");
        document.addEventListener("online", function () {
            $rootScope.offline = false;
            alert("Reconnection !");
            document.removeEventListener("online", function () {
            }, false);
            location.reload();
        }, false);
    }, false);

    $scope.alert = function (title, message) {
        if (typeof navigator.notification === 'undefined') {
            alert(message);
        } else {
            navigator.notification.alert(
                message,
                function () {
                },
                title,
                'OK'
            );
        }
    };
});

