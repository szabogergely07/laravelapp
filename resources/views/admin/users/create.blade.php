@extends('layouts.admin')

@section('content')

<div class="container">
	<h2>Create Users</h2>
</div>

<br>

<div class="container">

{!! Form::open(['method' => 'POST', 'action' => 'AdminUsersController@store']) !!}

    <div class="form-group">
        {!! Form::label('name', 'Name') !!}
        {!! Form::text('name', null, ['class' => 'form-control']) !!}
        {{ $errors->first('title', '<p class="help-block">:message</p>') }}
    </div>

    <div class="form-group">
        {!! Form::label('email', 'Email') !!}
        {!! Form::email('email', null, ['class' => 'form-control']) !!}
        {{ $errors->first('title', '<p class="help-block">:message</p>') }}
    </div>

     <div class="form-group">
        {!! Form::label('password', 'Password') !!}
        {!! Form::password('password', ['class' => 'form-control']) !!}
        {{ $errors->first('title', '<p class="help-block">:message</p>') }}
    </div>

    <div class="form-group">
        {!! Form::label('role_id', 'Role') !!}
        {!! Form::select('role_id', array(0 => 'Admin', 1 => 'Subscriber'), 0, ['class' => 'form-control']) !!}
        {{ $errors->first('title', '<p class="help-block">:message</p>') }}
    </div>

    <div class="form-group">
        {!! Form::label('is_active', 'Status') !!}
        {!! Form::select('is_active', array(0 => 'Not Active', 1 => 'Active'), 0, ['class' => 'form-control']) !!}
        {{ $errors->first('title', '<p class="help-block">:message</p>') }}
    </div>

    <div class="form-group">
        {!! Form::label('photo_id', 'Photo') !!}
        {!! Form::text('photo_id', null, ['class' => 'form-control']) !!}
        {{ $errors->first('title', '<p class="help-block">:message</p>') }}
    </div>

    <div class="form-group">
        {!! Form::submit('Create User', ['class' => 'btn btn-primary']) !!}
        
    </div>

{!! Form::close() !!}
</div>


@include('partials.form_error')







@stop