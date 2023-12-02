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
            '_nproducto' => 'required',
            '_nserie' => 'required|numeric|min:5',
            '_marca' => 'required|',
            '_cantidad' => 'required|numeric',
            '_costoCompra' => 'required|numeric',
            '_foto' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            
        ];
    }
}
