<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

class PostStoreRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules(): array
    {
        return [
            'title' => 'required',
            'body' => 'required',
            'image' => 'required'
        ];
    }

   public function validated($key = null, $default = null):array
   {
       $imageName = time() . '.' . request()->image->getClientOriginalExtension();
       request()->image->move(public_path('images'), $imageName);

       return array_merge(parent::validated($key, $default),[
           'image'=>$imageName,
           'user_id' => Auth::id(),
       ]);
   }
}
