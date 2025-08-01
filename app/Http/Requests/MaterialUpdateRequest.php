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
            'stock' => 'nullable',
            'qty_ts' => 'required'
        ];
    }

    public function messages() {
        return [
            'edt_material_komponen.required' => 'Edt Material Komponen tidak boleh kosong',
            'kode_material.required' => 'Kode Material tidak boleh kosong',
            'nama_material.required' => 'Nama Material tidak boleh kosong',
            'spesifikasi.required' => 'Spesifikasi tidak boleh kosong',
            'dimensi.required' => 'Dimensi tidak boleh kosong',
            'kedatangan_bixie.required' => 'Kedatangan Bixie tidak boleh kosong (isi angka 0 jika material belum ada)',
            'kedatangan_katalor.required' => 'Kedatangan Katalor tidak boleh kosong (isi angka 0 jika material belum ada)',
            'qty_ts.required' => 'Quantity per Train set tidak boleh kosong'
        ];
    }
}
