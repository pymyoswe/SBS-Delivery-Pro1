@extends('layouts.app')
@section('title')
    Welcome
    @endsection

@if(Session::has('flash_message'))
    <div class="container">
        <div class="alert alert-success"><em> {!! session('flash_message') !!}</em>
        </div>
    </div>
@endif

<div class="row">
    <div class="col-md-8 col-md-offset-2">
        @include ('errors.list') {{-- Including error file --}}
    </div>
</div>

@section('content')

    @endsection