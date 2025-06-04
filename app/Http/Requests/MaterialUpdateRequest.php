<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MaterialUpdateRequest extends FormRequest
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
            'edt_material_komponen' => 'required',
            'kode_material' => 'required',
            'kode_material_stock' => 'nullable',
            'no_part' => 'nullable',
            'nama_material' => 'required',
            'spesifikasi' => 'required',
            'dimensi' => 'required',
            'keterangan' => 'nullable',
            'kedatangan_bixie' => 'required',
            'kedatangan_katalor' => 'required',
            'kedatangan_madiun' => 'required',
            'stock' => 'nullable',
            'qty_ts' => 'required'
        ];
    }
}
