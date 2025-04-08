@extends('layout')
@section('content')

<style>
    body {
        font-family: sans-serif;
    }

    .container {
        width: 80%;
        margin: 20px auto;
    }

    a {
        color: blue;
        margin-right: 10px;
    }

    button {
        background: red;
        color: white;
        border: none;
        padding: 5px 10px;
    }

    hr {
        margin: 10px 0;
    }

    form {
        display: inline;
    }
</style>

<div class="container">
    <div>
        <h1>{{ $post['title'] }}</h1>
    </div>
    <div>
        <p><strong>Author:</strong> {{ $post['author'] }} | 
           <strong>Published:</strong> {{ $post['published_at'] }}</p>
        <hr>
        <p>{{ $post['content'] }}</p>
    </div>
    <div>
        <a href="/posts/{{ $post['id'] }}/edit">Edit</a>
        <form action="/posts/{{ $post['id'] }}" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit">Delete</button>
        </form>
        <a href="/posts">Back to all posts</a>
    </div>
</div>

@endsection
