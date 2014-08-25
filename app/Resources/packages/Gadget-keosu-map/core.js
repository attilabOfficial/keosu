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

//Main function

app.controller('keosu-mapController', function ($scope, $http, $sce, usSpinnerService, cacheManagerService) {

	////////////////////////////
	// init part
	////////////////////////////
	$scope.init = function (params){
		$scope.param = params;	
		$scope.showMapAction();
	};
	
	/////////////////////////////
	// Map part
	/////////////////////////////
	$scope.showMapAction = function () {
		usSpinnerService.spin('spinner'); // While loading, there will be a spinner

		cacheManagerService.get($scope.param.host+'service/gadget/mapgadget/'+$scope.param.gadgetId+ '/json').success( function (data) {
					usSpinnerService.stop('spinner');
					$scope.map = data[0];
					var map = $scope.initialize();
					$scope.title = $('<div/>').html(data[0].name).text();
					$scope.content = $sce.trustAsHtml(data[0].description);
					map.setZoom($scope.param.gadgetParam.zoom);
					google.maps.event.trigger($("#map_canvas")[0], 'resize');
					var latitudeAndLongitude = new google.maps.LatLng(data[0].lat,data[0].lng);
					map.setCenter(latitudeAndLongitude);
					markerOne = new google.maps.Marker({
						position: latitudeAndLongitude,
						map: map
					});
				});
	};
	
	$scope.initialize = function() {
		var mapOptions = {
			center: new google.maps.LatLng(47.21677,-1.553307),//Default lat and lng
			zoom: 8,
			mapTypeId: google.maps.MapTypeId.ROADMAP
		};
		var map = new google.maps.Map(document.getElementById("map_canvas"),
				mapOptions);
		return map;
	};
});
