<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RequestPegawai extends FormRequest
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
    public function rules()
    {
        return [
            'nip' => ['required', 'unique:users,nip'],
            'name' => ['required', 'string','min:3', 'max:20'],
            'email' => ['required', 'email', 'unique:users,email'],
            'phone_number' => ['nullable','min:5'],
            'alamat' => ['required','string','min:4']
        ];
    }
}
