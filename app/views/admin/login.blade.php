@extends('layouts.master')

@section('content')

    <div class="row">
        <div class="col-xs-12 col-md-4 col-md-offset-4">
            {{Input::flash()}}
            <!-- check for login error flash var -->
            @if (Session::has('flash_error'))
                <div class="alert alert-danger">{{ Session::get('flash_error') }}</div>
            @endif
            {{Form::open(array('url' => 'loginCheck')) }}
            <div class="form-group">
            {{Form::text('username',null,array('class' => 'form-control','placeholder'=>'Username'))}}
            {{Form::password('password',array('class' => 'form-control','placeholder'=>'Password'))}}
            </div>
            <div class="checkbox">
            {{Form::label('remember', 'Remember me?', array('class' => 'form-control')) }}
            {{Form::checkbox('remember', 'yes', false)}}
            </div>
            {{Form::submit('Login',array('class' => 'btn btn-primary btn-lg'))}}
            {{Form::close()}}
        </div>
    </div>
@stop
