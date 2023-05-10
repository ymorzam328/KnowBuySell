<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegisterRequest extends FormRequest
{//Esta clase permite que una solicitud avance. Validar si los cambios cumplen requisitos por ejemplo
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
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function rules(): array
    {
        return [
            //Todas las reglas para el registro de formulario
            'email'=>'required|unique:users,email',
            'username'=>'required|unique:users,username',
            'password'=>'required|min:8',
            'password_confirmation'=>'required|same:password',
        ];
    }
}
