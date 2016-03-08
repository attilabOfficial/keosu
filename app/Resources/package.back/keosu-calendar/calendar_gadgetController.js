/************************************************************************
    Keosu is an open source CMS for mobile app
    Copyright (C) 2014  Vincent Le Borgne, Keosu

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
/*
 * Author: Flavien Lecuyer
 */

//Main function
app.controller('calendar_gadgetController', function ($scope, $http, $sce, usSpinnerService) {

	$http.defaults.headers.post["Content-Type"] = "application/x-www-form-urlencoded";

	///////////////////////
	// function part
	///////////////////////
	$scope.strip =function(html){
		var tmp = document.createElement("DIV");
		tmp.innerHTML = html;
		return tmp.textContent || tmp.innerText || "";
	};

	// The function 'parts' enables to display the calendar or a single event
	$scope.parts=function (isCalendar, isEvent, $scope) {
		$scope.isCalendar = isCalendar;
		$scope.isEvent = isEvent;
	}

	//Initializing the map
	$scope.initialize=function() {
		var mapOptions = {
			center    : new google.maps.LatLng(47.21677,-1.553307),
			zoom      : 8,
			mapTypeId : google.maps.MapTypeId.ROADMAP
		};
		$('#calendar_map_canvas').html('');
		var map_c = new google.maps.Map(document.getElementById("calendar_map_canvas"),
				mapOptions);
		return map_c;
	}
	
	// If you close an event, the app displays the calendar
	$scope.close = function () {
		$scope.parts(true, false, $scope);
	};
	
	//////////////////////////////
	// Calendar part
	//////////////////////////////
	// The app makes a test to know if it is possible to find or delete an event (not possible on Android before Android 4)
	var delete_ok = false;
	var find_ok = false;
	
	if (!window.plugins){
		window.plugins = {};
	} else {
		if (window.plugins.calendar) {
			test_startDate = new Date(2014,2,15,18,30,0,0,0); // beware: month 0 = january, 11 = december
			test_endDate = new Date(2014,2,15,19,30,0,0,0);
			test_title = "My nice event";
			test_location = "Home";
			test_notes = "Some notes about this event.";
			test_success = function(message) { find_ok = true; };
			test_error = function(message) {	
				if (message=="Invalid action"){
					find_ok = false;
				} else {
					find_ok = true;
				} 
			};
			window.plugins.calendar.findEvent(test_title,test_location,test_notes,test_startDate,test_endDate,test_success,test_error);		
			// Test for deleting
			test_success = function(message) { delete_ok = true; };
			test_error = function(message) {	
				if (message=="Invalid action"){
					delete_ok = false;	// It is not possible to delete an event (ex: on Android 3-)
				} else {
					delete_ok = true;
				} 
			};
			window.plugins.calendar.deleteEvent(test_title,test_location,test_notes,test_startDate,test_endDate,test_success,test_error);
		}
	}
	
	// $scope.open is called when an event is choosen
	$scope.open = function (page_id) {
		// This variables are used to have all the informations needed in the phone's calendar
		var date_ms = 0; var title = ""; var location = ""; var notes = ""; var startDate; var endDate;
		// First, it is necessary to load the file with the events informations
		usSpinnerService.spin('spinner'); // While loading, there will be a spinner
		$http.get($scope.host + $scope.param + 'service/gadget/calendar/view/' + page_id + '/json', {timeout: 10000}).success(function (data){
				// If the file has been loaded, we execute the following code
				usSpinnerService.stop('spinner');
				// The data is stored in variables which can be readed from the html (with $scope)
				$scope.anEvent = data[0];
				$scope.commentListAction();
				decodedContent = data[0].name;
				decodedContent = $('<div/>').html(decodedContent).text();
				decodedContent = decodedContent.replace(/[/\\*]/g, "");
				$scope.anEvent.name = decodedContent;
				title = $scope.anEvent.name;
				decodedContent = data[0].date;
				decodedContent = $('<div/>').html(decodedContent).text();
				decodedContent = decodedContent.replace(/[/\\*]/g, "");
				$scope.anEvent.date = decodedContent;
				decodedContent = data[0].lieu;
				decodedContent = $('<div/>').html(decodedContent).text();
				decodedContent = decodedContent.replace(/[/\\*]/g, "");
				$scope.anEvent.lieu = decodedContent;
				location = $scope.anEvent.lieu;
				decodedContent = data[0].description;
				decodedContent = $('<div/>').html(decodedContent).text();
				var description_html = decodedContent;
				$scope.anEvent.description = decodedContent;
				$scope.anEvent.description = $sce.trustAsHtml($scope.anEvent.description);
				// Here, we use the data for the phone's calendar
				notes = $scope.strip(description_html);
				date_ms = data[0].date_ms;
				startDate = new Date(parseInt(date_ms));
				endDate = new Date();
				endDate.setTime(startDate.getTime()+3600000);
				
				try {
					// If it is possible, we create the Google Map
					if ($scope.anEvent.lieu.substring($scope.anEvent.lieu.length-27)!='(location can not be found)'){
						document.getElementById('calendar_map_canvas').style.height = '400px';
						// If there is no location, nothing is displayed
						var map_c=$scope.initialize();
						google.maps.event.trigger($("#calendar_map_canvas")[0], 'resize');
						var latitudeAndLongitude = new google.maps.LatLng(data[0].latitude,data[0].longitude);
						map_c.setCenter(latitudeAndLongitude);
						markerOne = new google.maps.Marker({
							position: latitudeAndLongitude,
							map: map_c
						});
						window.setTimeout(function(){
							google.maps.event.trigger($("#calendar_map_canvas")[0], 'resize');
							map_c.setCenter(latitudeAndLongitude);
							},100);
					} else {
						document.getElementById('calendar_map_canvas').innerHTML = '';
						document.getElementById('calendar_map_canvas').style.height = '0px';
					}
				} catch(error) {
					// If it is not possible, we display it
					var map_canvas = document.getElementById('calendar_map_canvas');
					map_canvas.innerHTML = "<i>Unable to load Google Map</i>";
				}

				// Then, we hide the calendar and display the event
				$scope.parts(false, true, $scope);

				// These are the arguments for adding/deleting the event
				var calSuccess = function(message) { };
				var calError = function(message) { };

				// When an event is added/deleted, we propose the other action
				function change(present) {
					// First, we need to handle the button
					var bouton = document.getElementById('bouton');
					if (present){
						// The event exists in the calendar
						if (delete_ok){	// It is possible to delete it or it is just a test : propose it
							bouton.onclick=function(){calendarDemoRemove();};
							bouton.innerHTML='Delete from my calendar';
						} else { // It is not possible to delete : display that it is added and block the button
							bouton.onclick=null;
							bouton.disabled=true;
							bouton.innerHTML='Event added in my calendar';
						}
					} else {
						// The event does not exist, propose to add
						bouton.onclick=function(){calendarDemoAdd();};
						bouton.disabled=false;
						bouton.innerHTML='Add event to my calendar';
					}
				}

				// Function used to add the event
				function calendarDemoAdd() {
					// Change the button data
					change(true);
					if (window.plugins.calendar){
						window.plugins.calendar.createEvent(title,location,notes,startDate,endDate,calSuccess,calError);
					} else {
						alert('Not available on desktop');
					}
				}
				// Function used to delete the event
				function calendarDemoRemove() {
					window.plugins.calendar.deleteEvent(title,location,notes,startDate,endDate,calSuccess,calError);
					// Change the button data
					change(false);
				}	
						
				// Find event not used because of a bug on iOS devices
				/*
				if (find_ok){	// It is possible to find an event, so we search the event in the calendar
					if(window.plugins.calendar.findEvent(title,location,notes,startDate,endDate,calSuccess,calError)!=undefined){
						change(true);
					} else {
						change(false);
					}
				} else {	// We consider it is not in calendar, because we can't check
					change(false);
				}
				*/
				
				change(false);
				
				var twitter_button  = document.getElementById('twitter_button');
				twitter_button.type  = 'hidden';
				facebook_button.type  = 'hidden';		
				
				
				if (window.plugins.socialsharing){
					document.getElementById('other_share').onclick=function(){window.plugins.socialsharing.share(title+'\nDescription\n'+notes);};

					
					window.plugins.socialsharing.canShareVia('com.apple.social.twitter', 'msg', null, null, null, 
							function(){
								twitter_button.hidden = false;
								twitter_button.onclick=function(){window.plugins.socialsharing.shareViaTwitter(title+'\nDescription\n'+notes);};
							}, 
							function(){
								window.plugins.socialsharing.canShareVia('twitter', 'msg', null, null, null, 
									function(){
										twitter_button.hidden = false;
										twitter_button.onclick=function(){window.plugins.socialsharing.shareViaTwitter(title+'\nDescription\n'+notes);};
									}, 
									function(){
										alert('Twitter not available on this device');
									});
							});
				
				} else {
					document.getElementById('other_share').onclick=function(){alert('Not available on desktop');};
				}					
		}).error(function (response, data, status, header) {
			// If the file could not have been loaded, we alert it an stop the spinner
			usSpinnerService.stop('spinner');
			alert('Failed to load file...');
		});
	};
	
	// On the table calendar, we have to check when the event is selected with this function 
	$scope.update = function (){
		// There is an element which gives the event id information
		var event_id=document.getElementById('selection');
		if (event_id!=null){	// There is not such element : stop
			if (event_id.value!=0){	// There is this element, and an event has been choosen : we use it to open the event
				var id_number = event_id.value;
				event_id.value=0;
				$scope.open(id_number);
			}
		}
	};
	
	// When the page is loaded, this function is called
	$scope.init = function (host, param, page, gadget, zone){ 
		// At the beginning, we display the calendar
		$scope.parts(true, false, $scope);
		
		// We store the parameters information, we need it the functions
		$scope.host = host;
		$scope.param = param;
		
		// The first page to display is number 0
		var offset = (0);
		$scope.activePage = {
				page:0
		};
		//usSpinnerService.spin('spinner'); // While loading, there will be a spinner
		// There is an element to know where are the events on the table calendar
		var test_init = document.getElementById('init_calendar');
		if (test_init!=null){
			// This is the table calendar, send the information
			init_calendar( host + param + 'service/gadget/calendar/1/json');
		} else {
			// This is the list calendar, load the file with the events informations
			$http.get(host + param + 'service/gadget/calendar/' + gadget + '/' + offset + '/' + 'json', {timeout: 10000}).success( function (data) {
				// The file has been loaded successfully, we initialize the event list
				$tmp = [];	
				// While there are datas to use
				for (i = 0; i < data.data.length; i++) {
					// The data is stored
					$tmp[i]=data.data[i];
					decodedContent = data.data[i].name;
					decodedContent = $('<div/>').html(decodedContent).text();
					decodedContent = decodedContent.replace(/[/\\*]/g, "");
					$tmp[i].name = decodedContent;
					decodedContent = data.data[i].date;
					decodedContent = $('<div/>').html(decodedContent).text();
					decodedContent = decodedContent.replace(/[/\\*]/g, "");
					$tmp[i].date = decodedContent;
				}

				nb = 0;
				pages = new Array();
				// Display the good informations
				for (i = 0; i < $tmp.length; i++) {
					tmpPage = [];
					for (j = 0; j < data.eventsperpage; j++) {
					
						if (!$tmp[i])
							break;
						tmpPage[j] = $tmp[i];
						i++;
					}
					i--;
					pages[nb] = tmpPage;
					nb++;
				}
				$scope.pages = pages;
			}).error(function (response, data, status, header) {
				// The file could not have been loaded
				usSpinnerService.stop('spinner');
				alert('Failed to load file...');
			});
		}
		usSpinnerService.stop('spinner');
	};

	/////////////////////////
	// Comment part
	/////////////////////////
	$scope.commentListAction = function() {
		$http.get($scope.host + $scope.param +'service/gadget/comment/'+$scope.anEvent.dataModelObjectName+'/'+$scope.anEvent.id).success(function(data){
			$scope.comments = data.comments;
			$scope.connect = data.connect;
		});
	};
	
	$scope.commentAddAction = function() {
		var data = "message="+$scope.messageComment;
		$scope.messageComment = "";
		$http.post($scope.host + $scope.param +'service/gadget/comment/'+$scope.anEvent.dataModelObjectName+'/'+$scope.anEvent.id,data).success(function(data){
			$scope.comments = data.comments;
			$scope.connect = data.connect;
		});
	};
	
	
}).directive('myCurrentTime', ['$interval', 'dateFilter', function($interval, dateFilter) {
	// This is used to update the time every 0.1 sec
	function link(scope, element, attrs) {
		var format,
		timeoutId;

		function updateTime() {
			element.text(dateFilter(new Date(), format));
			scope.update();
		}

		scope.$watch(attrs.myCurrentTime, function(value) {
			format = value;
			updateTime();
		});

		element.on('$destroy', function() {
			$interval.cancel(timeoutId);
		});

		// start the UI update process; save the timeoutId for canceling
		timeoutId = $interval(function() {
			updateTime(); // update DOM
		}, 10);
	}

	return {
		link: link
	};
}]);
