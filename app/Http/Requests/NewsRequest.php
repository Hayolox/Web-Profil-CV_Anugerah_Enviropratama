<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class NewsRequest extends FormRequest
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
            'title' => 'required|max:255|unique:news',
            'body' => 'required',
            'image'=> 'required'
        ];
    }

    public function messages()
{
    return [
        'title.required' => 'Title tidak boleh kosong',
        'title.unique' => 'title sudah tersedia',
        'title.max:225' => 'title tidak boleh lebih dari 225 karakter',
        'body.required' => 'Body tidak boleh kosong',
        'image.required' => 'Thumbnail tidak boleh kosong',

    ];
}
}
