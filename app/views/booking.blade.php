@extends('layouts.master')

@section('meta')
    <link rel="stylesheet" href="{{ asset('static/css/flexslider/flexslider.css') }}" type="text/css">
@stop

@section('content')

    <div class="row">
        <div id="listing-id" class="col-xs-12 col-md-12">
            <h1> {{ $booking->description_title }} </h1>
            <h2> {{ $booking->uuid }} </h2>
        </div>

        {{-- Show slider if there is image --}}
        @if ($booking->getImages())
            <div id="img-slider-container" class="col-xs-12 flexslider col-md-8">
                <ul id="img-slider" class="slides">
                    @foreach ($booking->getImages() as $image)
                        <li><img src="{{ $image }}" /></li>
                    @endforeach
                </ul>
            </div>
        @endif

        <div style="text-align: left">
        <div class="col-xs-12 col-md-4"><h4>Location: {{{ $booking->suburb_business }}}</h4></div>
        <div class="col-xs-12 col-md-4"><h4>Price: {{{ $booking->price }}} </h4></div>
        <div class="col-xs-12 col-md-4"><h4>Category: {{{ $booking->id_category_01 }}} </h4></div>
        <div class="col-xs-12 col-md-4"><p>{{{ $booking->description_content }}} </p></div>
        </div>
    </div>
@stop


@section('footer-script')
    <script src="{{ asset('static/js/jquery.flexslider-min.js') }}"></script>

    <script type="text/javascript">
        $(window).load(function() {
          $('.flexslider').flexslider({
            animation: "slide"
          });
        });
    </script>
@stop
