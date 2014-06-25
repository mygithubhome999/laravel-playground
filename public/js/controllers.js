'use strict';

angular.module('myApp.controllers', [])
.controller('MainCtrl', ['$scope','$timeout','Enquiry', function ($scope,$timeout,Enquiry) {
    $scope.enquiries = Enquiry.query();
      

    $scope.currentPage = 1; //current page
    $scope.maxSize = 10; //pagination max size
    $scope.entryLimit = 10; //max rows for data table

    /* init pagination with $scope.list */
    $scope.noOfPages = Math.ceil($scope.enquiries.length/$scope.entryLimit);
    //$scope.setPage = function(pageNo) {
        $scope.currentPage = 0;
    //};
    
    $scope.filter = function() {
        $timeout(function() {
            /* change pagination with $scope.filtered */
            $scope.noOfPages = Math.ceil($scope.filtered.length/$scope.entryLimit);
        });
    };

    $scope.range = function (size,start, end) {
        var ret = [];        
        console.log(size,start, end);
                      
        if (size < end) {
            end = size;
            start = size-$scope.maxSize;
        }
        for (var i = start; i < end; i++) {
            ret.push(i);
        }        
         console.log(ret);        
        return ret;
    };
    
    $scope.prevPage = function () {
        if ($scope.currentPage > 0) {
            $scope.currentPage--;
        }
    };
    
    $scope.nextPage = function () {
        if ($scope.currentPage < $scope.filtered.length - 1) {
            $scope.currentPage++;
        }
    };
    
    $scope.setPage = function () {
        $scope.currentPage = this.n;
    };

    
}])

    .filter('startFrom', function() {
        return function(input, start) {
            if(input) {
                start = +start; //parse to int
                return input.slice(start);
            }
            return [];
        }
    });










    //}]);


