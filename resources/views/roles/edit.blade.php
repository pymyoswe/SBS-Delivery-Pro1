@extends('layouts.dashboard')

@section('title', 'Edit Role')

@section('content')

<div class='col-lg-4 col-lg-offset-2'>
    <h1><i class='fa fa-key'></i> Edit Role: {{$role->name}}</h1>
    <hr>
    {{-- @include ('errors.list')
 --}}
    {{ Form::model($role, array('route' => array('roles.update', $role->id), 'method' => 'PUT')) }}

    <div class="form-group {{$errors->has('name') ? 'has-error' : ''}}">
        {{ Form::label('name', 'Role Name') }}
        {{ Form::text('name', null, array('class' => 'form-control')) }}

        @if($errors->has('name'))
            <span class="help-block">
                <strong>{{$errors->first()}}</strong>
            </span>
        @endif
    </div>

    <h5><b>Assign Permissions</b></h5>
    @foreach ($permissions as $permission)

        {{Form::checkbox('permissions[]',  $permission->id, $role->permissions ) }}
        {{Form::label($permission->name, ucfirst($permission->name)) }}<br>

    @endforeach
    <br>
    {{ Form::submit('Edit', array('class' => 'btn btn-primary')) }}

    {{ Form::close() }}    
</div>

@endsection