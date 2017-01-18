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
		//Creation of default map (to see detail of a location)
        if (document.getElementById("map_default")) {
			//Centering the map on user location
			var myLatlng = {lat: Number($scope.position.latitude), lng: Number($scope.position.longitude)};
			map_default = new google.maps.Map(document.getElementById('map_default'), {
				zoom: 17,
				center: myLatlng
			});

        }
        // Init the map with all locations
		if (document.getElementById("map_all")) {
			var myLatlng = {lat: Number($scope.position.latitude), lng: Number($scope.position.longitude)};
			var mapAll = new google.maps.Map(document.getElementById('map_all'), {
				zoom: 4,
				center: myLatlng
			});
			var latlngbounds = new google.maps.LatLngBounds();

			for (var i = 0; i < $scope.pages.length; i++) {
                var positionName = "position" + i.toString();
				var myLatlng = {lat: Number($scope.pages[i].lat), lng: Number($scope.pages[i].lng)};
				latlngbounds.extend(myLatlng);
				var marker = new google.maps.Marker({
					position: myLatlng,
					map: mapAll,
					title: ""+i,
					id : i
				});
				google.maps.event.addListener(marker, "click", function () {

					var page = $scope.pages[parseInt(this.title)];
					$scope.open(page);
					$scope.$apply();

				});
				mapAll.fitBounds(latlngbounds);


			}

            updateMap("map_all", mapAll);
        }
    };

    var updateMap = function (name, map) {
        window.setTimeout(function () {
            google.maps.event.trigger(document.getElementById(name), 'resize');
        }, 100);
    }
    /**
     * specific action when the 'open' button is called
     */
    $scope.open = function (page) {
        $scope.curPage = page;
        $scope.curPage.descHtml = $('<div/>').html($scope.curPage.description).text();
        $scope.isList = false;
		var pageLatlng = {lat: Number(page.lat), lng: Number(page.lng)};

		$scope.locationMarker = new google.maps.Marker({
			position: pageLatlng,
			map: map_default,
			title: "position"
		});

		window.setTimeout(function () {
			google.maps.event.trigger(document.getElementById(name), 'resize');
			map_default.setCenter(pageLatlng);
		}, 100);
		window.setTimeout(function () {
			map_default.setCenter(pageLatlng);
		}, 200);
		updateMap("map_default", map_default);

		$scope.$emit("show-back",null);

	};
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
