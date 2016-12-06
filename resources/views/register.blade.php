@extends("template")

@section("title")
Register
@endsection

@section("styles")
<link href="src/css/register.css" rel="stylesheet" type="text/css">
@endsection

@section("links")
<li><a href="{{route('login')}}"><span class="glyphicon glyphicon glyphicon-log-in" aria-hidden="true"></span> Login</a></li>
<li><a href="{{ route('register') }}"><span class="glyphicon glyphicon glyphicon-user" aria-hidden="true"></span> Register</a></li>
@endsection


@section("body")
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
        <div class="panel-heading" style="color: white">Fill data</div>
        <div class="panel-body">
            <form class="form-horizontal" action="{{ route('add_student') }}" method="post">
                <div class="form-group center-form ">
                    <div class="row">
                        <div class="col-sm-2">
                            <label for="index" class="control-label">Index</label>
                        </div>

                        <div class="col-sm-6 myColumn">
                            <input type="text" class="form-control" name="index" placeholder="Index Number">
                        </div>
                    </div>
                </div>


                <div class="form-group center-form ">
                    <div class="row">
                        <div class="col-sm-2">
                            <label for="name" class="control-label">First Name</label>
                        </div>

                        <div class="col-sm-6 myColumn">
                            <input type="text" class="form-control" name="firstname" placeholder="First Name">
                        </div>
                    </div>
                </div>

                <div class="form-group center-form ">
                    <div class="row">
                        <div class="col-sm-2">
                            <label for="name" class="control-label">Last Name</label>
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

                <div class="form-group center-form">
                    <div class="col-sm-offset-2 col-sm-10">
                        <button type="submit" class="btn btn-default">Sign up</button>
                        <input type="hidden" value="{{ Session::token() }}" name="_token">
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection