<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PegawaiUpdateRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return $this->user() != null;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'nama' => ['nullable', 'string','min:3', 'max:20'],
            'email' => ['nullable', 'email'],
            'phone_number' => ['nullable','max:20'],
            'alamat' => ['nullable','string','max:100'],
            'organisasi' => ['nullable']
        ];
    }
}
