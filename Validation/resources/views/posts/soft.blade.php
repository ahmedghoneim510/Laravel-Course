@extends('posts.layouts.nav')
@section('title')
SoftPage
@endsection
@section('content')
    <h1>Soft Deleted</h1>
    <h3 class="btn btn-success"><a href="{{route('posts.index')}}" style="text-decoration: none; color:white">Return Home</a></h3>
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
            <a href="{{route('post.restore',$post->id)}}" class="btn btn-primary">Restore</a>
            <form action="{{route('post.forcedelete',$post->id)}}" method="get" style="display: inline-block;">
                @method('DELETE')
                @csrf
                <!-- <input type="hidden" name="id" value="{{$post->id}}"> -->
                <button  class="btn btn-danger" type="submit">SoftDelete</button>
            </form>
        </td>
    </tr>

    @endforeach
    </table>
@endsection
