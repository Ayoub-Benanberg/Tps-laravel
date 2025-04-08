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

    h2 {
        margin-bottom: 20px;
    }

    form div {
        margin-bottom: 15px;
    }

    label {
        display: block;
        margin-bottom: 5px;
    }

    input[type="text"],
    textarea {
        width: 100%;
        padding: 8px;
        border: 1px solid #ccc;
        box-sizing: border-box;
    }

    button {
        background-color: green;
        color: white;
        border: none;
        padding: 6px 12px;
        margin-right: 10px;
    }

    a {
        color: blue;
    }
</style>

<div class="container">
    <h2>Edit Post</h2>
    
    <form action="/posts/{{ $post['id'] }}" method="POST">
        @csrf
        @method('PUT')
        
        <div>
            <label for="title">Title</label>
            <input type="text" id="title" name="title" value="{{ $post['title'] }}" required>
        </div>
        
        <div>
            <label for="author">Author</label>
            <input type="text" id="author" name="author" value="{{ $post['author'] }}" required>
        </div>
        
        <div>
            <label for="content">Content</label>
            <textarea id="content" name="content" rows="5" required>{{ $post['content'] }}</textarea>
        </div>
        
        <button type="submit">Update</button>
        <a href="/posts">Cancel</a>
    </form>
</div>
@endsection