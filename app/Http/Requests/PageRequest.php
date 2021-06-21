<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PageRequest extends FormRequest
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
//        dd($this->request);

        return [
            'menu_id' => 'required|integer',
            'short_content' => 'required|string|max:1024',
            'content' => 'required|string|min:225',
//            'keyword' => 'required|string|max:255',
            'desc' => 'required|string|max:255',
//            'order' => 'integer|max:11',
        ];
    }

    /**
     * Custom message for validation
     * @return string[]
     */
    public function messages()
    {
        return [
            'menu_id.required' => __('messages.required'),
            'menu_id.integer' => __('messages.integer'),
            'short_content.required' => __('messages.required'),
            'short_content.string' => __('messages.required'),
            'content.required' => __('messages.required'),
//            'keyword.required' => __('messages.required'),
            'desc.required' => __('messages.required'),

        ];
    }
}
