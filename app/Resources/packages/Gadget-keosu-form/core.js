/************************************************************************
	Keosu is an open source CMS for mobile app
	Copyright (C) 2014  Vincent Le Borgne

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

app.controller('keosu-formController', function ($scope, $compile, $http, $sce, $interval, $timeout, usSpinnerService, cacheManagerService, localStorageService) {

	$http.defaults.headers.post["Content-Type"] = "application/x-www-form-urlencoded";

	/**
	 * Init
	 */

	$scope.init = function(params){

		$scope.param = params;
		$scope.toSynchronize = 0;
		$scope.formInit();

	};

	/**
	 * Form
	 */

	$scope.formData = null;
	$scope.formInit = function() {

		usSpinnerService.spin('spinner');
		if($scope.param.gadgetParam.offline == true) {

			$http.get('data/form-' + $scope.param.gadgetParam['form-id'] + '.json').success(function(data) {

				usSpinnerService.stop('spinner');

				$scope.form = data;
				$scope.form.offline = $scope.param.gadgetParam.offline;
				$scope.toSynchronize = localStorageService.get('form-' + $scope.form.id).length;

			});

		} else {

			$http.get($scope.param.host + 'service/gadget/form/' + $scope.param.gadgetId).success(function(data) {

				usSpinnerService.stop('spinner');

				$scope.form = data;
				$scope.form.offline = $scope.param.gadgetParam.offline;

			});

		}

	};

	$scope.upload = function(files) {

		if(files.length == 0) return;

		file = files[0];

		var options = new FileUploadOptions();
		options.fileKey = "photo";
		options.fileName = file.uri.substr(file.uri.lastIndexOf('/') + 1);
		options.mimeType = "image/jpeg";
		options.params = new Object();
		options.chunkedMode = false;

		var ft = new FileTransfer();
		ft.upload(file.uri, $scope.param.host + 'service/gadget/form/' + $scope.form.id + '/upload', function(r) {

			console.log(r);
			if('k' in file) {

				var saved = localStorageService.get('form-' + $scope.form.id);
				saved[file.i][file.j][file.k] = JSON.parse(r.response).uri;
				localStorageService.set('form-' + $scope.form.id, saved);

			}
			else $scope.formData[file.i][file.j] = JSON.parse(r.response).uri;

			files.shift(); // Delete first element
			$scope.upload(files);

		}, function(e) {

			console.log(e);
			$scope.errorMessage = e;
			$timeout(function() {
				$scope.errorMessage = null;
			}, 5000);

		}, options);

	};

	$scope.submit = function() {

		$scope.formData = $scope.getFormData();

		if ($scope.formData === null) {

			$scope.errorMessage = "Merci de remplir tous les champs marqués d'une astérisque rouge";

			$timeout(function() {
				$scope.errorMessage = null;
			}, 5000);

		}
		else {

			usSpinnerService.spin('spinner');

			if($scope.form.offline) {

				var saved = localStorageService.get('form-' + $scope.form.id);
				if(!saved) saved = [];

				saved.push($scope.formData);

				localStorageService.set('form-' + $scope.form.id, saved);
				$scope.toSynchronize = saved.length;

				usSpinnerService.stop('spinner');
				$scope.init($scope.param);
				$scope.saved = true;
				$timeout(function() {
					$scope.saved = false;
				}, 5000);

			} else {

				$scope.filesToUpload = [];

				for(var i in $scope.formData) {

					if(Array.isArray($scope.formData[i])) {
						for(var j = 0; j < $scope.formData[i].length; j++) {

							$scope.filesToUpload.push({
								i: i,
								j: j,
								uri: $scope.formData[i][j]
							});

						}
					}

				}

				console.log($scope.filesToUpload);
				$scope.upload($scope.filesToUpload);

				$scope.uploadInterval = $interval(function() {

					if($scope.filesToUpload.length == 0) {

						$interval.cancel($scope.uploadInterval);

						console.log($scope.formData);
						$http.post($scope.param.host + 'service/gadget/form/' + $scope.form.id + '+' + localStorageService.get('user-mail'), "data=" + JSON.stringify($scope.formData))
							 	 .then(function(response) {

								 		usSpinnerService.stop('spinner');

										if(response.data.success) {

											$scope.submitted = true;
											$scope.init($scope.param);

											$timeout(function() {
												$scope.submitted = false;
											}, 5000);

										}	else {

											$scope.errorMessage = 'Oups! Une erreur s\'est produite.';
											$timeout(function() {
												$scope.errorMessage = null;
											}, 5000);

										}

									}, function(e) {

										console.log(e.data);
										usSpinnerService.stop('spinner');
										$scope.errorMessage = 'Oups! Une erreur s\'est produite.';
										$timeout(function() {
											$scope.errorMessage = null;
										}, 5000);

									});

					}

				}, 1000);

			}

		}

	};

	$scope.synchronize = function() {

		if(!$scope.form.offline) return;

		usSpinnerService.spin('spinner');

		var saved = localStorageService.get('form-' + $scope.form.id);
		if(saved == null || saved.length == 0) {

			usSpinnerService.stop('spinner');
			return;

		}

		$scope.filesToUpload = [];

		for(var i = 0; i < saved.length; i++) {

			for(var j in saved[i]) {

				if(Array.isArray(saved[i][j])) {
					for(var k = 0; k < saved[i][j].length; k++) {

						$scope.filesToUpload.push({
							i: i,
							j: j,
							k: k,
							uri: saved[i][j][k]
						});

					}
				}

			}

		}

		$scope.upload($scope.filesToUpload);

		$scope.uploadInterval = $interval(function() {

			if($scope.filesToUpload.length == 0) {

				$interval.cancel($scope.uploadInterval);
				var saved = localStorageService.get('form-' + $scope.form.id);

				for(var i = 0; i < saved.length; i++) {

					$http.post($scope.param.host + 'service/gadget/form/' + $scope.form.id + '+' + localStorageService.get('user-mail'), "data=" + JSON.stringify(saved[i]))
							 .then(function(response) {

									usSpinnerService.stop('spinner');

									if(response.data.success) {

										$scope.synchronized = true;
										$timeout(function() {
											$scope.synchronized = false;
										}, 5000);

									}	else {

										$scope.errorMessage = 'Oups! Une erreur s\'est produite.';
										$timeout(function() {
											$scope.errorMessage = null;
										}, 5000);

									}

								}, function() {

									usSpinnerService.stop('spinner');
									$scope.errorMessage = 'Oups! Une erreur s\'est produite.';
									$timeout(function() {
										$scope.errorMessage = null;
									}, 5000);

								});

				}

				localStorageService.remove('form-' + $scope.form.id)
				usSpinnerService.stop('spinner');
				$scope.toSynchronize = 0;

			}

		}, 1000);

	};

	$scope.getFormData = function() {

		var data = {};
		for (var i in $scope.form.fields) {

			var field = $scope.form.fields[i];
			if(field.value) {

				if(field.type == 'photo') data[field.text] = field.value.split(';');
				else data[field.text] = field.value;

			} else if(field.required) return null;

		}

		return data;

	};

	$scope.pickFromLibrary = function(field) {

    console.log('pickFromLibrary');

    navigator.camera.getPicture(function(x) {
			$scope.onSuccess(field, x);
		}, function(x) {
			$scope.onFail(field, x);
		}, {

      quality           : 75,
      destinationType   : Camera.DestinationType.FILE_URI,
      sourceType        : Camera.PictureSourceType.PHOTOLIBRARY

    });

  };

  $scope.openCamera = function(field) {

    console.log('openCamera');

    navigator.camera.getPicture(function(x) {
			$scope.onSuccess(field, x);
		}, function(x) {
			$scope.onFail(field, x);
		}, {

      quality           : 75,
      destinationType   : Camera.DestinationType.FILE_URI,
      sourceType        : Camera.PictureSourceType.CAMERA

    });

  };

	$scope.removePhoto = function(field, photo) {

		val = $('*[name="' + field + '"]').val();
		val = val.split(';');
		n_val = [];

		for(var i = 0; i < val.length; i++) {
			if(val[i] != photo) n_val.push(val[i]);
		}

		$('*[name="' + field + '"]').val(n_val.join(';'));
		$('*[name="' + field + '"]~div').first().find('.column').each(function() {
			if($(this).find('img').attr('src') == photo) {
				$(this).remove();
			};
		});

		for(var i = 0; i < $scope.form.fields.length; i++) {
			if($scope.form.fields[i].text == field) {

				val = $scope.form.fields[i].value.split(';');
				n_val = [];

				for(var j = 0; j < val.length; j++) {
					if(val[j] != photo) n_val.push(val[j]);
				}

				$scope.form.fields[i].value = n_val.join(';');
				break;

			}
		}

	}

  $scope.onSuccess = function(field, photo) {

    $('*[name="' + field + '"]').val($('*[name="' + field + '"]').val() + photo + ';');
		$('*[name="' + field + '"]~div').first().append('<div class="five wide column"><div class="ui fluid image"><img src="' + photo + '" alt="" /><a ng-click="removePhoto(\'' + field + '\', \'' + photo + '\')" class="ui right corner mini label"><i class="close icon"></i></a></div></div>');
		$compile($('*[name="' + field + '"]~div').first().find('.column').last())($scope);

		for(var i = 0; i < $scope.form.fields.length; i++) {
			if($scope.form.fields[i].text == field) {

				if($scope.form.fields[i].value) $scope.form.fields[i].value += ';' + photo;
				else $scope.form.fields[i].value = photo;

				break;

			}
		}

  };

  $scope.onFail = function(field, message) {
    $scope.errorMessage = field + ' : ' + message;
		$timeout(function() {
			$scope.errorMessage = null;
		}, 5000);
  };

});
