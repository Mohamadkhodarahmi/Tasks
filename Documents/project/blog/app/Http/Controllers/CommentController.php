<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Post;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function index(): Renderable
    {
        $comments = Comment::all();
        return view('posts.show',compact('comments'));
    }

    public  function create(Request $request)
    {

    }

}
