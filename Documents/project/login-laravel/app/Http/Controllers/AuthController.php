<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Foundation\Application;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Routing\Redirector;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function loginPage(): View|Application|Factory|\Illuminate\Contracts\Foundation\Application
    {
        return view('auth.login');
    }

    public function login(Request $request): Application|string|Redirector|RedirectResponse|\Illuminate\Contracts\Foundation\Application
    {
        $validate = $request->validate([
           'email'=>'required',
           'password'=>'required'
        ]);



        if (Auth::attempt($validate)){
            return redirect('/home')->with('success','successfully signed in ');
        }
        return redirect('login')->with($validate);
    }

    public function registerPage(): Factory|Application|View|\Illuminate\Contracts\Foundation\Application
    {
        return view('auth.register');
    }

    public function register(Request $request): Application|Redirector|\Illuminate\Contracts\Foundation\Application|RedirectResponse
    {
        $validate = $request->validate([
           'name'=> 'required|min:1|max:100',
            'email'=>'required|min:1|max:200',
            'password'=>'required|max:200'
        ]);

        User::create([
            'name'=>$request->input('name'),
            'email'=>$request->input('email'),
            'password'=>$request->input('password')
        ]);

        return redirect('/home')->with('register','successfully registered');

    }
}
