@extends("layout")
@section("content")
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