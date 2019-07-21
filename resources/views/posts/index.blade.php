@extends('layouts.app')

@section('content')
  <div class="jumbotron text-center">
    <header>
      <h1><strong>Posts</strong></h1>
    </header>
    @if(count($posts) > 0)
      <div class="list-group">
        @foreach($posts as $post)
          <div class="row">
            <div class="col-md-4 col-sm-4">
              <img style="width: 100%" src="/storage/cover_image/{{$post->cover_image}}" alt="downloaded">          
            </div>
            <div class="col-md-8 col-sm-8">
              <div class="list-group-item text-center p-3 m-1">
                <h3><a href="/posts/{{$post->id}}">{{$post->title}}</a></h3>
                <p>{{$post->body}}</p>
                <small>Witten on {{$post->created_at}} by {{$post->user->name}}</small>   
              </div>
            </div>
          </div>      
        @endforeach
        <span>{{$posts->links()}}</span>
      </div>
    @else
      <p>No Posts</p>
    @endif
  </div>
@endsection