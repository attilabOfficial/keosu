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

    var mapDefault = null;

    var initMap = function () {
        if (document.getElementById("map_default")) {
            mapDefault = new MapElement({
                name: "map_default",
                requiredUserPosition: true,
                requiredDestination: true
            });
            mapDefault.addMarker("user", [$scope.position.latitude, $scope.position.longitude]);
            mapDefault.addMarker("position", [0, 0]);
        }
        // init map all markers
        else {
            var mapAll = new MapElement({
                name: "map_all",
                requiredUserPosition: true,
                requiredDestination: true
            });
            for (var i = 0; i < $scope.pages.length; i++) {
                var positionName = "position" + i.toString();
                mapAll.addMarker(positionName, [$scope.pages[i].lat, $scope.pages[i].lng]);
            }
            updateMap("map_all", mapAll);
        }
    };

    var updateMap = function (name, map) {
        window.setTimeout(function () {
            google.maps.event.trigger(document.getElementById(name), 'resize');
            map.bound();
        }, 100);
    }
    /**
     * specific action when the 'open' button is called
     */
    $scope.$on('open', function (event, page) {

        //Init map
        $scope.curPage = page;
        $scope.curPage.descHtml = $('<div/>').html($scope.curPage.description).text();
        $scope.isList = false;
        mapDefault.editMarker("position", [page.lat, page.lng]);
        updateMap("map_default", mapDefault);


    });
    /**
     * specific action when the 'back' or 'close' button is called
     */
    $scope.$on('back', function () {
        $scope.isList = true;
    });

    $scope.init = function (params) {
        console.log("init around me gadget");
        $scope.isList = true;
        usSpinnerService.spin('spinner'); // While loading, there will be a spinner
        $scope.param = params;

        var onGpsSuccess = function (position) {
            $scope.position = position;
            cacheManagerService.get($scope.param.host + 'service/gadget/aroundme/' + $scope.param.gadgetId + '/'
                + position.latitude + '/'
                + position.longitude + '/0/' + '10' + '/json', $scope.param.gadgetParam.cache, $scope.param.gadgetParam.timeout).success(function (data) {
                $scope.pages = data.data;
                $scope.title = $scope.param.gadgetParam.title;
                // init map
                initMap();
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
