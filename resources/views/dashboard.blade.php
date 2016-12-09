@extends("template")

@section("title")
Dashboard
@endsection

@section("styles")
<link rel="stylesheet" type="text/css" href="src/css/dashboard.css">
@endsection

@section("links")

<li><button class="btn btn-success navbar-btn"><span class="glyphicon glyphicon glyphicon-plus-sign
" aria-hidden="true"></span> <a href="{{ route('addActivity') }}" id="btn-link"> Add new Activity</a></button></li>
<li><a href="{{route('dashboard')}}"><span class="glyphicon glyphicon glyphicon-home
" aria-hidden="true"></span> Home</a></li>

@endsection

@section('dropdown')
<li class="dropdown">
<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">{{ Auth::user()->first_name }}<span class="caret"></span></a>
<ul class="dropdown-menu">
    <li><a href="{{ route('addActivity') }}"><span class="glyphicon glyphicon glyphicon-plus-sign
" aria-hidden="true"></span> Add new activity</a></li>
    <li><a href="{{ route('editProfile') }}"><span class="glyphicon glyphicon glyphicon-user
" aria-hidden="true"></span> Profile</a></li>
    <li role="separator" class="divider"></li>
    <li><a href="{{ route('logout') }}"><span class="glyphicon glyphicon glyphicon-log-out
" aria-hidden="true"></span> Logout</a></li>
</ul>
@endsection

@section("body")
    <div class="container">
        <div class="page-header myHeader">
            <h1 id="welcomeText">Welcome <small>{{{ Auth::user()->first_name }}}</small></h1>
        </div>
    </div>
    <div class="container">
        <div class="panel panel-danger">
            <div class="panel-heading">Pending activities</div>
            <div class="panel-body">
                <table class="table table-striped">
                    <thead>
                    <tr>
                        <td>Activity</td>
                        <td>Post</td>
                        <td>Joined Date</td>
                    </tr>

                    <tbody>
                        @foreach($pendingObjs as $obj)
                        <tr>
                            <td>{{ $obj->name }}</td>
                            <td>{{ $obj->post }}</td>
                            <td>{{ $obj->joined_date }}</td>
                            <td><button class="btn btn-sm btn-danger">Cancel</button></td>
                        </tr>
                        @endforeach

                    </tbody>
                    </thead>
                </table>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="panel panel-primary">
            <div class="panel-heading">Your activities</div>
            <div class="panel-body">
                Accepted activities will appear here
            </div>
        </div>
    </div>
@endsection
