<?php

namespace App\Http\Controllers;

use App\Http\Requests\CommentRequest;
use App\Comment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CommentsController extends Controller
{
    public function store(CommentRequest $request, Comment $content)
    {   
        $content->user_id = Auth::user()->id;
        $content->post_id = $request->post_id;
        $content->content = $request->content[$request->post_id];
        $content->save();

        return redirect('/');
    }
}
