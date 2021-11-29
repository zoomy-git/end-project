<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function index()
    {
        return view('view', [
            "title" => "View",
            "posts" => Post::all()
        ]);
    }
    public function show($slug)
    {
        return view('post', [
            "title" => "Post",
            "post" => Post::find($slug)
        ]);
    }
}
