<?php

namespace App\Http\Requests\Blog;

use Illuminate\Foundation\Http\FormRequest;

class BlogStoreRequest extends FormRequest
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
            'title' => 'required|unique:blogs|string|min:5|max:100',
            'subline' => 'required|string|max:255',
            'content' => 'required|string',
            'status' => 'string|max:2',
            'image' => 'nullable|image|mimes:jpeg,jpg,png,gif|max:10000',
        ];
    }

    public function messages(){
        return [
            'title.unique' => 'Title ist schon vergeben.',
            'title.min' => 'Title ist zu kurz muss mindestens 5 Zeichen haben.',
            'subline.required' => 'Muss angegeben werden',
            'content.required' => 'Muss angegeben werden',
        ];
    }
}
