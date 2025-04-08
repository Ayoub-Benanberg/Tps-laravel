@extends('layout')
@section('content')
<div class="container">
    <div>
        <div>
            <h1>{{ $post['title'] }}</h1>
        </div>
        <div>
            <p>
                <strong>Author:</strong> {{ $post['author'] }} | 
                <strong>Published:</strong> {{ $post['published_at'] }}
            </p>
            <hr>
            <p>{{ $post['content'] }}</p>
        </div>
        <div>
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
    </div>
</div>
@endsection