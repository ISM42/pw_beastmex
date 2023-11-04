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
            '_empresa' => 'required|max:5',
            '_producto' => 'required|min:5',
            '_Ncontacto' => 'required|min:5',
            '_CEcontacto' => 'required|email|min:5',
            '_TelContacto' => 'required|numeric|max:10',
        ];
        return redirect('/alta_proveedor')->with('confirmacion','Tu información llegó al controlador');
    }
}
