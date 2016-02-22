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
app.controller('keosu-quizzController', function ($scope, $http, $sce, usSpinnerService, cacheManagerService, localStorageService) {

	$http.defaults.headers.post["Content-Type"] = "application/x-www-form-urlencoded";

	/////////////////////////
	// Init part
	/////////////////////////
	$scope.init = function(params){
		$scope.param = params;
		$scope.quizzInit();
	};
	
	/////////////////////////
	// Quizz part
	/////////////////////////
	$scope.quizzInit = function() {
		usSpinnerService.spin('spinner'); // While loading, there will be a spinner
		cacheManagerService.get($scope.param.host+ 'service/gadget/quizz/' + $scope.param.gadgetId).success(function(data) {
			usSpinnerService.stop('spinner');
			$scope.quizz = data;
			$scope.submitted = (localStorageService.get("quizz"+$scope.quizz.id+"_submitted") !== null);
		});
	};

	$scope.submitQuizz = function() {
		var responses = $scope.getResponses();

		if (responses === null) {
			$scope.errorMessage = "All questions haven't been answered.";
		} else {
			usSpinnerService.spin('spinner');
			$http.post($scope.param.host+ 'service/gadget/quizz/' + $scope.quizz.id,
				"responses="+JSON.stringify(responses))
				.then(function(response) {
					usSpinnerService.stop('spinner');
					if (response.data.success) {
						$scope.submitted = true;
						localStorageService.set("quizz"+$scope.quizz.id+"_submitted", true);
					} else {
						$scope.errorMessage = 'An error has occurred during the quizz submission.';
					}
				}, function() {
					usSpinnerService.stop('spinner');
					$scope.errorMessage = 'An error has occurred during the quizz submission.';
				});
		}
	};

	$scope.getResponses = function() {
		var responses = [];

		for (var questionIndex in $scope.quizz.questions) {
			var question = $scope.quizz.questions[questionIndex];
			var response;
			if (question.type === 'freeText') {
				response = $scope.getFreeTextResponse(question);
				if (response !== null) {
					responses.push(response);
				} else {
					return null;
				}
			} else if (question.type === 'singleChoice') {
				response = $scope.getSingleChoiceResponse(question);
				if (response !== null) {
					responses.push(response);
				} else {
					return null;
				}
			} else {
				response = $scope.getMultipleChoiceResponse(question);
				if (response !== null) {
					responses.push(response);
				} else {
					return null;
				}
			}
		}
		return responses;
	};

	$scope.getFreeTextResponse = function(question) {
		var response = {question: question.id};

		if (question.userText !== undefined && question.userText !== '') {
			response.userText = question.userText;
			return response;
		} else {
			return null;
		}
	};

	$scope.getSingleChoiceResponse = function(question) {
		var response = {question: question.id};

		if (question.selectedAnswer !== undefined) {
			response.selectedAnswer = parseInt(question.selectedAnswer);
			for (var answerIndex in question.answers) {
				var answer = question.answers[answerIndex];
				if (answer.id == question.selectedAnswer && answer.type === 'freeText') {
					if (answer.userText !== undefined && answer.userText !== '') {
						response.userText = answer.userText;
					} else {
						return null;
					}
				}
			}
			return response;
		} else {
			return null;
		}
	};

	$scope.getMultipleChoiceResponse = function(question) {
		var response = {question: question.id};

		var selectedAnswers = [];
		for (var answerIndex in question.answers) {
			var answer = question.answers[answerIndex];
			if (answer.selected === true) {
				var a = {answer: answer.id};
				if (answer.type === 'freeText') {
					if (answer.userText !== undefined && answer.userText !== '') {
						a.userText = answer.userText
					} else {
						return null;
					}
				}
				selectedAnswers.push(a);
			}
		}
		if (selectedAnswers.length === 0) {
			return null;
		}
		response.selectedAnswers = selectedAnswers;
		return response;
	};

	$scope.focusInput = function($event) {
		var input = $($event.currentTarget).parent().children('input:first');
		if (input[0].checked !== true) {
			input.click();
		}
	};

	$scope.blurInput = function($event) {
		var input = $($event.currentTarget).parent().children('input:first');
		if ($event.currentTarget.value.length === 0 && input[0].checked === true) {
			input.click();
		}
	};
	
});
