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
    <div class="form-group m-1">
      <input type="file" name="cover_image" class="btn btn-success" id="file_id">
    </div>
  </form>
   
@endsection