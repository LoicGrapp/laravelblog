<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\CreatePostRequest;

class PostController extends Controller
{
    public function create () {
        if (Auth::check()) {
            return view('blog.create');
        } else {
            redirect('/');
        }
    }

    public function store (CreatePostRequest $request) {
        $post = Post::create($request->validated());
        return view('homepage-connected')->with('success', "L'article a bien été ajouté.");
    }
}


