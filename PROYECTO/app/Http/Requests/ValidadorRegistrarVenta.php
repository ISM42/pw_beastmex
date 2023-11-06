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
            //
            '_fecha' => 'required|date_format',
            '_ncliente' => 'required|max:15',
            '_ap' => 'required |max:15',
            '_am' => 'required|max:15',
            '_prod' => 'required|max:15',
            '_marca' => 'required|max:15',
            '_cantidad' => 'required|numeric| min:5',
            '_precioventa' => 'required|numeric',
            '_totalcompra' => 'required|numeric',
        ];
    }
}
