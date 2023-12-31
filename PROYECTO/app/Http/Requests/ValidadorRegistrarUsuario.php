<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ValidadorRegistrarUsuario extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            //
            '_nusuario' => 'required|max:20',
            '_ap' => 'required|max:15',
            '_am' => 'required|max:15',
            '_email' => 'required|email',
            '_puesto' => 'required|max:20',
            '_password' => 'required|password',
        ];
    }
}
