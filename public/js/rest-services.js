'use strict';
angular.module('myApp.restServices', ['ngResource'])
    .factory('Enquiry', ['$resource',
        function ($resource) {
            return $resource('/api/enquiries', {});
        }]);