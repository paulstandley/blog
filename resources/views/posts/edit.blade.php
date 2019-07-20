@extends('layouts.app')

@section('content')
  <div class="p-2 text-center">
    <header>
      <h1><strong>Edit Posts</strong></h1>
    </header>
  </div> 
  <form method="POST" action={{ action('PostsController@update', $post->id) }}>
    @csrf
    @method('PUT')
    <div id="Index"></div>
  </form>
   
@endsection