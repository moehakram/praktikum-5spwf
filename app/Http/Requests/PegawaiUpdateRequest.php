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
            'name' => ['nullable', 'string','min:3', 'max:20'],
            'email' => ['nullable', 'email'],
            'phone_number' => ['nullable','min:5'],
            'alamat' => ['nullable','string','min:4'],
            'password' => ['nullable','string','min:8']
        ];
    }
}
