@extends('layouts.app')

@section('content')
  
  <div class="text-center">
    <header>
      <h1><strong>{{$post->title}}</strong></h1>
    </header>
    <img style="width: 20%" src="/storage/cover_image/{{$post->cover_image}}" alt="downloaded">
    <p>{{$post->body}}</p>
    <hr>
    <small>Witten on {{$post->created_at}} by {{$post->user->name}}</small>
    <br>
    <div class="card p-2 card-btn">
        <a href="/posts" class="btn btn-primary">Go Back</a>
    </div>
    @if(!Auth::guest())
      @if(Auth::user()->id == $post->user_id)
        <div class="card p-2 card-btn">
            <a href="/posts/{{$post->id}}/edit" class="btn btn-success">Edit Post</a>
        </div>
        <form method="POST" action={{ action('PostsController@destroy', $post->id) }}>
          @csrf
          @method('DELETE')
          <div class="card p-2">
              <input type="submit" value="Delete Post" class="btn btn-danger">
          </div>
        </form>        
      @endif 
    
  </div>
  @endif
@endsection