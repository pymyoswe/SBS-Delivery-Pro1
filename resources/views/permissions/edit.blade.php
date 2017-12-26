@extends('layouts.dashboard')

@section('title', 'Edit Permission')

@section('content')

<div class='col-lg-4 col-lg-offset-2'>

    {{-- @include ('errors.list') --}}

    <h1><i class='fa fa-key'></i> Edit {{$permission->name}}</h1>
    <br>
    {{ Form::model($permission, array('route' => array('permissions.update', $permission->id), 'method' => 'PUT')) }}

    <div class="form-group {{$errors->has('name') ? 'has-error' : ''}}">
        {{ Form::label('name', 'Permission Name') }}
        {{ Form::text('name', null, array('class' => 'form-control')) }}

        @if($errors->has('name'))
            <span class="help-block">
                <strong>{{$errors->first()}}</strong>
            </span>
        @endif

    </div>
    <br>
    {{ Form::submit('Edit', array('class' => 'btn btn-primary')) }}

    {{ Form::close() }}

</div>

@endsection