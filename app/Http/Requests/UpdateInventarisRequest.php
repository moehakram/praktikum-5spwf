<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateInventarisRequest extends FormRequest
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
            'name' => ['nullable', 'max:15'],
            'kondisi' => ['nullable', 'max:15'],
            'keterangan' => ['nullable', 'max:30'],
            'stok' => 'nullable',
            'jenis' => 'nullable',
            'organisasi' => 'nullable',
            'foto' => 'nullable|image|mimes:jpeg,png,jpg'
        ];
    }
}
