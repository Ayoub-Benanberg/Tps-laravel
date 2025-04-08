@extends('layout')
@section('content')
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