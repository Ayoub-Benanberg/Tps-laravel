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
    <h2>Create New Post</h2>
    
    <form action="/posts" method="POST">
        @csrf
        <div>
            <label for="title">Title</label>
            <input type="text" id="title" name="title" required>
        </div>
        
        <div>
            <label for="author">Author</label>
            <input type="text" id="author" name="author" required>
        </div>
        
        <div>
            <label for="content">Content</label>
            <textarea id="content" name="content" rows="5" required></textarea>
        </div>
        
        <button type="submit">Submit</button>
        <a href="/posts">Cancel</a>
    </form>
</div>
@endsection