@extends('layouts.app')

@section('content')
  <div class="jumbotron text-center">
    <header>
      <h1><strong>Posts</strong></h1>
    </header>
    @if(count($posts) > 0)
      <div class="list-group">
        @foreach($posts as $post)     
          <div class="list-group-item text-center p-3 m-1">
            <h3><a href="/posts/{{$post->id}}">{{$post->title}}</a></h3>
            <p>{{$post->body}}</p>
            <small>Witten on {{$post->created_at}} by {{$post->user->name}}</small>   
          </div> 
        @endforeach
        <span>{{$posts->links()}}</span>
      </div>
    @else
      <p>No Posts</p>
    @endif
  </div>
@endsection