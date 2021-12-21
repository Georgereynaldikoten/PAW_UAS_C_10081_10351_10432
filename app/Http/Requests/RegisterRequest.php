<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegisterRequest extends FormRequest
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
            'name' => 'string|max:255',
            'email' => 'required|email:rfc,dns|unique:users,email',
            'phone_number' => 'integer|max:255',
            'username' => 'required |string |unique:users|max:255',
            'password' => 'required|min:6',
            'password_confirmation' => 'required|same:password',
            'address' => 'string|max:255',
        ];
    }
}
