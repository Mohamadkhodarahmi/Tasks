<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Foundation\Application;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Routing\Redirector;
use Illuminate\Validation\ValidationException;
use Illuminate\Database\Eloquent\SoftDeletes;

class PostController extends Controller
{
    public function index(): Renderable
    {
        $posts=Post::paginate(2);
        return view('welcome')->with('posts' ,$posts);
    }
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
            'title' => 'required',
            'body' => 'required',
            'image'=>'required'
    ]);

        $imageName = time().'.'.request()->image->getClientOriginalExtension();
        request()->image->move(public_path('images'), $imageName);


        $post = Post::create([
            'user_id'=> auth()->id(),
            'title' => $request->input('title'),
            'body' => $request->input('body'),
            'image'=> $imageName
        ]);
        return redirect($post->path());
    }

    public function show(Post $post): Factory|Application|View|\Illuminate\Contracts\Foundation\Application
    {
        return view('posts.show',compact('post'));
    }

    /**
     * @throws ValidationException
     */
    public function update(Request $request, Post $post): Application|Redirector|\Illuminate\Contracts\Foundation\Application|RedirectResponse
    {
        $this->validate(request(),[
            'title' => 'required',
            'body' => 'required',
            'image'=>'nullable|image'
        ]);
        if ($request->image){
            $imageName = time().'.'.request()->image->getClientOriginalExtension();
            request()->image->move(public_path('images'), $imageName);
        }


        $post->update([
            'title' => $request->input('title'),
            'body' => $request->input('body'),
            'image' => $imageName
        ]);
        return redirect($post->path());

    }
    public function edit(Post $post): Factory|Application|View|\Illuminate\Contracts\Foundation\Application
    {
        return view ('posts.edit',compact('post'));
    }
    public function destroy(Post $post): Application|Redirector|RedirectResponse|\Illuminate\Contracts\Foundation\Application
    {
        $post = Post::find($post->id);
        $post->delete();
        return redirect($post->path());
    }
//    public function gettrash(Post)
//    {
//        $deletedPosts = Post::onlyTrashed()->get();
//        return $deletedPosts;
//    }
}
