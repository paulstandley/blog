@extends('layouts.app')

@section('content')
    <header class="home-views-header jumbotron text-center">
      <h1><strong>{{$title}}<strong></h1>
    </header>
    <div class="home-views card  text-center">
      <div class="card-header"><h2>You will need to sign in to make a post</h2></div>
      <div class="card-body"><h3>Select a title add your blog to the body and optionaly add image</h3></div>
      <div class="card-footer"><h3>Please remember this is a family friendly blog</h3></div> 
    </div>
@endsection