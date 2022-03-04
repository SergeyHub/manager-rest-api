<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class PostController extends Controller
{
    public  function index()
    {
        $posts = Http::get("https://jsonplaceholder.typicode.com/posts");

        //return $posts;
        //return json_decode($posts);
        return view("posts", [
            "posts" => json_decode($posts)
        ]);
    }
}
