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
use Illuminate\Support\Facades\Validator;


class AuthController extends Controller
{
    public function loginPage(): View|Application|Factory|\Illuminate\Contracts\Foundation\Application
    {
        return view('auth.login');
    }

    public function login(Request $request): Application|Redirector|\Illuminate\Contracts\Foundation\Application|RedirectResponse
    {
        $validator = validator::validate($request->all(),[
           'email'=>'required',
           'password'=>'required'
        ]);
        if ($validator) {
            return redirect()->back()
                ->with('errorForm', [$validator])
                ->withInput();
        }


        try {
            if (Auth::attempt($validator)){
                return redirect('/home')->with('success','successfully signed in ');
            }
        }
        catch (\Exception $e){
            return redirect()->back()
                ->with('error', 'Error during the creation!');
        }
    }

//        return redirect('login')->with('error', 'Error during the creation!');


    public function registerPage(): Factory|Application|View|\Illuminate\Contracts\Foundation\Application
    {
        return view('auth.register');
    }

    public function register(Request $request): Application|Redirector|\Illuminate\Contracts\Foundation\Application|RedirectResponse
    {

        $validator = Validator::make($request->all(), [
            'name'=> 'required|min:1|max:100',
            'email'=>'required|min:1|max:200',
            'password'=>'required|max:200'
        ]);
        if ($validator->fails()) {
            return redirect()->back()
                ->with('errorForm', $validator->errors()->getMessages())
                ->withInput();
        }

        try {
            User::create([
                'name'=>$request->input('name'),
                'email'=>$request->input('email'),
                'password'=>$request->input('password')
            ]);

            return redirect('/home')
                ->with('success', 'Created successfully!');
        } catch (\Exception $e){
            return redirect()->back()
                ->with('error', 'Error during the creation!');
        }

    }
}
