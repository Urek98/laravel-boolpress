@extends('layouts.app')

@section('content')

<div class="container">
    <table class="table">
    <thead>
        <tr>
        <th scope="col">#</th>
        <th scope="col">Nome Utente</th>
        <th scope="col">Testo</th>
        <th scope="col">Immagine</th>
        </tr>
    </thead>
    <tbody>
        @foreach($posts as $post)
            <tr>
                <th scope="row">{{$post->id}}</th>
                <td>{{$post->username}}</td>
                <td>{{$post->post_text}}</td>
                <td><img src="{{$post->post_img}}" alt="picture of {{$post->username}}" /></td>
                <td><a href="{{ route('posts.show', ['post'=>$post->id]) }}">Maggiori info</a></td>
            </tr>
        @endforeach
    </tbody>
    </table>
</div>


@endsection