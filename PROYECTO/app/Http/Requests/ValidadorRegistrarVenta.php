<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ValidadorRegistrarVenta extends FormRequest
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
            //VALIDACIONES REGISTRO CLIENTES
            '_nombrecliente' => 'required',
            '_apcliente' => 'required',
            '_amcliente' => 'required',
            '_emailcliente' => 'required|email',
            '_telcliente' => 'required|numeric|max:10',
            
        ];
    }
}
