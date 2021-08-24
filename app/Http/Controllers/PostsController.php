<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class PostsController extends Controller
{
    public function edit(Post $post)
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

        return redirect('/');
    }
    public function destroy($id)
    {
         $user = Post::findOrFail($id);
         if (\Auth::id() == $post->user_id) {
             $post->delete();
         }
         return redirect('/');
    }
}

