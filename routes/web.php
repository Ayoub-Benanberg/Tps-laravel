<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::view('/', "welcome");
Route::view('/about', "about");
Route::view('/contact', "contact");
Route::get("/posts/{id}/{author?}", function ($id, $author = "Mr X") {
    return view(
        "post",
        [
            "id" => $id,
            "author" => $author
        ]
    );
});

Route::post("/contact", function () {
    // dd($request->all());
    return "Thank you for your message!";
});


Route::match(["get", "post", "put", "delete"], "/posts/{id?}", function (Request $request, $id = null) {
    $posts = [
        1 => [
            "id" => 1,
            "title" => "1",
            "author" => "Auth 1",
            "content" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Minima, consequatur?",
            "published_at" => "2025-01-01",
        ],
        2 => [
            "id" => 2,
            "title" => "2",
            "author" => "Auth 2",
            "content" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Minima, consequatur?",
            "published_at" => "2025-01-01",
        ],
        3 => [
            "id" => 3,
            "title" => "3",
            "author" => "Auth 3",
            "content" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Minima, consequatur?",
            "published_at" => "2025-01-01",
        ]
    ];

    switch ($request->method()) {
        case 'GET':
            if ($request->id === null) {
                return view("posts.index", ["posts" => $posts]);
            } else {
                return view("posts.show", [
                    "posts" => $posts,
                    "id" => $id
                ]);
            }
            break;

        case 'GET':
            return view("posts.create");
            break;

        default:
            break;
    }
});
