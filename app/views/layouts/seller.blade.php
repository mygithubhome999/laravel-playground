<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- Optional theme -->
	<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap-theme.min.css">

	@yield('meta')
	<title>Laravel PHP Framework</title>
	<style>
		@import url(//fonts.googleapis.com/css?family=Lato:700);

		body {
			font-family:'Lato', sans-serif;
			text-align:center;
		}

		a, a:visited {
			text-decoration:none;
		}
	</style>
</head>
<body>
	<header class="container">
		<div class="row">
			<div class="col-xs-12">
				<h1>The Official Consumer Guide To<br>
				<small>Buying a Business in Australia</small>
				</h1>
			</div>
		</div>
	</header>
	@yield('nav')

	<div class="container">
		@yield('content')
	</div>
</body>
<!-- Latest compiled and minified JavaScript -->
<script src="http://code.jquery.com/jquery-2.1.0.min.js"></script>
<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
<script type="text/javascript">
/*http://scotch.io/tutorials/php/create-a-laravel-and-angular-single-page-comment-application*/
/*the function to make navbar stay fixed at the top once the header has scrolled away*/
$(function(){
	var $win = $(window),
		$filter = $('.navbar'),
		$filterSpacer = $('<div />', {
			"class": "filter-drop-spacer",
			"height": $filter.outerHeight()
		});

	$win.scroll(function() {
		if(!$filter.hasClass('navbar-fixed-top') && $win.scrollTop() > $filter.offset().top){
			$filter.before($filterSpacer);
			$filter.addClass("navbar-fixed-top");
		} else if ($filter.hasClass('navbar-fixed-top')  && $win.scrollTop() < $filterSpacer.offset().top){
			$filter.removeClass("navbar-fixed-top");
			$filterSpacer.remove();
		}
	});
});
</script>
@yield('footer-script')

</html>
