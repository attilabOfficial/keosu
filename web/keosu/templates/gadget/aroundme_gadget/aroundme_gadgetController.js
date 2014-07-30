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
app.controller('aroundme_gadgetController', function ($scope, $http, $sce, usSpinnerService, cacheManagerService) {
	//Functions
	$scope.parts=function(isList, isMap, $scope) {
		$scope.isList = isList;
		$scope.isMap = isMap;
	}
	//Init google gadget
	$scope.initialize=function() {
		var mapOptions = {
				center: new google.maps.LatLng(47.21677,-1.553307),
				zoom: 8,
				mapTypeId: google.maps.MapTypeId.ROADMAP
		};
		$('#map_canvas').html('');
		var map = new google.maps.Map(document.getElementById("map_canvas"),
				mapOptions);
		return map;
	}
	$scope.open = function (page) {
		usSpinnerService.spin('spinner'); // While loading, there will be a spinner
		data = cacheManagerService.get($scope.param.gadget+'.'+page.id, $scope.param.host + 'service/gadget/aroundme/view/'+ page.id + '/json')
				.success(function (data){
					usSpinnerService.stop('spinner');
					$scope.myMap = data[0];
					$scope.myMap.description = $sce.trustAsHtml(decodedContent(data[0].description));
					$scope.myMap.nom = $('<div/>').html(data[0].nom).text();
					var map=$scope.initialize();
					google.maps.event.trigger($("#map_canvas")[0], 'resize');
					var latitudeAndLongitude = new google.maps.LatLng(data[0].lat,data[0].lng);
					map.setCenter(latitudeAndLongitude);
					markerOne = new google.maps.Marker({
						position: latitudeAndLongitude,
						map: map
					});
					window.setTimeout(function(){
                        google.maps.event.trigger($("#map_canvas")[0], 'resize');
                        map.setCenter(latitudeAndLongitude);
                        },100);

					$scope.parts(false, true, $scope);
				});
	};
	$scope.close = function () {
		$scope.parts(true, false, $scope);
	};
	
	$scope.init = function (host, param, page, gadget, zone) {
			$scope.param = {
				'host'   : host+param,
				'page'   : page,
				'gadget' : gadget,
				'zone'   : zone,
			};
			$scope.parts(true, false, $scope);
			usSpinnerService.spin('spinner'); // While loading, there will be a spinner
			var onGpsSuccess = function(position) {
				data = cacheManagerService.get($scope.param.gadget, $scope.param.host + 'service/gadget/aroundme/' + gadget +'/'
						+ position.coords.latitude + '/'
						+ position.coords.longitude + '/0/' + '10' + '/json')
					.success(function (data) {
							usSpinnerService.stop('spinner');
							$tmp = [];		
							for (i = 0; i < data.data.length; i++) {
								$tmp[i] = data.data[i];
								$tmp[i].title = decodedContent(data.data[i].title);
							}
							$scope.pages = $tmp;
							usSpinnerService.stop('spinner');
						});
			};
			function onGpsError(error) {
				alert('Impossible de vous localiser.');
			}
			cacheManagerService.getLocation($scope.param.gadget+'location')
				.success(function (position) {
					onGpsSuccess(position);
				});
		}
});
