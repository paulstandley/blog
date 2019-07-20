@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><header class="text-center"><h1>{{$posts[0]->user->name}} Dashboard</h1></header></div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <div class="panel-body">
                        <a class="btn btn-primary" href="{{ url('/create') }}">Create a new Post</a>
                        <hr>
                        <h2>Your Blog Posts</h2>
                        @if(count($posts) > 0)
                            <table class="table table-striped">
                                <tr>
                                    <th><h3>Post Title</h3></th>
                                    <th><h3>Edit Post</h3></th>
                                    <th><h3>Delete Post</h3></th>
                                </tr>
                                @foreach($posts as $post)
                                    <tr>
                                        <td><h3>{{$post->title}}<h3></td>
                                        <td><a href="/posts/{{$post->id}}/edit" class="btn btn-success">Edit Post</a></td>
                                        <td>
                                            <form method="POST" action={{ action('PostsController@destroy', $post->id) }}>
                                                @csrf
                                                @method('DELETE')
                                                <div class="card">
                                                    <input type="submit" value="Delete Post" class="btn btn-danger card-item m-1">
                                                </div>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </table>
                            @else
                            <p>You have no posts</p>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
