<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MaterialStoreRequest extends FormRequest
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
            'kategori' => 'required',
            'kode_material' => 'required|unique:App\Models\Material,kode_material',
            'no_qr' => 'required|unique:App\Models\Material,no_qr',
            'nama_material' => 'required',
            'spesifikasi' => 'required',
            'jumlah' => 'required',
            'vendor' => 'required',
            'image' => 'nullable'
        ];
    }
}
