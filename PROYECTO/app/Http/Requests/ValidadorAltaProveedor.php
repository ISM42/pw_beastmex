<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ValidadorAltaProveedor extends FormRequest
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
            '_nempresa' => 'required',
            '_ncontacto' => 'required',
            '_apcontacto' => 'required',
            '_amcontacto' => 'required',
            '_emailcontacto' => 'required|email',
            '_telcontacto' => 'required|numeric|max:10',

        ];
        return redirect('/proveedor')->with('confirmacion','Tu información llegó al controlador');
    }
}
