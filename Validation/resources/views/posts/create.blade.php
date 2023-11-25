@extends('posts.layouts.nav')

<h1>Create Posts</h1>

<form action="{{route('posts.store')}}" method="post">
    @csrf
    <input id="title" type="text" name="title"  value="{{old('title')}}" placeholder="Enter Title" class="@error('title') is-invalid @enderror"><br></br>
    @error('title')
    <div class="alert alert-danger">{{ "*".$message }}</div>
    @enderror
    <input type="text" id="body" name="body" value="{{old('body')}}" placeholder="Enter Body" class="@error('body') is-invalid @enderror"><br></br>
    @error('body')
    <div class="alert alert-danger">{{ "*".$message }}</div>
    @enderror
    <input type="submit" name="Submit" >
</form>
