<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Foundation\Application;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Routing\Redirector;
use Illuminate\Validation\ValidationException;

class PostController extends Controller
{
    public function create(): Factory|Application|View|\Illuminate\Contracts\Foundation\Application
    {
        return view('posts.create');
    }

    /**
     * @throws ValidationException
     */
    public function store(Request $request): Application|Redirector|\Illuminate\Contracts\Foundation\Application|RedirectResponse
    {
        $request->validate([
            'title' => 'required|min:1|max:255',
            'body' => 'required|min:1|max:300'
    ]);
        $post = Post::create([
            'user_id'=> auth()->id(),
            'title' => $request->input('title'),
            'body' => $request->input('body')
        ]);
        return redirect($post->path());
    }

    public function show(Post $post): Factory|Application|View|\Illuminate\Contracts\Foundation\Application
    {
        return view('posts.show')->with('post',$post);
    }

    /**
     * @throws ValidationException
     */
    public function update(Request $request, Post $post): Application|Redirector|\Illuminate\Contracts\Foundation\Application|RedirectResponse
    {
        $this->validate(request(),[
            'title' => 'required|min:1|max:255',
            'body' => 'required|min:1|max:300'
        ]);
        $post->update([
            'title' => $request->input('title'),
            'body' => $request->input('body')
        ]);
        return redirect($post->path());

    }
    public function edit(Post $post): Factory|Application|View|\Illuminate\Contracts\Foundation\Application
    {
        return view ('posts.edit')->with('post',$post);
    }
    public function destroy(Post $post)
    {
        //
    }
}
