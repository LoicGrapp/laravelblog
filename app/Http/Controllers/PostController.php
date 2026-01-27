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
            return redirect('/');
        }
    }

    public function store (CreatePostRequest $request) {
        $validated = $request->validated();
        $post = new Post($validated);
        $post->user()->associate(Auth::user());
        $post->save();
        return redirect()
        ->route('homepage.connected')
        ->with('success', "L'article a bien été ajouté.");
    }
}


