<?php

namespace App\Http\Controllers;

use App\Http\Requests\CommentStoreRequest;
use App\Models\Comment;
use App\Models\Post;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Foundation\Application;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Routing\Redirector;

class CommentController extends Controller
{


    public  function store(CommentStoreRequest $request,Post $post): Application|Redirector|RedirectResponse|\Illuminate\Contracts\Foundation\Application
    {

       $comment = Comment::create($request->validated());
       return back();
    }

}
