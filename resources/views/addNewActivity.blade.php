@extends("template")

@section("title")
Add Activity
@endsection

@section("styles")
<link rel="stylesheet" href="src/css/addActivity.css">
@endsection

@section("links")
<li><a href="{{route('index')}}"><span class="glyphicon glyphicon glyphicon-home
" aria-hidden="true"></span> Home</a></li>
@endsection

@section("body")
<div class="container" >
    <div class="panel panel-default myPanel" >
        <div class="panel-heading">Add New Activity</div>
        <div class="panel-body">
            <form class="form-horizontal">
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
                            <div class="dropdown">
                                <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                    Chose category
                                    <span class="caret"></span>
                                </button>
                                <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                                    <li><a href="#">category1</a></li>
                                    <li><a href="#">category2</a></li>
                                    <li><a href="#">category3</a></li>
                                    <li><a href="#">category4</a></li>
                                </ul>
                            </div>
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
                            <input class="form-control" type="date" data-date-inline-picker="true" />
                        </div>
                    </div>
                </div>

                <div class="form-group center-form">
                    <div class="col-sm-offset-2 col-sm-10">
                        <button type="submit" class="btn btn-default">Submit</button>
                        <input type="hidden" value="{{ Session::token() }}" name="_token">
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>


@endsection
