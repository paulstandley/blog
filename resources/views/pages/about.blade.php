@extends('layouts.app')

@section('content')
    <header class="jumbotron text-center">
      <h1><strong>{{$title}}</strong></h1>
    </header>
    <div class="card  text-center">
      <div class="card-header"><h2>You will need to signin to make a post</h2></div>
      <div class="card-body"><h3>Select a title add your blog to the body and optional add image</h3></div> 
    </div>
@endsection