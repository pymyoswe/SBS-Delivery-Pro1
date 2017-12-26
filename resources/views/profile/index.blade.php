@extends('layouts.dashboard')
@section('title')
    Profile
@endsection
@section('content')
    <div class="col-md-9">
                <span class="fa fa-5x fa-user-circle"></span>
                <table class="table table-responsive table-bordered table-hover">
                    <tbody>
                    <tr>
                        <td>User Name:</td>
                        <td>{{$user->name}}</td>
                    </tr>
                    <tr>
                        <td>User Role:</td>
                        <td>
                            {{$user->roles()->pluck('name')->implode('')}}
                        </td>
                    </tr>
                    <tr>
                        <td>Join Date:</td>
                        <td>{{ $user->created_at->format('M d, Y h:ia') }}</td>
                    </tr>
                    <tr>
                    <tr>
                        <td>Email</td>
                        <td>{{$user->email}}</td>
                    </tr>
                    <tr>
                        <td>Contact Number</td>
                        <td>@if($user->contact)
                                {{$user->contact}}
                            @else
                                <?php echo "<span class='text-danger'>Not Defined</span>"?>
                            @endif
                        </td>
                    </tr>
                    <tr>
                        <td>Location</td>
                        <td>@if($user->location)
                                {{$user->location}}
                            @else
                                <?php echo "<span class='text-danger'>Not Defined</span>"?>
                            @endif
                        </td>
                    </tr>
                    <tr>
                        <td>Region</td>
                        <td>@if($user->region)
                                {{$user->region}}
                            @else
                                <?php echo "<span class='text-danger'>Not Defined</span>"?>
                            @endif
                        </td>
                    </tr>

                    </tbody>
                </table>
        @if(Session::has('msg'))
            <div class="alert alert-success">
                <strong>{{Session::get('msg')}}</strong>
            </div>
        @endif

        @if($errors->has('region'))
            <div class="alert alert-danger">
                <strong>{{$errors->first('region')}}</strong>
            </div>
        @endif

        @if($errors->has('location'))
            <div class="alert alert-danger">
                <strong>{{$errors->first('location')}}</strong>
            </div>
        @endif

        @if($errors->has('contact'))
            <div class="alert alert-danger">
                <strong>{{$errors->first('contact')}}</strong>
            </div>
        @endif
        <div class="panel panel-danger">
            <div class="panel-heading">
                <a data-toggle="collapse" data-parent="#accordion" href="#collapseProfile">
                    <h4 class="panel-title">
                        <span class="fa fa-edit"></span> Update Profile
                    </h4>
                </a>
            </div>
            <div id="collapseProfile" class="panel-collapse collapse">
                <div class="panel-body">
                    <form role="form" method="post" action="{{route('profile.update')}}">
                        {{csrf_field()}}
                        <input type="hidden" value="{{$user->id}}" name="id">
                        <div class="col-md-4">
                            <div class="form-group {{$errors->has('region') ? 'has-error' : ''}}">
                                <label for="region">Region</label>
                                <input type="text" class="form-control" id="region" name="region" value="@if($user->region){{$user->region}}@endif {{old('region')}}">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="location">Location</label>
                                <input type="text" class="form-control"  id="location" name="location" value="@if($user->location){{$user->location}}@endif {{old('location')}}">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="contact">Contact Number</label>
                                <input type="text" class="form-control" name="contact" id="contact" value="@if($user->contact){{$user->contact}}@endif {{old('contact')}}">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary">Update</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection