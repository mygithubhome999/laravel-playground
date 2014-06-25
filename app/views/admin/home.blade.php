@extends('layouts.seller')

@section('nav')
	<nav class="navbar navbar-default" role="navigation">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#main-navbar">
					<span class="sr-only">Toggle navigation</span>
	        		<span class="icon-bar"></span>
	        		<span class="icon-bar"></span>
	        		<span class="icon-bar"></span>
				</button>
			</div>
			<div class="collapse navbar-collapse" id="main-navbar">
				<ul class="nav navbar-nav">
					<li><a href="#">Member Home</a></li>
					<li><a href="#">Account Detail</a></li>
					<li><a href="#">New Listing</a></li>
					<li><a href="#">Listing Enquiry</a></li>
					<li><a href="{{route('logout')}}">Logout</a></li>
				</ul>
			</div>
		</div>
	</nav>
@stop

@section('content')
	<div class="row">
		<div class="col-xs-12 col-md-10 col-md-offset-1">
	    @if (Session::has('flash_error'))
	        <div class="alert alert-danger">{{ Session::get('flash_error') }}</div>
	    @endif
	    @if (Session::has('flash_notice'))
	        <div class="alert alert-info">{{ Session::get('flash_notice') }}</div>
	    @endif
	    </div>
    </div>
@stop
