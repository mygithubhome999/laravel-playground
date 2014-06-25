<!doctype html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<!-- Optional theme -->
		<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap-theme.min.css">
		<title>Enquiry</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0">
		<script src="http://cdnjs.cloudflare.com/ajax/libs/angular.js/1.2.15/angular.js"></script>
		<script src="http://cdnjs.cloudflare.com/ajax/libs/angular.js/1.2.15/angular-sanitize.js"></script>
		<script src="http://cdnjs.cloudflare.com/ajax/libs/angular.js/1.2.15/angular-touch.js"></script>
		<script src="http://cdnjs.cloudflare.com/ajax/libs/angular.js/1.2.15/angular-resource.js"></script>
		<script src="http://cdnjs.cloudflare.com/ajax/libs/angular.js/1.2.15/angular-animate.js"></script>
		<script src="http://cdnjs.cloudflare.com/ajax/libs/angular.js/1.2.15/angular-route.js"></script>
		<script src="js/app.js"></script>
		<script src="js/controllers.js"></script>
		<script src="js/rest-services.js"></script>
		<style>
			@import url(//fonts.googleapis.com/css?family=Lato:700);
		</style>
	</head>
	<body ng-app="myApp" ng-controller="MainCtrl">
		<h1>Enquiries</h1>
		<div class="form-group">
			<span class="glyphicon glyphicon-search"></span>
			<input type="search" class="form-control" placeholder="Search" ng-model="search" ng-change="filter()">
		</div>
		<div class="panel panel-default">
			<table class="table">
				<thead>
					<tr>
						<th>id</th>
						<th>Client ID</th>
						<th>Booking ID</th>
						<th>Sender's Name</th>
						<th>Sender's Phone No.</th>
						<th>Message</th>
						<th>Date</th>
					</tr>
				</thead>
				<tbody>
					<tr ng-repeat="enquiry in filtered = (enquiries | filter:search) | startFrom:(currentPage)*entryLimit | limitTo:entryLimit">
						<td>{{enquiry.id}}</td>
						<td>{{enquiry.user_id}}</td>
						<td>{{enquiry.booking_uuid}}</td>
						<td>{{enquiry.sender_name}}</td>
						<td>{{enquiry.sender_phone}}</td>
						<td>{{enquiry.message}}</td>
						<td>{{enquiry.updated_at}}</td>
					</tr>
				</tbody>
			</table>
		</div>
		<ul class="pagination">
			<li ng-class="{disabled: currentPage == 0}">
				<a href ng-click="prevPage()">« Prev</a>
			</li>
			<li ng-repeat="n in range(filtered.length, currentPage, currentPage + maxSize) "
				ng-class="{active: n == currentPage}"
				ng-click="setPage()">
				<a href ng-bind="n + 1">1</a>
			</li>
			
			<li ng-class="{disabled: (currentPage) == filtered.length - 1}">
				<a href ng-click="nextPage()">Next »</a>
			</li>
		</ul>
	</body>
</html>