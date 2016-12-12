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
        <h3 style="color: white">Pending Requests</h3>
        <div class="panel panel-danger">
            <div class="panel-heading">Waiting for approval</div>
            <div class="panel-body">
                <table class="table table-striped">
                    <thead>
                    <tr>
                        <td>#</td>
                        <td>Activity</td>
                        <td>Post</td>
                        <td>Joined Date</td>
                    </tr>

                    <tbody>
                        @foreach($pendingObjs as $obj)
                        <tr>
                            <td>{{ $obj->id }}</td>
                            <td>{{ $obj->name }}</td>
                            <td>{{ $obj->post }}</td>
                            <td>{{ $obj->joined_date }}</td>
                            <td><button class="btn btn-sm btn-danger" id="delBtn">Delete</button></td>
                        </tr>
                        @endforeach

                    </tbody>
                    </thead>
                </table>
            </div>
        </div>
    </div>

    <div class="container">
        <h3 style="color: white">Your Activities</h3>
        <div class="panel panel-primary">
            <div class="panel-heading">Approved activities</div>
            <div class="panel-body">
                <table class="table table-striped">
                <thead>
                <tr>
                    <td>#</td>
                    <td>Activity</td>
                    <td>Post</td>
                    <td>Joined Date</td>
                </tr>

                <tbody>
                @foreach($acceptedObjs as $obj)
                <tr>
                    <td>{{ $obj->id }}</td>
                    <td>{{ $obj->name }}</td>
                    <td>{{ $obj->post }}</td>
                    <td>{{ $obj->joined_date }}</td>

                </tr>
                @endforeach

                </tbody>
                </thead>
                </table>
            </div>
        </div>
    </div>

    <script
            src="https://code.jquery.com/jquery-3.1.1.min.js"
            integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8="
            crossorigin="anonymous"></script>

    <script>
        $(document).ready(function () {
            $('button').click(function(){
              /*  var row = $(this).closest('tr')[0];
                alert(row.text());*/
            });
        });

    </script>

@endsection
