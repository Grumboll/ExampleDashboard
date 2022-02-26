<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ValidationRequest extends FormRequest
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
            'Title' => 'required|String|min:2',
            'Link' => 'required|String|min:4',
            'Color' => 'required'
        ];
    }

    public function messages()
{
    return [
        'Title.required' => 'Title is required',
        'Link.required' => 'Link is required',
        'Color.required' => 'Color is required',
        'Title.min' => 'Title is too short (Min: 2)',
        'Link.min' => 'Link is too short (Min: 4)'
    ];
}
}
