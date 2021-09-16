@extends('layouts.app')

@section('content')
<div class="container">
    <form action="{{ route('posts.store') }}" method="post">
        @csrf
        <div>
            <label for="username">Username</label>
            <input type="text" name="username" id="username">
        </div>
    
        <div>
            <label for="post_text">Testo</label>
            <input type="text" name="post_text" id="post_text">
        </div>
    
        <div>
            <input type="submit" value="Invia">
        </div>
    </form>

</div>



@endsection