@extends("template")

@section("title")
Edit Profile
@endsection

@section("styles")
<link rel="stylesheet" href="src/css/editProfile.css">
@endsection

@section("links")
<li><a href="{{route('dashboard')}}"><span class="glyphicon glyphicon glyphicon-home
" aria-hidden="true"></span> Home</a></li>
@endsection

@section('dropdown')
<li class="dropdown">
    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">{{ Auth::user()->first_name }}<span class="caret"></span></a>
    <ul class="dropdown-menu">
        <li><a href="{{ route('addActivity') }}"><span class="glyphicon glyphicon glyphicon-plus-sign
" aria-hidden="true"></span> Add new activity</a></li>
        <li><a href="#"><span class="glyphicon glyphicon glyphicon-user
" aria-hidden="true"></span> Profile</a></li>
        <li role="separator" class="divider"></li>
        <li><a href="{{ route('logout') }}"><span class="glyphicon glyphicon glyphicon-log-out
" aria-hidden="true"></span> Logout</a></li>
    </ul>
    @endsection

    @section("body")

    @if(Session::has('success'))
    <div class="success-box">
        <p>Update Successful!</p>
    </div>
    @endif

    @if(Session::has('fail'))
    <div class="error-box">
        <p>Password error!</p>
    </div>
    @endif

    @if(count($errors)>0)
    <div id="error-box">
        <ul class="error-box">
            @foreach($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif


    <div class="container" >
        <div class="panel panel-default myPanel panel-transparent " >
            <div class="panel-heading" style="color: white">Change Details</div>
            <div class="panel-body">
                <h3 style="text-align: center; color: white">Personal Details</h3><br>
                <form class="form-horizontal" action="{{ route('changeData') }}" method="post">
                    <div class="form-group center-form ">
                        <div class="row">
                            <div class="col-sm-2">
                                <label for="firstname" class="control-label">First Name</label>
                            </div>

                            <div class="col-sm-6 myColumn">
                                <input type="text" class="form-control" name="firstname" placeholder="First Name">
                            </div>
                        </div>
                    </div>


                    <div class="form-group center-form ">
                        <div class="row">
                            <div class="col-sm-2">
                                <label for="lastname" class="control-label">Last Name</label>
                            </div>

                            <div class="col-sm-6 myColumn">
                                <input type="text" class="form-control" name="lastname" placeholder="Last Name">
                            </div>
                        </div>
                    </div>

                    <div class="form-group center-form ">
                        <div class="row">
                            <div class="col-sm-2">
                                <label for="email" class="control-label">Email</label>
                            </div>

                            <div class="col-sm-6 myColumn">
                                <input type="email" class="form-control" name="email" placeholder="Email">
                            </div>
                        </div>
                    </div>

                    <div class="form-group center-form">
                        <div class="col-sm-offset-2 col-sm-10">
                            <button type="submit" class="btn btn-default">Update</button>
                            <input type="hidden" value="{{ Session::token() }}" name="_token">
                        </div>
                    </div>
                </form>

                    <hr>

                    <h3 style="text-align: center; color: white">Change Password</h3><br>
                <form class="form-horizontal" action="{{ route('editPassword') }}" method="post">
                    <div class="form-group center-form" >
                        <div class="row">
                            <div class="col-sm-2">
                                <label for="password" class="control-label">Password</label>
                            </div>

                            <div class="col-sm-6 myColumn">
                                <input type="password" class="form-control" name="password" placeholder="Password">
                            </div>
                        </div>
                    </div>

                    <div class="form-group center-form" >
                        <div class="row">
                            <div class="col-sm-2">
                                <label for="repassword" class="control-label">Confirm</label>
                            </div>

                            <div class="col-sm-6 myColumn">
                                <input type="password" class="form-control" name="repassword" placeholder="Re-enter Password">
                            </div>
                        </div>
                    </div>

                    <div class="form-group center-form">
                        <div class="col-sm-offset-2 col-sm-10">
                            <button type="submit" class="btn btn-default">Change</button>
                            <input type="hidden" value="{{ Session::token() }}" name="_token">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    @endsection
