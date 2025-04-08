@extends("layout")
@section("content")

<style>
    body {
        font-family: sans-serif;
    }

    .container {
        width: 80%;
        margin: 20px auto;
    }

    h1 {
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
    input[type="email"],
    textarea {
        width: 100%;
        padding: 8px;
        border: 1px solid #ccc;
        box-sizing: border-box;
    }

    textarea {
        height: 120px;
    }

    button {
        background-color: blue;
        color: white;
        border: none;
        padding: 6px 12px;
    }
</style>

<div class="container">
    <h1>Contact</h1>
    <form method="POST" action="/contact">
        @csrf
        <div>
            <label for="name">Full Name:</label>
            <input type="text" id="name" name="name" required />
        </div>
        <div>
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required />
        </div>
        <div>
            <label for="message">Message:</label>
            <textarea id="message" name="message" required></textarea>
        </div>
        <button type="submit">Send Message</button>
    </form>
</div>
@endsection