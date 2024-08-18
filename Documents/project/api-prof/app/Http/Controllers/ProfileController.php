<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileRequest;
use App\Http\Resources\ProfileResource;
use App\Models\Profile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Route;
class ProfileController extends Controller
{
    public static function router(): void
    {
        Route::group(['controller' => self::class],function (){
            Route::get('/profile/{phone}','show');
            Route::get('/{profile}','edit');
        });

    }
    public function show(Profile $phone): object
    {
        return success(ProfileResource::make($phone));
    }
    public function edit(ProfileRequest $request , Profile $profile): object
    {
    $profile->update($request->validated());
    return success(null , 201  );

    }
}
