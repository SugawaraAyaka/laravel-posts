<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\User;

class PostsController extends Controller
{
    public function index()
    {
        $posts = Post::orderBy('created_at', 'desc')->get();
        return view('posts.index', ['posts' => $posts]);
    }

    public function create()
    {
        return view('posts.create');
    }

    public function store(Request $request)
    {
        $this->validate($request,[
            'title' => 'required|max:20',
            'message' => 'required|max:100',
        ]);

        $post = new Post;
        $post->title   = $request->title;
        $post->message = $request->message;
        $post->user_id = \Auth::id();
        $post->save();

        return redirect()->route('posts.index');
    }


}

