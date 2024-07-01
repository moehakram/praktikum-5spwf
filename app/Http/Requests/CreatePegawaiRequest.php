<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreatePegawaiRequest extends FormRequest
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
            'nra' => ['required', 'unique:pengurus,nra'],
            'nama' => ['required', 'string','min:3', 'max:30'],
            'email' => ['required', 'email', 'unique:pengurus,email'],
            'phone_number' => ['nullable','max:20'],
            'alamat' => ['required','string','max:100'],
            'organisasi' => ['required','string','max:20']
        ];
    }
}
