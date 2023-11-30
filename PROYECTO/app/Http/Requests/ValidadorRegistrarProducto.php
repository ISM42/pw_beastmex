<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ValidadorRegistrarProducto extends FormRequest
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
            '_nproducto' => 'required|min:5',
            '_nserie' => 'required|numeric|min:5',
            '_marca' => 'required|',
            '_cantidad' => 'required|numeric|min:5',
            '_costoCompra' => 'required|numeric',
            '_precioventa' => 'required|numeric',
            
        ];
    }
}
