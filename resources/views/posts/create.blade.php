@extends('layout')
@section('content')
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