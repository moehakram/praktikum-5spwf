<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdatePeminjamanRequest extends FormRequest
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
            'nama_peminjam' => 'nullable|max:30',
            'inventaris_id' => 'required',
            'tgl_pinjam' => 'nullable',
            'jum_pinjam' => 'nullable',
            'keterangan' => 'nullable'
        ];
    }
}
