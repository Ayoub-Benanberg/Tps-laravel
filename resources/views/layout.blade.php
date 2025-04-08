<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel Blog</title>
    <style>
        body {
            font-family: sans-serif;
            margin: 0;
            padding: 0;
        }

        nav {
            background-color: #e0e0e0;
            padding: 10px;
            border-bottom: 1px solid #ccc;
        }

        nav a {
            margin-right: 15px;
            text-decoration: none;
            color: #333;
        }

        nav a:hover {
            text-decoration: underline;
        }

        .content {
            padding: 20px;
            border: 1px solid #ccc;
            margin: 20px;
        }
    </style>
</head>
<body>
    <nav>
        <a href="/">Home</a>
        <a href="/about">About</a>
        <a href="/contact">Contact</a>
        <a href="/posts">Posts</a>
    </nav>

    <div class="content">
        @yield('content')
    </div>
</body>
</html>
