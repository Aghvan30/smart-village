<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MenuRequest extends FormRequest
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
//        dd($this);
        return [
            'parent_id' => 'nullable|integer',
            'name' => 'required|string|max:255',
            'link' => 'nullable|string|max:255',
        ];
    }
    /**
     * Custom message for validation
     * @return string[]
     */
    public function messages()
    {
        return [

            'parent_id.integer' => __('messages.integer'),
            'name.required' => __('messages.required'),
            'name.string' => __('messages.required'),
            'link.string' => __('messages.string'),

        ];
    }
}
