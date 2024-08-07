<?php

namespace App\Http\Controllers;

use App\Http\Requests\PostStoreRequest;
use App\Models\Post;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Foundation\Application;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Routing\Redirector;
use Illuminate\Validation\ValidationException;

class PostController extends Controller
{
    public function index(): Renderable
    {
        $posts = Post::with('owner')->paginate();
        return view('welcome')->with('posts', $posts);
    }

    public function create(): Factory|Application|View|\Illuminate\Contracts\Foundation\Application
    {
        return view('posts.create');
    }

    /**
     * @throws ValidationException
     */
    public function store(PostStoreRequest $request): Application|Redirector|\Illuminate\Contracts\Foundation\Application|RedirectResponse
    {
        $post = Post::create($request->validated());
        return redirect($post->path());
    }

    public function show(Post $post): Factory|Application|View|\Illuminate\Contracts\Foundation\Application
    {
        $post->load('comments.user');
        return view('posts.show', compact('post'));
    }

    /**
     * @throws ValidationException
     */
    public function update(Request $request, Post $post): Application|Redirector|\Illuminate\Contracts\Foundation\Application|RedirectResponse
    {
        $this->validate(request(), [
            'title' => 'required',
            'body' => 'required',
            'image' => 'required|image'
        ]);

        $imageName = time() . '.' . request()->image->getClientOriginalExtension();
        request()->image->move(public_path('images'), $imageName);


        $post->update([
            'title' => $request->input('title'),
            'body' => $request->input('body'),
            'image' => $imageName
        ]);
        return redirect($post->path());

    }

    public function edit(Post $post): Factory|Application|View|\Illuminate\Contracts\Foundation\Application
    {
        return view('posts.edit', compact('post'));
    }

    public function destroy(Post $post): Application|Redirector|RedirectResponse|\Illuminate\Contracts\Foundation\Application
    {
        $post->delete();
        return redirect($post->path());
    }

    public function getTrash($id)
    {
        $deletedPosts = Post::withTrashed()->where('user_id', $id);
        $deletedPosts->restore();
        return redirect('/home');

    }
}
