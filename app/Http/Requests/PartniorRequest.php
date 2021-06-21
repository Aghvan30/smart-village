<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PartniorRequest extends FormRequest
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
            'link' => 'required|string|max:255',
            'image' => 'required|image|mimes:jpeg,png,jpg|max:2048',
//
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
            'link.required' => __('messages.required'),
            'link.string' => __('messages.required'),
            'image.required' => __('messages.required'),
            'image.image' => __('messages.image'),

        ];
    }
}
