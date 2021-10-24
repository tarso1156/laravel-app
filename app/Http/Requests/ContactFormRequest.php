<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactFormRequest extends FormRequest
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
            "name" => "required",
            "email" => "required|email:rfc",
            "message" => "required"
        ];
    }

    public function messages()
    {
        return [
            "name.required" => "Nome obrigat�rio",
            "email.required" => "E-mail � obrigat�rio",
            "email.email" => "Insira e-mail no formato v�lido",
            "message.required" => "Mensagem � obrigat�ria"
        ];
    }
}
