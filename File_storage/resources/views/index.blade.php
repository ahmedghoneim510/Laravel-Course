@extends('layout.nav')

<table class="table">
    <thead>
    <tr>
        <th scope="col">#</th>
        <th scope="col">Path</th>

    </tr>
    </thead>
    <tbody>
    @foreach($imges as $img)
    <tr>
        <th scope="row">{{$img->id}}</th>
        <td> <img style="width: 100px ;height: 100px" src="{{asset('img/'.$img->path)}}"></td>
    </tr>
    @endforeach
    </tbody>
</table>
