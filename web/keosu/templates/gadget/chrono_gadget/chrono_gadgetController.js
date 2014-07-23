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

app.controller('chrono_gadgetController', function ($scope, usSpinnerService, chronoService) {
	$scope.isStart = "";
	$scope.isStop = "";
    usSpinnerService.stop('spinner');
	initTimer($scope);
	chronoService.addTimer('myTimer', { interval: 500 });
	$scope.start = function() {
		$scope.isStart = "disabled";
		$scope.isStop = "";
		$scope.time = Date.now();
		chronoService.start();
	};
	$scope.stop = function() {
		$scope.isStop = "disabled";
		$scope.isStart = "";
		$scope.time = Date.now();
		chronoService.stop();
	};
});

function initTimer($scope) {
	$scope.hours = '00';
	$scope.minutes = '00';
	$scope.seconds = '00';	
}