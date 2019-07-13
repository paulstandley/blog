@extends('layouts.app')

@section('content')
  <div class="jumbotron text-center">
    <header>
      <h1><strong>{{$post->title}}</strong></h1>
    </header>
    <p>{{$post->body}}</p>
    <hr>
    <small>Witten on {{$post->created_at}}</small>
    <br>
    <a href="/posts" class="btn btn-primary">Go Back</a>
  </div>
@endsection