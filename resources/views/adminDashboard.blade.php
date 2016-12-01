@extends("template")

@section("title")
Admin Dashboard
@endsection

@section("styles")
<link rel="stylesheet" href="src/css/admin.css">
@endsection

@section("links")
<li><a href="{{route('index')}}"><span class="glyphicon glyphicon glyphicon-home
" aria-hidden="true"></span> Home</a></li>

@endsection

@section('dropdown')
<li class="dropdown">
    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Username<span class="caret"></span></a>
    <ul class="dropdown-menu">
        <li><a href="#"><span class="glyphicon glyphicon glyphicon-plus-sign
" aria-hidden="true"></span> Add new activity</a></li>
        <li><a href="#"><span class="glyphicon glyphicon glyphicon-user
" aria-hidden="true"></span> Profile</a></li>
        <li role="separator" class="divider"></li>
        <li><a href="#"><span class="glyphicon glyphicon glyphicon-log-out
" aria-hidden="true"></span> Logout</a></li>
    </ul>
    @endsection

    @section("body")
    <div class="container">
        <div class="page-header myHeader">
            <h1 id="whiteText" >Welcome <small>Administrator</small></h1>
        </div>
    </div>

    <div class="container">
        <ul class="nav nav-tabs">
            <li class="active"><a data-toggle="tab" href="#home">Requests</a></li>
            <li><a data-toggle="tab" href="#menu1">Instructors</a></li>
            <li><a data-toggle="tab" href="#menu2">Students</a></li>
            <li><a data-toggle="tab" href="#menu3">Modules</a></li>
        </ul>

        <div class="tab-content">
            <div id="home" class="tab-pane fade in active">
                <br>
                <div class="panel panel-danger">
                    <div class="panel-heading">Student Requests</div>
                    <div class="panel-body">
                        Student requests will appear here
                    </div>
                </div>

            </div>
            <div id="menu1" class="tab-pane fade">
                <h3 id="whiteText">Add Instructor</h3>
                <div class="container">
                    <div class="panel panel-default myPanel" >
                        <div class="panel-heading">Fill data</div>
                        <div class="panel-body">
                            <form class="form-horizontal">
                                <div class="form-group center-form ">
                                    <div class="row">
                                        <div class="col-sm-2">
                                            <label for="name" class="control-label">First Name</label>
                                        </div>

                                        <div class="col-sm-6 myColumn">
                                            <input type="text" class="form-control" name="name" placeholder="First Name">
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group center-form ">
                                    <div class="row">
                                        <div class="col-sm-2">
                                            <label for="name" class="control-label">Last Name</label>
                                        </div>

                                        <div class="col-sm-6 myColumn">
                                            <input type="text" class="form-control" name="name" placeholder="Last Name">
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
                                            <label for="category" class="control-label">Category</label>
                                        </div>

                                        <div class="col-sm-6 myColumn">
                                            <div class="dropdown">
                                                <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                                    Choose category
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
                                            <label for="module" class="control-label">Module</label>
                                        </div>

                                        <div class="col-sm-6 myColumn">
                                            <div class="dropdown">
                                                <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                                    Choose Module
                                                    <span class="caret"></span>
                                                </button>
                                                <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                                                    <li><a href="#">modeule1</a></li>
                                                    <li><a href="#">module2</a></li>
                                                    <li><a href="#">module3</a></li>
                                                    <li><a href="#">module4</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group center-form ">
                                    <div class="row">
                                        <div class="col-sm-2">
                                            <label for="mobile" class="control-label">Mobile</label>
                                        </div>

                                        <div class="col-sm-6 myColumn">
                                            <input type="text" class="form-control" name="mobile" placeholder="Mobile">
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
            </div>

            <div id="menu2" class="tab-pane fade">
                <h3>Menu 2</h3>
                <p>Some content in menu 2.</p>
            </div>
            <div id="menu3" class="tab-pane fade">
                <h3>Menu 3</h3>
                <p>Some content in menu 2.</p>
            </div>
        </div>
    </div>




    @endsection
