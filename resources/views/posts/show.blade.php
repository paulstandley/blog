@extends('layouts.app')

@section('content')
  @if(count($post) > 0)
  <div class="text-center">
    <header>
      <h1><strong>{{$post->title}}</strong></h1>
    </header>
    <img style="width: 50%" src="/storage/cover_image/{{$post->cover_image}}" alt="downloaded">
    <p>{{$post->body}}</p>
    <hr>
    <small>Witten on {{$post->created_at}} by {{$post->user->name}}</small>
    <br>
    <div class="card p-2">
        <a href="/posts" class="btn btn-primary card-item m-1">Go Back</a>
    </div>
    @if(!Auth::guest())
      @if(Auth::user()->id == $post->user_id)
        <div class="card p-2">
            <a href="/posts/{{$post->id}}/edit" class="btn btn-success card-item m-1">Edit Post</a>
        </div>
        <form method="POST" action={{ action('PostsController@destroy', $post->id) }}>
          @csrf
          @method('DELETE')
          <div class="card">
              <input type="submit" value="Delete Post" class="btn btn-danger card-item m-1">
          </div>
        </form>        
      @endif 
    @endif
  </div>
  @endif
@endsection