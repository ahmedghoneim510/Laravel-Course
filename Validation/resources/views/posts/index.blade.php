@extends('posts.layouts.nav')
@section('title')
HomePage
@endsection
@section('content')
    <h1>Show ALl Posts</h1>
    <h3 class="btn btn-success"><a href="{{route('posts.create')}}" style="text-decoration: none; color:white">Add Posts</a></h3>
    <table class="table">
    <!-- <th>#</th> -->
    <th>ID</th>
    <th>Title</th>
    <th>Body</th>
    <th>Pro</th>

    @foreach($posts as $post)
    <tr>
        <!-- <td></td> -->
        <td>{{ $post->id }}</td>
        <td>{{ $post->title }}</td>
        <td>{{ $post->body }}</td>
        <td>
            <a href="{{route('posts.edit',$post->id)}}" class="btn btn-primary">Edit</a>
            <form action="{{route('posts.destroy',$post->id)}}" method="post" style="display: inline-block;">
                @method('DELETE')
                @csrf
                <button  class="btn btn-danger" type="submit">Delete</button>
            </form>
        </td>
    </tr>

    @endforeach
    </table>
@endsection
