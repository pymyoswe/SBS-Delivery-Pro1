@extends('layouts.dashboard')

@section('title', 'Create Permission')

@section('content')

<div class='col-lg-4 col-lg-offset-2'>

    {{-- @include ('errors.list') --}}

    <h1><i class='fa fa-key'></i> Add Permission</h1>
    <br>

    {{ Form::open(array('url' => 'permissions')) }}

    <div class="form-group {{$errors->has('name') ? 'has-error' : ''}}">
        {{ Form::label('name', 'Name') }}
        {{ Form::text('name', '', array('class' => 'form-control')) }}

        @if($errors->has('name'))
            <span class="help-block">
                <strong>{{$errors->first()}}</strong>
            </span>
        @endif

    </div>
    <br>

    @if(!$roles->isEmpty())

        <h4>Assign Permission to Roles</h4>

        @foreach ($roles as $role) 
            {{ Form::checkbox('roles[]',  $role->id ) }}
            {{ Form::label($role->name, ucfirst($role->name)) }}<br>

        @endforeach

    @endif
    
    <br>
    {{ Form::submit('Add', array('class' => 'btn btn-primary')) }}

    {{ Form::close() }}

</div>

@endsection