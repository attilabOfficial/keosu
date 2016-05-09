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

//Main controller
    app.controller('keosu-around-meController', function ($rootScope, $scope, $http, $sce, usSpinnerService, cacheManagerService) {

    //Init google gadget
    $scope.initialize = function () {
        var mapOptions = {
            center: new google.maps.LatLng(47.21677, -1.553307),
            zoom: 8,
            mapTypeId: google.maps.MapTypeId.ROADMAP
        };
        if ($scope.map == null)
            $scope.map = new google.maps.Map(document.getElementById("map_canvas"), mapOptions);
        return $scope.map;
    }


    $scope.open = function (page) {
        $rootScope.previousButton = true;

        //Init map
        $scope.curPage = page;
        $scope.curPage.descHtml = $('<div/>').html($scope.curPage.description).text();
        $scope.isList = false;
        $scope.map = $scope.initialize();
        $scope.map.setZoom($scope.param.gadgetParam.zoom);
        google.maps.event.trigger(document.getElementById("map_canvas"), 'resize');

        //POI Position
        var latitudeAndLongitude = new google.maps.LatLng(page.lat, page.lng);
        $scope.map.setCenter(latitudeAndLongitude);

        //User position
        var pinColor = "00EE00";
        var pinImage = "http://chart.apis.google.com/chart?chst=d_map_pin_letter&chld=%E2%80%A2|" + pinColor;
        var userPosition = new google.maps.LatLng($scope.position.latitude, $scope.position.longitude);
        $scope.userMarker = new google.maps.Marker({
            position: userPosition
        });
        $scope.userMarker.setIcon(({
            url: pinImage
        }));
        $scope.userMarker.setMap($scope.map);

        //Init POI marker
        markerOne = new google.maps.Marker({
            position: latitudeAndLongitude,
            title: $scope.curPage.title,
            map: $scope.map
        });

        //Trace line between two point
        var newLineCoordinates = [$scope.userMarker.position, latitudeAndLongitude];
        var newLine = new google.maps.Polyline({
            path: newLineCoordinates,
            strokeColor: "#FF0000",
            strokeOpacity: 1.0,
            strokeWeight: 2
        });
        newLine.setMap($scope.map);

        window.setTimeout(function () {
            google.maps.event.trigger(document.getElementById("map_canvas"), 'resize');
            $scope.map.setCenter(latitudeAndLongitude);
        }, 100);


    };
    $rootScope.previous = function () {
        $rootScope.previousButton = false;
        $scope.isList = true;
    };

    $scope.init = function (params) {
        console.log("init around me gadget");
        //$rootScope.previousButton = false;
        $scope.isList = true;
        usSpinnerService.spin('spinner'); // While loading, there will be a spinner
        $scope.param = params;

        var onGpsSuccess = function (position) {
            $scope.position = position;
            cacheManagerService.get($scope.param.host + 'service/gadget/aroundme/' + $scope.param.gadgetId + '/'
                + position.latitude + '/'
                + position.longitude + '/0/' + '10' + '/json', $scope.param.gadgetParam.cache, $scope.param.gadgetParam.timeout).success(function (data) {
                $scope.pages = data.data;
                usSpinnerService.stop('spinner');
            }).error(function (error) {
                $scope.error = (error);
                usSpinnerService.stop('spinner');
            });
        };

        cacheManagerService.getLocation()
            .success(
                function (position) {
                    onGpsSuccess(position);
                }).error(function (error) {
            $scope.error = error;
            usSpinnerService.stop('spinner');
        });
    }
});
