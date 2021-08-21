<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class PostsController extends Controller
{
    public function edit(Post $post)
    {
        $post = Post::find($id);
        
        return view('posts.edit', compact('post'));
    }
    public function update(Request $request, $id)
    {
        $post = \Auth::find($id);
        $post->user_id = Auth::id();
        $post->title = $request->input('title');
        $post->message = $request->input('message');
        $post->save();

        return redirect('post/index');
    }
    public function destroy($id)
    {
         $user = Post::find($id);
         if (\Auth::id() == $post->user_id) {
             $post->delete();
         }
         return redirect('post/index');
    }
}

