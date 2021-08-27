<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class PostsController extends Controller
{
    
    public function index()
    {
        $posts = Post::orderBy('created_at', 'desc')->get();
        
        return view('posts.index', ['posts' => $posts]);
    }
    public function edit(Post $post,$id)
    {
        $post = Post::findOrFail($id);
        
        return view('posts.edit', compact('post'));
    }
    public function update(Request $request, $id)
    {
        $post = Post::findOrFail($id);
        $post->user_id = Auth::id();
        $post->title = $request->input('title');
        $post->message = $request->input('message');
        $post->save();

        return redirect('post/index');
    }
    public function destroy($id)
    {
         $post = Post::findOrFail($id);
         $post->delete();
         
         return redirect('post/index');
    }
}

