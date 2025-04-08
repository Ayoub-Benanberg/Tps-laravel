@extends("layout")
@section("content")
<div class="container">
    <h2>posts</h2>

    <table>
        <thead>
            <tr>
                <th>Title</th>
                <th>Author</th>
                <th>Content</th>
                <th>Published Date</th>
                <th colspan="2">Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($posts as $post)
            <tr>
                <td>{{ $post["title"] }}</td>
                <td>{{ $post["author"] }}</td>
                <td>{{ $post["content"] }}</td>
                <td>{{ $post["published_at"] }}</td>
                <td>
                    <form action="/posts/{{ $post['id'] }}" method="PUT">
                        <button>Edit</button>
                    </form>
                </td>
                <td>
                    <form action="/posts/{{ $post['id'] }}" method="DELETE">
                        <button>Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

    <form action="/posts" method="GET">
        @csrf
        <button type="submit">Create New post</button>
    </form>
</div>
@endsection