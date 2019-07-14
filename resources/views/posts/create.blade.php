@extends('layouts.app')

@section('content')
  <div class="jumbotron text-center">
    <header>
      <h1><strong>Create Posts</strong></h1>
    </header>
  </div> 
  <form action="{{ action('PostsController@store') }}" method="POST">
    <input type="text" name="title" placeholder="Title">
    <textarea type="textarea" name="body"placeholder="Body"></textarea>
    <input type="submit" name="create-post" id="createPost">
  </form>
   
@endsection