@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col">
            <h1>#{{$post->id}}</h1>
            <div>Utente: {{$post->username}}</div>
            <p class="post_text">{{$post->post_text}}</p>
            <div>
                <a href="{{ route('posts.index') }}">Torna Indietro</a>
            </div>
        </div>
        <div class="col">
            <img src="{{$post->post_img}}" alt="picture of {{$post->username}}" />
            <div>Creato il: {{$post->created_at}}</div>
        </div>
    </div>
</div>


@endsection