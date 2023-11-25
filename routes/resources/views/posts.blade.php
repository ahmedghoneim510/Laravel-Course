@extends('layouts.nav')
@section('title')
Posts
@endsection


@section('content')
<h1>Posts</h1>
@endsection


@section('sidebar')
    @parent

    <p>This is appended to the master sidebar.</p>
@endsection
