@extends('layouts.app')

@section('content')
<div class="container">
    <form action="{{ route('posts.store') }}" method="post">
        @csrf
        <div>
            <label for="username">Username</label>
            <input type="text" name="username" id="username">
        </div>
        
        <div class="label-text">
            <label for="post_text">Testo</label>
            <input class="input-username" type="text" name="post_text" id="post_text">
        </div>

        <div class="label-img">
            <label for="post_img">Link img</label>
            <input type="text" name="post_img" id="post_img">
        </div>
    
        <div>
            <input type="submit" value="Salva">
        </div>
    </form>

</div>



@endsection