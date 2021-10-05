<?php

namespace App\Http\Requests\User;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rules\Password;

class UserStoreRequest extends FormRequest
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
    public function rules(){
        return [
            'name' => 'required|string|min:5|max:40',
            'email' => 'required|unique:users|email|min:5|max:40',
            'password' => ['required', 'string', Password::min(8)],
            'status' => 'string|max:2',
        ];
    }

    public function messages(){
        return [
            'email.unique' => 'E-Mail-Adresse ist schon vergeben.',
            'email.min' => 'E-Mail-Adresse muss mindestens 5 Zeichen haben.',
            'passwort.required' => 'Muss angegeben werden',
            'passwort.min' => 'Passwort muss mindestens 9 Zeichen haben.',
            'passwort.max' => 'Passwort ist zu lang max 40 Zeichen.',
        ];
    }
}
