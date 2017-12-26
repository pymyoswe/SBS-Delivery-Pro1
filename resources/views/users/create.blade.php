@extends('layouts.dashboard')

@section('title', 'Add User')

@section('content')

<div class='col-lg-4 col-lg-offset-2'>

    <h1><i class='fa fa-user-plus'></i> Add User</h1>
    <hr>

    {{-- @include ('errors.list') --}}

    {{ Form::open(array('url' => 'users')) }}

    <div class="form-group {{ $errors->has('name') ? ' has-error' : '' }}">
        {{ Form::label('name', 'Name') }}
        {{ Form::text('name', '', array('class' => 'form-control')) }}
        @if ($errors->has('name'))
            <span class="help-block">
                <strong>{{ $errors->first('name') }}</strong>
            </span>
        @endif
    </div>

    <div class="form-group {{ $errors->has('email') ? ' has-error' : '' }}">
        {{ Form::label('email', 'Email') }}
        {{ Form::email('email', '', array('class' => 'form-control')) }}
        @if ($errors->has('email'))
            <span class="help-block">
                <strong>{{ $errors->first('email') }}</strong>
            </span>
        @endif
    </div>

    <div class='form-group'>
        @foreach ($roles as $role)
            {{ Form::checkbox('roles[]',  $role->id ) }}
            {{ Form::label($role->name, ucfirst($role->name)) }}<br>
        @endforeach
    </div>

    <div class="form-group {{ $errors->has('password') ? ' has-error' : '' }}">
        {{ Form::label('password', 'Password') }}<br>
        {{ Form::password('password', array('class' => 'form-control')) }}

        @if ($errors->has('password'))
            <span class="help-block">
                <strong>{{ $errors->first('password') }}</strong>
            </span>
        @endif

    </div>

    <div class="form-group {{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
        {{ Form::label('password_confirmation', 'Confirm Password') }}<br>
        {{ Form::password('password_confirmation', array('class' => 'form-control')) }}

        @if ($errors->has('password_confirmation'))
            <span class="help-block">
                <strong>{{ $errors->first('password_confirmation') }}</strong>
            </span>
        @endif

    </div>

    {{ Form::submit('Add', array('class' => 'btn btn-primary')) }}

    {{ Form::close() }}

</div>

@endsection