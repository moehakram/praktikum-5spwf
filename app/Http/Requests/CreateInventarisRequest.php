<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateInventarisRequest extends FormRequest
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
            'name' => ['required', 'max:15'],
            'kondisi' => ['required', 'max:15'],
            'keterangan' => ['nullable', 'max:30'],
            'stok' => 'required',
            'jenis' => 'required',
            'foto' => 'nullable|image|mimes:jpeg,png,jpg'
        ];
    }
}
