@extends("template")

@section("title")
Login
@endsection

@section("styles")
<link rel="stylesheet" href="src/css/login.css">
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

@if(Session::has('fail'))
    <div class="error-box"><p>Login Failed!</p></div>

@endif

<div class="container" >
    <div class="panel panel-default myPanel panel-transparent" >
        <div class="panel-heading" style="color: white">Sign in</div>
        <div class="panel-body">
            <form class="form-horizontal" action="login" method="post">
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
                    <div class="col-sm-offset-2 col-sm-10">
                        <div class="checkbox">
                            <label>
                                <input type="checkbox"> Remember me
                            </label>
                        </div>
                    </div>
                </div>
                <div class="form-group center-form">
                    <div class="col-sm-offset-2 col-sm-10">
                        <button type="submit" class="btn btn-default">Sign in</button>
                        <input type="hidden" value="{{ Session::token() }}" name="_token">
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>


@endsection
