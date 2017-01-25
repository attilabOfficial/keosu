/************************************************************************
 Pockeit is an open source CMS for mobile app
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
app.controller('keosu-calendarController', function ($rootScope, $scope, $http, $timeout,$locale,cacheManagerService, uiCalendarConfig, usSpinnerService) {

	var date = new Date();
	var d = date.getDate();
	var m = date.getMonth();
	var y = date.getFullYear();

	$scope.showEvent = function(event, jsEvent, view){
		$scope.eventToDisplay = event;
		$scope.eventToDisplay.startDisplay = moment($scope.eventToDisplay.start).format('MMMM Do YYYY, h:mm:ss a');
		$scope.eventToDisplay.endDisplay = moment($scope.eventToDisplay.end).format('MMMM Do YYYY, h:mm:ss a');
		$scope.$emit("show-back",null);
		$scope.showDetail = true;
	}
	$scope.$on('back', function () {
		$scope.showDetail = false;

	});

	/* config object */
	$scope.uiConfig = {
		calendar:{
			height: 450,
			editable: false,
			header:{
				left: 'prev',
				center: 'title',
				right: 'next'
			},
			timeFormat:'h:mm',
			columnFormat:'ddd',
			firstDay:1,

			eventClick: $scope.showEvent,

		}
	};

	$scope.init = function (params) {
		console.log("init calendar gadget");
		$scope.showDetail = false;
		$scope.param = params;
		usSpinnerService.spin('spinner')
		cacheManagerService.get($scope.param.host + 'service/gadget/calendar/' + $scope.param.gadgetId , $scope.param.gadgetParam.cache, $scope.param.gadgetParam.timeout).success(function (data) {
			$scope.eventSources = data;
			$timeout(function(){
				uiCalendarConfig.calendars.agenda.fullCalendar( 'addEventSource', $scope.eventSources )
			},300);
			usSpinnerService.stop('spinner');
		}).error(function (error) {
			$scope.error = (error);
			usSpinnerService.stop('spinner');
		});
	};

	$scope.showCalendarView= function(viewName){
		uiCalendarConfig.calendars.agenda.fullCalendar( 'changeView', viewName )
	}




});

