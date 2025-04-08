@extends('layout')
@section('content')

<style>
    body {
        font-family: sans-serif;
    }

    h2 {
        margin-top: 20px;
    }

    a {
        color: blue;
        margin-right: 5px;
    }

    p {
        color: green;
    }

    table {
        width: 100%;
        border-collapse: collapse;
        margin-top: 15px;
    }

    th, td {
        padding: 8px;
        border: 1px solid #ccc;
        text-align: left;
    }

    button {
        background: red;
        color: white;
        border: none;
        padding: 4px 8px;
    }

    form {
        display: inline;
    }
</style>

<div>
    <h2>Posts</h2>
    
    @if(session('success'))
        <p>{{ session('success') }}</p>
    @endif
    
    <a href="/posts/create">Create New Post</a>
    
    <table>
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
                <form action="/posts/{{ $post['id'] }}" method="POST">
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
