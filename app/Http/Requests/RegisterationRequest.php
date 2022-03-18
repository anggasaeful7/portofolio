<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegisterationRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => ['required', 'string', 'min:3'],
            'username' => ['required', 'alpha_num', 'unique:users', 'min:3', 'max:25'],
            'email' => ['required','unique:users', 'email'],
            'email' => ['required', 'min:8' ],
        ];
    }
}
