@extends("template")

@section("title")
Home
@endsection

@section("styles")
<link rel="stylesheet" href="src/css/index.css">
@endsection

@section("links")
@if(!Auth::check())
<li><a href="{{route('login')}}"><span class="glyphicon glyphicon glyphicon-log-in" aria-hidden="true"></span> Login</a></li>
<li><a href="{{ route('register') }}"><span class="glyphicon glyphicon glyphicon-user" aria-hidden="true"></span> Register</a></li>
@else
<li><a href="{{route('dashboard')}}"><span class="glyphicon glyphicon glyphicon-home
" aria-hidden="true"></span> Home</a></li>
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
@endif
@endsection


@section("body")
<div class="container" style="color: white">
    <h1>Test</h1>
    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum</p>
</div>

@endsection
