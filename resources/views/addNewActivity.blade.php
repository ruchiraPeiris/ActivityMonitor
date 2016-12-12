@extends("template")

@section("title")
Add Activity
@endsection

@section("styles")
<link rel="stylesheet" href="src/css/addActivity.css">
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
        <li><a href="{{ route('editProfile') }}"><span class="glyphicon glyphicon glyphicon-user
" aria-hidden="true"></span> Profile</a></li>
        <li role="separator" class="divider"></li>
        <li><a href="{{ route('logout') }}"><span class="glyphicon glyphicon glyphicon-log-out
" aria-hidden="true"></span> Logout</a></li>
    </ul>
    @endsection

@section("body")

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

    @if(Session::has('success'))
    <div class="success-box">
        <p>Adding Successful!</p>
    </div>
    @endif



<div class="container" >
    <div class="panel panel-default myPanel panel-transparent" >
        <div class="panel-heading" style="color: white">Add New Activity</div>
        <div class="panel-body">
            <form class="form-horizontal" action="{{ route('postAddActivity') }}" method="post">
                <div class="form-group center-form ">
                    <div class="row">
                        <div class="col-sm-2">
                            <label for="name" class="control-label">Activity</label>
                        </div>

                        <div class="col-sm-6 myColumn">
                            <input type="text" class="form-control" name="activity" placeholder="Activity Name">
                        </div>
                    </div>


                </div>
                <div class="form-group center-form" >
                    <div class="row">
                        <div class="col-sm-2">
                            <label for="post" class="control-label">Post</label>
                        </div>

                        <div class="col-sm-6 myColumn">
                            <input type="text" class="form-control" name="post" placeholder="Post">
                        </div>
                    </div>
                </div>

                <div class="form-group center-form" >
                    <div class="row">
                        <div class="col-sm-2">
                            <label for="category" class="control-label">Category</label>
                        </div>

                        <div class="col-sm-6 myColumn">
                            <select id="catSelect" class="form-control" name="catSelect">
                                @foreach($categories as $category)
                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                </div>

                <div class="form-group center-form" >
                    <div class="row">
                        <div class="col-sm-2">
                            <label for="module" class="control-label">Module</label>
                        </div>

                        <div class="col-sm-6 myColumn">
                            <select id="module" class="form-control" name="module">
                                @foreach($modules as $module)
                                    <option value="{{ $module->id }}">{{ $module->name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                </div>


                <div class="form-group center-form" >
                    <div class="row">
                        <div class="col-sm-2">
                            <label for="description" class="control-label">Description</label>
                        </div>

                        <div class="col-sm-6 myColumn">
                            <textarea class="form-control" name="description" rows="6"></textarea>
                        </div>
                    </div>
                </div>

                <div class="form-group center-form" >
                    <div class="row">
                        <div class="col-sm-2">
                            <label for="joinedDate" class="control-label">Joined Date</label>
                        </div>

                        <div class="col-sm-4 myColumn">
                            <input class="form-control" type="date" name="joined_date" data-date-inline-picker="true" />
                        </div>
                    </div>
                </div>

                <div class="form-group center-form">
                    <div class="col-sm-offset-2 col-sm-10">
                        <button id="button" type="submit" class="btn btn-default">Submit</button>
                        <input type="hidden" value="{{ Session::token() }}" name="_token">
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
    <script
            src="https://code.jquery.com/jquery-3.1.1.min.js"
            integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8="
            crossorigin="anonymous"></script>

    <script>

        $(document).ready(function(){
            $('#catSelect').on('change', function(e){
                var cat_id = e.target.value;

                $.get('/ActivityMonitor/public/dropdown?cat_id='+cat_id, function (data) {
                    $('#module').empty();
                    $.each(data, function (index, moduleObj) {
                       $('#module').append('<option value="'+moduleObj.id+'">'+moduleObj.name+'</option>')
                    });
                });
            });
        });
    </script>


@endsection

