<?php

namespace App\Http\Controllers;



use App\Models\Post;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Support\Facades\DB;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return Renderable
     */
    public function index(): Renderable
    {
        $posts = Post::with('owner')->get();
        return view('home')->with('posts' ,$posts);
    }
}
