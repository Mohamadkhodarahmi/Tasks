<?php

namespace App\Http\Requests;

use App\Models\Post;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

class CommentStoreRequest extends FormRequest
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
            'body' => 'required'
        ];
    }
    public function validated($key = null, $default = null)
    {
        return array_merge(parent::validated($key, $default),[
           'body' => request()->input('body'),
            'user_id' => Auth::id(),
            'post_id' => $this->post->id

        ]);
    }
}
