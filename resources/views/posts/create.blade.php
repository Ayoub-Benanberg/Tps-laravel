@extends("layout")
@section("content")
<div>
    <h2>Create Article</h2>

    <form action="/articles" method="POST">
        @csrf
        <label for="title">Title:</label>
        <input type="text" id="title" name="title" required>

        <label for="author">Author:</label>
        <input type="text" id="author" name="author" required>

        <label for="content">Content:</label>
        <textarea id="content" name="content" required></textarea>

        <button type="submit">Create Article</button>
    </form>
</div>
@endsection