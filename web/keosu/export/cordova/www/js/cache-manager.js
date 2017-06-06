/***
 * Cache manager help keosu apps to store remote content and location in local storage
 * We don't need to call remote services all the time
 * If user is offline, cache manager give him the last stored result
 */
(function () {
    /* Start angularCacheManager */
    'use strict';
    var angularCacheManager = angular.module('CacheManagerModule', ['ngRoute', 'LocalStorageModule']);

    angularCacheManager.provider('cacheManagerService', function () {

        this.cacheExpiration = 0;

        /**
         * HTTP Get cache
         * @type {*[]}
         */
        this.$get = ['$rootScope', '$http', '$q', 'localStorageService', function ($rootScope, $http, $q, localStorageService) {

            var cacheExpiration = this.cacheExpiration; //TODO put this in gadget config

            var getFromCache = function (url, cacheExp, timeOut) {
                if (cacheExp) {
                    cacheExpiration = (cacheExp * 60000);
                }
                var tmp = url.split("/");
                var cachekey = "";
                for (var c in tmp) {
                    cachekey = cachekey + "_" + tmp[c];
                }

                var deferred = $q.defer();
                var promise = deferred.promise;

                //init var for timeout

                setTimeout(function () {
                    if (timeOut) {
                        deferred.reject('<div class="error-message" ><p>Erreur time out.</p></div>');
                    }
                }, (1000 * timeOut));

                var lastUpdate = localStorageService.get('lastup' + cachekey);
                var now = new Date().getTime();
                if (lastUpdate == null) {
                    lastUpdate = 0;
                    now = 0;
                }

                var dif = now - lastUpdate;
                var currentCache = localStorageService.get(cachekey);

                if ((currentCache && (dif < cacheExpiration && dif != 0)) || (currentCache && $rootScope.offline)) {
                    deferred.resolve(currentCache);
                } else {
                    $http.get(url)
                        .success(function (data) {
                            localStorageService.set(cachekey, data);
                            localStorageService.set('lastup' + cachekey, now);
                            deferred.resolve(data);
                        })
                        .error(function (data, status, headers, config, statusText) {
                                if (currentCache != null) {
                                    deferred.resolve(currentCache);
                                } else {
                                    deferred.reject('<div class="error-message" ><p>Une erreur s\'est produite.' + '<br>Erreur : ' + status + ' ' + ((statusText) ? statusText : '') + '</p></div>');
                                }
                            }
                        );

                }
                promise.success = function (fn) {
                    promise.then(fn);
                    return promise;
                }
                promise.error = function (fn) {
                    promise.then(null, fn);
                    return promise;
                }
                return promise;
            };
            /****
             * Location cache
             * @param cacheExp
             * @returns {promise|fd.g.promise}
             */
            var getLocationFromCache = function (cacheExp) {
                if (cacheExp) {
                    cacheExpiration = cacheExp;
                }
                var cachekey = "lastpos";

                var onGpsSuccess = function (position) {
                    var newposition = new Object;
                    newposition["latitude"] = position.coords.latitude;
                    newposition["longitude"] = position.coords.longitude;
                    localStorageService.set(cachekey, newposition);
                    localStorageService.set('lastup' + cachekey, now);
                    deferred.resolve(newposition);
                };

                var onGpsError = function () {
                    if (currentCache != null) {
                        deferred.resolve(currentCache);
                    } else {
                        deferred.reject('<div class="error-message" ><p>Impossible de vous localiser.</p></div>');
                    }
                };
                var deferred = $q.defer();
                var promise = deferred.promise;
                var lastUpdate = localStorageService.get('lastup' + cachekey);
                var now = new Date().getTime();
                if (lastUpdate == null) {
                    lastUpdate = 0;
                    now = 0;
                }
                var dif = now - lastUpdate;
                var currentCache = localStorageService.get(cachekey);
                if ((currentCache && (dif < cacheExpiration && dif != 0))
                /*|| $scope.offline*/) {
                    deferred.resolve(currentCache);
                } else {
                    navigator.geolocation.getCurrentPosition(onGpsSuccess, onGpsError);
                }
                promise.success = function (fn) {
                    promise.then(fn);
                    return promise;
                }

                promise.error = function (fn) {
                    promise.then(null, fn);
                    return promise;
                }

                return promise;
            };
            return {
                get: getFromCache,
                getLocation: getLocationFromCache
            };
        }];
    });
}).call(this);
