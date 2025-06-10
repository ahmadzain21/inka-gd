<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class KebutuhanStoreRequest extends FormRequest
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
            '1_qty_kebutuhan_1' => 'required',
            '2_qty_kebutuhan_90' => 'required',
            '3_qty_kebutuhan_90' => 'required',
            '4_qty_kebutuhan_100' => 'required',
            '5_qty_kebutuhan_100' => 'required',
            '6_qty_kebutuhan_100' => 'required',
            '7_qty_kebutuhan_100' => 'required',
            '8_qty_kebutuhan_90' => 'required',
            '9_qty_kebutuhan_100' => 'required',
            '10_qty_kebutuhan_100' => 'required',
            '11_qty_kebutuhan_100' => 'required',
            '12_qty_kebutuhan_100' => 'required',
            '13_qty_kebutuhan_55' => 'required',
            'kode_material' => 'required'
        ];
    }

    public function messages() {
        return [
            '1_qty_kebutuhan_1.required' => '1 Qty Kebutuhan 1 tidak boleh kosong',
            '2_qty_kebutuhan_90.required' => '2 Qty Kebutuhan 90 tidak boleh kosong',
            '3_qty_kebutuhan_90.required' => '3 Qty Kebutuhan 90 tidak boleh kosong',
            '4_qty_kebutuhan_100.required' => '4 Qty Kebutuhan 100 tidak boleh kosong',
            '5_qty_kebutuhan_100.required' => '5 Qty Kebutuhan 100 tidak boleh kosong',
            '6_qty_kebutuhan_100.required' => '6 Qty Kebutuhan 100 tidak boleh kosong',
            '7_qty_kebutuhan_100.required' => '7 Qty Kebutuhan 100 tidak boleh kosong',
            '8_qty_kebutuhan_100.required' => '8 Qty Kebutuhan 100 tidak boleh kosong',
            '9_qty_kebutuhan_100.required' => '9 Qty Kebutuhan 100 tidak boleh kosong',
            '10_qty_kebutuhan_100.required' => '10 Qty Kebutuhan 100 tidak boleh kosong',
            '11_qty_kebutuhan_100.required' => '11 Qty Kebutuhan 100 tidak boleh kosong',
            '12_qty_kebutuhan_100.required' => '12 Qty Kebutuhan 100 tidak boleh kosong',
            '13_qty_kebutuhan_55.required' => '13 Qty Kebutuhan 55 tidak boleh kosong',
        ];
    }
}
