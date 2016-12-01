@extends("template")

@section("title")
Login
@endsection

@section("styles")
<link rel="stylesheet" href="src/css/index.css">
@endsection

@section("links")
<li><a href="{{route('login')}}">Login</a></li>
<li><a href="#">Register</a></li>
@endsection


@section("body")
<div class="container" style="color: white">
    <h1>Test</h1>
    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum</p>
</div>

@endsection
