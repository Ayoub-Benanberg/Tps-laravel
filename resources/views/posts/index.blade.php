@extends('layout')
@section('content')
<div>
    <h2>Posts</h2>
    
    @if(session('success'))
        <p>{{ session('success') }}</p>
    @endif
    
    <a href="/posts/create">Create New Post</a>
    
    <table border="1">
        <tr>
            <th>Title</th>
            <th>Author</th>
            <th>Content</th>
            <th>Date</th>
            <th>Actions</th>
        </tr>
        @foreach($posts as $post)
        <tr>
            <td><a href="/posts/{{ $post['id'] }}">{{ $post['title'] }}</a></td>
            <td>{{ $post['author'] }}</td>
            <td>{{ substr($post['content'], 0, 50) }}...</td>
            <td>{{ $post['published_at'] }}</td>
            <td>
                <a href="/posts/{{ $post['id'] }}/edit">Edit</a>
                <form action="/posts/{{ $post['id'] }}" method="POST" style="display:inline">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
</div>
@endsection