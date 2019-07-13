@extends('layouts.app')

@section('content')
  <header class="jumbotron text-center">
    <h1><strong>Post</strong></h1>
  </header>
  @if(count($posts) > 0)
    <div class="list-group text-center m-3 p-2">
      @foreach($posts as $post)
        <div class="list-group-item m-3 p-2">
        <h3><a href="/posts/{{$post->id}}">{{$post->title}}</a></h3>
          <p>{{$post->body}}</p>
          <small>Witten on {{$post->created_at}}</small>   
        </div> 
      @endforeach
    </div>
  @else
    <p>No Posts</p>
  @endif
@endsection