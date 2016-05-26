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

var MapElement = function (options) {

    //Check if options exist
    if (typeof options === 'undefined') {
        throw new Error('The options argument is required.');
    }

    // store the options to this object instance
    this.options = options;

    //init markers tab
    this.markers = [];

    //init direction
    this.direction = [];

    //create map
    var mapOptions = {
        center: new google.maps.LatLng(0, 0),
        zoom: 8
    };
    this.map = new google.maps.Map(document.getElementById(this.options.name), mapOptions);

};

MapElement.prototype.bound = function () {

    var bounds = new google.maps.LatLngBounds();
    for (var item in this.markers) {
        bounds.extend(this.markers[item].getPosition());
    }
    this.map.fitBounds(bounds);
};

MapElement.prototype.addMarker = function (name, position) {
    this.markers[name] = new google.maps.Marker({
        position: new google.maps.LatLng(position[0], position[1]),
        map: this.map
    });
};

MapElement.prototype.editMarker = function (name, position) {
    this.markers[name].setPosition(new google.maps.LatLng(position[0], position[1]));
};

MapElement.prototype.setCenter = function (arg) {
    this.map.setCenter(new google.maps.LatLng(arg[0], arg[1]));
};

MapElement.prototype.setZoom = function (arg) {
    this.map.setZoom(parseInt(arg));
};