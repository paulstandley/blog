@extends('layouts.app')

@section('content')
  <div class="jumbotron text-center">
    <header>
      <h1><strong>Create Posts</strong></h1>
    </header>
  </div> 
  <form method="POST" action={{ action('PostsController@store') }}>
    @csrf
    <div id="Index"></div>
  </form>
   
@endsection