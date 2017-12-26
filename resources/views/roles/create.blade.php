@extends('layouts.dashboard')

@section('title', 'Add Role')

@section('content')

<div class='col-lg-4 col-lg-offset-2'>

    <h1><i class='fa fa-key'></i> Add Role</h1>
    <hr>
    {{-- @include ('errors.list') --}}

    {{ Form::open(array('url' => 'roles')) }}

    <div class="form-group {{$errors->has('name') ? 'has-error' : ''}}">
        {{ Form::label('name', 'Name') }}
        {{ Form::text('name', null, array('class' => 'form-control')) }}

        @if($errors->has('name'))
            <span class="help-block">
                <strong>{{$errors->first()}}</strong>
            </span>
            @endif
    </div>

    <h5><b>Assign Permissions</b></h5>

    <div class='form-group'>
        @foreach ($permissions as $permission)
            {{ Form::checkbox('permissions[]',  $permission->id ) }}
            {{ Form::label($permission->name, ucfirst($permission->name)) }}<br>

        @endforeach
    </div>

    {{ Form::submit('Add', array('class' => 'btn btn-primary')) }}

    {{ Form::close() }}

</div>

@endsection