@extends('posts.layouts.nav')
@section('title')
Edit Page
@endsection
<h1>Edit Post</h1>
<form action="{{route('posts.update',$post->id)}}" method="post">
    @method('PUT');
    @csrf
    <!-- <input type="hidden" name="id" value="{{$post->id}}"><br> -->
    <label for="">Title</label>
    <input type="text" name="title" value="{{$post->title}}" ><br><br>
    <label for="">Body</label>
    <input type="text" name="body" value="{{$post->body}}" ><br><br>
    <input type="submit" name="Update" value="Update" >
</form>
