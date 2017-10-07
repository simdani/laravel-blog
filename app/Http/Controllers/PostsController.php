<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Post;

class PostsController extends Controller
{
    public function index() {
        return view('posts.index');
    }   
    
    public function show() {
        return view('posts.show');
    }

    public function create() {
        return view('posts.create');
    }

    public function store() {
        // save post to database
        Post::create(request(['title', 'body']));

        // redirect to main page
        return redirect('/');

    }
}
