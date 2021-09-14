@extends('layouts.app')

@section('content')

<div class="container cars-container">
    <table class="table">
    <thead>
        <tr>
        <th scope="col">#</th>
        <th scope="col">username</th>
        <th scope="col">post_text</th>
        <th scope="col">post_img</th>
        </tr>
    </thead>
    <tbody>
        @foreach($posts as $post)
            <tr>
                <th scope="row">{{$post->id}}</th>
                <td>{{$post->username}}</td>
                <td>{{$post->post_text}}</td>
                <td><img src="{{$post->post_img}}" alt="picture of {{$post->username}}" /></td>
            </tr>
        @endforeach
    </tbody>
    </table>
</div>

@foreach($posts as $post)
    <div class="card">
        <h1>{{$post->username}}</h1>

    </div>
    @endforeach

@endsection