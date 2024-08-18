<?php

namespace App\Http\Requests;

use App\Models\Profile;
use Illuminate\Foundation\Http\FormRequest;

class ProfileRequest extends FormRequest
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
            Profile::NAME => ['nullable','string'],
            Profile::SURNAME => ['nullable','string'],
            Profile::AGE => ['nullable','numeric','max:3'],
            Profile::PHONE => ['nullable','numeric','max:10'],
            Profile::CODE => ['nullable','numeric','max:10']

        ];
    }
}
