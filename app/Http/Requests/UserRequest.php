<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
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
            'name' => 'required|string|max:255',
            'email' => 'required|e_mail|unique:users',
          //  'password' => 'required|confirmed|min:5',

        ];
    }
    /**
     * Custom message for validation
     * @return string[]
     */
    public function messages()
    {
        return [

            'name.required' => __('messages.required'),
            'name.string' => __('messages.required'),
            'email.required' => __('messages.required'),
            'email.e_mail' => __('messages.email'),
            'password.required' => __('messages.required'),
            'password.confirmed' => __('messages.confirmed'),

        ];
    }
}
